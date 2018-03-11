<?php
    $title = "Вход";
    $script = "public/scripts/entry.js";
    function createContent() {
		global $conn, $user;
        if (empty($_POST["submit"])) {
?>

<h2>Вход</h2>
<form action="#" method="post">
    Логин:<br>
    <input type="text" id="login" name="login" required>
    <br>
    Пароль:<br>
    <input type="password" id="pass1" name="pass1" required>
    <br>
    <p style="margin-top: 15px">
    	<input type="checkbox" name="state" value="on" checked>
    	Оставаться в системе
    </p>
    <p style="margin-top: 20px">
        <input type="submit" name="submit" value="Войти">
        <input type="reset" name="reset" value="Отмена">
    </p>
</form>

<?php
        } else {
            echo("<h3>");
            
            // 1. Получение данных из формы:
			// =============================
			$login = $_POST["login"];
            $pass1 = $_POST["pass1"];
			$passw = ($pass1);
			$state = $_POST["state"];
			
            // 2. Проверка аккаунта:
			// =====================
			$query = "SELECT login, passw FROM users WHERE login='$login' AND passw='$passw'";
				
			$result = $conn->query($query);
			$N = $result->num_rows;
			
			if ($N == 0) {
				echo("<span style='color: red'>");
				echo("В авторизации отказано");
				echo("</span>");
			} else {
				echo("<span style='color: green'>");
				echo("Авторизация успешна");
				echo("</span>");
				$_SESSION["user"] = $login;
				
				// ... checkbox hidden - backlog!!!
				if ($state == "on") {
					setcookie("user", $login, time() + 10 * 24 * 60 * 60); // 10 суток!
				}
				header("Location: Home");
			}
			
            echo("</h3>");
        }
    }

?>