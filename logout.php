<?php
session_unset();
session_destroy();
echo "<img src=\"img1/e.jpg\" width=\"90%\" height=\"90%\">";
header( "refresh:3;url=index.html" );
?>