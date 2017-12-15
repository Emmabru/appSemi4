
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Emma</title>
<link rel="stylesheet" type="text/css" href="/seminar-3/resources/css/reset.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  var after_post_handler= function(data){
    $("#comment").val("");
    //hämtar kommentarer när man postat en ny kommentar
    load_comments();
  };
  //hämtar kommentarerna
  var load_comments=function(){
     $.get("AjaxComment?recipe=2", 
      function(data){
        $("#placeholder").html(data);
      })
  };

  $(document).ready(function()
  {
    load_comments();
    //när man sickat en kommentar
    $('#recipe_comment_form').submit(function(event)
    {
      event.preventDefault();
      $.post("Meatballs", 
      {
        "recipeID": "2",
        "comment": $("#comment").val()
      }, after_post_handler);
    });
  });


  $(document).on("click",".buttonremove",function(){
      var holder=$(this).parent().parent();
      var cid= holder.attr("data-cid");
      $.get("Meatballs?delete="+cid, function(data){
        holder.remove();
      });
    });
</script>

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


<section class="recipe">
	<h2>Meatballs</h2>

	<div class="recipe-top-section">
		<div class="ingredienser"> 
			<h3>Ingredients</h3>
			<ul>
				<li><b>1 lb lean (at least 80%) ground beef</b></li>
				<li><b>1/2 cup Progresso™ Italian-style bread crumbs</b></li>
				<li><b>1/4 cup milk</b></li>
				<li><b>1/2 teaspoon salt</b></li>
				<li><b>1/2 teaspoon Worcestershire sauce</b></li>
				<li><b>1/4 teaspoon pepper</b></li>
				<li><b>1 small onion, finely chopped (1/4 cup)</b></li>
				<li><b>1 egg</b></li> 
			</ul> 
		</div>

		<div class="meal-pic" >
			<img src="/seminar-3/resources/images/kottbullar.jpg" alt="Meatballs" style="width:50%; height:50%;"> 
		</div>
	</div>

	<div class="recipe-description">
		<h3>HOW TO DO</h3>
		<p>
		 Heat oven to 400°F. Line 13x9-inch pan with foil; spray with cooking spray. In large bowl, mix all ingredients. Shape mixture into 20 to 24 (1 1/2-inch) meatballs. Place 1 inch apart in pan. Bake uncovered 18 to 22 minutes or until no longer pink in center.
		 </p>
	</div>


	<div class=comments>

	 	<h3>Comments</h3>
				<?php
			      if ($this->session->get(Constants::USER_LOGGED_IN) !==false) {
			        ?>
			        <form id="recipe_comment_form" method='POST'>
			            <textarea id='comment' placeholder='Enter text here...'></textarea>
			            <br>
			            <br>
			            <button type='submit' id="comment">Comment </button>
			          </form>
			          <?php
			          } else {
			            echo "You can not comment since you are not logged in!";
			          }
			?>
			<div id="placeholder">
			  </div>
			</div>
		        
		</section>
	</body>
</html>
