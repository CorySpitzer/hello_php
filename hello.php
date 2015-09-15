<?php
  $friend_name = "sander";
  $groceries = array('eggs', 'milk')
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

    <p>
      <?php
        foreach ($groceries as $grocerie) {
          echo "<p>" . $grocerie . "</p>";
        }
      ?>
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

    <form action="names.php" id="addresses">
      <?php
        // $limit = 2;
        // this should be the same as on names.php and should be refactored 
        // into a single variable
        for ($i = 0; $i < 2; $i++) {
          $id = 'person' . $i . '_name';
          echo '<div class="form-group">' .
                 '<label for=' . $id . '>Name: </label>' .
                 '<input id=' . $id . ' name=' . $id . ' class="form-control" type="text">' .
               '</div>';
        }
      ?>
      <button type="submit">Create</button>
    </div>
  </body>
</html>
