<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    header{
      background-color: #e3e3e3;
      padding: 2em;
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1>
      <?php echo "Hello, " . htmlspecialchars($_GET['name']); ?>
      
      <!-- <?php echo ""; ?> /* same as */ <?= ""; ?>  -->
      
      <?= "<br>Hello, " . htmlspecialchars($_GET['name']); ?>
    </h1>
  </header>
</body>
</html>