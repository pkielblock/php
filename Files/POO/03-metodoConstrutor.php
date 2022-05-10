<?php
//O método contstrutor é automaticamente inicializado quando instanciamos uma classe.

class Login
{
    private string $email;
    private string $senha;
    private string $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

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

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function logar(): void
    {
        if ($this->email == "teste@teste.com" && $this->senha == "123456") {
            echo "Logado com sucesso!" . PHP_EOL;
        } else {
            echo "Dados Inválidos!" . PHP_EOL;
        }
    }
}

$logar = new Login("teste@teste.com", "123456", "Pedro");
echo $logar->getNome() . PHP_EOL;
$logar->logar();