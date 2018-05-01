<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Հետադարձ կապ</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">

                <div class="logo">
            
                <div class="nkar">
                    <img src="../login_page/images/img-01.png" alt="IMG" width="150px">
                </div>
               
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Գլխավոր էջ</p>
                        </a>
                    </li>
                    <!-- <li>
                        <a href="./user.php">
                            <i class="material-icons">person</i>
                            <p>Անձնական էջ</p>
                        </a>
                    </li> -->
                    <li>
                        <a href="./table.php">
                            <i class="material-icons">content_paste</i>
                            <p>Տվյալների Աղուսյակ</p>
                        </a>
                    </li>

                    <li class="active">
                        <a href="./maps.php">
                            <i class="material-icons">location_on</i>
                            <p>ՀԵՏԱԴԱՐՁ ԿԱՊ</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> ՀԵՏԱԴԱՐՁ ԿԱՊ </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   
                        <div class="navbar-form navbar-left">
                            <div style="padding-top:10px;">Հայաստան, ք.Երևան, Տերյան 105, 0009, Հեռ.՝ +374 10 56 79 68</div>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="logout.php" class="dropdown-toggle">
                                    <i class="fas fa-sign-out-alt elq"></i>
                                    <p class="hidden-lg hidden-md">Դուրս գալ</p>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <div id="alahakbar">
                <div id="map">

                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<!-- <script type="text/javascript">
    $(document).ready(function () {
        if ($('.main-panel > .content').length == 0) {
            $('.main-panel').css('height', '100%');
        }


        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });
</script> -->
<script>
    function initMap() {
        const location = { lat: 40.1914507, lng: 44.523730200000045 };
        const map = new google.maps.Map(document.querySelector('#map'), {
            zoom: 18,
            center: location
        });
        const marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASiTKgoIjeFfI - 7rid6cpQJbyKV_ZLUsc&callback=initMap"></script>

</html>