<?php
header("Content-Type: application/json");

$host = "imc.kean.edu";
$user = "bergebro";
$password = "1181534";
$database = "2025S_bergebro";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die(json_encode(["error" => "fail to connect to database: " . $conn->connect_error]));
}

// Get campus parameter from request
$campus = isset($_GET['campus']) ? $_GET['campus'] : 'main-north';

// Modify SQL query to include campus filter
$sql = "SELECT Spotid, IsOccupied FROM ParkingLots WHERE Campus = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $campus);
$stmt->execute();
$result = $stmt->get_result();

$parking_spots = [];
while ($row = $result->fetch_assoc()) {
    $parking_spots[] = [
        "id" => $row["Spotid"],
        "status" => $row["IsOccupied"] == 1 ? "occupied" : "available"
    ];
}

echo json_encode(["parking_spots" => $parking_spots]);

$stmt->close();
$conn->close();
?>