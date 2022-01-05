
<?php
  require APPROOT . '/views/includes/head.php';

?>

<nav class="rj-nav">
<?php 
  require APPROOT . '/views/includes/navigation.php';

?>

</nav>

<div class="login"></div>
  <div class="login-wrapper">
    <h2>Sign in</h2>
    <form action="<?php echo URLROOT; ?>/users/login" method="POST">
    <input type="text" name="username" placeholder="Username *">
    <span class="invalidFeedback">
      <?php echo $data['usernameError']; ?>
    </span>
    
    <input type="password" name="password" placeholder="Password *">
    <span class="invalidFeedback">
      <?php echo $data['passwordError']; ?>
    </span>
    <button type="submit" value="submit" id="submit">SUBMIT</button>

    <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account</a></p>
  
  </form>
  </div>
</div>