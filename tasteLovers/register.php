
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
                                <h3>Please Register <small>It's easy and always will be.</small></h3>
                                <span class="under-heading"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div id="register-form" class="content-wrap col-sm-6 center-block">
                                <form method="POST" accept-charset="utf-8" action="http://localhost/tasteLovers/register" role="form" id="submitTaste" class="">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="first-name" class="form-control input-lg" value="" name="first_name" placeholder="First Name" autofocus="">
                                            </div>
                                        </div>
                                        <span class="text-danger" id="first-name_error" style="display:none">**The First Name field is required.</span>

                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="last-name" class="form-control input-lg" value="" name="last_name" placeholder="Last Name">
                                            </div>
                                        </div>
                                        <span class="text-danger" id="last-name_error" style="display:none">**The Last Name field is required.</span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" id="telephone" class="form-control input-lg" value="" name="telephone" placeholder="Telephone">
                                    </div>
                                    <span class="text-danger" id="telephone_error" style="display:none">**The Telephone field is required.</span>


                                    <div class="row">
                                        <div class="col-xs-8 col-sm-9 col-md-9">
                                            <span class="button-checkbox">
                                                <button id="newsletter" type="button" class="btn" data-color="info" tabindex="7">&nbsp;&nbspSubscribe</button>
                                                <input type="checkbox" name="newsletter" class="hidden" value="1" >
                                            </span>
                                            Keep me up-to-date with offers by email.							</div>
                                    </div>
                                    <br />

                                    <br />
                                    <br />

                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a href="http://localhost/tasteLovers/login" class="btn btn-default btn-block btn-lg">Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $servername = "localhost";
    $username = "root";
    $password = "abc@123";
    $dbname = "tasteLovers";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $name = $_POST['first_name'].' '.$_POST['last_name'];
    $telephone = $_POST['telephone'];
    $sql = "insert into customer (cname,phone) VALUES ('".$name."','".$telephone."')";
    $result = $conn->query($sql);
    $last_id = $conn->insert_id;
    echo '<script>var cid = '.$last_id.';window.location.href = "http://localhost/tastelovers/?newcid=" + cid;</script>';
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
    var count = 'no';
    if($('#first-name').val() === '') {
        $('#first-name').css('background','pink');
        count = 'yes';
    } if($('#last-name').val() === '') {
        $('#last-name').css('background','pink');
        count = 'yes';;
    } if($('#telephone').val() === '') {
        $('#telephone_error').css('display','block');
        count = 'yes';
    } 
    
    if(count === 'yes') {
        return false;
    }
});

</script>