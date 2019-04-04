<?php
/**
 * Created by PhpStorm.
 * User: eddyh
 * Date: 03/04/2019
 * Time: 15:52
 */

namespace App\Table;


class UserTable extends Table
{
    protected $table = 'users';

    public function inserUser()
    {
        $db = $this->pdo;

        // Vérification de la validité des informations

        // Hachage du mot de passe

        // Insertion

    }

    public function loginUser($login, $password) {
        $db = $this->pdo;

        $req = $db->prepare('SELECT * FROM users WHERE login = :login');
        $req->execute(array(
            'login' => $login));
        //var_dump($req);
        $res = $req->fetch();
        //var_dump($res);
        $isPasswordCorrect = password_verify($_POST['password'], $res['password']);
        if (!$res){
            echo 'Identifiant ou mot de passe incorrect';
        }
        else {
            if ($isPasswordCorrect){
                /*session_start();*/
                $_SESSION['id'] = $res['id'];
                $_SESSION['login'] = $res['login'];
                $_SESSION['email'] = $res['email'];
                $_SESSION['name'] = $res['name'];
                $_SESSION['surname'] = $res['surname'];
                $_SESSION['date_create'] = $res['date_create'];
                $_SESSION['power'] = $res['power'];
                return $res;
            } else {
                echo 'Identifiant ou mot de passe incorrect';
            }
        }
    }

}