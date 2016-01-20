<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Najee's Rentals</title>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/datepicker.css">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="clac.js"></script>
    <script src="js/main.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            
               
                <a class="navbar-brand page-scroll" href="#page-top"><span class="glyphicon glyphicon-road"></a>
          

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Rental</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Reservation</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="margin-top: -4em;">

                    <h1>Driver's Information</h1>
                     <hr>   

                            <div class="container-fluid" style="margin-top: -56px;">
    <div class="row">
        <div class="col-md-12">
            <?php
session_start();
?>
<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul style="padding:0; color:red;">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
        echo '<li>',$msg,'</li>'; 
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
}
?>

            <form role="form" class="form-inline" action="formDriver.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder = "First Name*" id="exampleInputEmail1" name="fname"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder = "Last Name*" id="exampleInputPassword1" name="lname"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder = "Drivers License*" id="exampleInputEmail1" name="license"/>
                </div>
                
                 <div class="form-group">
                      <label for="sel1">Renter Age:</label>
                      <select class="form-control" id="sel1" name="age">
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25+</option>
                      </select>
                </div>
            
                <div class="">
                        <input type="text" class="form-control" placeholder = "Address 1" id="exampleInputEmail12" name="address1" />
                        <span class="help-block">No P.O. boxes</span>  
                        <input type="text" class="form-control" placeholder = "Address 2" id="exampleInputEmail12" name="address2" />
                        <span class="help-block">Apt #, Unit #, etc.</span>

                </div>
            

                <div class="form-group2">
                    <input type="text" class="form-control" placeholder = "City*" id="cityMar" name="city"/>

                    <select class="form-control" id="state" name="state">
                            <option value="">- Select State -</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                      </select>
                      <span class="help-block" id="stateMar">State</span>

                      <input type="text" class="form-control" placeholder = "Zip Code*" name="zip"/> <input id="save" type="submit" value="Save" />
                </div>
                <a class="btn btn-default page-scroll" href="#about"><span class="glyphicon glyphicon-chevron-right"></span></a>
                
                 
            </form>
                <img id="logo" alt="company logo" src="img/rentals.png">

        </div>
    </div>
</div>


                   
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Rental Inforamtion</h1>
                    <hr>

                    <div class="container-fluid">
                        <p>Choose your car below.</p>
                      <div class="row">

                        <form id="rentalForm" class="form-horizontal" role="form" onsubmit = "return false;">
                        <div class="col-sm-4">
                            <label>
                                <input type="radio" name="userRental" value="compact"onClick="calculateTotal()">
                                 <img src="img/blue.jpg" alt="blue Chevrolet Spark "/><p>Chevrolet Spark (Compact)</p>
                                 <div class="info">
                                    <ul>
                                        <li> MPG: Up to 31 city, 39 highway </li>
                                        <li> Horsepower: 84 HP </li>
                                        <li> MSRP: From $12,270 </li>
                                        <li> Fuel tank capacity: 9.2 gal </li>
                                    </ul>
                                 </div> 
                            </label> 
                        </div>

                        <div class="col-sm-4">
                            <label>
                                <input type="radio" name="userRental" value="standard"onClick="calculateTotal()">
                                 <img src="img/grey.jpg" alt"gray Chevrolet Malibu"/><p>Chevrolet Malibu (Standard)</p>
                                 <div class="info">
                                    <ul>
                                        <li> MPG: Up to 25 city, 36 highway </li>
                                        <li> Horsepower: 163 to 250 HP</li>
                                        <li> MSRP: From $21,625 </li>
                                        <li> Fuel tank capacity: 13 to 15.8 gal</li>
                                    </ul>
                                 </div> 
                            </label> 
                        </div>


                        <div class="col-sm-4">

                            <label>
                                <input type="radio" name="userRental" value="luxury"onClick="calculateTotal()">
                                 <img src="img/m5.jpg" alt="blue BMW M5" /><p>BMW X4 (Luxury)</p>
                                 <div class="info">
                                    <ul>
                                        <li> MPG: Up to 17 city, 26 highway </li>
                                        <li> Horsepower: 425 HP</li>
                                        <li> MSRP: From $65,400 </li>
                                        <li> Fuel tank capacity: 15.9 gal</li>
                                    </ul>
                                 </div> 
                            </label> 

                        </div>
                      </div><div id="total" style="display: block;color: red;"></div>
                        
                    
                    </div>
                </div>
                <a class="btn btn-default page-scroll" href="#services"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>

      </div>
    </div>
    </form>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
       <div class="container">
            <div id="rowMar" class="row">
                <div class="col-lg-12">
                    <h1>Reservation Section</h1>
                <hr>
            </div>

                <div id="serMar2">
                
            <div class="input-group input-daterange">
                <input type="text" class="form-control" >
                <span class="input-group-addon">to</span>
                <input type="text" class="form-control" >
            </div>
       
        <form id="rentalForm2" class="form-horizontal" role="form" onsubmit = "return false;">

        <p>Enter the amount of miles you want to drive. ($0.39 a mile)</p>

        <input type="text" class="form-control" name="usr" id="usr">

        <button type="submit" id='submit' value='Submit'class="btn btn-default" onclick="calculateMileage()">Submit</button> 

        <div id="total2"></div>
        
        </form>
        <img id="logo" alt="company logo" src="img/rentals.png">

        </div>

            </div>
        </div>

    </section>

    <!-- jQuery -->
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
<script>
                $('.input-daterange input').each(function() {
    $(this).datepicker("clearDates");
});
</script>
