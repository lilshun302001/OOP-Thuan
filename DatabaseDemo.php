<?php
namespace demo;  
use dao\Database;
require_once "Database.php";
class datbaseDemo{
    private $data;
    private $db;
    public function __construct()
    {   
        
        $this->data = new Database();
    }

    public function insertTableTest(){
        $data =array(array('name'=> 'Thuan','email'=>'lilshun3001@gmail.com'),
        array('name'=> 'Thanh','email'=>'lilthanh3001@gmail.com'));
        $result = $this->data->insertTable('users',$data);
        return $result;
        // echo "name".$data.'</br>';
    }
    public function selectTableTest()
    {
        $result = $this->data->selectTable('users');
        $this->printTableTest('selectTableTest', $result);
    }

    public function updateTableTest()
    {
        $data = array('email' => 'john.doe@gmail.com');
        $where = array('name' => 'John Doe');

        $this->data->updateTable('users', $data, $where);
    }

    public function deleteTableTest()
    {
        $where = array('name' => 'Bob Smith');
        $this->data->deleteTable('users', $where);
    }

    public function truncateTableTest()
    {
        $this->data->truncateTable('users');
    }

    public function initDatabase()
    {
        $table_name = 'users';
        for ($i = 1; $i <= 10; $i++) {
            $data = array('name' => "User $i", 'email' => "user$i@example.com");
            $this->data->insertTable($table_name, $data);
        }
    }
    public function printTableTest($title, $data)
    {
        echo "<h3>$title</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Email</th></tr>";
        foreach ($data as $row) {
            echo "<tr><td>$row[name]</td><td>$row[email]</td></tr>";
        }
        echo "</table>";
    }



    // public function __construct() {
    //     $this->db = new Database();
    // }

    // public function insertTableTest($name, $email, $password) {
    //     $result = $this->db->insertTable($name, $email, $password);
    //     if ($result) {
    //         echo "Insert success";
    //     } else {
    //         echo "Insert failed";
    //     }
    // }

    // public function selectTableTest($id) {
    //     $user = $this->db->selectTable($id);
    //     if ($user) {
    //         echo "ID: " . $user['id'] . "<br>";
    //         echo "Name: " . $user['name'] . "<br>";
    //         echo "Email: " . $user['email'] . "<br>";
    //         echo "Password: " . $user['password'] . "<br>";
    //     } else {
    //         echo "User not found";
    //     }
    // }

    // public function updateTableTest($id, $name, $email, $password) {
    //     $result = $this->db->updateTable($id, $name, $email, $password);
    //     if ($result) {
    //         echo "Update success";
    //     } else {
    //         echo "Update failed";
    //     }
    // }

    // public function deleteTableTest($name) {
    //     $result = $this->db->deleteTable($name);
    //     if ($result) {
    //         echo "Delete success";
    //     } else {
    //         echo "Delete failed";
    //     }
    // }

    // public function truncateTableTest($name) {
    //     $result = $this->db->truncateTable($name);
    //     if ($result) {
    //         echo "Truncate success";
    //     } else {
    //         echo "Truncate failed";
    //     }
    // }

    // public function initDatabase() {
    //     // Tạo 10 bản ghi trong bảng users
    //     for ($i = 1; $i <= 10; $i++) {
    //         $name = "User " . $i;
    //         $email = "user" . $i . "@example.com";
    //         $password = "password" . $i;
    //         $this->db->insertTable($name, $email, $password);
    //     }
    // }

    // public function printTableTest() {
    //     // Lấy tất cả bản ghi trong bảng users
    //     $users = $this->db->ge();

        // Hiển thị dữ liệu trong bảng users ra bảng HTML
    //     echo "<table>";
    //     echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th></tr>";
    //     foreach ($users as $user) {
    //         echo "<tr>";
    //         echo "<td>" . $user['id'] . "</td>";
    //         echo "<td>" . $user['name'] . "</td>";
    //         echo "<td>" . $user['email'] . "</td>";
    //         echo "<td>" . $user['password'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
    // }
   
    }
