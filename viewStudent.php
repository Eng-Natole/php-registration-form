<?php 
include 'dbConn.php';  

$sql = "SELECT stuId, fName, mName, lName, sex, batch, dep FROM students";  
$result = $conn->query($sql);  

if ($result->num_rows > 0) {  
    echo "<table class='table table-bordered table-striped table-hover'>";  
    echo "<tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Sex</th>
            <th>Batch</th>
            <th>Department</th>
          </tr>";  

    while ($row = $result->fetch_assoc()) {  
        echo "<tr>";  
        echo "<td>" . htmlspecialchars($row["stuId"]) . "</td>";  
        echo "<td>" . htmlspecialchars($row["fName"]) . "</td>";  
        echo "<td>" . htmlspecialchars($row["mName"]) . "</td>";  
        echo "<td>" . htmlspecialchars($row["lName"]) . "</td>";  
        echo "<td>" . htmlspecialchars($row["sex"]) . "</td>";  
        echo "<td>" . htmlspecialchars($row["batch"]) . "</td>";  
        echo "<td>" . htmlspecialchars($row["dep"]) . "</td>";  
        echo "</tr>";  
    }  

    echo "</table>";  
} else {  
    echo "<h3>No students found.</h3>";  
}  

$conn->close();  
?>
