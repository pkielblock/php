<?php

class Login
{
    public static string $user;

    public static function verificaLogin(): void
    {
        echo "O Usuário " . self::$user . " está logado!" . PHP_EOL;
    }

    public function sairSistema(): void
    {
        echo "O Usuário " . self::$user . " deslogou!" . PHP_EOL;
    }
}

//Acessando atributos e métodos sem instanciar uma classe.
Login::$user = "admin";
Login::verificaLogin();

$login = new Login();
$login->sairSistema();