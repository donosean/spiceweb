<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>SpiceTools API Web Client</title>
  <?php
  include("spiceapi.php");
  include("request.php");
  include("modules.php");
  ?>
</head>
<body>
  <?php
  include("sidebar.php");
  $settings = include("config.php");
  $spiceapi = new SpiceApi($settings["server"], $settings["port"]);
  $status= "<span style='color: red;'>Offline</span>";
  if($spiceapi->connect()) {
    $status = "<span style='color: lime;'>Online</span>";
    $spiceapi->disconnect();
  }
  ?>
  <div class="content">
  <h2>SpiceTools API Web Client</h2>
  <p>Welcome to the SpiceTools API Web Client! Choose an option from the sidebar to begin.</p>
  <p>Current config is as follows:</p>
  <ul>
    <li>Server: <?php echo $settings["server"]; ?></lir>
    <li>Port: <?php echo $settings["port"]; ?></li>
    <li>Status: <?php echo $status; ?></li>
  </ul>
  </div>
  <?php include("footer.php"); ?>
</body>
</html>