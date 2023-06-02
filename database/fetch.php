<?php
 
$host = 'localhost';
$dbname = 'darshboard';
$username = 'root';
$password = '';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Fetch data from the table
    $query = "SELECT * FROM data";
    $stmt = $db->query($query);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Set the response header
    header('Content-Type: application/json');
    
    // Return the data as JSON
    echo json_encode($data);
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Connection failed: " . $e->getMessage();
}
?>