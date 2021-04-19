<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
    
	<title>Bank of Montreal - Citrix Virtual App and Desktop</title>
	<link rel="shortcut icon" type="image/jpg" href="image/favicon.png"/>

</head>
<body>

	<h1 style="text-align:center">Welcome to BMO Virtual App and Desktop Migration Portal</h1>

    <div class='main'>

		<form action="index.php" style="text-align:center" method="POST">
            <input type="text" name="search" placeholder="Enter your email address"></input>
            <input type="submit" name="submit" ></button>
        </form>
    </div>
    <?php
    include_once('read.php');
    ?>

</body>
</html>