
<html>
<body>
<?php

/** Saving information on the user
 * $_COOKIE :saving information on the user side inside the browser
 * $_SESSION : saving information on the user inside the server side
 * we use session to remember who we actually are when we logged in
 * hackers can access the cookies more easily, so we use the cookie for things such as what the user likes
 * we use session for username and password.
 * if you close the browser, the session is gonna end. But cookies has a time limit; for instance,
 * we could set a cookie for 30 days 
 */

 setcookie("name", "Daniel", time() + 86400);
 $_SESSION['name'] = "12"; //we don't want hackers to know about this number
?>

</body>
</html>
