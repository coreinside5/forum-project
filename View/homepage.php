<?php require 'includes/header.php' ?>
<div class="mainbody">
    <section>
        <h1>Homepage</h1>
        <?php
        foreach ($posts as $post) : ?>
            <article class="posts">
                <!--<form action="./index.php?action=post&id=<?php echo $post["id"] ?>" method="post">
                <input type="hidden" name="user_id" value="<?php echo $post["id"] ?>" />
                <button><?php echo $post["id"]; ?></button>
            </form>-->

                <div class="post__name"><a class="postitem" href="./index.php?action=post&id=<?php echo $post["id"] ?>"><?php echo $post["name"]; ?></a></div>
                <div class="post__text"><?php echo $post["text"]; ?></div>
                <div class="post__signature"><?php echo $post["signature"]; ?></div>
            </article>
        <?php endforeach; ?>
    </section>
</div>
<?php require 'includes/footer.php' ?>