<?php
session_start();
include('db.php');
include('products.php');

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- css file  -->
    <link rel="stylesheet" href="style.css">


    <title>Ridobiko</title>
</head>

<body>
    <div class="container-fluid">


        <div id="form" class="row">
            <form action="products.php" class="form-horizontal " method="POST">
                <div class="form-group">
                    <label for="City" class=" control-label">Select City</label>

                    <select name="City" id="City" class="form-control">
                        <option>Select</option>
                        <option>Delhi</option>
                        
                    </select>
                    


                </div>
                <div class="form-group">
                    <label for="Vehicle" class="control-label">Select Vehicle</label>

                    <select name="Vehicle" id="Vehicle" class="form-control">
                        <option>Select</option>
                        <option>Bike</option>
                        <option>Car</option>
                    </select>


                </div>
                <div class="form-group">
                    <label for="" class=" control-label"></label>
                    <button type="submit" name="submit" class="btn btn-primary" id="search">Search</button>



                </div>

            </form>

        </div>
        <div id="logo">
        <img src="logo.png" alt="" id="png">
        </div>




    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>