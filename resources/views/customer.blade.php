<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Food Menu</title>
    <style>
        body {
            background-color: #98D4BB;
        }
        .heading{
            text-align:center;
            background-color: #000000;
            padding: 0.5em 0.5em;
            color: #FFFFFF;
            font-size:25px;
        }
        .content {
            background-color: #FFFFFF;
            padding: 0.5em 0.5em;
            margin-top: 0.5em;
        }

        .container{
            margin: 0.5em 0.5em;
            padding: 0.5em 0.5em;
        }

        .page-header {
            text-align: center;
            padding: 0.8em 0.8em;
        }

        .page-des{
            text-align: center;
            font-size: 20px;
        }

        .table{
            width: 100%;
            align-items: center;
            margin-left: 30%;
        }

        .td-heading{
            color: #000000;
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('restaurant')}}">Customer Dashboard</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('view_menu')}}">View Menu</a>
      </li>
    </ul>
  </div>
</nav>
<div id="container">
        <h2 class="page-header">Hi there, {{auth()->user()->Customer_name}}</h2> 
        <h4 class="page-des">Welcome To Customer Dashboard!</h4>
    </div>
</body>
</html>