<?php

session_start();
function clearSession()
{
    // clear $_SESSION array
    session_unset();

    // delete session data on the server
    session_destroy();

    // ensure client is sent a new session cookie
    session_regenerate_id();

    // start a new session - session_destroy() ended our previous session so
    // if we want to store any new data in $_SESSION we must start a new one
    // session_start();
}

if (!isset($_SESSION['randomNumber'])) {
    $_SESSION['randomNumber'] = mt_rand(1, 100);
}

if (isset($_POST['guess'])) {
    $guess = $_POST['guess'];
}   else {
    $guess = null;
}

var_dump($_SESSION);

if ($guess === null) {
    $message = "New Game";
} elseif ($guess < $_SESSION['randomNumber']) {
    $message = "Higher";
} elseif ($guess > $_SESSION['randomNumber']) {
    $message = "Lower";
} else {
    $message = "Correct Guess"; 
    clearSession();   
}



?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
            integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
            crossorigin="anonymous"
        >
        <title>High-Low game</title>
        <!--[if lt IE 9]>
              <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
              </script>
              <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
              </script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <header class="page-header">
                <h1>High-Low Game</h1>
                <h1><?= $message; ?></h1>
            </header>
            <!-- Switch the class from info to success when the user win -->
            <div class="alert alert-info hidden" role="alert"><!-- Remove hidden class after first attempt -->
                <!-- Place the user's feedback here (HIGHER, LOWER or GOOD GUESS!)  -->
            </div>
            <form method="post">
                <div class="form-group">
                    <label for="guess">Guess</label>
                    <input
                        type="number"
                        class="form-control"
                        name="guess"
                        id="guess">
                </div>
                <button type="submit" class="btn btn-primary">
                    Guess!!
                </button>
            </form>
        </div>
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"
        ></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"
        ></script>
    </body>
</html>