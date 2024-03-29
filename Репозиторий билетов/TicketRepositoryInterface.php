<?php
namespace Ticket;

interface TicketRepositoryInterface
{
    public function load($ticketID);
    public function save($ticket);
    public function update($ticket);
    public function delete($ticket);
}