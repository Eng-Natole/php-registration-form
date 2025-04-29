<?php 

// Get studentForm data
$stuId = htmlspecialchars($_POST['stuId']);
$fName = htmlspecialchars($_POST['fName']);
$mName = htmlspecialchars($_POST['mName']);
$lName = htmlspecialchars($_POST['lName']);
$sex = htmlspecialchars($_POST['sex']);
$batch = htmlspecialchars($_POST['batch']);
$dep = htmlspecialchars($_POST['dep']);

// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$database = "schoolofcomputingdb";

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("<h3 style='color: red;'>Not Connected: " . $conn->connect_error . "</h3>");
} else {
    echo "<h3 style='color: green;'>Connected Successfully to schoolofComputingDB</h3>";
}

// Prepare and execute the INSERT query
$sqlstring = "INSERT INTO students (stuId, fName, mName, lName, sex, batch, dep) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sqlstring);

$stmt->bind_param("sssssis", $stuId, $fName, $mName, $lName, $sex, $batch, $dep);

if (!$stmt->execute()) {
    die("<h3 style='color: red;'>Execute failed: " . $stmt->error . "</h3>");
}
echo "<h3 style='color: green;'>New record created successfully!</h3>";

$stmt->close();

// Fetch and display all student records
$sql = "SELECT stuId, fName, mName, lName, sex, batch, dep FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' class='table'>";
    echo "<tr><th>Student ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Sex</th><th>Batch</th><th>Department</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["stuId"] . "</td>";
        echo "<td>" . $row["fName"] . "</td>";
        echo "<td>" . $row["mName"] . "</td>";
        echo "<td>" . $row["lName"] . "</td>";
        echo "<td>" . $row["sex"] . "</td>";
        echo "<td>" . $row["batch"] . "</td>";
        echo "<td>" . $row["dep"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "<h3>No records found.</h3>";
}

// Close connection
$conn->close();

?>
