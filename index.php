<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<main>
    <?php
        require('navbar.php');
    ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper m-0">
            <h1 class="login-title">Add User</h1>
            <form action="submit.php" method = "post">
              <div class="form-group">
                <label for="namee">Name</label>
                <input type="text" name="namee" id="namee" class="form-control" placeholder="Enter your Name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email">
              </div>
              <div class="form-group">
                <label for="age">Age</label>
                <input type="text" name="age" id="age" class="form-control" placeholder="Enter your Age">
              </div>
              <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control" placeholder="Enter your DOB">
              </div>
              
              <button type="submit" name="submit" id="submit" class="btn btn-block login-btn" value="submit">Add</button>
            </form>
            </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="https://mollys-filmpalast.com/wp-content/uploads/2019/04/buckets-of-popcorn-on-yellow-background-top-view-6Z8JRQL-e1554798876922.jpg" alt="login image" class="login-img">
          
        </div>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
