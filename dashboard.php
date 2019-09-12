<?php
// require_once "session.php";
// if (!isset($session->valid)) {
//   require_once "index.php";
//   exit();
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link type="text/css" href="css/footer.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="wrapper">
    </br></br></br>
    <center>
	<h2>Welcome to Dashboard</h2>
    <form action="logout.php">
    <button type='submit' formtarget="_self">Logout</button>
    </form>
	</center>
	</div>
    <footer class="footer">&copy;<a href="https://www.github.com/Lin-Kon">Linkon</a></footer>
</body>
</html>