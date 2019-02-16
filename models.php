<?php
function connectDB() {
    $servername = 'localhost';
    $dbname = 'Salon';
    $username = 'Salon';
    $password = 'Salonas123';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Nepavyko prisjungti: ' . $conn->connect_error);
    }
    return $conn;
}

function insert($conn, $date, $client, $hairdresser){
    $insert = "INSERT INTO reservations(`date`, `client`, `hairdresser`) VALUES(?, ?, ?)";
    if (!($stmt = $conn->prepare($insert))) {
        die("Error: " . $conn->error);
    }
    if (!$stmt->bind_param("sss", $date, $client, $hairdresser)) {
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
    }
    if (!$stmt->execute()) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
    }
}
function delete($conn){
    $delete = "DELETE FROM reservations WHERE id = " . intval($_GET['delete']);
    if (!($stmt = $conn->query($delete))) {
        die("Error: " . $conn->error);
    }
}