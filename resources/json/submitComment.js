//when the page is loaded, when you press delete button -> run function
$(document).on('submit', '.submit_button', function(event){

	//var submitUrl = "http://localhost/id1354-fw-version4/TastyRecipes/View/Meatballspage";
	var submitUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
	//alert(submitUrl);

		event.preventDefault();

	   	//loads the specific data from the deleteURL page
		$.post(submitUrl, {commentSubmit: 1, 
							username: 1, 
							recipeID: 1,
							user_comment: $('#user_comment').val()
		} 
							, function(data)
		{

				loadData();
				user_comment: $('#user_comment').val('');

		});

});