function loadData(){
    var parseddata;
    //var URI_loc= window.location.pathname;
    //alert(URI_loc);
    //loads the data from the server
    $.post("http://localhost/seminar-3/tastyRep3/View/Pancakes", function(data){

        var allcomments = "";

        //parses a JSON string, constructing the JavaScript value or object described by the string
        parseddata = JSON.parse(data);

        //loopes through the JSON array
        for(var i in parseddata){

            allcomments += "<div class='recipe_comment_form'>";

            //sees if the session ID matches with the loggen in userID
            if(parseddata[i].sessionId == parseddata[i].userId){
                //show the delete button form
                allcomments += "<form class='delete-form' method='POST' action=''><input type='hidden' class='cid' value='" 
                            + parseddata[i].cid + "'><button class = 'deletebutton' type='submit' name='commentDelete'>Delete</button></form>";
            }
            //print out the comments
            allcomments += parseddata[i].username + " " + parseddata[i].date + " " + "<br>" + parseddata[i].comment;
            allcomments += "</div>";    
            }

        //look in commentbox, puts the comments in the right place in Recipe    
        $(".recipe_comment_form").html(allcomments);
            
    });

}

loadData();

