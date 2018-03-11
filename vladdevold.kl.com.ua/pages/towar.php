<?php
include_once "base.php";
$title = "tovar";
function createContent(){   
    global $user, $conn;
?>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style_mainHome.css">
    <link rel="stylesheet" href="styles/men-style.css">
    
  
    
    <?php 
}
        // 1.Получение данных, query выполняет любой sql запрос (выводим все новости из БД)
    
        require("../config/db_config.php");
    	session_start();
	$gid = $_SESSION['gid'];
        $query = "SELECT * FROM sale WHERE id=$gid LIMIT 1";
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $result = $conn->query($query);
        $row = $result ->fetch_assoc();
       
   
    
?>
<!— 2.Отображение данных —>
  <main>
        contentcontentcontentcontentcontentcontentcontent
    </main>
                <div class="panel">
                       <a href="#">
                               <img class="link"  src="../<?=$row['photo']?>">
                       </a>
               <h3>Товар <?=$row['title']?></h3>
               <h3>Товар <?=$row['description']?></h3>
               <h3>Товар <?=$row['content']?></h3>
               <h3>Товар <?=$gid?></h3>

               </div>
               <hr>
               <a href="Sale">Вернуться в каталог</a>
               <style>
                       .panel {
                               display: inline-block;
                       }
                       h3 {
                               text-align: center;
                               font: bold italic 12pt "Trebuchet MS";
                       }
               </style>
<?php 

?>