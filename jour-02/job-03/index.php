<?php

require '../connexion_db.php';

function insert_student(string $email, string $fullname, string $gender, DateTime $birthdate, int $gradeId): void {
    global $pdo;
    
    $sql = 'INSERT INTO student (email, fullname, gender, birthdate, grade_id) VALUES (:email, :fullname, :gender, :birthdate, :gradeId)';
    
    try {
        $stmt = $pdo->prepare($sql);

      $formatedDate = $birthdate->format('Y-m-d');

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':birthdate', $formatedDate);
        $stmt->bindParam(':gradeId', $gradeId);
        
        $stmt->execute();
        echo "Elève ajouté avec succès !";
    } catch(PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['input-email'] ?? '';
    $fullname = $_POST['input-fullname'] ?? '';
    $gender = $_POST['input-gender'] ?? '';
    $birthdate = new DateTime($_POST['input-birthdate']);
    $gradeId = (int)$_POST['input-grade_id'];

    var_dump($email, $fullname, $gender, $birthdate->format('Y-m-d'), $gradeId);

    insert_student($email, $fullname, $gender, $birthdate, $gradeId);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter un nouvel élève</title>
</head>
<body>
  <form method="post">
    <h1>Veuillez ajouter un nouvel élève:</h1>
    <input type="email" name="input-email" placeholder="email" required>
    <input type="text" name="input-fullname" placeholder="full name" required>
    <select name="input-gender" id="genre" required>
      <option value="male">male</option>
      <option value="female">female</option>
    </select>
    <input type="date" name="input-birthdate" required>
    <input type="number" name="input-grade_id" placeholder="grade id" required>
    <button type="submit">ajouter</button>
  </form>
</body>
</html>
