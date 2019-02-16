<?php
require_once 'models.php';
require_once 'views.php';
$conn = connectDB();
forma();
if (isset($_POST['date'])) {
    insert($conn, $_POST['date'], $_POST['client'], $_POST['hairdresser']);
} elseif (isset($_GET['delete'])){
    delete($conn);
}
showTable($conn);