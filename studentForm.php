<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Control</title>

    <link
      rel="icon"
      type="image/x-icon"
      href="/Bootstrap/images/bootstrap-logo-shadow.ico"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>

  <body>
    <div class="container mt-5">
      <h2 class="text-center mb-4">School of Computing Student Registration</h2>
      <form id="studentForm">
        <div class="row mb-3">
          <label for="studentId" class="col-sm-2 col-form-label text-end">
            Student ID
          </label>
          <div class="col-sm-5">
            <input
              type="text"
              class="form-control"
              id="studentId"
              name="stuId"
              placeholder="Enter student ID"
            />
            <small id="studentIdHelp" class="form-text text-muted">
              Your unique student identification number.
            </small>
          </div>
        </div>

        <div class="row mb-3">
          <label for="firstName" class="col-sm-2 col-form-label text-end">
            First Name
          </label>
          <div class="col-sm-5">
            <input
              type="text"
              class="form-control"
              id="firstName"
              name="fName"
              placeholder="Enter first name"
            />
            <small id="firstNameHelp" class="form-text text-muted">
              Your given first name.
            </small>
          </div>
        </div>

        <div class="row mb-3">
          <label for="middleName" class="col-sm-2 col-form-label text-end">
            Middle Name
          </label>
          <div class="col-sm-5">
            <input
              type="text"
              class="form-control"
              id="middleName"
              name="mName"
              placeholder="Enter middle name"
            />
          </div>
        </div>

        <div class="row mb-3">
          <label for="lastName" class="col-sm-2 col-form-label text-end">
            Last Name
          </label>
          <div class="col-sm-5">
            <input
              type="text"
              class="form-control"
              id="lastName"
              name="lName"
              placeholder="Enter last name"
            />
            <small id="lastNameHelp" class="form-text text-muted">
              Your family or last name.
            </small>
          </div>
        </div>

        <div class="row mb-3">
          <label for="sex" class="col-sm-2 col-form-label text-end">Sex</label>
          <div class="col-sm-5">
            <select class="form-control" id="sex" name="sex">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>

        <div class="row mb-3">
          <label for="batch" class="col-sm-2 col-form-label text-end">Batch</label>
          <div class="col-sm-5">
            <select class="form-control" id="batch" name="batch">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <small id="batchHelp" class="form-text text-muted">
              The academic year you joined.
            </small>
          </div>
        </div>

        <div class="row mb-3">
          <label for="department" class="col-sm-2 col-form-label text-end">
            Department
          </label>
          <div class="col-sm-5">
            <select class="form-control" id="department" name="dep">
              <option value="computer-science">Computer Science</option>
              <option value="information-technology">Information Technology</option>
              <option value="software-engineering">Software Engineering</option>
            </select>
            <small id="departmentHelp" class="form-text text-muted">
              Your field of study.
            </small>
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div id="addMsg" class="text-success text-center mt-3"></div>
      </form>

      <div id="studentList" class="mt-4"></div>
    </div>

    <script src="stuajax.js"></script>
  </body>
</html>
