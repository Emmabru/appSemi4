<?php 

foreach ($comments as $comment)
  echo "banan";
    {
      ?>
       <div class="c1" data-cid="<?php echo $comment['idcomments']; ?>">
          <!--<p data-id = $comment['idcomments'] >-->
            <?php echo $comment['username']; ?><br />
            <?php /echo $comment['comment']; ?><br />
            <?php //echo nl2br($comment['message']);

           if($this->session->get(Constants::USER_LOGGED_IN) == "notLoggedIn" || $this->session->get(Constants::USER_LOGGED_IN) == null){
            //echo " not logged in";
          }else{
            //echo "<input type='submit' value='Delete' class='delete'>";
        
            //if($this->session->get(Constants::USER_LOGGED_IN)==$comment['username']){
              echo '<button class"buttonRemove> Delete </button>';
              //echo "deleteknapp";
            }
    }