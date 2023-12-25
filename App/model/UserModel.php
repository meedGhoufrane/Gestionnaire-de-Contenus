<?php

namespace App\Models;

use App\Config\Connection;


use PDO;

class UserModel extends Connection

{

    public function getUsers()
    {
        $conn = Connection::getConn();
        $stmt = $conn->prepare("SELECT * FROM user");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insertUser($data)   
    {
        $conn = Connection::getConn();
    
      
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $stmt = $conn->prepare("INSERT INTO `user` (mame) VALUES ($placeholders)");
    
       
        foreach ($data as $index => $value) {
            $stmt->bindValue(($index + 1), $value);  
        }
    
      
        $success = $stmt->execute();
    
      
        if ($success) {
            return true; 
        } else {
         
            return false; 
        }
    }

   
    public function getUserById($id) {
        $conn = Connection::getConn();
        $query = $conn->prepare("SELECT * FROM user WHERE id = :id");
        $query->execute(['id' => $id]);
        return $query->fetch();
    }



    public function updateUser($userId, $userData) {
        $conn = Connection::getConn();
        $query = $conn->prepare("UPDATE user SET mame = :name WHERE id = :id");
        return $query->execute(['name' => $userData['name'], 'id' => $userId]);
    }




    public function deleteUser($id)
{  
     //for change string to integer
    $conn = Connection::getConn();
    $stmt = $conn->prepare("DELETE FROM `user` WHERE id = :id");
    
    
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    $success = $stmt->execute();
    
    if ($success) {
        return true; 
    } else {
       
        return false; 
    }
}

}