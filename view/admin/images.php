<?php $nav_en_cours = 'images'; ?>

<h1> Listes des images </h1>

<a class="btn btn-secondary" href="index.php?p=admin.images.formImage" role="button">Ajouter
    une image</a>

<?php
    if (!empty($message)){
        ?>
        <p>Votre message à était supprimer</p>
        <?php
    }

?>

<div class='gallery'>
    <?php
    foreach ($images as $image):
        //var_dump($image);
        ?>
        <!--<a class="imagesGallery" data-toggle="modal" data-target="#exampleModal">
            <img class=""
                 src="public/img/<?/*= $image['up_name']; */?>"
                 alt="<?/*= $image['up_alt']; */?>">
        </a>-->
        <div class="item col-lg-3 col-sm-4 col-xs-6">

            <div class="btn06">
                <img src="public/img/<?= $image['up_name']; ?>" alt="<?= $image['up_alt']; ?>">
                <div class="ovrly"></div>
                <div class="buttons">
                    <a href="#" class="fa fa-search"></a>
                    <a href="#" class="fa fa-times" data-toggle="modal" data-target="#imageModal<?= $image['id'];?>"></a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="imageModal<?= $image['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><?= $image['up_name']; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Ete vous sur de vouloir supprimer l'image ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <a type="button" class="btn btn-primary" href="index.php?p=admin.images.delete&id=<?=$image['id']; ?>">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



