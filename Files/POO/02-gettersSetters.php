<?php

class Login
{
    private string $email;
    private string $senha;

    public function setEmail($email): void
    {
        $emailFiltrado = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $emailFiltrado;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setSenha($senha): void
    {
        $this->senha = $senha;
    }

    public function getSenha(): string
    {
        return $this->senha;
    }

    public function logar(): void
    {
        if ($this->email == "teste@teste.com" && $this->senha == "123456") {
            echo "Logado com sucesso!" . PHP_EOL;
        } else  {
            echo "Dados Inválidos!" . PHP_EOL;
        }
    }
}

$logar = new Login();
$logar->setEmail("teste()@teste.com");
echo $logar->getEmail() . PHP_EOL;

$logar->setSenha("123456");
echo $logar->getSenha() . PHP_EOL;

$logar->logar();