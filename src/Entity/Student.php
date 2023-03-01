<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

class Student
{

    
    private $nsc;

    private $email;

    
    private $classroom;


    public function getNsc(): ?string
    {
        return $this->nsc;
    }

    public function setNsc(string $nsc): self
    {
        $this->nsc = $nsc;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getClassroom(): ?Classroom
    {
        return $this->classroom;
    }

    public function setClassroom(?Classroom $classroom): self
    {
        $this->classroom = $classroom;

        return $this;
    }
}