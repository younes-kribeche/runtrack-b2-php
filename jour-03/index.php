<?php

require('database.php');
require('Functions.php');
require('class/Floor.php');
require('class/Grade.php');
require('class/Room.php');
require('class/Student.php');

$student1 = new Student(
  1,
  1,
  "email@email.com",
  "Terry Cristellini",
  new DateTime("1990-01-18"),
  "male"
);

$student2 = new Student();

$grade1 = new Grade(
  1,
  8,
  "Bachelor 1",
  new DateTime("2023-01-09")
);

$grade2 = new Grade();

$room1 = new Room(
  1,
  1,
  "RDC Food and Drinks",
  90
);

$room2 = new Room();

$floor1 = new Floor(
  1,
  "Rez-de-chaussée",
  0
);

$floor2 = new Floor();

// Appel de la méthode findOneStudent sur une instance de Functions
$functions = new Functions();
$student = $functions->findOneStudent(30);
if ($student) {
    echo "Nom d'utilisateur : " . htmlspecialchars($student['fullname']) . "<br>";
    echo "Email : " . htmlspecialchars($student['email']);
} else {
    echo "Aucun utilisateur trouvé.";
}

$student = $functions->findOneStudent(30);
if ($student) {
    echo "Classe: " . htmlspecialchars($student['fullname']) . "<br>";
    echo "Email : " . htmlspecialchars($student['email']);
} else {
    echo "Aucun utilisateur trouvé.";
}
?>
