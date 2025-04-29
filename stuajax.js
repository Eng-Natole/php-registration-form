function loadStudents() {
  const xhr = new XMLHttpRequest();
  xhr.open("GET", "viewStudent.php", true);
  xhr.onload = function () {
    if (xhr.status == 200) {
      console.log(xhr.responseText);
      document.getElementById("studentList").innerHTML = xhr.responseText;
    }
  };
  xhr.send();
}

loadStudents();

// fetch("viewStudent.php")
//   .then((response) => response.text())
//   .then((data) => {
//     document.getElementById("studentList").innerHTML = data;
//     addTableEventListeners();
//   })
//   .catch((error) => {
//     document.getElementById("studentList").innerHTML =
//       "No student data or unable to load:";
//   });

document.getElementById("studentForm").addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(this);
  const xhr = new XMLHttpRequest();

  xhr.open("POST", "addStudent.php", true);

  xhr.onload = function () {
    if (xhr.status === 200) {
      const res = JSON.parse(xhr.responseText); // Parse the JSON response

      if (res.status === "success") {
        document.getElementById("addMsg").innerHTML = res.message;
        document.getElementById("studentForm").reset();
        loadStudents(); // Refresh table
      } else {
        document.getElementById("addMsg").innerHTML = "Error: " + res.message;
      }
    } else {
      document.getElementById("addMsg").innerHTML = "Server error";
    }
  };

  xhr.send(formData);
});
