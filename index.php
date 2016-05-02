<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Application: B</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
  </head>
  <body>
    <div class="box">
      <h1>B</h1>
      <?php if(isset($_ENV['HOSTNAME'])) { ?><h2><?php echo $_ENV['HOSTNAME'] ?></h2><?php } ?>
      <hr>
      <h1 id="countdown">5</h1>
    </div>
  </body>
</html>
