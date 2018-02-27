
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

            <div id="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-section">
                                <h3>Log In</h3>
                                <span class="under-heading"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="login-form" class="content-wrap col-sm-4 center-block">
                                <form method="POST" name='submitTaste' accept-charset="utf-8" action="http://localhost/tasteLovers/login" id="submitTaste" role="form">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="number" name="email" id="login-email" class="form-control input-lg" placeholder="Phone Number" autofocus="" />
                                                <span class="input-group-addon">+</span>
                                                
                                            </div>
                                            <span class="text-danger" id="text-danger1" style="display:none">**The Telephone field is required.</span>
                                            <span class="text-danger2" id="text-danger2" style="display:none">**This number is not registered with us!! Please Register.</span>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                
                                                <div class="col-md-7" style="width:100%">
                                                    <a class="btn btn-default btn-block btn-lg" href="http://localhost/tasteLovers/register">Register</a>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search = $_POST['email'];
    $servername = "localhost";
    $username = "root";
    $password = "abc@123";
    $dbname = "tasteLovers";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * from customer where phone = '".$search."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cid = $row['cid'];
            echo '<script>var cid = '.$cid.';window.location.href = "http://localhost/tastelovers/?cid=" + cid;</script>';
        }
    } else {
        echo '<script>$("#text-danger1").css("display","none");$("#text-danger2").css("display","block")</script>';
    }
}

?>
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
$( "#submitTaste" ).submit(function() {
    if($('#login-email').val() === '') {
        $('#text-danger2').css('display','none');
        $('#text-danger1').css('display','block');
        return false;
    }
});

</script>