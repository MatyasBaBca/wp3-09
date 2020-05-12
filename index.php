<?php
require_once 'classes' . DIRECTORY_SEPARATOR . 'Computer.php'

?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
    <?php

$computers[0] = new Computer(
    16,
    "nVidia 2020TI",
    4.5,
    512,
    'BigBen case',
    'Magic boardKey PL',
    'Stupid mouse Wireless',
    27.6,
    'MSI SuperStepMom Socket-666',
    'HyperX Cloud 3XXL Wireless'
);

$computers[1] = new Computer(
    16,
    "nVidia 2069TX",
    4.6,
    555,
    'BigBen kejs',
    'Stupid boardKey PL',
    'Magic mouse Wireless',
    27.6,
    'MSI SuperStepDad 69XXL',
    'HyperX Cloud 8XXD Wireless'
);

$computers[2] = new Computer(
    20,
    "potato 15",
    4.9,
    200,
    'Low case',
    'wooden keyboard',
    'stone mouse',
    15.6,
    'MYS MotherBoard-Wooden edition',
    'mobile headphones'
);

$employees[0] = new Employee(
    "Matyáš",
    "Babiák",
    "27.1.2002",
    "male",
    "student",
    $computers[1]
);

$employees[1] = new Employee(
    "Adam",
    "Pojer",
    "22.2.2222",
    "male",
    "student",
    $computers[1]
);

$employees[2] = new Employee(
    "Martin",
    "Kokeš",
    "1.1.1988",
    "male",
    "teacher",
    $computers[2]
);


echo "<h2>Zaměstnanci</h2>";
    echo $employee[0]->getFirstname()."<br>";
    echo $employee[0]->getLastname()."<br>";
    echo $employee[0]->getBirthday()."<br>";
    echo $employee[0]->getGender()."<br>";
    echo $employee[0]->getPosition()."<br>";
    echo $myComputers[0]->printSummary()."<br>";

    echo $employee[1]->getFirstname()."<br>";
    echo $employee[1]->getLastname()."<br>";
    echo $employee[1]->getBirthday()."<br>";
    echo $employee[1]->getGender()."<br>";
    echo $employee[1]->getPosition()."<br>";
    echo $myComputers[1]->printSummary()."<br>";

    echo $employee[2]->getFirstname()."<br>";
    echo $employee[2]->getLastname()."<br>";
    echo $employee[2]->getBirthday()."<br>";
    echo $employee[2]->getGender()."<br>";
    echo $employee[2]->getPosition()."<br>";
    echo $myComputers[2]->printSummary()."<br>";



    ?>
</body>
</html>