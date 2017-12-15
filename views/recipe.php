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
     $.get("AjaxComment?recipe=1", 
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
      $.post("Pancakes", 
      {
        "recipeID": "1",
        "comment": $("#comment").val()
      }, after_post_handler);
    });
  });


  $(document).on("click",".buttonremove",function(){
      var holder=$(this).parent().parent();
      var cid= holder.attr("data-cid");
      $.get("Pancakes?delete="+cid, function(data){
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
	<h2>Pancakes</h2>

	<div class="recipe-top-section">
		<div class="ingredienser"> 
			<h3>Ingredients</h3>
			<ul>
			  <li><b>1 1/2 cups (195 grams) all-purpose flour</b></li>
			  <li><b>2 tablespoons sugar</b></li>
			  <li><b>1 tablespoon baking powder</b></li>
			  <li><b>3/4 teaspoon kosher salt</b></li>
			  <li><b>1 1/4 cups (295 ml) milk, dairy and non-dairy both will work</b></li>
			  <li><b>1 large egg</b></li>
			  <li><b>4 tablespoons butter, melted, plus more for skillet</b></li>
			  <li><b>1 teaspoon vanilla extract</b></li>

			</ul> 
		</div>

		<div class="meal-pic" >
			<img src="/seminar-3/resources/images/pannkakor.jpg" alt="Pancakes" style="width:50%; height:50%;"> 
		</div>
	</div>

	<div class="recipe-description">
		<h3>HOW TO DO</h3>
		<p>

		Heat a large skillet (or use griddle) over medium heat. The pan is ready if when you splatter a little water onto the pan surface, the water dances around the pan and eventually evaporates.

		Make a well in the center of the flour mixture, pour milk mixture into the well and use a fork to stir until you no longer see clumps of flour. It is okay if the batter has small lumps, in fact you want that – it is important not to over-mix the batter.
		Lightly brush skillet with melted butter. Use a 1/4-cup measuring cup to spoon batter onto skillet. Gently spread the batter into a 4-inch circle.

		When edges look dry and bubbles start to appear and pop on the top surfaces of the pancake, turn over. This takes about 2 minutes. Once flipped, cook another 1 to 2 minutes or until lightly browned and cooked in the middle. Serve immediately with warm syrup, butter and/or berries.

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
		            <button type='submit' class= "buttoncomment" id="comment">Comment </button>
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
