<?php
namespace Ticket;

use Exception;

class TicketRepositoryFactory
{
    const API = 'api';
    const DB = 'db';

    /**
     * @param string $type
     * @return TicketRepositoryInterface
     * @throws Exception
     */
    public function getTicketRepository(string $type): TicketRepositoryInterface
    {
        if (self::API === $type) {
            return new TicketApiRepository();
        } else if (self::DB === $type) {
            return new TicketDbRepository();
        }
        throw new Exception('invalid $type');
    }
}