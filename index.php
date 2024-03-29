<?php include('connect.php') ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['CA'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['CA']);
    header("location: login.php");
  }
$ca_no= $_SESSION['CA'];
  $ca_details_query = "SELECT * FROM CA_details WHERE CA= '$ca_no'";
$query2 = mysqli_query($db, $ca_details_query);
$ca_det = mysqli_fetch_assoc($query2);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>POIM</title>
    <meta name="theme-color" content="#00a80a">
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/BeFunky-design%20(45).png">
    <link rel="icon" type="image/png" sizes="undefinedxundefined" href="assets/img/BeFunky-design%20(45).png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Bottom-Resonsive-Menu.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Header-Novos-Imveis.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/menu-cinel-1.css">
    <link rel="stylesheet" href="assets/css/menu-cinel.css">
    <link rel="stylesheet" href="assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="headerResult"></div>
    <div class="highlight-blue" style="margin: 0px 0px 10px 0px;">
        <div class="container">
            <div class="intro">
                 <?php  if (isset($_SESSION['CA'])) ; ?>
		<h2 class="text-center">Hi <?php echo $ca_det['Name']; ?>!</h2>
                <p class="text-center" style="margin: -20px 0px 0px 0px;">Your Consumer No is <strong><?php echo $_SESSION['CA'];?></strong></p>
                <p class="text-center"> <a href="index.php?logout='1'" style="color: white;">logout</a> </p>
            </div>
        </div>
        <p class="text-center" style="color: rgb(255,255,255);margin: 0;">YOUR BILL AMOUNT</p>
        <h1 class="text-center" style="margin: 0px;">0.00<button class="btn btn-link text-center bg-primary" type="button" style="color: rgb(255,255,255);background-color: rgb(251,251,251);margin: -10px 10px 0px 10px;">PAY</button></h1>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="width: 33.3%;"><a href="power_outage.php"><img src="assets/img/poweroutage.png" style="width: 100%;height: 100PX;"></a></div>
                <div class="col-md-4" style="width: 33.3%;"><a href="emp_verf.php"><img src="assets/img/employee%20(2).png" style="width: 100%;height: 100PX;"></a></div>
                <div class="col-md-4" style="width: 33.3%;"><a href="safety_tips.html"><img src="assets/img/saftey%20tips.png" style="width: 100%;height: 100PX;"></a></div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="width: 33.3%;"><a href="street_light.php"><img src="assets/img/streetlgiht.png" style="width: 100%;height: 100PX;"></a></div>
                <div class="col-md-4" style="width: 33.3%;"><a href="payments.php"><img src="assets/img/Payments.png" style="width: 100%;height: 100PX;"></a></div>
                <div class="col-md-4" style="width: 33.3%;"><a href="smartmeter.html"><img src="assets/img/Smart Meter.png" style="width: 100%;height: 100PX;" /></a></div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-dark navbar-expand fixed-bottom" style="background-color: #0d161f;height: 55px;">
        <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav flex-grow-1 justify-content-around">
                    <li class="nav-item" role="presentation"><a class="nav-link active btn" href="#" style="background-color: rgb(13,22,31);"><i class="material-icons" style="font-size: 30px;">home</i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active btn" href="notification.php" style="background-color: rgb(13,22,31);"><i class="material-icons" style="font-size: 30px;">notifications</i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active btn" href="user_messages.php" style="background-color: rgb(13,22,31);"><i class="material-icons" style="font-size: 30px;">mail</i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active btn" href="user_profile.php" style="background-color: rgb(13,22,31);"><i class="material-icons" style="font-size: 30px;">person</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
