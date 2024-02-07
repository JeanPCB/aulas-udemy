<?php
    require_once("./templates/header.php");
?>

    <main>
        <div id="title-container">
            <h1>Blog Codar</h1>
            <p><i>O seu blog de programação</i></p>
        </div>

        <div id="posts-container">
            <?php foreach($posts as $post): ?>
                <article class="post-box" onclick="location.href = '<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>'">
                    <img src="./img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">
                        <h2 class="post-title"><?= $post['title'] ?></h2>
                    </a>
                    <p class="post-categories">
                        <?php foreach($post['tags'] as $tag): ?>
                            <?php 
                                echo $tag; 
                                if($tag != end($post['tags'])): 
                            ?>
                            <?= " | "; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </div>
    </main>
    
<?php
    include_once("./templates/footer.php")
?>