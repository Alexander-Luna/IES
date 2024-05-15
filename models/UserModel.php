<?php
require_once '../config/Conectar.php';
class UserModel extends Conectar
{
    public function getAllUsers()
    {
        try {
            $conexion = parent::Conexion();
            $sql = "SELECT * FROM users";

            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        } catch (PDOException $e) {
            return ("Error al obtener usuarios: " . $e->getMessage());
        }
    }
    public function getUserDataByEmail($email)
    {
        try {
            $conexion = parent::Conexion();

            $sql = "SELECT * FROM users WHERE email=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (PDOException $e) {
            return ("Error al obtener usuarios por correo electrónico: " . $e->getMessage());
        }
    }
    public function getUserData()
    {
        try {
            session_start();
            $userData = $_SESSION['user_session'];
            $id_user =  $userData['user_id'];
            $conexion = parent::Conexion();

            $sql = "SELECT * FROM users WHERE id=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bindValue(1, $id_user);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (PDOException $e) {
            return ("Error al obtener usuarios: " . $e->getMessage());
        }
    }

    public function encriptarPassword($password)
    {
        $options = [
            'cost' => 10,
        ];
        $hash = password_hash($password, PASSWORD_BCRYPT, $options);
        return $hash;
    }
    public function resetpass_usuario($usu_id, $usu_pass)
    {
        try {
            $conectar = parent::conexion();
            $sql = "UPDATE users
                    SET
                        password = ?
                    WHERE
                        id = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1,  $this->encriptarPassword($usu_pass));
            $sql->bindValue(2, $usu_id);
            $sql->execute();
            $resultado = $sql->fetchAll();
            return $resultado;
        } catch (PDOException $e) {
            return ("Error al obtener cliente: " . $e->getMessage());
        }
    }
    public function actualizarPassword($usu_id, $usu_pass)
    {
        try {
            $conectar = parent::conexion();
            $sql = "UPDATE users SET pass = ? WHERE id = ?";
            $sql = $conectar->prepare($sql);
            $sql->bindValue(1, $usu_pass);
            $sql->bindValue(2, $usu_id);
            $sql->execute();
            return $resultado = $sql->fetchAll();
        } catch (PDOException $e) {
            // Manejo de errores
            return ("Error al obtener cliente: " . $e->getMessage());
        }
    }
    public function login()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $conexion = parent::Conexion();
        $sql = "SELECT u.* FROM users u 
        WHERE u.email = ?";

        $stmt = $conexion->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        try {
            if (password_verify($password, $data['password'])) {
                $sql1 = "SELECT u.rol,u.id as user_id,u.email,u.nombres,u.apellidos,u.cedula,u.id_ies
                ,u.id_sede,u.id_campus
                FROM users u
        WHERE u.email = ?";
                $stmt1 = $conexion->prepare($sql1);
                $stmt1->bindValue(1, $email);
                $stmt1->execute();
                $user = $stmt1->fetch(PDO::FETCH_ASSOC);
                return $user;
            }
        } catch (PDOException $e) {
            // Manejo de errores
            return ("Error al iniciar sesión: " . $e->getMessage());
        }
    }


    public function registrarUsuario()
    {
        try {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $nombres = $_POST["nombres"];
            $apellidos = $_POST["apellidos"];
            $id_ies = $_POST["id_ies"];
            $id_sede = $_POST["id_sede"];
            $id_campus = $_POST["id_campus"];
            $rol = $_POST["rol"];
            $cedula = $_POST["cedula"];

            $conexion = parent::Conexion();
            $hashedPassword =  $this->encriptarPassword($password);
            $sql = "INSERT INTO users (email, password, nombres, apellidos, cedula,id_ies,id_sede,id_campus, rol) VALUES (?, ?,?,?,?, ?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $hashedPassword);
            $stmt->bindValue(3, $nombres);
            $stmt->bindValue(4, $apellidos);
            $stmt->bindValue(5, $cedula);
            $stmt->bindValue(6, $id_ies);
            $stmt->bindValue(7, $id_sede);
            $stmt->bindValue(8, $id_campus);
            $stmt->bindValue(9, $rol);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return $stmt;
            }
        } catch (PDOException $e) {
            return ("Error al actualizar los datos: " . $e->getMessage());
        } catch (Exception $e) {
            return ("Error: " . $e->getMessage());
        }
    }
    public function updateUsers()
    {
        try {
            $id = $_POST["id"];
            $email = $_POST["email"];
            $nombres = $_POST["nombres"];
            $apellidos = $_POST["apellidos"];
            $id_ies = $_POST["id_ies"];
            $id_sede = $_POST["id_sede"];
            $id_campus = $_POST["id_campus"];
            $rol = $_POST["rol"];
            $cedula = $_POST["cedula"];

            $conexion = parent::Conexion(); // Obtener la conexión a la base de datos
            $sql = "UPDATE users SET email=?, nombres=?, apellidos=?, cedula=?, id_ies=?,id_sede=?,id_campus=?, rol=? WHERE id=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bindValue(1, $email);
            $stmt->bindValue(2, $nombres);
            $stmt->bindValue(3, $apellidos);
            $stmt->bindValue(4, $cedula);
            $stmt->bindValue(5, $id_ies);
            $stmt->bindValue(6, $id_sede);
            $stmt->bindValue(7, $id_campus);
            $stmt->bindValue(8, $rol);
            $stmt->bindValue(9, $id);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                throw new Exception("No se ha podido actualizar el registro");
            }
        } catch (PDOException $e) {
            return ("Error al actualizar los datos: " . $e->getMessage());
        } catch (Exception $e) {
            return ("Error: " . $e->getMessage());
        }
    }
    public function deleteUsers()
    {
        try {
            $id = $_POST["id"];
            $conexion = parent::Conexion();
            $stmt = $conexion->prepare("SELECT est FROM users WHERE id=?");
            $stmt->execute([$id]);
            $currentStatus = $stmt->fetchColumn();
            $newStatus = ($currentStatus == 1) ? 0 : 1;
            $sql = "UPDATE users SET est = ? WHERE id=?";
            $stmt = $conexion->prepare($sql);
            $stmt->bindValue(1, $newStatus);
            $stmt->bindValue(2, $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                throw new Exception("No se ha podido cambiar el estado del usuario");
            }
        } catch (PDOException $e) {
            return ("Error al cambiar el estado del usuario: " . $e->getMessage());
        } catch (Exception $e) {
            return ("Error: " . $e->getMessage());
        }
    }
}
