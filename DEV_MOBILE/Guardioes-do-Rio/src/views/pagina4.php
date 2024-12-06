<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Guardiões do Rio - Colecionando Ecossistemas </title>
    <link rel="stylesheet" type="text/css" href="css/pagina1.css"/>
    <link rel="stylesheet" type="text/css" href="css/pagina.css"/>
    
</head>
<body>


    <div class="menu-btn" id="menu-btn">
        &#9776;
    </div>

    <div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <a href="pagina1.php">Página 1</a>
        <a href="pagina2.php">Página 2</a>
        <a href="pagina3.php">Página 3</a>
    </div>
    
    <div class="main-content" id="main-content">
        <div class="box">
            <div class="card-container" id="section1">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi1.webp" alt="Imagem 1">
                        <h2>CapiVIP</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi2.jpg" alt="Imagem 2">
                        <h2>Leprevara</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/cap3.jpg" alt="Imagem 3">
                        <h2>Capibelha</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi4.jpg" alt="Imagem 4">
                        <h2>Batiivara</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi5.webp" alt="Imagem 5">
                        <h2>Capidonutt</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi6.jpg" alt="Imagem 6">
                        <h2>Miguelvara</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        const menuBtn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');

        menuBtn.addEventListener('click', function() {
            sidebar.classList.toggle('open');
            mainContent.classList.toggle('menu-open');
        });
    </script>

</body>
</html>
