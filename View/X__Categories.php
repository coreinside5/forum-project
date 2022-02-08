<?php require 'includes/header.php' ?>
<div class="mainbody">
    <section >
        <h1>Categories</h1>
        <?php
        //print_r($topics->fetchAll());?????
        foreach ($categories as $categorie) : ?>
            <article>
                <div class="categories_name">
                    <a class="topicitem" href="./index.php?action=topic&pagename=<?php $categorie["title"]; ?>">
                        <?php echo $categorie["title"]; ?>
                    </a>
                </div>
            </article>
        <?php endforeach; ?>
    </section>
</div>
<?php require 'includes/footer.php' ?>