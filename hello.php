<?php
  $friend_name = "sander";
?>

<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      Hello! <?php echo $friend_name; ?>
    </p>

    <div class="container">
      <form  action="letter.php">
        <div class="form-group">
          <label for="sender">Your name</label>
          <input id="sender" name="sender" class="form-control" type="text">
        </div>
        <div class="form-group">
          <label for="recipient">Your friend's name</label>
          <input id="recipient" name="recipient" class="form-control" type="text">
        </div>
        <button type="submit" class="btn">Go!</button>
      </form>
    </div>
  </body>
</html>
