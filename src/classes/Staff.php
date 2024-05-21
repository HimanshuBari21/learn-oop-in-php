<?php

namespace Oop\classes;

class Staff
{
    private $persons = [];

    public function add(Person $person)
    {
        $this->persons[] = $person;
    }

    public function getPersons()
    {
        return $this->persons;
    }
}
