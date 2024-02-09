<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your head content remains unchanged -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="shortcut icon" type="" image/x-icon" href="imagen/icon.ico.png">
    <link rel="stylesheet" href="siga.css">
</head>

<body>
                                          <div class="menu">
        <ion-icon name="menu-outline"></ion-icon>
        <ion-icon name="close-outline"></ion-icon>
    </div>

    <div class="barra-lateral">
        <div>
            <div class="nombre-pagina">
                <ion-icon id="cloud" name="cloud-outline"></ion-icon>
                <span>MODULOS</span>
            </div>

        </div>

        <nav class="navegacion">
            <ul>

                <li>
                    <a href="estudiante.html">
                        <ion-icon name="star-outline"></ion-icon>
                        <span>ESTUDIANTE</span>
                    </a>
                </li>

                <a href="informacion.html">
                    <ion-icon name="bookmark-outline"></ion-icon>
                    <span>INFORMACION</span>
                </a>
                <li>
                    <a id="inbox" href="correo.html">
                        <ion-icon name="mail-unread-outline"></ion-icon>
                        <span>MENSAJES</span>
                    </a>
                </li>

                <li>
                    <a href="academico.html">
                        <ion-icon name="paper-plane-outline"></ion-icon>
                        <span>ACADEMICO</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <span>CURSOS</span>
                    </a>
                </li>
                <li>

                </li>
                <li>
                    <a href="cambioClave.html">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                        <span>CAMBIO CLAVE</span>
                    </a>
                </li>


            </ul>
        </nav>

        <div>
            <div class="linea"></div>

            <div class="modo-oscuro">
                <div class="info">
                    <ion-icon name="moon-outline"></ion-icon>
                    <span>Drak Mode</span>
                </div>
                <div class="switch">
                    <div class="base">
                        <div class="circulo">

                        </div>
                    </div>
                </div>
            </div>

            <div class="usuario">

                <div class="info-usuario">
                    <div class="nombre-email">
                        <span class="nombre">PIKAEL</span>

                    </div>
                    <ion-icon name="ellipsis-vertical-outline"></ion-icon>
                </div>
            </div>
        </div>

    </div>
                                          
    <!-- Your existing HTML structure remains unchanged -->

    <main id="main-content">
        <h1>SOBRE NOSOTROS</h1>
        <p>Formar profesionales en el campo técnico y tecnológico, éticos y solidarios, capaces de contribuir al desarrollo socioeconómico y productivo del país, a la vigencia del orden legalmente constituido, a estimular la responsabilidad social, la vinculación con la colectividad y fortalecer el sistema investigativo en el nivel tecnológico.</p>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>

    <script>
        // Get the main content element
        const mainContent = document.getElementById('main-content');

        // Add click event listeners to the navigation links
        document.querySelectorAll('.navegacion a').forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default behavior (opening a new tab)

                // Load content dynamically based on the clicked link
                const targetPage = this.getAttribute('href');
                fetch(targetPage)
                    .then(response => response.text())
                    .then(html => {
                        mainContent.innerHTML = html;
                    })
                    .catch(error => console.error('Error fetching content:', error));
            });
        });
    </script>
</body>

</html>
