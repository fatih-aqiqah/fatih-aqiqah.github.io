

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>aplikasi Hitung Karkas Hewan</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../img/Logo-Fatih-Aqiqah.jpg" rel="shortcut icon" type="image/x-icon" />
  <link href="karkas.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#klik1").click(function(){
    $("#div1").fadeToggle(1000);
  });
  $("#klik2").click(function(){
    $("#div2").fadeToggle(2000);
  });
});
</script>
</head>

<body>
<center>
    <h1>APLIKASI HITUNG KARKAS</1>
</center>
    <div class="container">
    <div class="row g-2">
    <div class="col-md-6">
  <button id="klik2" class="btn btn-light"><img src="../img/Karkas-Kambing.png" width="550" height="250" /></button><br><br>
    <center>
  <?php
include "karkas_kambing.php";
?>	
</center>
</div>	
    <div class="col-md-6">
  <button id="klik1" class="btn btn-light"><img src="../img/Karkas-Sapi.png" width="550" height="250" /></button><br><br>
    <center>
  <?php
include "karkas_sapi.php";
?>	
</center>
</div>	
</div>	
</div>	
</body>
<script>

function startCalc(){

interval = setInterval("calc()",1);}

function calc(){

one = document.autoSumForm_sapi.bobot_sapi.value;

document.autoSumForm_sapi.jera_sapi.value = one * 0.0297;

document.autoSumForm_sapi.jehi_sapi.value = one * 0.0537;

document.autoSumForm_sapi.karkas_sapi.value = one * 0.5;

document.autoSumForm_sapi.daging_sapi.value = (one * 0.5) * 0.75;}

function stopCalc(){

clearInterval(interval);}

</script>


<script>

function startCalcu(){

interval = setInterval("calcu()",1);}

function calcu(){

hiji = document.autoSumForm_kambing.bobot_kambing.value;

document.autoSumForm_kambing.jera_kambing.value = hiji * 0.06;

document.autoSumForm_kambing.jehi_kambing.value = hiji * 0.136;

document.autoSumForm_kambing.karkas_kambing.value = hiji * 0.4;

document.autoSumForm_kambing.daging_kambing.value = (hiji * 0.4) * 0.75;}

function stopCalcu(){

clearInterval(interval);}

</script>
</html>