<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://kit.fontawesome.com/a84ab67fc1.js" crossorigin="anonymous"></script>
    <style>
        .weather-container {
            text-align: center;
            margin-top: 50px;
        }

        .weather-icon {
            width: 100px;
            height: 100px;
        }
    </style>
</head>

<body>

    <section class="vh-100" style="background-color: #4B515D;">
        <div class="container py-5 h-100">

            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-7 col-xl-5">

                    <div class="card" style="color: #4B515D; border-radius: 35px;">
                        <div class="card-body p-4">

                            <div class="text-center mb-3">
                                <p class="h2 mb-1" id="wrapper-name">{{ $weather['area'] }}, {{ $weather['country'] }}
                                </p>
                                <p class="mb-1" id="wrapper-description">{{ $weather['condition'] }}</p>
                                <p class="display-1 mb-1" id="wrapper-temp">{{ $weather['temp'] }}°C</p>
                                <span class="">{{ $weather['date'] }}</span>
                            </div>


                            <!-- Main current data -->
                            <div class="card-body p-4 border-top border-bottom mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1" style="font-size: 1rem;">
                                        <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span
                                                class="ms-1">
                                                {{ $weather['windSpeed'] }} km/h
                                            </span></div>
                                        <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span
                                                class="ms-1">
                                                {{ $weather['humidity'] }}% </span>
                                        </div>
                                        <div><i class="fas fa-tachometer-alt fa-fw" style="color: #868B94;"></i> <span
                                                class="ms-1">
                                                {{ $weather['pressure'] }} hPa</span>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="{{ URL($weather['weatherImage']) }}" width="100px"
                                            alt="{{ $weather['weatherImage'] }}">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>




</body>

</html>
