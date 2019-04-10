<h1>BIENVENUE SUR LE DASHBOARD ADMIN</h1>
<div class="messageComment">
    <span><?php
        //var_dump($comments);
        //var_dump($message);
        if(isset($message)){
            echo $message;
        }
    ?>
    </span>
</div>
<h3>Commentaire signalé</h3>


<table class="table table-striped bg-danger">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">id du post</th>
            <th scope="col">Contenu</th>
            <th scope="col">Auteur</th>
            <th scope="col">Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($comments as $comment):
            var_dump($comment);

            if ($comment['signalComment'] == 1) {
                ?>    
                <tr class="table-danger">
                    <th scope="row"><?= $comment['id']; ?></th>
                    <td><?= $comment['id_post']; ?></td>
                    <td><?= $comment['content']; ?></td>
                    <td><?= $comment['author']; ?></td>
                    <td><?= $comment['date_comment']; ?></td>
                    <td>
                        <a class="btn btn-secondary modifComment" href="index.php?p=admin.Comments.edit&id=<?=$comment['id']; ?>" role="button">Modifier</a>
                    </td>
                    <td>
                        <a class="btn btn-secondary deleteComment" href="index.php?p=admin.Comments.delete&id=<?=$comment['id']; ?>" role="button">Supprimer</a>
                    </td>
                </tr> 
                <?php
            }
            ?>

        <?php endforeach; ?>

    </tbody>
</table>

<h3>Liste des commentaires</h3>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">id du post</th>
            <th scope="col">Contenu</th>
            <th scope="col">Auteur</th>
            <th scope="col">Date</th>
            <th scope="col">Commentaire signaler</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($comments as $comment):
            //var_dump($comment);
            ?>

            <tr>
                <th scope="row"><?= $comment['id']; ?></th>
                <td><?= $comment['id_post']; ?></td>
                <td><?= $comment['content']; ?></td>
                <td><?= $comment['author']; ?></td>
                <td><?= $comment['date_comment']; ?></td>
                <td><?php
        if ($comment['signalComment'] == '1') {
            echo'<span class="commentSignal">Le commentaire à était signalé</span>';
        } else {
            echo'<span class="commentApproved">Le commentaire à était approuvé</span>';
        }
            ?>
                </td>
                <td><a class="btn btn-secondary" href="index.php?p=admin.Comments.edit&id=<?= $comment['id']; ?>" role="button">Modifier</a></td>
                <td><a class="btn btn-secondary deleteComment" href="index.php?p=admin.Comments.delete&id=<?= $comment['id']; ?>" role="button">Supprimer</a></td>

            </tr>   
        <?php endforeach; ?>

    </tbody>
</table>

