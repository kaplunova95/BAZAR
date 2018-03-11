<?php
    $title = "Contacts";
    function createContent() {
    	global $user, $conn;
?>
<link rel="stylesheet" href="styles/style_dialogue.css">
<!--<script src="../phpfreechat-2.1.0/client/lib/jquery-1.8.2.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="../phpfreechat-2.1.0/client/themes/default/jquery.phpfreechat.min.css" />
<script src="../phpfreechat-2.1.0/client/jquery.phpfreechat.min.js" type="text/javascript"></script>-->

<p><a href="#top">ОСТАВЬТЕ СВОЙ КОМЕНТАРИЙ</a></p>

<!--<div id="mychat"><a href="http://www.phpfreechat.net">Creating chat rooms everywhere - phpFreeChat</a></div>-->
<?php  
    // 1.Получение данных из БД
    $query = "SELECT * FROM text";
    $result = $conn->query($query);
    while ($row = $result ->fetch_assoc()){  
?>
    <div class="coment">
	<h3 id="text"><?=$row["title"]?></h3>
	<h4 id="text">Автор: <?=$row["login"]?>;
    </div>
<!--<script type="text/javascript">
  $('#mychat').phpfreechat({ serverUrl: '/phpfreechat-2.1.0/server' });
</script>-->

<?php 
		}
	 if (empty($_POST["submit"])) {
?>

	<form action="#" method="post" enctype="multipart/form-data">
            <input placeholder="Оставить коментарий" type="text" id="title" name="title" required class="input-message">
            <br>
            <input type="submit" name="submit" value="Отправить" class="dialog">
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
			$query = "INSERT INTO text (login, title) VALUES ('$login', '$title')";
			$conn->query($query);
            echo("</h3>");
            header("Location: dialogue");
        }
    }
?>