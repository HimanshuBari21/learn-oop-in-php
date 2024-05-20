<title>Basics</title>

<?php

class Student
{

    // properties
    public $id;
    public $birthYear;
    public $fullName;
    public bool $isSuspended;

    // contructor
    public function __construct(int $id, string $fullName, int $birthYear, bool $isSuspended = false)
    {
        $this->id = $id;
        $this->birthYear = $birthYear;
        $this->fullName = $fullName;
        $this->isSuspended = $isSuspended;
    }

    // functions/methods
    public function intro()
    {
        return "Hey! My name is " . $this->fullName . " and I am approx " . date('Y') - $this->birthYear;
    }

    public function suspend()
    {
        $this->isSuspended = true;
    }
}

// declared students
$rahul = new Student(45, "Rahul Shyam Verma", 2001);
echo $rahul->intro();

echo "<br />";

$pari = new Student(69, "Pari Shah Patel", 2003);
echo $pari->intro();

// chnages in properties fater
echo var_dump($pari);

$pari->suspend();
$pari->fullName = "Pari Rajesh Patil";

echo var_dump($pari);

?>