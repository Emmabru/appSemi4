<?php 
use tastyRep3\Util\Constants;
foreach ($comments as $comment)
    {
      ?>
       <div class="comment_section" data-cid='<?php echo $comment['idcomments']; ?>'>
      <p>
        <?php echo $comment['username']; ?><br />
        <?php echo nl2br($comment['comment']);?><br />
        <?php 
    
         if($this->session->get(Constants::USER_LOGGED_IN)== $comment['username']){
            echo '<button class="buttonremove">Delete</button>';
          }
        ?>
      </p>
    </div>
  <?php
}