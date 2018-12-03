<?php
require "Database.php";
class Item extends Database{

    public function select(){
        $sql = "SELECT * FROM items";
        $result = $this->conn->query($sql);
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

    public function store($iname, $idetail, $iquantity, $iprice){
        $sql = "SELECT * FROM items WHERE item_name = '$iname'";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return false;
        }
        else{
            $sql = "INSERT INTO items(item_name, item_details, item_quantity, item_price) VALUE('$iname', '$idetail', '$iquantity', '$iprice')";
            $result = $this->conn->query($sql);
            if($result){
                header("location: items.php");
            }
            else{
                return $conn->error;
            }
            $this->conn->close();
        }
    }

    public function selectOne($id){
        $sql = "SELECT * FROM items WHERE item_id=$id";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
        }
        else{
            return false;
        }
    }

    public function update($id, $iname, $idetail, $iquantity, $iprice){
        $sql = "SELECT * FROM items WHERE item_name = '$iname' AND item_id !=$id";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return false;
        }
        else{
            $sql = "UPDATE items SET item_name='$iname', item_details='$idetail', item_quantity='$iquantity', item_price='$iprice' WHERE item_id=$id";
            $result = $this->conn->query($sql);
            if($result){
                header('location: items.php');
            }
            else{
                echo $this->conn->error;
            }
            $this->conn->colse();
        }
    }
    public function delete($id){
        $sql = "DELETE FROM items WHERE item_id=$id";
        $result = $this->conn->query($sql);
        if($result){
            header("location: items.php");
        }
        else{
            echo $this->conn->error;
        }
        $this->conn->close();
    }
}