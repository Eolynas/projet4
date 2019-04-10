<h1>Ajouter une image</h1>


<form class="formEdit" method="post" action="index.php?p=admin.images.insertImage" enctype="multipart/form-data">
    <div class="form-group">
        <label for="icone">Image</label><br />
        <input type="file" name="image" id="image" /><br />
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Titre</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="title"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="alt"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>