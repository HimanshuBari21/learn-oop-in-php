<title>Namespaces and Autoloading</title>
<?php

use Oop\classes\Person;
use Oop\classes\Staff;
use Oop\classes\Company;

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
    echo "<br />";
}

?>