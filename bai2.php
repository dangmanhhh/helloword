<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 02 html va php</title>
</head>
<body>
    <!-- Header -->
    <?php include_once "./inc/header.php" ?>
    <?php include_once "./inc/header.php" ?>
    <h1>Html va php</h1>
    <?php
echo "heloooooo";
?>
    <?php
        $language = " ngon ngu lap trinh PHP";
        var_dump($language);
        ?>
        <?php include "./inc/content.php"; ?>
        <?php include "./inc/content.php"; ?>
        <!-- footer -->
    <?php include_once "./inc/footer.php" ?>
    <?php include_once "./inc/footer.php" ?>
</body>
</html>