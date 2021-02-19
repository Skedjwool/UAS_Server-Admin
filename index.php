  GNU nano 4.8                       index.php                                  
<?php
        $host = "172.17.0.3";
        $uname = "root";
        $pass = "secret";
        $dbname = "trucorpdb";
        $conn = new mysqli($host, $uname, $pass, $dbname);
        if(!$conn){
                die("Connection Failed : " . $conn->connect_error);
        }
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                echo "ID: ". $row["ID"] . " - Nama: " . $row["Nama"] . " - Kant>
                }
		echo "</br>Jumlah user dalam database: " . $result->num_rows . "</br>";
        }else{
                echo "DB is empty";
        }
        $conn->close();
?>
