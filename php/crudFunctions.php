<?php
include 'connectionDB.php';

function insertUserForm( $nameC, $email, $pathology, $observations){
    $conexion = conectarDB();
    if($conexion){
        try {
        $sqlInUserForm = $conexion->prepare("INSERT INTO userForm ( nameC, email, pathology,  observations) 
                        VALUES ( :nameC,  :email, :pathology,  :observations)");
    
       
        $sqlInUserForm->bindParam(':nameC', $nameC);
        
        $sqlInUserForm->bindParam(':email', $email);

        $sqlInUserForm->bindParam(':pathology', $pathology);
       
        $sqlInUserForm->bindParam(':observations', $observations);
    
        
        $sqlInUserForm->execute();

        return true;
        } catch(PDOException $error) {
        echo "Error al insertar el registro: " . $error->getMessage();
        return false;
        }
    }
}

function validateLogin($user, $pass) {
    $conexion = conectarDB();
    
    if ($conexion) {
        try {
            $query = "SELECT COUNT(*) AS count FROM user WHERE userName = :user AND userPass = :pass";
            $statement = $conexion->prepare($query);
            $statement->bindParam(':user', $user);
            $statement->bindParam(':pass', $pass);
            $statement->execute();
            
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            $count = $result['count'];
            
            return $count > 0; 
        } catch (PDOException $error) {
            echo "Error al validar el login: " . $error->getMessage();
            return false;
        }
    }
    
    return false;
}

function getlist() {
    $conexion = conectarDB();
    
    if ($conexion) {
        try {
            $query = "SELECT * FROM userForm";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $registros;
        } catch(PDOException $error) {
            echo "Error al listar los registros: " . $error->getMessage();
        }
    }
    
    return false;
}

function deleteUserFormById($id) {
    $conexion = conectarDB();
    
    if ($conexion) {
        try {
            $query = "DELETE FROM userForm WHERE id = :id";
            $statement = $conexion->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            
            return true; 
        } catch(PDOException $error) {
            echo "Error al eliminar el registro: " . $error->getMessage();
        }
    }
    
    return false; 
}

function updateUserFormById( $nameC,  $email, $pathology,  $observations, $id) {
    $conexion = conectarDB();
    
    if ($conexion) {
        try {
            $sql = "UPDATE userForm SET  nameC = :nameC,  email = :email, pathology = :pathology,  observations = :observations WHERE id = :id";
            $statement = $conexion->prepare($sql);
            
            $statement->bindParam(':id', $id);
           
            $statement->bindParam(':nameC', $nameC);
         
            $statement->bindParam(':email', $email);
            $statement->bindParam(':pathology', $pathology);
          
            $statement->bindParam(':observations', $observations);
            
            $statement->execute();
            
            return true; 
        } catch(PDOException $error) {
            echo "Error al actualizar el registro: " . $error->getMessage();
        }
    }
    
    return false; 
}