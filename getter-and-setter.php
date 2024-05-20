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
    public function __construct(int $id, string $fullName, int $birthYear)
    {
        $this->id = $id;
        $this->birthYear = $birthYear;
        $this->fullName = $fullName;
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

$fatima = new Student(21, "Fatima Kurban Sheikh", 2001);

$fatima->setBirthYear(2005);

echo $fatima->intro();

?>