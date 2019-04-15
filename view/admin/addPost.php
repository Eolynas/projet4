<h1>Ajouter un articles</h1>

<form class="formEdit" method="post" action="index.php?p=admin.posts.addPost" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titleForm">titre</label>
        <input type="text" class="form-control" id="titleForm" name="title">
        <label for="authorForm">Auteur</label>
        <input type="text" class="form-control" id="authorForm" name="author">
    </div>
    <div class="form-group">
        <label for="chapterForm">Chapitre</label>
        <select class="form-control" id="chapterForm" name="category">
            <?php
            foreach ($list as $category):
                //var_dump($list);
                ?>
            <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>

            <?php endforeach; ?>

        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
    </div>
    <div class="form-group">
        <label for="tinymce">Article</label>
        <textarea class="form-control" id="tinymce" rows="10" name="content"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Ajouter l'article</button>
</form>