<?php

require VIEWS.'/incs/header.php' ?>
<?php //dump($posts); ?><!-- -->
    <main class="main py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php foreach ($posts as $post) : ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title"><a href="post/<?=$post['slug'] ?>"><?=$post['title'] ?></a></h5>
                                <p class="card-text"><?=$post['desc'] ?></p>
                                <a href="post/<?=$post['slug'] ?>">Go somewhere</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php require VIEWS.'/incs/sidebar.php' ?>
            </div>
        </div>
    </main>

<?php require VIEWS.'/incs/footer.php' ?>
</div>


<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>