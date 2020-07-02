<?php

namespace App\Application\Actions;

use App\Application\Handlers\DbHandlerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Log\LoggerInterface;

class AddProductsAction extends Action
{
    /** @var \PDO $connection */
    private $connection;

    public function __construct(LoggerInterface $logger, DbHandlerInterface $dbHandlerInterface)
    {
        parent::__construct($logger);
        $this->connection = $dbHandlerInterface->getConnection();
    }
    /**
     * @param Request  $request
     * @param Response $response
     */
    public function action(){

        if (isset($_POST['value'])){
            $newProduct = array(
                "itemname" => $_POST['itemname'],
                "quantity" => $_POST['quantity'],
                "manufacturer" => $_POST['manufacturer'],
                "about" => $_POST['about'],
               "brand_id" => $_POST['brands']
            );
            $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "products",
                implode(", ", array_keys($newProduct)),
                ":" . implode(", :", array_keys($newProduct))
            );
    
            $statement = $this->connection->prepare($sql);
            $statement->execute($newProduct);
            $this->logger->info("A product was added successfully");
            $query = $this->connection->prepare(" SELECT * FROM products");
            $query->execute();
            $addproducts = $query->fetchAll();
            return $this->respondWithData($addproducts);

    }
}
}