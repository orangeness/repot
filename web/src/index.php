<?php
$link = mysqli_connect("172.17.0.2","root","asdasd","Trucorp");
if (!$link) {
echo "tidak bisa konek ke MySQL" . PHP_EOL;
exit;
}
$sql = "SELECT COUNT(nama) AS `Jumlah User` FROM users";
$result = mysqli_query($link, $sql);
echo "<br>";
echo "<table border='1'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    foreach ($row as $field => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
