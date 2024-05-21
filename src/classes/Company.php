<?php

namespace Oop\classes;

class Company
{

    protected $staff;

    function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function hire(Person $person)
    {
        $this->staff->add($person);
    }

    public function getStaff()
    {
        return $this->staff;
    }
}
