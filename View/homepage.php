<?php //require $_SERVER['DOCUMENT_ROOT'] . "/forum-project/includes/header.php" 
?>
<?php require "includes/header.php" ?>
<div class="mainbody">
    <section>
        <h1>Categories</h1>
        <?php
        foreach ($categories as $categorie) : ?>
            <article class="cats">
                <div class="cat__name">
                    <a class="cat__item"><?php echo $categorie["title"]; ?></a>
                </div>
                <?php
                $subcategories = $masterManager->getSubcategories($categorie["id"]);
                foreach ($subcategories as $subcategorie) : ?>
                    <div class="subcat__name">
                        <a class="subcat__item" href="./index.php?action=posts&id=<?php echo $subcategorie["id"]; ?>&title=<?php echo $subcategorie["title"]; ?>"><?php echo $subcategorie["title"]; ?></a>
                    </div>
                <?php endforeach; ?>
            </article>
        <?php endforeach; ?>
    </section>
</div>
<?php require 'includes/footer.php' ?>