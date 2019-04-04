<?php
/**
 * Created by PhpStorm.
 * User: eddyh
 * Date: 03/04/2019
 * Time: 15:46
 */

// TODO faire la page de login

?>

        <form class="formEdit" method="post" action="index.php?p=users.login">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Pseudo">
            <input type="text" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
            <input type="submit" class="fadeIn fourth" value="Connexion">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">Mot de passe oublié?(indisponible)</a>
        </div>
