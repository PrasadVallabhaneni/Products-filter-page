<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- css file  -->


    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <?php
    session_start();
    // include('index.php');
    include('db.php');


    if (isset($_POST['submit'])) {
        // header('location:products.php');

        $city = $_POST['City'];
        $vehicle = $_POST['Vehicle'];



        if ($city != '' || $vehicle != '') {
            $query = "SELECT * FROM Products WHERE City='$city' and Vehicle='$vehicle'";


            $data = mysqli_query($link, $query) or die('error');
            if (mysqli_num_rows($data) > 0) {

                while ($row = mysqli_fetch_assoc($data)) {
                    $id = $row['id'];
                    $city = $row['City'];
                    $vehicle = $row['Vehicle'];
                    $name = $row['Name'];
                    $rent = $row['Rent'];
                    $deposit = $row['Deposit'];
                    $model = $row['Model'];
                    $image = $row['Image'];
                    echo "   <div class='container' id='results'>
          
                <div class='col-md-3 col-sm-4 col-xs-6'>
                  <img src='$image'  class='images'> </br>

                 <p id='details'>City:$city | Type:$vehicle | Rent/day: $rent | Deposit: $deposit | Model: $model </p>
                 
                </div>

           
        </div>
        <div class='container-fluid'>
        <div id='form1' class='row'>
            <form action='products.php' class='form-horizontal' method='POST'>
                <div class='form-group'>
                    <label for='Model' class=' control-label'>Select Vehicle Type</label>

                    <select name='Model' id='Model' class='form-control'>
                        <option>Select</option>
                        <option>Scooter</option>
                        <option>Bike</option>
                        <option>Economy</option>
                        <option>Sedan</option>
                    </select>
                </div>
                    <div class='form-group'>
                        <label for='submit' class=' control-label'></label>
                        <button type='submit' name='submit' class='btn btn-primary' id='search'>Search</button>



                    </div>
                    <div class='form-group'>
                        <label for='back' class=' control-label'></label>
                        <button type='back' name='back' class='btn btn-danger' id='back'>Back</button>



                    </div>
                    
            </form>
        </div>
        <div id='logo1'>
        <img src='logo.png'  id='png'>
        </div> ";
                }
            } else {

                echo " <div id='form' class='row' id='err'
                >
            <form action='products.php' class='form-horizontal' method='POST'>
            <div class='form-group'>
                     <p 
                    >Please select both city and vehicle types to get results</p>
                
                        <label for='back' class=' control-label'></label>
                        <button type='back' name='back' class='btn btn-danger' id='back'>Back</button></div>
                    </form>


                    </div>  <div id='logo'>
        <img src='logo.png'  id='png'>
        </div> ";
            }
        }
    }
    ?>


    <?php
    if (isset($_POST['back'])) {
        header('location:index.php');
    };

    if (isset($_POST['submit'])) {
        // header('location:products.php');

        $vehicletype = $_POST['Model'];


        if ($vehicletype != '') {
            $query = "SELECT * FROM Products WHERE Model='$vehicletype'";


            $data = mysqli_query($link, $query) or die('error');
            if (mysqli_num_rows($data) > 0) {

                while ($row = mysqli_fetch_array($data, MYSQLI_ASSOC)) {
                    $id = $row['id'];
                    $city = $row['City'];
                    $vehicle = $row['Vehicle'];
                    $name = $row['Name'];
                    $rent = $row['Rent'];
                    $deposit = $row['Deposit'];
                    $model = $row['Model'];
                    $image = $row['Image'];
                    echo "   <div class='container' id='results'>
          
                <div class='col-md-3 col-sm-4 col-xs-6'>
                  <img src='$image'  class='images'></br> 
                <p id='details'>City:$city | Type:$vehicle | Rent/day: $rent | Deposit: $deposit | Model: $model </p>
                </div>

           
        </div> 
         <div class='container-fluid'>
        <div id='form1' class='row'>
            <form action='products.php' class='form-horizontal' method='POST'>
                <div class='form-group'>
                    <label for='Model' class=' control-label'>Select Vehicle Type</label>

                    <select name='Model' id='Model' class='form-control'>
                        <option>Select</option>
                        <option>Scooter</option>
                        <option>Bike</option>
                        <option>Economy</option>
                        <option>Sedan</option>
                    </select>
                </div>
                    <div class='form-group'>
                        <label for='submit' class=' control-label'></label>
                        <button type='submit' name='submit' class='btn btn-primary' id='search'>Search</button>



                    </div>
                     <div class='form-group'>
                        <label for='back' class=' control-label'></label>
                        <button type='back' name='back' class='btn btn-danger' id='back'>Back</button>



                    </div>
                    
            </form>
        </div>
         <div id='logo1'>
        <img src='logo.png'  id='png'>
        </div>";
                }
            } else {
                echo " <p>Selected category results not found. Please try with another category</p>
                    ";
            }
        }
    }
    ?>
    </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>