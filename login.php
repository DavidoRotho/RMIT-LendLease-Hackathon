<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body>
        <div class="row">
            <h1 class="container; text-center">Login</h1>
        </div>
        <form method="POST" action="validtion.php">
            <div class="row">
                <p class="text-center">Username: <input type="text" id="username" name="username"></p><br>
                <p class="text-center">Password: <input type="password" id="password" name="password"></p>
            </div>
            <div class="col-md-12 text-center row">
                <button class="btn btn-primary">Enter</button>
            </div>
        </form>
    </body>
</html>