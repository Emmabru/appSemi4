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

	
	 	<h3>Comments</h3>
	 	
	 		<!--<div class="comment_item_head">
		 			<div class="comment_item_name">Mamma</div>
		 			<div class="comment_item_date">2017-11-11</div>
	 			</div>
	 			<div class="comment_item_head">
	 				So delicious thick and fluffy! Will be making these again!
	 			</div>
	 		
	 			<div class="comment_item_head">
		 			<div class="comment_item_name">Emma</div>
		 			<input type="submit" value="Delete" class="delete">
	 			</div>
	 			<div class="comment_item_body">
	 				Kaksmulan.
	 			</div>
		-->



	 			<?php
      //if ($this->session->get('uid') !==false) {
        ?>
        <div class= "comments_section" id="comments_section">
        <?php
         
		//echo '<pre>';
		/*foreach ($comments as $comment)
		{
		  ?>
		   
		      <p data-id = $comment['idcomments'] >
		        <?php echo $comment['username']; ?><br />
		        <?php echo $comment['comment']; ?><br />
		        <?php echo nl2br($comment['message']);

		       if($this->session->get(Constants::USER_LOGGED_IN) == "notLoggedIn" || $this->session->get(Constants::USER_LOGGED_IN) == null){
			  		//echo " not logged in";
			  	}else{
			  		//echo "<input type='submit' value='Delete' class='delete'>";
				
		        //if($this->session->get(Constants::USER_LOGGED_IN)==$comment['username']){
		          echo '<button id="delete" href="Pancakes?delete=' . $comment['idcomments'] . '"> Delete </button>';
		        	//echo "deleteknapp";
		        }
		        
		        */
		        ?>
		      </p>
		   	
		  <?php
		//}
		//echo '</pre>';
		?>
		</div>
	 	<?php
		//use tastyRep3\Util\Constants;
	  	$this->session->restart();
	  	

	  	if($this->session->get(Constants::USER_LOGGED_IN) == "notLoggedIn" || $this->session->get(Constants::USER_LOGGED_IN) == null){
	  		
	  	} else {
	  		echo 
	  		" <form id='recipe_comment_form' class='comment_new'>
				  <textarea id='idcomments'></textarea>
				  <input type='submit' id='submit_button'/>
				</form>"

			

	  		//kod för semi3
	  		/*" <div class='comment_new'>
		 		<br>
			 	<form id='recipe_comment_form'>
				  <input type='text' id='user_comment' name='user_comment' value='Write your comment here'/>
				  <input type='hidden' id='recipeID' name='recipeID' value='1'/>
				  <input type='submit' id='submit_button' value='Submit'/>
				</form>
			</div>
			"*/
			;}
		?>
		</div>
</section>


</body>
</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function()
	{
		//loadComments();

		
		$('#recipe_comment_form').submit(function(event)
		{
			event.preventDefault();

			$('#comment, #submit_button').prop('disabled', true);

			// hanterar submission
			var comment_from_textarea = $('#comment').val();

			//$.post('url', parametrar, funktion-som-hanterar-svaret);

			$.post('/Pancakes',
			{
				'comment': comment_from_textarea
			}, function(data)
			{
				$('#comment, #submit_button').prop('disabled', false);

				if (data == 'OK')
				{
					// reload comments
					loadComments();
				}
		
				else
				{
					alert(data);
				}
			});
		});
	});


	/*$(document).on('click', 'button.remove_comment', function()
	{
		var comment_holder = $(this).parent();
		var comment_id_to_delete = comment_holder.attr('data-id');

		$.post('...', { 'delete_id': comment_id_to_delete }, function(data)
		{
			comment_holder.remove();
		}):
	});*/

	var loadComments = function()
	{

		$.get('/tastyRep3/View/Pancakes', { 
			//comment: user_comment 
			}, function(data) {
			$('#comments_section').html(data);


			/*
			/?????????????
		var allComments = "";

		parsedData = JSON.parse(data);

		for(var i in parsedData){

			allComments += "<div class='comments_section'>"
			//sessID= user id?
			if(parsedData[i].sessionId == parsedData[i].userId) {

				allComments += '<button id="delete" type="submit" value"' . $comment["idcomments"] . '"> Delete </button>';
			}
			//print comments
			allComments += parsedData[i].username + " " + parsedData[i].comment;
			allComments += "</div";
			}
			// puts comment in right place
					$(".comments_section").html(allComments)
			});
		}
		loadComments();
*/
		});
	};
	//comment_to_delete = $('...')

//comment_to_delete.remove();
</script>


