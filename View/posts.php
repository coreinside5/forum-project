<?php require 'includes/header.php' ?>
<section>
<?php
                $posts = $masterManager->getPosts($_GET["id"]);
                foreach ($posts as $post) : ?>
                    <div class="post__name">
                        <a class="post__item" href="./index.php?action=&id="><?php echo $post["title"]; echo $post["nick"]; echo $post["date"]?></a>
                    </div>
                <?php endforeach; ?>
</section>
<?php require 'includes/footer.php' ?>