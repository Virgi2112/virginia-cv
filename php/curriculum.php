<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
            <script>
                alert("Por favor debes iniciar Sesión");
                window.location = "../index.php";
            </script>
        ';
    session_destroy();
    die();
}

session_destroy();

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curriculum Vitae Virginia Márquez</title>

    <link rel="stylesheet" href="../assets/css/new.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="hero"></div>

    <div class="contenedor">
        <div class="left_side">
            <!-- Encabezado -->
            <div class="profiletext">
                <img src="../assets/images/foto.webp" alt="" class="perfil" />
                <p class="name">VIRGINIA MÁRQUEZ</p>
                <p class="p">Estudiante de Informática</p>
            </div>

            <div class="content1">
                <div class="contactinfo">
                    <h3 class="title">Contacto</h3>
                    <ul>
                        <li>
                            <span class="fa fa-address-card" aria-hidden="true"></span>
                            <span class="text"> V-30.039 635 </span>
                        </li>
                        <li>
                            <span class="fa fa-globe" aria-hidden="true"></span>
                            <span class="text">San Juan de los Morros, Guárico, Venezuela</span>
                        </li>
                        <li>
                            <span class="fa fa-envelope-open" aria-hidden="true"></span>
                            <span class="text">virmarfi@gmail.com</span>
                        </li>
                        <li>
                            <span class="fa fa-whatsapp" aria-hidden="true"></span>
                            <span class="text">+58 416 571 0715</span>
                        </li>
                        <li>
                            <span class="fa fa-instagram" aria-hidden="true"></span>
                            <span class="text">@Virgi_2112</span>
                        </li>
                    </ul>
                </div>

                <div class="contactinfo-habilidades">
                    <h3 class="title">Habilidades</h3>
                    <ul>
                        <li>
                            <h4>Máster en diseño.</h4>
                        </li>
                        <li>
                            <h4>HTML5.</h4>
                        </li>
                        <li>
                            <h4>Máster en Programación.</h4>
                        </li>
                        <li>
                            <h4>Modelo profesional.</h4>
                        </li>
                        <li>
                            <h4>Curso de Inglés.</h4>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="Idioma">
                <h3 class="title">Idioma</h3>
                <ul>
                    <li>
                        <!-- Porcentaje 1 -->
                        <span class="p1">Español</span>
                        <span class="porciento-container">
                            <div style="width: 90%"></div>
                        </span>
                    </li>
                    <li>
                        <span class="p1">Inglés</span>
                        <span class="porciento-container">
                            <div style="width: 50%"></div>
                        </span>
                    </li>
                    <li>
                        <span class="p1">Francés</span>
                        <span class="porciento-container">
                            <div style="width: 35%"></div>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right-side">
            <div class="acerca-de">
                <h2 class="title2">Perfil</h2>
                <p>
                    Tengo 19 años, soy estudiante de Ingeniería en Sistemas, cursando
                    actualmente el 5to semestre de la carrera. Orientada a la creación
                    de contenido para las redes, el diseño web, la inteligencia
                    artificial y la seguridad Informática.<br />
                    <br />En plena investigación sobre la inteligencia artificial, la
                    seguridad informática y realizar cursos para incrementar los niveles
                    de preparación.
                </p>
            </div>

            <div class="acerca-de">
                <h2 class="title2"><br />Cursos</h2>
                <div class="box">
                    <div class="Estudios">
                        <p>D'Pavitas Models Academy</p>
                        <h5>2018</h5>
                        <h4>Modelo profesional</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="Estudios">
                        <p>Udemy</p>
                        <h5>Actualmente</h5>
                        <h4>Master en Diseño</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="Estudios">
                        <p>Lam English Academy</p>
                        <h5>2021</h5>
                        <h4>Curso Básico de Inglés</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="Estudios">
                        <p>Lam English Academy</p>
                        <h5>2022</h5>
                        <h4>Curso Intermedio de Inglés</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="Estudios">
                        <p>Escuelas Millonarias</p>
                        <h5>Actualmente</h5>
                        <h4>Máster en Programación Profesional.</h4>
                    </div>
                </div>
                <div class="box">
                    <div class="Estudios">
                        <p>SoloLearn</p>
                        <h5>2021</h5>
                        <h4>Curso de HTML5</h4>
                    </div>
                </div>
            </div>

            <div class="Skills">
                <h2 class="title2">Lenguajes de Programación</h2>

                <div class="box">
                    <h4>HTML5</h4>
                    <div class="porciento-container">
                        <div style="width: 70%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>CSS</h4>
                    <div class="porciento-container">
                        <div style="width: 60%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>JAVASCRIPT</h4>
                    <div class="porciento-container">
                        <div style="width: 55%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>C++</h4>
                    <div class="porciento-container">
                        <div style="width: 35%;"></div>
                    </div>
                </div>
                <div class="box">
                    <h4>PYTHON</h4>
                    <div class="porciento-container">
                        <div style="width: 90%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cerrar_sesion">
        <a href="cerrar_sesion.php">Cerrar Sesion</a>
    </div>
</body>

</html>
<html>