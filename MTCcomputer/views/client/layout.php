<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MTC Computer</title>
  <link rel="shortcut icon" href="./images/image.png" type="image/png" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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