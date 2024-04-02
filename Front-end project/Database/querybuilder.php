<?php

namespace App\Database;

use App\Models\Task;
use PDO, PDOException;

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function allUsers()
    {
        $stmt = $this->pdo->prepare("select * from users");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function findUser($username, $password)
    {
        try {
            $stmt = $this->pdo->prepare("SELECT id, username, password FROM users WHERE username = '$username'");
            $stmt->execute();
            if ($stmt->rowCount() === 1) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user['password'] === $password) {
                    return 1;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function storeUser($username, $password)
    {
        if ($this->findUser($username, $password)) {
            header('location: /login');
            die();
        }
        $data = [
            'username' => htmlspecialchars($username),
            'password' => htmlspecialchars($password)
        ];

        $stmt = "INSERT INTO users (username, password) VALUES (:username, :password)";
        try {
            return $this->pdo->prepare($stmt)->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function storeMessage($params)
    {
        $stmt = "INSERT INTO messages (fname, lname, subject, body) 
        VALUES (:fname, :lname, :subject, :body)";

        extract($params);

        $data = [
            'fname' => htmlspecialchars($fname),
            'lname' => htmlspecialchars($lname),
            'subject' => htmlspecialchars($subject),
            'body' => htmlspecialchars($body)
        ];

        try {
            return $this->pdo->prepare($stmt)->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function storeEmail($email)
    {
        $stmt = "INSERT INTO emails (email) 
        VALUES (:email)";

        $data = [
            'email' => htmlspecialchars($email)
        ];

        try {
            return $this->pdo->prepare($stmt)->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
