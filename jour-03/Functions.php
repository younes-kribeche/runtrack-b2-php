<?php

require('database.php');

class Functions {

    public function findOneStudent(int $id): ?array
    {
        global $pdo;
        $sql = "SELECT fullname, email FROM student WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (PDOException $e) {
            echo "Erreur lors de la recherche de l'utilisateur : " . $e->getMessage();
            return null;
        }
    }
    
    public function findOneGrade(int $id): ?array
    {
        global $pdo;
        $sql = "SELECT name FROM room WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            $room = $stmt->fetch(PDO::FETCH_ASSOC);
            return $room;
        } catch (PDOException $e) {
            echo "Erreur lors de la recherche du niveau : " . $e->getMessage();
            return null;
        }
    }

    public function findOneStudent(int $id): ?array
    {
        global $pdo;
        $sql = "SELECT fullname, email FROM student WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (PDOException $e) {
            echo "Erreur lors de la recherche de l'utilisateur : " . $e->getMessage();
            return null;
        }
    }

    public function findOneStudent(int $id): ?array
    {
        global $pdo;
        $sql = "SELECT fullname, email FROM student WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        try {
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (PDOException $e) {
            echo "Erreur lors de la recherche de l'utilisateur : " . $e->getMessage();
            return null;
        }
    }
}
?>
