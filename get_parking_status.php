<?php
header("Content-Type: application/json");

$host = "imc.kean.edu";
$user = "bergebro";
$password = "1181534";
$database = "2025S_bergebro";


$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["error" => "資料庫連線失敗: " . $conn->connect_error]));
}

// read ParkingLots list status
$sql = "SELECT Spotid, IsOccupied FROM ParkingLots";
$result = $conn->query($sql);

$parking_spots = [];
while ($row = $result->fetch_assoc()) {
    $parking_spots[] = [
        "id" => $row["Spotid"],
        "status" => $row["IsOccupied"] == 1 ? "occupied" : "available"
    ];
}

// echo status of parking lots
echo json_encode(["parking_spots" => $parking_spots]);

$conn->close();
?>
