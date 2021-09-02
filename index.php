<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <br/>
    <div class="container">
    <div class="panel panel-primary">
    <div class="panel-heading">Registration</div>
    <div class="panel-body">
    <form id="reg" method="post" action="">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <br/>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <br/>
        <input type="password" class="form-control" name="confirmpass" placeholder="Confirm Password">
        <br/>
        <input type="email" class="form-control" name="email" placeholder="Email id">
        <br/>
        <div class="gender">
        <input type="radio" class="form-check-input"  name="gender" id="male" value="male">
        <label class="form-check-label">Male</label>
        <input type="radio" class="form-check-input"  name="gender" id="female" value="female">
        <label class="form-check-label">Female</label>
        </div>
        <br/>
        <textarea class="form-control" name="textarea" rows="3"></textarea>
        <br/>
        <div class="declaration">
        <input type="checkbox" class="form-check-input" value="" name="checkbox" id="checkbox">
        <label class="form-check-label">Declaration</label>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="register.js"></script>

</body>
</html>