<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bán linh kiện máy tính</title>
    <link rel="shortcut icon" type="image/png" href="./assetsuser/image/logo.png">
    <link rel="stylesheet" href="./assetsuser/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <div id="wrapper">
        <!-- phần đầu  -->
        <?php include "./../views/client/include/header.php"; ?>

        <!-- phần thân -->
        <?php
        if (isset($content) && !empty($content)) {
            echo $content;
        } else {
            include "./../views/client/include/main.php";
        }
        ?>

        <!-- phần cuối -->
        <?php
        include "./../views/client/include/footer.php";
        ?>
    </div>
</body>

</html>