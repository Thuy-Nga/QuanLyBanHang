<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Bootsrap</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="lib/fa/css/all.css">
</head>

<body>
    <?php include 'config.php' ?>
    <!-- navbar -->
    <?php include 'navbar.php' ?>
    <!-- container -->
    <div class="container-fluid">
        <div class="row">
            <!-- sidebar -->
            <?php include 'sidebar.php' ?>
            <!-- content -->
            <?php include './content.php' ?>
        </div>
        
    </div>
    <script src="lib/popper.min.js"></script>
    <script src="lib/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="./delete.js"></script>
</body>

</html>