<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Dashboard - Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div class="main-container-2">
        <div class="home-content">
            <div class="container pb-4">
                <div class="row">
                    <div class="col-6">
                        <div class="text-block">
                            <h1 class="title">Fligt Dashboard</h1>
                            <p class="text">Welcome to Flight Dashboard</p>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-end gap-2 c">
                        <a href="" class="btn btn-primary">Last 30 days</a>
                        <a href="" class="btn btn-success">Download report</a>
                    </div>
                </div>
            </div>
            <div class="container p-4">
                <form class="row g-3 border p-4 pt-2 booking-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <input type="text" placeholder="Destination start" class="form-control" name="start" required>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <input type="text" placeholder="Destination end" class="form-control" name="end" required>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <input type="text" placeholder="Number of passengers" class="form-control" name="passengers" required>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <input type="date" placeholder="Start Date" class="form-control" name="start" required>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <input type="date" placeholder="End Date" class="form-control" name="end" required>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <select id="inputState" class="form-select" name="category" required>
                            <option selected>Select Category</option>
                            <option value="Hi">US Bangla</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" id="flight_booking" name="search">Search Booking</button>
                    </div>
                </form>
            </div>
            <div class="container mb-4">
                <div class="row p-3 pb-0">
                    <div class="col-lg-2 col-md-6 col-sm-12 p-2 border">
                        <div class="text">Flight number</div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 p-2 border">
                        <div class="text">Flight type</div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 p-2 border">
                        <div class="text">Flight duration</div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 p-2 border">
                        <div class="text">Deprature</div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12 p-2 border">
                        <div class="text">Flight price</div>
                    </div>
                </div>

                <div id="flight_data">
                </div>

                <div class="row mt-4 mb-4">
                    <div class="col-12 d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="">1</a></li>
                                <li class="page-item"><a class="page-link" href="">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tag').select2();
        });

    </script>

    <script>
        $(document).ready(function() {
            $('#flight_booking').click(function(e) {
                e.preventDefault();
                var formData = $('.booking-form').serialize();

                $.ajax({
                    type: 'POST'
                    , url: '/load_data'
                    , data: formData
                    , dataType: 'json'
                    , success: function(response) {
                        var flight_info = JSON.parse(response, true);
                        var flight_info = flight_info['flightOffer'];

                        for (let i = 0; i < flight_info.length; i++) {
                            var flight_duration = flight_info[i]['itineraries'][0]['duration'];
                            var flight_type = flight_info[i]['class'][0][0];
                            var departure = flight_info[i]['itineraries'][0]['segments'][0]['departure']['iataCode'];
                            var flight_price = flight_info[i]['price'];
                            var flight_number = flight_info[i]['itineraries'][0]['segments'][1]['flightNumber'];
                            var newContent = ` 
                            <div class="row p-3 pb-0">
                                <div class="col-lg-2 col-md-6 col-sm-12 p-2 border">
                                    <div class="text">${flight_number}</div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 p-2 border">
                                    <div class="text">${flight_type}</div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 p-2 border">
                                    <div class="text">${flight_duration}</div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 p-2 border">
                                    <div class="text">${departure}</div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-sm-12 p-2 border">
                                    <div class="text">${flight_price}</div>
                                </div>
                            </div>`;

                            $('#flight_data').append(newContent);
                        }
                    }
                    , error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            });
        });

    </script>
</body>

</html>
