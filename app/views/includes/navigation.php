<nav class="rj-nav">
  <ul>
    <li>
    <a href="<?php echo URLROOT; ?>/pages/index">Home</a>
    </li>
    <li>
    <a href="<?php echo URLROOT; ?>/pages/about">About</a>
    </li>
    <li>
    <a href="<?php echo URLROOT; ?>/pages/projects">Projects</a>
    </li>
    <li>
    <a href="<?php echo URLROOT; ?>/pages/blog">Blog</a>
    </li>
    <li>
    <a href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
    </li>
    <li class="rj-btn-login">
    <a href="<?php echo URLROOT; ?>/users/login">Login</a>
    </li>
    <li class="btn-login">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Log out</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            <?php endif; ?>
        </li>
  </ul>
</nav>