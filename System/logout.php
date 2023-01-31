<?php
  session_start();
  session_destroy();
  header("Location: ./System/index.php");
?>