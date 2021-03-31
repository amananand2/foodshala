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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
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
           margin-left: 20%;
        }

        .td-heading{
            color: #000000;
            font-size: 20px;
            text-align: center;
        }

        input[type=text] {
            border: none;
            font-size: 14px;
            height: 30px;
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
        <div class="heading">
            Our Food Menu
        </div>
        <div class="container">
            <div class="row">
            <form>
                @csrf
                <table class="table" style="align:center">
                <thead>
                    <tr>
                    <th></th>
                    <th scope="col">S.No.</th>
                    <th scope="col">Restaurant Name</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Veg/Non-Veg</th>
                    <th scope="col">Item Description</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $count = 1;
                    ?>
                    @foreach($menu as $item)
                    <tr>
                        <td><input type="hidden" name="restaurant_id" value="{{$item->id}}"></td>
                        <td>{{$count}}</td>
                        <td><input type="text" class="restro_name" name="restaurant_name" value="{{$item->restaurant_name}}" readonly></td>
                        <td><input type="text" class="item_name" name="item_name" value="{{$item->item_name}}" readonly></td>
                        <td><input type="text" class="item_price" name="item_price" value="{{$item->item_price}}" readonly></td>
                        <td><input type="text" name="food_type" value="{{$item->food_type}}" readonly></td>
                        <td><input type="text" name="item_description" value="{{$item->item_description}}" readonly></td>
                        <td><button type="button" id="order" data-id='{{$item->id}}' class="btn btn-sm">Order Now!</button></td>
                    </tr>
                    <?php
                        $count++;
                    ?>
                    @endforeach
                </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).on('click','#order', function(){
        var el = this;
        var id = $(this).data("id");
        console.log(id);
        var $row = $(this).closest("tr"); // Find the row
        var restro_name = $row.find('.restro_name').val();
        var item_name = $row.find('.item_name').val();
        var item_price = $row.find('.item_price').val();
        // console.log(item_name);
        $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url:"{{ route('order') }}",
          method:"POST",
          data: {
              id:id,
              restro_name:restro_name,
              item_name:item_name,
              item_price:item_price,
            },

          success:function(data)
          {
            alert("Order Successful!");

          }  
        });
    })
</script>
</html>