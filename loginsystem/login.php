<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'nav.php' ?>
    
        
    <div class="container">

<h1 class="text-center">Login</h1>

<form action="/loginsystem/login.php" method="post">

<div class="mb-3">
<label for="username" class="form-label">Username</label>
<input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp">

</div>
<div class="mb-3">
<label for="Password" class="form-label">Password</label>
<input type="password" class="form-control" id="Password" name="Password">
</div>

<button type="submit" class="btn btn-primary  gap-10">Login</button>

<button type="submit" class="btn btn-primary">cancel</button>
</form>


</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>