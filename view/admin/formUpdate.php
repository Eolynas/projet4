<h1>Ajouter une amélioration</h1>


<form class="formEdit" method="post" action="index.php?p=admin.Update.insertUpdate">
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Titre</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="title"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Avancement</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" name="progress"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="content"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter l'amélioration</button>
</form>