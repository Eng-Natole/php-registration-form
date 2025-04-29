<?php 
// Set response content type to JSON
header('Content-Type: application/json');  

include 'dbConn.php';  

$response = [];  

// Get POST data
$stuId  = $_POST['stuId'];  
$fName  = $_POST['fName'];  
$mName  = $_POST['mName'];  
$lName  = $_POST['lName'];  
$sex    = $_POST['sex'];  
$batch  = $_POST['batch'];  
$dep    = $_POST['dep'];  

// Prepare SQL query
$sqlString = "INSERT INTO students (stuId, fName, mName, lName, sex, batch, dep) VALUES (?, ?, ?, ?, ?, ?, ?)";  
$stmt = $conn->prepare($sqlString);  
$stmt->bind_param("sssssis", $stuId, $fName, $mName, $lName, $sex, $batch, $dep);  

// Execute and check result
if ($stmt->execute()) {
    $response['status'] = 'success';  
    $response['message'] = 'Student added successfully!';  
} else {  
    $response['status'] = 'error';  
    $response['message'] = 'Failed to add student: ' . $stmt->error;  
}  

$stmt->close();  
$conn->close();  

echo json_encode($response);  
?>
