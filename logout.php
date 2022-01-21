<?php

if(isset($_COOKIE[session_name()])){

    setcookie(session_name(),"",time() + 86400, '/');
}

session_unset();

session_destroy();

echo "You've been logged out! See you next time.<br>";


 echo "<p><a href='index.php'>Log back in</a></p>";
?>