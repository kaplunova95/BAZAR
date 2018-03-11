<?php

$title = "Выход";
session_destroy();
setcookie("user", "", time() - 3600);
header("Location: Home");

function createContent(){   

?>

<h2>Выход</h2>

<?php

}

?>