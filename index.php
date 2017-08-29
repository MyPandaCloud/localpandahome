<?php
$hosts=file_get_contents("/etc/hosts");

$embytmp=strstr($hosts, 'emby');
$nexttmp=strstr($hosts, 'nextcloud');
$ampachetmp=strstr($hosts, 'ampache');
$hasstmp=strstr($hosts, 'homeassistant');
$zonetmp=strstr($hosts, 'zoneminder');
$transtmp=strstr($hosts, 'transmission');

$emby=strstr($embytmp, ' ', true);
$nextcloud=strstr($nexttmp, ' ', true);
$hass=strstr($hasstmp, ' ', true);
$zoneminder=strstr($zonetmp, ' ', true);
$transmission=strstr($transtmp, ' ', true);
$ampache=strstr($ampachetmp, ' ', true);
?>
<html>
<head>
  <title>PandaHome</title>
  <link rel="stylesheet" href="css/w3.css">
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/require.js"></script>
  <script>
    $(document).ready(function(){
      $("#emby").click(function(){
	      window.location.href = "http://<?php echo $emby; ?>";
      });
      $("#netflix").click(function(){
         window.location.href = "http://www.netflix.com";
      });
      $("#youtube").click(function(){
         window.location.href = "http://youtube.com";
      });
      $("#dailymotion").click(function(){
         window.location.href = "http://dailymotion.com";
      });
      $("#qwant").click(function(){
         window.location.href = "http://qwant.com";
      });
      $("#nextcloud").click(function(){
	      window.location.href = "http://<?php echo $nextcloud; ?>";
      });
      $("#ampache").click(function(){
	      window.location.href = "http://<?php echo $ampache; ?>";
      });
      $("#homeassistant").click(function(){
	      window.location.href = "http://<?php echo $hass; ?>";
      });
      $("#zoneminder").click(function(){
	      window.location.href = "http://<?php echo $zoneminder; ?>";
      });
      $("#transmission").click(function(){
	      window.location.href = "http://<?php echo $transmission; ?>";
      });
    });

</script>
  </script>
</head>
<body class=" w3-content" style="max-width:1600px">
  <div class="w3-main w3-content" style="max-width:1600px;margin-top:55px;">
    <div id="ampache" class="w3-quarter w3-hover-opacity w3-container">
       <img src="images/ampache.png" style="width:100%" alt="Ampache">
       <div class="w3-center w3-orange w3-container"><p>Ampache</p></div>
   </div>
   <div id="dailymotion" class="w3-quarter w3-hover-opacity w3-container">
      <img src="images/dailymotion.jpg" style="width:100%" alt="Dailymotion">
      <div class="w3-center w3-pale-blue w3-container"><p>Dailymotion</p></div>
  </div>
      <div id="emby" class="w3-quarter w3-hover-opacity w3-container">
        <img src="images/emby.png" style="width:100%" alt="Emby Theater">
        <div class="w3-center w3-green w3-container"><p>Emby Theater</p></div>
    </div>
    <div id="homeassistant" class="w3-quarter w3-hover-opacity w3-container">
      <img src="images/homeassistant.jpg" style="width:100%" alt="Home Assistant">
      <div class="w3-center w3-blue w3-container"><p>Home Assistant</p></div>
  </div>
  <div id="netflix" class="w3-quarter w3-hover-opacity w3-container">
        <img src="images/netflix.png" style="width:100%" alt="Netflix">
        <div class="w3-center w3-red w3-container"><p>Netflix</p></div>
  </div>
  <div id="nextcloud" class="w3-quarter w3-hover-opacity w3-container">
     <img src="images/nextcloud.png" style="width:100%" alt="Nextcloud">
     <div class="w3-center w3-blue w3-container"><p>Nextcloud</p></div>
 </div>
 <div id="qwant" class="w3-quarter w3-hover-opacity w3-container">
    <img src="images/qwant.jpg" style="width:100%" alt="Qwant">
    <div class="w3-center w3-red w3-container"><p>Qwant</p></div>
</div>
<div id="transmission" class="w3-quarter w3-hover-opacity w3-container">
   <img src="images/transmission.png" style="width:100%" alt="Transmission">
   <div class="w3-center w3-grey w3-container"><p>Transmission</p></div>
</div>
  <div id="youtube" class="w3-quarter w3-hover-opacity w3-container">
        <img src="images/you-logo.png" style="width:100%" alt="">
        <div class="w3-center w3-red w3-container"><p>Youtube</p></div>
  </div>
  <div id="zoneminder" class="w3-quarter w3-hover-opacity w3-container">
     <img src="images/zoneminder.jpg" style="width:100%" alt="ZoneMinder">
     <div class="w3-center w3-grey w3-container"><p>ZoneMinder</p></div>
  </div>
 </div>
</body>
</html>
