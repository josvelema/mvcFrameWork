
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
    <h2>Register</h2>

    <form action="<?php echo URLROOT; ?>/users/register" method="POST">

    <input type="text" name="username" placeholder="Username *">
    <span class="invalidFeedback">
      <?php echo $data['usernameError']; ?>
    </span>
    
    <input type="email" name="email" placeholder="email *">
    <span class="invalidFeedback">
      <?php echo $data['emailError']; ?>
    </span>
    
    <input type="password" name="password" placeholder="Password *">
    <span class="invalidFeedback">
      <?php echo $data['passwordError']; ?>
    </span>

    <input type="password" name="confirmPassword" placeholder="Confirm Password *">
    <span class="invalidFeedback">
      <?php echo $data['confirmPasswordError']; ?>
    </span>

    <button type="submit" value="submit" id="submit">SUBMIT</button>

    <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account</a></p>
  
  </form>
  </div>
</div>