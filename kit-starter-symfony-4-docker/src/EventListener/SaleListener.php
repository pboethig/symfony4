<?php

namespace App\EventListener;

use App\Event\SaleEvent;
use App\Entity\Ticket;
use Doctrine\ORM\EntityManagerInterface;

class SaleListener
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function onSaleCreated(SaleEvent $event)
    {
        $movie = $event->getMovie();
        $numTickets = $event->getNumTickets();
        $seats = $movie->findNextSeats($numTickets);
        for ($i = 0; $i < $numTickets; $i++) {
            $ticket = new Ticket();
            $ticket->setMovie($movie);
            $ticket->setSale($event->getSale());
            $ticket->setRow($seats[$i]['row']);
            $ticket->setSeat($seats[$i]['seat']);
            $this->em->persist($ticket);
        }
    }
}