<?php include('server.php'); ?>
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
$query_user = mysqli_query($db, $ca_details_query);
$cadet = mysqli_fetch_assoc($query_user);
$arcode = $cadet['Area_Code'];
$ca_details_query1 = "SELECT * FROM planned_outgae WHERE Area_Code= '$arcode'";
$query_out = mysqli_query($db, $ca_details_query1);
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
    <div class="card">
        <div class="card-body">
            <h3 class="text-center card-title" style="color: #00a80a;">Notification</h3>
            <h6 class="text-center text-muted card-subtitle mb-2" style="color: #117116;opacity: 1;filter: hue-rotate(0deg) invert(0%);">Power Outage Advance Notice</h6>
        </div>
    </div>
   <?php
    if (isset($query_out)) {
    while($noti = mysqli_fetch_assoc($query_out)) {
    echo "<div class="."card border rounded shadow"." style="."margin: 5px;".">";
        echo "<div class="."card-body border rounded".">";
          echo "  <h5 class="."card-title".">Notice for Date: ".$noti['Planned_Dt']."</h5>";
           echo " <h6 class="."text-muted card-subtitle mb-2".">Outage Estimated Time: ".$noti['Est_Time']."</h6>";
            echo "<p class="."card-text".">".$noti['Message']."</p>";
      echo "  </div>";
  echo "  </div>";
}
}
?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>