<?php

namespace App\Application\Handlers;

interface DbHandlerInterface
{
    public function getConnection();
}