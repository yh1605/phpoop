<?php
require "Database.php";
class User extends Database{

    public function select(){
        //query
        $sql = "SELECT * FROM users";
        //execute or run the query
        $result = $this->conn->query($sql);
        //initiaraize an array
        $rows = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
             $rows[] = $row;
            }
        return $rows;
        }
        else{
            return false;
        }
    }

        public function store($username, $password, $firstname, $lastname){
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return false;
            }
            else{
                $password = md5($password);
                $sql = "INSERT INTO users(username, password, firstname, lastname) VALUE('$username', '$password', '$firstname', '$lastname')";
                $result = $this->conn->query($sql);
                if($result){
                    header("lacation: users.php");
                }
                else{
                    return $conn->error;
                }
            }
            $this->conn->close();
        }

        public function selectOne($id){
            $sql = "SELECT * FROM users WHERE user_id=$id";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                return $row;
                }
            
            else{
                return false;
            }          

        }
        
        public function update($id, $username, $firstname, $lastname){
            $sql = "SELECT * FROM users WHERE username = '$username' AND user_id != $id";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                return false;
            }
            else{
                $sql = "UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname' WHERE user_id=$id";
                $result = $this->conn->query($sql);
                if($result){
                    header('location: index2.php');
                }
                else{
                    echo $this->conn->error;
                }
            }
            $this->conn->close();
        }

        public function delete($id){
            $sql = "DELETE FROM users WHERE user_id=$id";
            $result = $this->conn->query($sql);
            if($result){
                header("location: index2.php");
            }
            else{
                echo $this->conn->error;
            }
            $this->conn->close();
        }

        public function login($username, $password){
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = $this->conn->query($sql);
            if($resul->num_rows > 0){
                session_start();
                $row = $result->fetch_assoc();
                $_SESSION['userid'] = $row['user_id'];
                header("location: index2.php");
                }
            else{
                echo "<p class='text-danger'>Invalid Username or Password</p>";
            }
        }
    }

