<?php

$title = "New";
function createContent(){   
    global $user, $conn, $Tid;
?>
      <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style_mainHome.css">
    <link rel="stylesheet" href="styles/men-style.css">
    
<main>
  <div class="container-filters">
        <div class="goods-filters">
            <h3>ФИЛЬТРЫ</h3>
        </div>
        <input id="filter" type="range" min="0" max="1000" value="1000" />
        <table id="products">
            <tr>
                <td>Product 1</td>
                <td class="price">333</td>
            </tr>
            <tr>
                <td>Product 1</td>
                <td class="price">666</td>
            </tr>
            <tr>
                <td>Product 1</td>
                <td class="price">999</td>
            </tr>
        </table>
        <script>
            filter.oninput = function() {
                var rows = products.rows;
                for (var i = 0; i < rows.length; i++) {
                    var price = +rows[i].querySelector('.price').textContent;
                    rows[i].style.display = (price > this.value) ? 'none' : 'block';
                }
            };
        </script>
    </div>
<div class="container">
     <div class="row">
<?php   if ($user == "VladDevold") { ?> 
<?php 
        } 
        // 1.Получение данных, query выполняет любой sql запрос (выводим все новости из БД)
    $query = "SELECT * FROM new";
    $result = $conn->query($query);
    while ($row = $result ->fetch_assoc()){
       
   
    
?>
<!— 2.Отображение данных —>

        <div class="container-goods col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="img-shoes">
                <a href="towar?Tid=<?=$row['id']?>">
                    <img class="Tid" alt="<?=$row['id']?>" src="<?=$row['photo']?>" width="200">
                </a>
            </div>
            <div class="description">
                    <h3><?=$row["title"]?></h3>
                    <p class="price"><?=$row["content"]?></p>
                    <button><a href="#">В корзину</a></button>
                    <p>
                       <a href="<?=$row['id']?>">Подробнее...</a>
                    </p>
            </div>
        </div>
<?php 
    }
?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-latest.js"></script>
        <script>
            $(document).ready(function () {
                $(".Tid").click(function () {
                    let id = $(this).attr("alt");
                    $.ajax(
                        url: "system/ajax1.php",
                        method: "post",
                        data: "Tid=" + id,
                        success: function(result) {
                            window.location = "pages/towar.php";
                        }
                    );
                });
            });
        </script>
    </main>

<!— —>
<?php
    }
?>