<title>Privacy</title>

<?php

class Student
{

    // properties
    // canbe changed by class
    private $id;
    private $birthYear;
    private bool $isSuspended;

    // can be chnaged globally
    public $fullName;

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

    public function setBirthYear($birthYear)
    {
        if (date("Y") - $birthYear < 4) {
            throw new Exception("Age should not be less than 4 for a Student.");
        } else {
            $this->birthYear = $birthYear;
        }
    }

    public function getBirthYear()
    {
        return $this->birthYear;
    }
}

// declared students
$peter = new Student(45, "Peter John D'suza", 2001);
echo $peter->intro();

echo "<br />";

$erika = new Student(69, "Erika Gary May", 2003);
echo $erika->intro();

// chnages in properties
echo var_dump($erika);

echo $erika->getBirthYear(); //public property accessible

try {
    echo $erika->birthYear; // private property will cause error
} catch (\Throwable $th) {
    echo $th;
}

?>