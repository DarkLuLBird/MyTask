
<div id="form">
    <form action="" method="POST" enctype="multipart/form-data" id="ajax_form">
        <input type="text" name="title" placeholder="Title" id="title"></br>
        <textarea name="description" placeholder="Description" cols="30" rows="10"></textarea></br>
        <input type="file" name="image"></br>
        <button type="submit" class="ajax-btn">Submit</button>
    </form>
</div>

<div id="posts">
    <?php 
        foreach($posts as $post) {
            ?>
            <h2><?= $post['title'] ?></h2>
            <p><?= $post['description'] ?></p>
            <img src="<?= $post['img_dir'] ?>" alt="">
            <hr>
            <?php
        }
    ?>
</div>