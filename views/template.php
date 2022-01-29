<!DOCTYPE html>
<html>
<head>
    <title>GameHub</title>
    <link rel="stylesheet" href="estilos.css">
    <div class="page">
        <div class="navbar">
            
            <a href="index.php?action=principal"  class="logo">
            <img src="images/logo.png" width="100px" height="100px">
            </a>

            <div class="banner3d">
                <iframe src='https://my.spline.design/macbookprocopy-fa8d6b1bfa5634447de3da0c41d721b5/' frameborder='0' width='100%' height='100%' class="banner3d"></iframe>

            </div>
            

            <ul>
                <li><a href="index.php?action=juego1">Juego 1</a></li>
                <li><a href="index.php?action=juego2">Juego 2</a></li>
                <li><a href="index.php?action=juego3">Juego 3</a></li>
                <li><a href="index.php?action=juego4">Juego 4</a></li>
                <li><a href="index.php?action=juego5">Juego 5</a></li>
            </ul>
        </div>
    </div>
</head>
<body>
    <section>
        <?php

        $mvc= new MvcController();
        $mvc->enlacesPagControl();

        
        ?>
    </section>
    
</body>
</html>