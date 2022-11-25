<?php

// src/Service/TapeService.php
namespace App\Service;

use App\Entity\Tape;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ManagerRegistry;

class TapeService {

        private $em;

        public function __construct(ManagerRegistry $em)
        {
            $this->em = $em;
        }

        public function getTapes() {
            $tapes = $this->em->getRepository(Tape::class)->findAll();

            return array_filter($tapes, function($tape) {
                return !$tape->isAssociate();
            });
        }

        public function getTopLeaks() {
            $leaks = $this->em->getRepository(Tape::class)->findAll();

            $leaks = array_filter($leaks, function($tape) {
                return !$tape->isAssociate() && $tape->getAverageScore() !== 'N/A';
            });

            usort($leaks, function($a, $b) {
                return $b->getAverageScore() <=> $a->getAverageScore();
            });

            return $leaks;
        }

}