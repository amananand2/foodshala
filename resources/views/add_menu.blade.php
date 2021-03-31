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
  <a class="navbar-brand" href="{{ route('restaurant')}}">Restaurant Dashboard</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('menu')}}">View Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('add_menu')}}">Add Food Item</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('view_order')}}">View Orders</a>
      </li>
    </ul>
  </div>
</nav>
    <div id="container">
        <div class="heading">
            Add Food Item
        </div>
        <div class="container">
            <div class="row">
            <table class="table table-bordered">
                <form class="form" method="post" action="{{ route('add_item')}}">
                @csrf
                    <tr>
                        <td class="td-heading">Restaurant Name</td>
                        <td><select class="form-control" name="restaurant_name" readonly="readonly">
                               <option value="{{$user->Restro_name}}">{{$user->Restro_name}}</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td class="td-heading">Food Item Name</td>
                        <td><input type="text" class="form-control" name="item_name"></td>
                    </tr>
                    <tr>
                        <td class="td-heading">Food Item Price (In INR)</td>
                        <td><input type="text" class="form-control" name="item_price"></td>
                    </tr>
                    <tr>
                        <td class="td-heading">Veg/Non-Veg</td>
                        <td>
                            <select class="form-control" name="food_type">
                                <option value="" >--Select--</option>
                                <option value="veg">Veg</option>
                                <option value="non_veg">Non-Veg</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-heading">Food Item Description</td>
                        <td><textarea class="form-control" name="item_description"></textarea></td>
                    </tr>
                    <tr>
                        <td class="td-heading" colspan=2><button type="submit" class="btn btn-primary">Add Item</button></td>
                    </tr>
                </form>
                </table>
            </div>
        </div>
    </div>
</body>
</html>