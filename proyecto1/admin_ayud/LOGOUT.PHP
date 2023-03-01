<?php
  session_start();

  session_unset();

  session_destroy();

  header('Location: /proyecto1/login.html');
?>