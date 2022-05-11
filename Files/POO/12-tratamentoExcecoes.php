<?php

class Newsletter
{
    /**
     * @throws Exception
     */
    public function cadastrarEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("Este email é inválido", 1);
        }
        else
        {
            echo "Email cadastrado com sucesso!" ;
        }
    }
}

$newsletter = new Newsletter();

try {
    $newsletter->cadastrarEmail("teste()@teste.com");
} catch (Exception $exception) {
    echo "Mensagem: " . $exception->getMessage() . PHP_EOL;
    echo "Código: " . $exception->getCode() . PHP_EOL;
    echo "Arquivo: " . $exception->getFile() . PHP_EOL;
    echo "Linha: " . $exception->getLine() . PHP_EOL;
}
