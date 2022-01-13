<?php require 'includes/header.php'?>

    <section>
       <?php var_dump($post->getPost('3')) ?>
        <h1><?php echo $post->getPost(3) ?></h1>

        <p><a href="../">Back to homepage</a></p>

        <p>Lorem ipsum dolor sit amet.</p>

    </section>
    
<?php require 'includes/footer.php'?>