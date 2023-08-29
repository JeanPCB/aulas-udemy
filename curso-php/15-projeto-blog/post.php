<?php
    require_once("./templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;
        $relPosts = [];

        foreach ($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            } else {
                $relPosts[] = $post;
            }
        }
    }
?>
    <main id="single-post-main">
        <section id="post-container">
            <div id="post-head">
                <h1><?= $currentPost['title'] ?></h1>
                <p><i><?= $currentPost['description'] ?></i></p>
            </div>  

            <div id="post-body">
                <img src="<?= $BASE_URL . "img/" . $currentPost['img'] ?>" alt="<?= $currentPost['alt'] ?>">  
                
                <div>
                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti sequi eius totam saepe cupiditate error autem magni sapiente debitis laboriosam vero aliquid fugit asperiores facere culpa, dolorem enim, eos corrupti.
                    Quod tenetur unde hic odit harum dolore, provident nam sed alias adipisci nulla ab debitis officiis excepturi assumenda! Ea itaque totam nam accusamus dicta unde odit aliquid, doloribus eligendi in!
                    Nisi voluptate soluta recusandae voluptatibus sit commodi magnam ipsam ut ratione accusantium, eligendi, minus vero vel rerum aperiam? Nemo quaerat atque repellat nostrum nesciunt aliquid perspiciatis ipsum hic facere voluptate.
                    Qui quisquam cupiditate molestiae eum distinctio hic sunt numquam accusamus alias, ipsa dicta, facere libero modi molestias mollitia repellat illo praesentium. Commodi porro qui maxime quos fugit odio aspernatur aliquam!
                    Possimus saepe eaque quo deleniti porro pariatur aliquam itaque omnis maiores? Inventore facilis atque deleniti id illum delectus consequatur, non error, eos voluptate quisquam aliquid asperiores dolore quas eaque deserunt!
                    Perferendis quo vitae, voluptatem ratione autem ipsum quisquam tempore, deserunt repellat obcaecati mollitia, tenetur aperiam eveniet porro. Et perspiciatis voluptatem eum sequi provident, cumque at doloremque, quidem autem fugit qui.
                    Facere beatae eligendi animi aut minus quidem itaque ullam dolorem nihil totam adipisci unde deserunt odit voluptate, doloribus nam exercitationem sapiente incidunt dignissimos iure optio consequuntur consequatur architecto qui. Sed?
                    Repellat suscipit cupiditate ut unde eligendi voluptatibus laboriosam assumenda officiis vitae consectetur quod nemo possimus quos iste quis tempore, accusantium dolorum porro. Accusantium praesentium corporis nostrum doloribus at iste cumque?
                    Harum reprehenderit necessitatibus ratione temporibus ex voluptates soluta nostrum velit inventore nihil fugit, atque quo aut numquam. Adipisci expedita incidunt temporibus saepe eligendi iusto voluptatum nobis, soluta, ullam, a laboriosam.
                    Sequi repellat optio iste quas iusto. Distinctio iusto iste doloremque quae fuga amet non, perspiciatis debitis sunt ipsum provident dicta possimus reprehenderit similique, dolorem sapiente recusandae in ut dignissimos voluptates!</p>
                </div>

                <div>
                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti sequi eius totam saepe cupiditate error autem magni sapiente debitis laboriosam vero aliquid fugit asperiores facere culpa, dolorem enim, eos corrupti.
                    Quod tenetur unde hic odit harum dolore, provident nam sed alias adipisci nulla ab debitis officiis excepturi assumenda! Ea itaque totam nam accusamus dicta unde odit aliquid, doloribus eligendi in!
                    Nisi voluptate soluta recusandae voluptatibus sit commodi magnam ipsam ut ratione accusantium, eligendi, minus vero vel rerum aperiam? Nemo quaerat atque repellat nostrum nesciunt aliquid perspiciatis ipsum hic facere voluptate.
                    Qui quisquam cupiditate molestiae eum distinctio hic sunt numquam accusamus alias, ipsa dicta, facere libero modi molestias mollitia repellat illo praesentium. Commodi porro qui maxime quos fugit odio aspernatur aliquam!
                    Possimus saepe eaque quo deleniti porro pariatur aliquam itaque omnis maiores? Inventore facilis atque deleniti id illum delectus consequatur, non error, eos voluptate quisquam aliquid asperiores dolore quas eaque deserunt!
                    Perferendis quo vitae, voluptatem ratione autem ipsum quisquam tempore, deserunt repellat obcaecati mollitia, tenetur aperiam eveniet porro. Et perspiciatis voluptatem eum sequi provident, cumque at doloremque, quidem autem fugit qui.
                    Facere beatae eligendi animi aut minus quidem itaque ullam dolorem nihil totam adipisci unde deserunt odit voluptate, doloribus nam exercitationem sapiente incidunt dignissimos iure optio consequuntur consequatur architecto qui. Sed?
                    Repellat suscipit cupiditate ut unde eligendi voluptatibus laboriosam assumenda officiis vitae consectetur quod nemo possimus quos iste quis tempore, accusantium dolorum porro. Accusantium praesentium corporis nostrum doloribus at iste cumque?
                    Harum reprehenderit necessitatibus ratione temporibus ex voluptates soluta nostrum velit inventore nihil fugit, atque quo aut numquam. Adipisci expedita incidunt temporibus saepe eligendi iusto voluptatum nobis, soluta, ullam, a laboriosam.
                    Sequi repellat optio iste quas iusto. Distinctio iusto iste doloremque quae fuga amet non, perspiciatis debitis sunt ipsum provident dicta possimus reprehenderit similique, dolorem sapiente recusandae in ut dignissimos voluptates!</p>
                </div>

                <div>
                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti sequi eius totam saepe cupiditate error autem magni sapiente debitis laboriosam vero aliquid fugit asperiores facere culpa, dolorem enim, eos corrupti.
                    Quod tenetur unde hic odit harum dolore, provident nam sed alias adipisci nulla ab debitis officiis excepturi assumenda! Ea itaque totam nam accusamus dicta unde odit aliquid, doloribus eligendi in!
                    Nisi voluptate soluta recusandae voluptatibus sit commodi magnam ipsam ut ratione accusantium, eligendi, minus vero vel rerum aperiam? Nemo quaerat atque repellat nostrum nesciunt aliquid perspiciatis ipsum hic facere voluptate.
                    Qui quisquam cupiditate molestiae eum distinctio hic sunt numquam accusamus alias, ipsa dicta, facere libero modi molestias mollitia repellat illo praesentium. Commodi porro qui maxime quos fugit odio aspernatur aliquam!
                    Possimus saepe eaque quo deleniti porro pariatur aliquam itaque omnis maiores? Inventore facilis atque deleniti id illum delectus consequatur, non error, eos voluptate quisquam aliquid asperiores dolore quas eaque deserunt!
                    Perferendis quo vitae, voluptatem ratione autem ipsum quisquam tempore, deserunt repellat obcaecati mollitia, tenetur aperiam eveniet porro. Et perspiciatis voluptatem eum sequi provident, cumque at doloremque, quidem autem fugit qui.
                    Facere beatae eligendi animi aut minus quidem itaque ullam dolorem nihil totam adipisci unde deserunt odit voluptate, doloribus nam exercitationem sapiente incidunt dignissimos iure optio consequuntur consequatur architecto qui. Sed?
                    Repellat suscipit cupiditate ut unde eligendi voluptatibus laboriosam assumenda officiis vitae consectetur quod nemo possimus quos iste quis tempore, accusantium dolorum porro. Accusantium praesentium corporis nostrum doloribus at iste cumque?
                    Harum reprehenderit necessitatibus ratione temporibus ex voluptates soluta nostrum velit inventore nihil fugit, atque quo aut numquam. Adipisci expedita incidunt temporibus saepe eligendi iusto voluptatum nobis, soluta, ullam, a laboriosam.
                    Sequi repellat optio iste quas iusto. Distinctio iusto iste doloremque quae fuga amet non, perspiciatis debitis sunt ipsum provident dicta possimus reprehenderit similique, dolorem sapiente recusandae in ut dignissimos voluptates!</p>
                </div>
            </div>

            <section id="rel-posts">
                <h2>Posts Relacionados:</h2>

                <div id="posts-container">
                    <?php foreach($relPosts as $post): ?>
                        <article class="post-box" onclick="location.href = '<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>'">
                            <img src="./img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                            <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>">
                                <h2 class="post-title"><?= $post['title'] ?></h2>
                            </a>
                            <p class="post-categories">
                                <?php foreach($post['tags'] as $category): ?>
                                    <?php 
                                        echo $category; 
                                        if($category != end($post['tags'])): 
                                    ?>
                                    <?= " | "; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>
        </section>

        <aside>
            <div class="aside-tags">
                <h2>Tags</h2>
                <ul>
                    <?php foreach($currentPost['tags'] as $tag): ?>
                        <li><a href=""><?= $tag ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="aside-tags">
                <h2>Categorias</h2>
                <ul>
                    <?php foreach($categories as $category): ?>
                        <li><a href=""><?= $category ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>
    </main>
    

<?php
    include_once("./templates/footer.php")
?>