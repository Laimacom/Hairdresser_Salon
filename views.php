<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rezervacijos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <?php
    function showTable($conn){
    $page = 5;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    if ($page < 5) $page = 5;
    if (isset($_GET['offset'])) {
        $offset = $_GET['offset'];
    } else {
        $offset = 0;
    }
    $sql = 'SELECT `id`, `date`, `client`, `hairdresser` FROM reservations ORDER BY `date` ASC LIMIT ' . ($page + 1) . ' OFFSET ' . $offset;
    if (!($result = $conn->query($sql))) {
        die("Error: " . $conn->error);
    }
    if ($result->num_rows > 0) {
    ?>
    <?php if ($offset > 0): ?>
        <a href="<?= "?offset=".($offset >= $page ? $offset - $page : 0) ?>">Atgal</a>
    <?php endif; ?>

    <?php if ($result->num_rows == $page + 1): ?>
        <a href="<?= "?offset=".($offset + $page) ?>">Pirmyn</a>
    <?php endif; ?>

    <table class=table>
        <tr class="table-success">
            <th>ID</th>
            <th>Data</th>
            <th>Klientas</th>
            <th>Kirpėja</th>
            <th></th>
        </tr>

        <?php
        for ($i = 0; $i < $page; $i++) {
            if (!($row = $result->fetch_assoc())) break;
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['client']; ?></td>
                <td><?php echo $row['hairdresser']; ?></td>
                <td><a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Ar tikrai norite atšaukti rezervaciją?')">Atšaukti rezervaciją</a></td>
            </tr>
            <?php
        }
        echo '</table>';
        } else {
            echo 'nėra duomenų';
        }
        $conn->close();
    }

    function forma(){?>
        <label>Įveskite naują rezervaciją</label>
        <form method="post">
        <label>Data</label><input type="text" name="date" required><br>
        <label>Klientas</label><input type="text" name="client" required><br>
        <label>Kirpėja</label><input type="text" name="hairdresser" required><br>
        <br>
        <input type="submit" value="Rezervuoti">
        </form>
    <?php } ?>
</body>
</html>
