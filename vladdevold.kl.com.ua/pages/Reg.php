<?php
    $title = "Регистрация";
	$script = "public/scripts/reg.js";
    function createContent() { 
		global $conn;
        if (empty($_POST["submit"])) {
?>

<h2>Регистрация</h2>
<form action="#" method="post">
    Логин:<br>
    <input type="text" id="login" name="login" required>
    <br>
    Пароль:<br>
    <input type="password" id="pass1" name="pass1" required>
    <br>
    Повтор:<br>
    <input type="password" id="pass2" name="pass2" required>
    <br>
    E-Mail:<br>
    <input type="email" id="email" name="email" required><br>
    <p style="margin-top: 20px">
        <input type="submit" name="submit" value="Отправить">
        <input type="reset" name="reset" value="Очистить">
    </p>
</form>

<?php
        } else {
            echo("<h3>");
            
            // 1. Получение данных из формы:
			// =============================
			$login = $_POST["login"];
            $pass1 = $_POST["pass1"];
            $pass2 = $_POST["pass2"];
            $email = $_POST["email"];
			
			// 2. Проверка корректности данных:
			// ================================
			$check = false;
			
			// - проверка логина на безопасность:
			$regexp = "/^[a-zA-Z0-9_]{6,12}$/";
			if (preg_match($regexp, $login)) {
				echo("login - good");
				//$check = true;
			} else {
				$check = false;
			}
			
			// - проверка равенства паролей:
			if ($pass1 == $pass2) {
				$check = true;
			} else {
				$check = false;
			}
            
			if ($check) {
				// 3. Предварительная обработка:
				// =============================
            	$passw = ($pass1);
            	date_default_timezone_set("Europe/Kiev");
            	$regdate = date("Y-m-d H:i:s");
            	$status = "norm";
            
            	// 4. Запись данных в базу:
				// ========================
				$query = "INSERT INTO users (login, passw, email) VALUES ('$login', '$passw', '$email')";
				$conn->query($query);
				echo("Регистрация успешна");
			}
            echo("</h3>");
        }
    }

?>