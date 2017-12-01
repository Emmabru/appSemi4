

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Emma</title>
<link href="reset.css" rel="stylesheet" type="text/css">

</head>

<body>
<h1>Tasty recipe</h1>
<p> All in one bite</p>

<div class="menu">
	<nav>
	 <ul>
	  <li><a href="index.html">Home</a></li>
	  <li><a href="recipe.html">Pancakes</a></li>
	  <li><a href="recipe2.html">Meatballs</a></li>
	  <li><a href="calendar.html">Calendar</a></li>
	  <li><a class="active" href="login-page.php">Login</a></li>
	</ul>
	</nav>

</div>

<section>
	<h2>Login</h2>
	<p>
		<form action="login.php" method='post'>
           	<h3> State your name and password: </h3>
       		<section>
                <input type="text" id="username" name="username" type="usernme" />
                <input type="text" id="password" name="password" type="password" />               
                <input type="submit" value="Login"/>
            </section> 
        </form>
 </p>
</section>

</body>
</html>