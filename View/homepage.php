<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

    <h1>Forum - test</h1>
    <ol>

        <?php
        //var_dump($posts->getPosts());
        foreach ($posts->getPosts()  as $post) : ?>
            <div class="post">
                <br>
                <form action="../Controller/PostController.php" method="post">
                    <input type="hidden" name="user_id" value="<?php echo $post["id"] ?>" />
                    <button><?php echo $post["id"]; ?></button>
                </form>
               
                <div class="post__name"><?php echo $post["name"]; ?></div>
                <div class="post__text"><?php echo $post["text"]; ?></div>
                <div class="post__signature"><?php echo $post["signature"]; ?></div>
                <br>
            </div>

        <?php endforeach; ?>
    </ol>

</section>
<?php require 'includes/footer.php' ?>