<title>Interdependent Class</title>
<?php


class Person
{
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

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

$himanshu = new Person('Himanshu Bari');
$jerry = new Person('Jerry Patel');

$itDept = new Staff;

$itDept->add($himanshu);

$bsf = new Company($itDept);
$bsf->hire($jerry);

var_dump($bsf);
var_dump($bsf->getStaff());
var_dump($bsf->getStaff()->getPersons());

foreach ($bsf->getStaff()->getPersons() as $p) {
    echo $p->getName();
}

?>