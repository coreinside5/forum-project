<?php require 'includes/header.php' ?>
<section>
<?php
                //$threads = $masterManager->getThreads($_GET["id"]);
                $threads = array();
                array_push($threads, $masterManager->getThreads($_GET["id"]));
                array_push($threads, $masterManager->getThreads($_GET["id"]));
                print_r($threads);
                $id = 0;
                foreach ($threads as $thread) : ?>
                    <div class="post__name">
                        <a class="post__item" href="./index.php?action=&id="><?php echo $thread[$id]["title"]; echo $thread[$id]["nick"]; echo $thread[$id]["date"]?></a>
                    </div>
                    
                <?php $id++; endforeach; ?>
</section>
<?php require 'includes/footer.php' ?>