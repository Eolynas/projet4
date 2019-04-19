<?php $nav_en_cours = 'addForm'; ?>

<h1>Ajouter un article</h1>

<form class="formEdit" method="post" action="index.php?p=admin.posts.addPost" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titleForm">titre</label>
        <input type="text" class="form-control" id="titleForm" name="title">
        <!--<label for="authorForm">Auteur</label>
        <input type="text" class="form-control" id="authorForm" name="author">-->
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
    <!--<div class="form-group">
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
    </div>-->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Image
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Titre</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"
                                  name="titleImg"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">description</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="alt"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="tinymce">Article</label>
        <textarea class="form-control" id="tinymce" rows="10" name="content"></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Ajouter l'article</button>
</form

