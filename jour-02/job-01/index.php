<?php

require '../connexion_db.php';

function get_all_students(): array {
    global $pdo;
    
    $sql = 'SELECT * FROM student';
    $stmt = $pdo->query($sql);
    
    $students = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $students;
}

$students = get_all_students();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des étudiants</title>
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
  <h1>Liste des etudiants</h1>
  <table>
    <thead>
      <tr>
        <?php if(!empty($students)): ?>
          <?php foreach(array_keys($students[0]) as $column): ?>
            <th><?php echo htmlspecialchars($column); ?></th>
          <?php endforeach; ?>
        <?php endif; ?>
      </tr>
    </thead>
    <tbody>
      <?php foreach($students as $student): ?>
        <tr>
          <?php foreach($student as $value): ?>
            <td><?php echo htmlspecialchars($value); ?></td>
          <?php endforeach; ?>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
