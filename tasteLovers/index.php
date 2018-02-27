
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <link href="images/favicon.ico" rel="shortcut icon" type="image/ico" />
        <title>Welcome To TasteLovers! - TasteLovers</title>
        <link href="favicon.ico" rel="shortcut icon" type="image/ico" />
        <title>Welcome To TasteLovers! - TasteLovers</title>

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" id="font-awesome-css" />
        <link href="css/select2.css" rel="stylesheet" type="text/css" id="select2-css" />
        <link href="css/select2-bootstrap.css" rel="stylesheet" type="text/css" id="select2-bootstrap-css" />
        <link href="css/jquery.raty.css" rel="stylesheet" type="text/css" id="jquery-raty-css" />
        <link href="css/fonts.css" rel="stylesheet" type="text/css" id="fonts-css" />
        
        <link href="css/stylesheet1.css" rel="stylesheet" type="text/css" id="stylesheet-css" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" id="stylesheet-css" />
        
        <link href="css/stylesheet2.css" rel="stylesheet" type="text/css" id="stylesheet-css" />
        <link href="css/stylesheet3.css" rel="stylesheet" type="text/css" id="stylesheet-css" />


        <script src="js/jquery-1.11.2.min.js" charset="utf-8" type="text/javascript" id="jquery-js" ></script>
        <script src="js/bootstrap.min.js" charset="utf-8" type="text/javascript" id="bootstrap-js" ></script>
        <script src="js/select2.js" charset="utf-8" type="text/javascript" id="select-2-js" ></script>
        <script src="js/jquery.raty.js" charset="utf-8" type="text/javascript" id="jquery-raty-js" ></script>
        <script src="js/jquery.flexslider.js" charset="utf-8" type="text/javascript" id="flexslider-js" ></script>
        <script src="js/common.js" charset="utf-8" type="text/javascript" id="common-js" ></script>        		

    </head>
    <body class="">
        <div id="opaclayer" onclick="closeReviewBox();"></div>


        <header id="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <button type="button" class="btn-navbar navbar-toggle" data-toggle="collapse" data-target="#main-header-menu-collapse">
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <div class="logo">
                            <a class="" href="http://localhost/tasteLovers/">
                                TasteLovers															</a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="collapse navbar-collapse" id="main-header-menu-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="http://localhost/tasteLovers/login">Login</a></li>
                                <li><a href="http://localhost/tasteLovers/register">Register</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="page-wrapper" class="content-area">

            <div id="content-top" class="partial partial-area "><div id="module-slideshow-1" class="module-slideshow"><div id="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="slider-caption">
                                    </div>

                                    <img src="images/banner1.jpg" />
                                </li>
                                <li>
                                    <div class="slider-caption">
                                    </div>

                                    <img src="images/banner2.jpg" />
                                </li>
                                <li>
                                    <div class="slider-caption">
                                    </div>

                                    <img src="images/banner3.jpg" />
                                </li>
                            </ul>
                        </div>
                    </div>
                    <script type="text/javascript"><!--
                            $('.flexslider').flexslider({
                            prevText: '',
                            nextText: '',
                            slideshow: true,
                            slideshowSpeed: 2000,
                        });
                        //--></script>
                </div><div id="module-local-module-2" class="module-local_module"><div id="local-box" class="local-box-fluid">
                        <div class="container">
                            <div class="row">
                                <div id="local-search" class="col-md-12 text-center">
                                    <div class="panel panel-local">
                                        <div class="panel-body">
                                            <h2>Order delicious food online</h2>
                                            <span class="search-label sr-only">Search your favourite restaurant to order</span>
                                            <div class="col-xs-12 col-sm-6 col-md-5 center-block">
                                                <form id="location-form" method="POST" action="" role="form">
                                                    <div class="input-group postcode-group">
                                                        <input type="text" id="search-query" class="form-control text-center postcode-control input-lg" name="search_query" placeholder="Search your favourite restaurant to order" value="<?php
                                                        if (isset($_GET['search'])) {
                                                            echo $_GET['search'];
                                                        } else {
                                                            echo '';
                                                        }
                                                        ?>">
                                                            <a id="search" class="input-group-addon btn btn-primary" onclick="searchLocal()">Click and Go!</a>
                                                    </div>
                                                    <div>
                                                        <a style="    color: black;    float: right;    cursor: pointer;" href="http://localhost/tastelovers/">Clear Search</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div id="local-alert" class="col-xs-12 col-sm-6 center-block">
                                    <div class="local-alert"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div></div>
            <?php
            if (isset($_GET['search'])) {
                $search = $_GET['search'];
                $servername = "localhost";
                $username = "root";
                $password = "abc@123";
                $dbname = "tasteLovers";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT * from restaurant where rname LIKE '%" . $search . "%' || description LIKE '%" . $search . "%'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $i = 0;
                    echo '<table class="table-fill">
                            <thead>
                            <tr>
                            <th class="text-left">S.No</th>
                            <th class="text-left">Restaurant Name</th>
                            <th class="text-left">Restaurant Adreess</th>
                            <th class="text-left">Restaurant Description</th>
                            <th class="text-left">Restaurant Capacity</th>
                            <th class="text-left">Booking</th>
                            </tr>
                            </thead>
                            <tbody class="table-hover">';
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                        <tr>
                            <td class="text-left"><?php echo $i; ?></td>
                            <td class="text-left"><?php echo $row["rname"]; ?></td>
                            <td class="text-left"><?php echo $row["raddress"]; ?></td>
                            <td class="text-left"><?php echo $row["description"]; ?></td>
                            <td class="text-left"><?php echo $row["capacity"]; ?></td>
                            <td class="text-left"><a style='    color: white;' id="search" class="input-group-addon btn btn-primary" onclick="bookrestro(<?php echo $row["rid"];?>)">Book Now!</a></td>
                        </tr>
                        <?php
                    }
                    echo '</tbody></table>';
                } else {
                    echo '<div style="text-align: center;background: red;margin: 0px 10%;color: white;padding: 10px;">Oops!! Your search has no results. Please try something else!!</div>';
                }
            } 
            else if (isset($_GET['cid'])) {
                $search = $_GET['cid'];
                $servername = "localhost";
                $username = "root";
                $password = "abc@123";
                $dbname = "tasteLovers";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT * from restaurant,booking,customer where booking.cid = customer.cid and restaurant.rid = booking.cid and booking.cid = ". $search ;
                $result = $conn->query($sql);

                $sql1 = "SELECT cname from customer where cid = ". $search ;
                
                $result1 = $conn->query($sql1);
                while ($row1 = $result1->fetch_assoc()) {
                    $customerName = $row1['cname'];
                    $_SESSION['cid'] = $search;
                }
                
                if ($result->num_rows > 0) {
                    $i = 0;
                    echo '<div style="
                        /* text-align: center; */
                        margin: 10px 10%;
                        font-size: 20px;
                        color: blue;
                    ">Hello '.$customerName.',<br>

                    Here are your previous bookings!!
                        </div>';
                    echo '<table class="table-fill">
                            <thead>
                            <tr>
                            <th class="text-left">S.No</th>
                            <th class="text-left">Restaurant Name</th>
                            <th class="text-left">Restaurant Adreess</th>
                            <th class="text-left">Restaurant Description</th>
                            <th class="text-left">Booking Date</th>

                            </tr>
                            </thead>
                            <tbody class="table-hover">';
                    while ($row = $result->fetch_assoc()) {
                        $i++;
                        ?>
                        <tr>
                            <td class="text-left"><?php echo $i; ?></td>
                            <td class="text-left"><?php echo $row["rname"]; ?></td>
                            <td class="text-left"><?php echo $row["raddress"]; ?></td>
                            <td class="text-left"><?php echo $row["description"]; ?></td>
                            <td class="text-left"><?php echo $row["btime"]; ?></td>
                        </tr>
                        <?php
                    }
                    echo '</tbody></table>';
                } else {
                    echo '<div style="text-align: center;background: green;margin: 0px 10%;color: white;padding: 10px;">This seems to be your First order. Please give us a chance to serve you!!</div>';
                }
            }
            else if (isset($_GET['newcid'])) {
                $search = $_GET['newcid'];
                $servername = "localhost";
                $username = "root";
                $password = "abc@123";
                $dbname = "tasteLovers";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql1 = "SELECT cname from customer where cid = ". $search ;
                
                $result1 = $conn->query($sql1);
                while ($row1 = $result1->fetch_assoc()) {
                    $customerName = $row1['cname'];
                    echo '<div style="
                        /* text-align: center; */
                        margin: 10px 10%;
                        font-size: 20px;
                        color: blue;
                    ">Hello '.$customerName.',<br>

                    Thanks for registering with us!! Please give us a chance to serve you.
                        </div>';
                }
            } else {
                ?>
                <div id="page-content">
                    <div class="container top-spacing-10">
                        <div class="content-wrap">
                            <div id="order-steps" class="row">
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="step-item">
                                        <div class="icon">
                                            <i class="fa fa-search"></i>
                                        </div>
                                        <h4>Search</h4>
                                        <p>Find and select restaurant that deliver to you by entering your postcode or address.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="step-item">
                                        <div class="icon">
                                            <i class="fa fa-mouse-pointer"></i>
                                        </div>
                                        <h4>Choose</h4>
                                        <p>Browse hundreds of menus to find the food you like.</p>
                                    </div>
                                </div>
                                <div class="clearfix visible-xs"></div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="step-item">
                                        <div class="icon">
                                            <i class="fa fa-credit-card"></i>
                                        </div>
                                        <h4>Pay by cash or card</h4>
                                        <p>It's quick, easy and secure. Pay by Cash on Delivery or PayPal.</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="step-item">
                                        <div class="icon">
                                            <i class="fa fa-heart"></i>
                                        </div>
                                        <h4>Enjoy</h4>
                                        <p>Food is prepared & delivered to your door step or ready for pick-up at the restaurant.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
<?php }
?>

        </div>

        <footer id="page-footer">


            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 wrap-all border-top">
                            &copy; 2017 TasteLovers
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>


<script>
    function searchLocal() {
        window.location.href = "http://localhost/tastelovers/?search=" + $('#search-query').val();
    }
    
    function bookrestro(id) {
        window.location.href = "http://localhost/tastelovers/booking.php?resto=" + id;
        return false;
    }

</script>
<style>
    @import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

    body {
        font-family: "Roboto", helvetica, arial, sans-serif;
        font-size: 16px;
        font-weight: 400;
        text-rendering: optimizeLegibility;
    }

    div.table-title {
        display: block;
        margin: auto;
        max-width: 600px;
        padding:5px;
        width: 100%;
    }

    .table-title h3 {
        color: #fafafa;
        font-size: 30px;
        font-weight: 400;
        font-style:normal;
        font-family: "Roboto", helvetica, arial, sans-serif;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        text-transform:uppercase;
    }


    /*** Table Styles **/

    .table-fill {
        background: white;
        border-radius:3px;
        border-collapse: collapse;
        height: auto;
        margin: auto;
        max-width: 80%;
        padding:5px;
        width: 100%;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        animation: float 5s infinite;
    }

    th {
        color:#D5DDE5;;
        background:#1b1e24;
        border-bottom:4px solid #9ea7af;
        border-right: 1px solid #343a45;
        font-size:23px;
        font-weight: 100;
        padding:10px;
        text-align:left;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        vertical-align:middle;
    }

    th:first-child {
        border-top-left-radius:3px;
    }

    th:last-child {
        border-top-right-radius:3px;
        border-right:none;
    }

    tr {
        border-top: 1px solid #C1C3D1;
        border-bottom-: 1px solid #C1C3D1;
        color:#666B85;
        font-size:16px;
        font-weight:normal;
        text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
    }

    tr:hover td {
        background:#4E5066;
        color:#FFFFFF;
        border-top: 1px solid #22262e;
    }

    tr:first-child {
        border-top:none;
    }

    tr:last-child {
        border-bottom:none;
    }

    tr:nth-child(odd) td {
        background:#EBEBEB;
    }

    tr:nth-child(odd):hover td {
        background:#4E5066;
    }

    tr:last-child td:first-child {
        border-bottom-left-radius:3px;
    }

    tr:last-child td:last-child {
        border-bottom-right-radius:3px;
    }

    td {
        background:#FFFFFF;
        padding:20px;
        text-align:left;
        vertical-align:middle;
        font-weight:300;
        font-size:18px;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        border-right: 1px solid #C1C3D1;
    }

    td:last-child {
        border-right: 0px;
    }

    th.text-left {
        text-align: left;
    }

    th.text-center {
        text-align: center;
    }

    th.text-right {
        text-align: right;
    }

    td.text-left {
        text-align: left;
    }

    td.text-center {
        text-align: center;
    }

    td.text-right {
        text-align: right;
    }

</style>