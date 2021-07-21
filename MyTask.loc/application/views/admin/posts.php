<form action="" method="get">
    <input type="text" name="user_id">
    <input type="submit" value="Submit">
</form>

<div>
    <?php 
        foreach($posts as $post) {
            ?>
            <h1><?= $post['title'] ?></h1>
            <i>User Id = <?= $post['user_id'] ?></i>
            <p><?= $post['description'] ?></p>
            <img src="<?= $post['img_dir'] ?>" alt="">
            <hr>
            <?php
        }
    ?>
</div>