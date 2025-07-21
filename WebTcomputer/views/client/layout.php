<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/styless.css" />
</head>

<body>
    <div id="wrapper">
        <!--Phần đầu-->
        <?php include "./../views/client/include/header.php"; ?>

        <!--Phần thân-->
        <?php
        if (isset($content) && !empty($content)) {
            echo $content;
        } else {
            include "./../views/client/include/main.php";
        }
        ?>

        <!--Phần cuối-->
        <?php include "./../views/client/include/footer.php"; ?>
    </div>
</body>

</html>