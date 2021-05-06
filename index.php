<?php
require_once 'vendor/autoload.php';

$pages = new \Controllers\Core\Web\Pages();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Travis CI - PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  </head>
<body>
  
  <h1><?php echo $pages->render(); ?></h1>

  <pre><?php var_dump($pages->returnArray());?></pre>

</body>
</html>
