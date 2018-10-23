<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="xulylogin.php" method="post">
                    <h3 class="text-center">User Login</h3>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="txtUsername" id="username" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="txtPassword" id="password" class="form-control" required="required" >
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>