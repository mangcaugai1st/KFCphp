<?php
function connectDB(){
    //Kết nối database
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=databasephp", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //   echo "Connected successfully";
        $stmt = $conn->prepare("SELECT id, foodName, image, price, quantity, hot, sale FROM producttest");
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $products=$stmt->fetchAll();
        return $products;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>