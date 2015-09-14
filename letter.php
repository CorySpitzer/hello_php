<?php
  // php has 'superglobals' - $_GET that can apparently access whatever they like
  // Lets get the recipient and sender with them.
  $recipient = $_GET["recipient"];
  $sender = $_GET["sender"];
  $sum = $_GET["first_number"] + $_GET["second_number"] 
?>

<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php echo 'hi'; echo ($recipient . $sender) ?>
    </p>
    <p>
      numbers <?php echo $sum ?>
    </p>
  </body>
</html>
