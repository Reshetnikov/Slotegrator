<?php
namespace Ticket;

class TicketDbRepository implements TicketRepositoryInterface
{
    public function load($ticketID)
    {
        return Ticket::find()->where(['id' => $ticketID])->one();
    }
    public function save($ticket){/*...*/}
    public function update($ticket){/*...*/}
    public function delete($ticket){/*...*/}
}