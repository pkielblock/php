<?php

namespace App\Model;

use PDO;

class ProductDao
{
    public function create(Product $product): void
    {
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';

        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1, $product->getName());
        $stmt->bindValue(2, $product->getDescription());
        $stmt->execute();

        echo "Product Created" . PHP_EOL;
    }

    public function read(): array
    {
        $sql = 'SELECT * FROM produtos';

        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->execute();

        if ($stmt->rowCount() > 0)
        {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
            return [];
        }
    }

    public function update(Product $product): void
    {
        $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1, $product->getName());
        $stmt->bindValue(2, $product->getDescription());
        $stmt->bindValue(3, $product->getId());
        $stmt->execute();

        echo "Product Updated" . PHP_EOL;
    }

    public function delete(int $id): void
    {
        $sql = 'DELETE FROM produtos WHERE id = ?';

        $stmt = Connection::getConnection()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        echo "Product Deleted" . PHP_EOL;
    }

}