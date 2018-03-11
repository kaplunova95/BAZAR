<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="public/images/favicon.ico">
    <title>BAZAR Украина <?=$title?></title>
    <link href="../bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=$style?>">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/style-media.css">
    <script src="scripts/jquery-3.3.1.min.js"></script>
</head>
<body>
    <header>
    <a href="Home" class="logo">BAZAR</a>
	<div id="header-menu">
            <ul class="navhed-menu">
                <li><a href="Home" id="home">Home</a></li>
		<li><a href="New">New</a></li>
		<li><a href="Women">Women</a>
                    <div class="div-drop">
                        <div class="div-drop2">
                            <a href="W_BOTINKI">
                                <img src="img/box.jpg" alt="" >
                                <div class="dark-block dark"></div>
                            </a>
                            <a href="W_KROSU">
                                <img src="img/box2.jpg" alt="">
                                <div class="dark-block dark1"></div>
                            </a>
                            <a href="W_BOSU">
                                <img src="img/3880.jpg" alt="">
                                <div class="dark-block dark2"></div>
                            </a>
                            <a href="W_TUFLI">
                                <img src="img/74956.jpg" alt="">
                                <div class="dark-block dark3"></div>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="Men">Men</a>
                    <div class="div-drop">
                        <div class="div-drop2">
                            <a href="M_Boots">
                                <img src="img/46963.jpg" alt="">
                                <div class="dark-block dark"></div>
                            </a>
                            <a href="M_Cross">
                                <img src="img/boxM2.jpg" alt="">
                                <div class="dark-block dark1"></div>
                            </a>
                            <a href="M_Sandals">
                                <img src="img/boxM3.jpg" alt="">
                                <div class="dark-block dark2"></div>
                            </a>
                            <a href="M_Tufli">
                                <img src="img/18045.jpg" alt="">
                                <div class="dark-block dark3"></div>
                            </a>
                        </div>
                    </div>
                </li>
		<li><a href="Sale">Sale</a></li>
		<li><a href="About">About us</a></li>
		<li><a href="Contacts">Contacts</a></li>
            </ul>
	</div>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.js"></script>
    <script>
        $(".navhed-menu li").hoverIntent(
            function() {
                $(this).find(".div-drop").slideDown(1000);
            },
            function() {
                $(this).find(".div-drop").slideUp(1000);
            }
        );
    </script>
			<div id="right-menu">
                            <div class="menu-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink" height="1.5em" version="1.1" viewBox="0 0 18 12" width="2.1em"><title/><desc/><defs/><g fill="none" fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g id="Core" transform="translate(-87.000000, -342.000000)"><g id="menu" transform="translate(87.000000, 342.000000)"><path d="M0,12 L18,12 L18,10 L0,10 L0,12 L0,12 Z M0,7 L18,7 L18,5 L0,5 L0,7 L0,7 Z M0,0 L0,2 L18,2 L18,0 L0,0 L0,0 Z" id="Shape"/></g></g></g></svg>
                            </div>
				<ul class="menu">
                                    <li><a href=# class="border-right">Search</a></li>
                    <?php if ($user == "Гость") { ?>
					<li><a href=# class="border-right">Menu</a>
                                            <ul class="submenu">
                                                <li></li>
                                                <li><a href="Log">Login</a></li>
                                                <li><a href="Reg">Reg</a></li>
                                                <li><a href=#>Basket</a></li>
                                            </ul>
					</li>
                                        <li><a href="#">Admin</a>
                                            <ul class="submenu">
                                                <li></li>
                                                <li><a href="Log">Login</a></li>
                                                <li><a href="Reg">Reg</a></li>
                                            </ul>
                                        </li>
                    <?php  } elseif ($user == "VladDevold") { ?>
                    <li><a href=#>Admin</a>
    					<ul class="submenu">
							<li></li>
                            <li><a href="newsEditor">NewEditor</a></li>
                            <li><a href="SaleEditor">SaleEditor</a></li>
                            <li><a href="M_Boots_Editor">М_Ботинки_Editor</a></li>
                            <li><a href="M_Cross_Editor">М_Кросовки_Editor</a></li>
                            <li><a href="M_Sandals_Editor">М_Сандали_Editor</a></li>
                            <li><a href="M_Tufli_Editor">М_Туфли_Editor</a></li>
                            <li><a href="W_BOSU_Editor">Ж_Босоножки_Editor</a></li>
                            <li><a href="W_BOTINKI_Editor">Ж_Ботинки_Editor</a></li>
                            <li><a href="W_KROSU_Editor">Ж_Кросовки_Editor</a></li>
                            <li><a href="W_TUFLI_Editor">Ж_Туфли_Editor</a></li>
                            <li><a href="dialogue">Диалог</a></li>
                            <li><a href="Exit">Выход</a></li>
						</ul>
					</li>
                    <?php  } elseif ($user == "Hanna") { ?>
                    <li><a href=#>Admin</a>
    					<ul class="submenu">
							<li></li>
                            <li><a href="newsEditor">NewEditor</a></li>
                            <li><a href="SaleEditor">SaleEditor</a></li>
                            <li><a href="M_Boots_Editor">М_Ботинки_Editor</a></li>
                            <li><a href="M_Cross_Editor">М_Кросовки_Editor</a></li>
                            <li><a href="M_Sandals_Editor">М_Сандали_Editor</a></li>
                            <li><a href="M_Tufli_Editor">М_Туфли_Editor</a></li>
                            <li><a href="W_BOSU_Editor">Ж_Босоножки_Editor</a></li>
                            <li><a href="W_BOTINKI_Editor">Ж_Ботинки_Editor</a></li>
                            <li><a href="W_KROSU_Editor">Ж_Кросовки_Editor</a></li>
                            <li><a href="W_TUFLI_Editor">Ж_Туфли_Editor</a></li>
                            <li><a href="dialogue">Диалог</a></li>
                            <li><a href="Exit">Выход</a></li>
						</ul>
					</li>
                    <?php } else { ?>
                    <li><a href=#>Menu</a>
        				<ul class="submenu">						
                            <li><a href="dialogue">Диалог</a></li>
                            <li><a href=#>Basket</a></li>
                            <li><a href="Exit">Выход</a></li>
						</ul>
					</li>
                    <?php } ?>
				</ul>
			</div>
    <script>
        $('.menu-icon').click(function(){
            $('.menu').toggle();
        });
    </script>
	</header>
    
<article>
    <div class="conteiner">
        <?php createContent(); ?>
    </div>
</article>





	<footer>
		<div id="foter-menu">
          <ul class="nav-menu">
            <li><a href="Home">Home</a></li>
            <li><a href="New">New</a></li>
            <li><a href="Women">Women</a></li>
            <li><a href="Men">Men</a></li>
            <li><a href="Sale">Sale</a></li>
            <li><a href="About">About us</a></li>
            <li><a href="Contacts">Contacts</a></li>
<!--            <li><a href="Reg">Reg</a></li>
            <li><a href="Log">Log in</a></li>-->
            
          </ul>
        </div>
		<div class="div-cont">
			<div class="facebook">
				<a href="http://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			</div>
			<div class="twitter">
				<a href="http://www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>
			<div class="linkedin">
				<a href="https://www.linkedin.com"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</div>
			<div class="google-plus">
				<a href="http://www.google.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
			</div>
			<div class="instagram">
				<a href="http://instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
			<div class="pinterest">
				<a href="http://pinterest.com"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
			</div>
			<div class="spotify">
				<a href="https://open.spotify.com"><i class="fa fa-spotify" aria-hidden="true"></i></a>
			</div>
			<div class="youtube">
				<a href="http://www.youtube.com"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			</div>
		</div>
		<span class="copyright" id="">© 2018 BAZAR</span>
		<span class="political" id="">Все права защищены</span>
	</footer>
    <!--<div class="container" style="margin-top: 0px">-->

         /. <?php // createContent(); ?> 

    <!--</div> /.container--> 


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>    
    <script src="https://unpkg.com/popper.js"></script>
    <script src="<?=$script?>">
    </script>
  </body>
</html>
				