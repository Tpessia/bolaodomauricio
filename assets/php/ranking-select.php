<?php
    $servername = $_SERVER["SERVER_ADDR"] == "127.0.0.1" ? "sql131.main-hosting.eu" : "mysql.hostinger.com.br";
    $username = "u432755883_user";
    $password = "IhSoAnXZFmBi@314159";
    $dbname = "u432755883_db";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
        
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $username = $_GET["username"];
    
    $sql = "
    SELECT Data, Colocacao, Pontuacao
    FROM $username
    ";
    $result = mysqli_query($conn, $sql);
    
    echo "[";
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo '{date: "' . $row['Data']. '", colocacao: ' . $row['Colocacao']. ', pontuacao: ' . $row['Pontuacao']. '},';
        }
    } else {
        echo "0 results";
    }
    echo "]";
    
    // close
    mysqli_close($conn);
?>