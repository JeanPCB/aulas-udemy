<?php
    require_once("./templates/header.php")
?>

    <main>
        <div id="title-container">
            <h1>Blog Codar</h1>
            <p>O seu blog de programação</p>
        </div>

        <section id="posts-container">
            <?php foreach($posts as $post): ?>
                <article class="post-box" onclick="location.href = '<?= $BASE_URL ?>contato.php'">
                    <img src="./img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                    <h2 class="post-title"><?= $post['title'] ?></h2>
                    <p class="post-categories">
                        <?php foreach($post['tags'] as $category): ?>
                            <a href="#"><?= $category ?></a>
                        <?php endforeach; ?>
                    </p>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
    
<?php
    include_once("./templates/footer.php")
?>