<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="tyylit.css">
<link rel="icon" type="image/png" href="icon.png" />
<title>Kärppäfanit</title>
</head>
<body>
	<div id="kehys">
		<div id="banneri">
		</div>
		
		<div id="nav">
			<nav>
				<ul id="navul">
						<li id="navli"><a href="index.html">Etusivu</a></li>
						<li id="navli"><a href="illat.html">Peli-illat</a></li>
						<li id="navli"><a href="yhteys.html">Ota yhteyttä</a></li>
				</ul>
			</nav>
		</div>
		
		<div id="content2">

		<form id="lomake" action="/yhteys.php" method="post">
				<label for="fullname">Nimi:</label>
				<input type="text" id="fullname" name="fullname"><br>
				<label for="email">Sähköposti:</label>
				<input type="text" id="email" name="email"><br><br>
				<label for="message">Viesti:</label><br>
				<textarea type="text" id="message" name="message"></textarea><br>
				<input type="submit" value="Lähetä">
			</form>

			<div id="tiedot">
				<h2>Yhteystiedot</h2>
				<br>
				<h3>Pasi Pomo</h3>
				<p>Puh. 0400404000</p>
				<p>Sposti. pasi@karppafanit.fi</p>
				<br>
				<h3>Ville Varapomo</h3>
				<p>Puh. 0400000404</p>
				<p>Sposti. ville@karppafanit.fi</p>
			</div>

			
		</div>

		
</body>
<?php
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $msg =  "
        <html>
            <table> 
                <tr><th>Nimi</th><td>    $fullname</td></tr>
                <tr><th>Sähköposti</th><td>   $email</td></tr>
                <tr><th>Viesti</th><td>    $message</td></tr>
            </table>
        </html>";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        if(isset($_POST["email"])){
            mail($email, "Kärppäfanit", $msg, $headers);
        }

    ?>
</html>