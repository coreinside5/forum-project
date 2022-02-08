<?php require 'includes/header.php' ?>


<section>
    <?php foreach ($topic as $top) : ?>
        <article class="posts">
            <h3><?php echo $top['name'] ?></h3>
            <p><?php echo $top['text'] ?></p>
            <p><?php echo $top['signature'] ?></p>
            <p><a href="index.php?action=topics">Back to homepage</a></p>
        </article>
    <?php endforeach; ?>
</section>

<?php require 'includes/footer.php' ?>