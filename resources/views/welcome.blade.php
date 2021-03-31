<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodShaala</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body{
            background-color:black;
            color: white;
        }

        .one{
            background-color: #B6D8F2;
            text-align:center;
            color: black;
            font-size:30px;
            padding : 20%;
        }

        .two{
            background-color: #9AC8EB;
            text-align:center;
            color: black;
            font-size:30px;
            padding : 20%;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-6 one">
            Customer
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p><a href="{{url('/login/customer')}}">Login</a></p>
                </div>
                <div class="col-md-6">
                    <p><a href="{{url('/register/customer')}}">Register</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 two">
            Restaurant
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p><a href="{{url('/login/restaurant')}}">Login</a></p>
                </div>
                <div class="col-md-6">
                <p><a href="{{url('/register/restaurant')}}">Register</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>