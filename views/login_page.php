
<html lang="en">
<head>
<meta charset="utf-8">
<title>Emma</title>
<link rel="stylesheet" type="text/css" href="/seminar-3/resources/css/reset.css">

</head>

<body>
<h1>Tasty recipe</h1>
<p> All in one bite</p>


<div class="menu">
	<nav>
	 <ul>
	  <li><a class="active" href="/seminar-3/tastyRep3/View/FirstPage">Home</a></li>
	  <li><a href="/seminar-3/tastyRep3/View/Pancakes">Pancakes</a></li>
	  <li><a href="/seminar-3/tastyRep3/View/Meatballs">Meatballs</a></li>
	  <li><a href="/seminar-3/tastyRep3/View/Calendar">Calendar</a></li>
	  	<?php
		use tastyRep3\Util\Constants;
	  	
	  	$this->session->restart();
	  	
	  	if($this->session->get(Constants::USER_LOGGED_IN) == "notLoggedIn" || $this->session->get(Constants::USER_LOGGED_IN) == null){
	  		echo "<li><a href='/seminar-3/tastyRep3/View/Login_view'>Login</a></li>";
	  	}else{
	  		echo "<li><a href='#''>".$this->session->get(Constants::USER_LOGGED_IN)."</a></li>";
		}
		?>
	</ul>
	</nav>

</div>

<section>
	<h2>Login</h2>
	<p>
		<form action='Login_view' method='post'>
           	<h3> State your name and password: </h3>
       		<section>
                <input type="text" id="username" name="username" type="username" />
                <input type="text" id="password" name="password" type="password" />               
                <input type="submit" value="Login"/>
            </section> 
        </form>
 </p>
</section>

</body>
</html>