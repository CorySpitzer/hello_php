<html>
  <head>
    <title>Names</title>
  </head>
  <body>
    <?php
      for ($i = 0; $i < 2; $i++) {
        $id = 'person' . $i . '_name';
        echo $_GET[$id];
      }
    ?>
  </body>
</html>
