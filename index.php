<?php
require_once("connection.php");

try {
    $q = $db->prepare("SELECT name, text, signature FROM forumtest");
    $q->execute();
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
// PDO::FETCH_ASSOC to display only the columns as keys in the array returned
$posts = $q->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" type="text/css" href="./src/styles/style.css" />
</head>

<body>
    <?php include 'header.php' ?>
    <section class="mainsection">
        <?php
        foreach ($posts as $post) : ?>
            <div class="post">
                <br>
                <div class="post__name"><?php echo $post["name"]; ?></div>
                <div class="post__text"><?php echo $post["text"]; ?></div>
                <div class="post__signature"><?php echo $post["signature"]; ?></div>
                <br>
            </div>

        <?php endforeach; ?>
    </section>
    <?php include 'footer.php' ?>
</body>

</html>