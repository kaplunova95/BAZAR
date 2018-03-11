<?php
    $title = "Женские Босоножки редактор";
	$style = "public/styles/newsEditor.css";
	$script = "public/scripts/newsEditor.js";

    function createContent() { 
		global $conn, $user;
        if (empty($_POST["submit"])) {
?>

<h2>Добавление новости</h2>
<form action="#" method="post" enctype="multipart/form-data">
    Заголовок:<br>
    <input type="text" id="title" name="title" required>
    <br>
    Аннотация:<br>
    <textarea name="description" id="description" cols="80" rows="5" required></textarea>
    <br>
    Цена:<br> 
    <textarea name="content" id="content" cols="80" rows="10" required></textarea>
    <br>
    Фото:<br>
    <input type="file" id="photo" name="photo" required>
    <p style="margin-top: 20px">
        <input type="submit" name="submit" value="Добавить">
        <input type="reset" name="reset" value="Отмена">
    </p>
</form>

<?php
        } else {
            echo("<h3 style='margin-top: 75px'>");
            
            // 1. Получение данных из формы:
			// =============================
			 $title = $_POST["title"]; 
            $description = $_POST["description"];
            $content = $_POST["content"];
            
			date_default_timezone_set("Europe/Kiev");
			$date = date("Y-m-d H:i:s");
			$status = "usual";
			$login = $user;
			
			$dirPath = "public/files/";
			$name = $_FILES["photo"]["name"];  // pinguens.jpg
			$photo = $dirPath.$name;
			
			// Переменные для проверки размера и типа файла:
			// =============================================
			$size = $_FILES["photo"]["size"];
			$type = $_FILES["photo"]["type"];
            
            // dz13
            //==========================================
            if ($_FILES["photo"]["size"] > 1000000) {
                 throw new RuntimeException('Exceeded filesize limit.');
            }
            //==========================================
			
			$tempLocation = $_FILES["photo"]["tmp_name"];
			copy($tempLocation, $photo);
			
			// Запись данных в базу:
			// =====================
			$query = "INSERT INTO women_BOSU (login, title, description, content, status, photo) VALUES ('$login', '$title', '$description', '$content', '$status', '$photo')";
			$conn->query($query);
			echo("Новость успешно добавлена");
            echo("</h3>");
        }
    }

?>