<?php require 'includes/header.php' ?>
<div class="mainbody">
    <section>
        <h1>Topics</h1>
        <?php
        //print_r($topics->fetchAll());?????
        foreach ($topics as $topic) : ?>
            <article>
                <div class="topic__name"><a class="topicitem" href="./index.php?action=topic&pagename=<?php echo $topic["Tables_in_teaforum"]; ?>"><?php echo $topic["Tables_in_teaforum"]; ?></a></div>
            </article>
        <?php endforeach; ?>
    </section>
</div>
<?php require 'includes/footer.php' ?>