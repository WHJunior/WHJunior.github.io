<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Guardiões do Rio - Colecionando Ecossistemas </title>
    <link rel="stylesheet" type="text/css" href="css/pagina.css"/>
    <link rel="stylesheet" type="text/css" href="css/pagina2.css"/>
</head>
<body>


    <div class="menu-btn" id="menu-btn">
        &#9776;
    </div>

    <div class="sidebar" id="sidebar">
        <h2>Menu</h2>
        <a href="pagina1.html">Página 1</a>
        <a href="pagina2.html">Página 2</a>
        <a href="pagina3.html">Página 3</a>
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
                        <img src="img/capi7.jfif" alt="Imagem 2">
                        <h2>Capiween</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi9.jfif" alt="Imagem 3">
                        <h2>Capiburger</h2>
                    </div>
                    <div class="card-back">
                        <p>Parte de trás do card</p>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="card-front">
                        <img src="img/capi8.jfif" alt="Imagem 4">
                        <h2>Capilina</h2>
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
