<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajax crud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container mt-5">
    <h1 class="alert alert-info text-center">Ajax Crud Application</h1>

    <div class="row">
    <div class="col-sm-5">
      <h3 class="alert alert-success text-center">Add / Insert Data</h3>
      <form action="" id="form" method="POST">

        <label for="name" class = "form-label">Enter Your Name: </label>
        <input type="text" class = "form-control" name = "name" id = "name">

        <label for="email" class = "form-label">Enter Your email: </label>
        <input type="email" class = "form-control" name = "email" id = "email">

        <label for="password" class = "form-label">Enter Your password: </label>
        <input type="password" class = "form-control" name = "password" id = "password">

        <button class="btn btn-primary mt-4" id="btnadd" type = "submit"> Submit </button>
      </form>
      <div class="alert alert-success" id="msg">
      </div>
    </div>

    <div class="col-sm-7">
      <h3 class="alert alert-warning text-center">Show details</h3>
      <table class="table text-center">
        <thead>
          <th scope="col">ID</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </thead>
        <tbody id="tbody"> </tbody>
      </table>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="" id="editForm" method="POST">
        <input type="hidden" class = "" name = "id" id = "id">

        <label for="name" class = "form-label">Enter Your Name: </label>
        <input type="text" class = "form-control" name = "ename" id = "ename">

        <label for="email" class = "form-label">Enter Your email: </label>
        <input type="email" class = "form-control" name = "eemail" id = "eemail">

        <label for="password" class = "form-label">Enter Your password: </label>
        <input type="password" class = "form-control" name = "epassword" id = "epassword">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-primary" id="btnUpdate" type = "submit"> Update </button>
      </div>
    </form>
      </div>
    </div>
  </div>

  </div>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
