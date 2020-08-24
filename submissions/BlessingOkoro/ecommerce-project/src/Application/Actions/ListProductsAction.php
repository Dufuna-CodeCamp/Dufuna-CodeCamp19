<?php

namespace App\Application\Actions;

use App\Application\Handlers\DbHandlerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Log\LoggerInterface;

class ListProductsAction extends Action
{
    /** @var \PDO $connection */
    private $connection;

    public function __construct(LoggerInterface $logger, DbHandlerInterface $dbHandlerInterface)
    {
        parent::__construct($logger);
        $this->connection = $dbHandlerInterface->getConnection();
    }
    /**
     * @return Response
     */
    protected function action(): Response
    {
        $query = $this->connection->prepare(" SELECT * FROM products");
        $query->execute();
        $frozen_fresh = $query->fetchAll();
        $this->logger->info("products list was viewed.");
        return $this->respondWithData($frozen_fresh);
    }
} 