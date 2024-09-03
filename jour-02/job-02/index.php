<?php

require '../connexion_db.php';

function get_student_by_email(string $email): ?array {
    global $pdo;
    
    $sql = 'SELECT * FROM student WHERE email = :email';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    
    $student = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $student ?: null;
}

$student = null;
if (isset($_GET['input-email-student'])) {
    $student = get_student_by_email($_GET['input-email-student']);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recherche d'un étudiant</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
      text-align: left;
    }
  </style>
</head>
<body>
  <h1>Recherche d'un étudiant via son adresse mail</h1>
  
  <form method="get">
    <label for="email">Entrez l'adresse email de l'étudiant:</label>
    <input type="email" id="email" name="input-email-student" required>
    <button type="submit">Rechercher</button>
  </form>
  
  <?php if ($student): ?>
    <table>
      <thead>
        <tr>
          <?php foreach(array_keys($student) as $column): ?>
            <th><?php echo htmlspecialchars($column); ?></th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php foreach($student as $value): ?>
            <td><?php echo htmlspecialchars($value); ?></td>
          <?php endforeach; ?>
        </tr>
      </tbody>
    </table>
  <?php elseif (isset($_GET['input-email-student'])): ?>
    <p>Aucun étudiant trouvé avec cette adresse email.</p>
  <?php endif; ?>
  
</body>
</html>
