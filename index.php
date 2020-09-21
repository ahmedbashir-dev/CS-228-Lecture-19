<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
        <title>User Registration Form </title>
    </head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="display-4">
                    User Registration Form
                </div>
                <form action="process.php" method="GET">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="username" id="name" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="e" id="e" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                    </div>

                    <input type="submit" name="s" value="Add" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>