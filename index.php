<?php

include_once "php/db.php";
if (!empty($_POST)) {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $ciudad = $_POST["ciudad"];
    $genero = $_POST["genero"];
    $mas = $_POST["mas"];
    $obj1 = $_POST["obj1"];
    $obj2 = $_POST["obj2"];
    $obj3 = $_POST["obj3"];

    $sql = "insert into data(nombre,edad,ciudad,genero,mas,obj1,obj2,obj3) 
    values(:nombre,:edad,:ciudad,:genero,:mas,:obj1,:obj2,:obj3)";
    $sql = $conn->prepare($sql);
    $sql->bindParam(':nombre', $nombre);
    $sql->bindParam(':edad', $edad);
    $sql->bindParam(':ciudad', $ciudad);
    $sql->bindParam(':genero', $genero);
    $sql->bindParam(':mas', $mas);
    $sql->bindParam(':obj1', $obj1);
    $sql->bindParam(':obj2', $obj2);
    $sql->bindParam(':obj3', $obj3);
    $sql->execute();
}
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENFOCO</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/de7dd8841f.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="img/enfocoLogo.png" sizes="16x16">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body>
    <div id="block" class="hidden">
    </div>
    <header>
        <div class=" logo">
            <a href="#sectionHome">
                <img src="img/enfocoLogo.png" alt="ENFOCO">
                ENFOCO
            </a>
        </div>
        <div class="buttonsHeader">
            <button id="buttonLanguage">
                <i class="fa-solid fa-language fa-2xl"></i>
            </button>
            <button id="buttonMenu">
                <i class="fa-solid fa-bars fa-2xl"></i>
                <!-- <i class="fa-solid fa-x fa-2xl hidden"></i> -->
            </button>
        </div>
    </header>
    <menu id="menu" class="hidden">
        <ul>
            <li>
                <a href="#nosotros">
                    Quienes somos
                    <i class="fa-solid fa-people-group"></i>
                </a>
            </li>
            <li>
                <a href="#registro">
                    Registro
                    <i class="fa-solid fa-right-to-bracket"></i>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    Contacto
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </li> -->
            <li class="terms">
                <small>
                    <a href="terms.php">
                        Terminos y Condiciones.
                    </a>
                </small>
                <small>
                    <a href="privacy.php">
                        Aviso de Privacidad.
                    </a>
                </small>
                <small>
                    <div id="copyright">&copy; 2023 ENFOCO - All Rights Reserved.</div>
                </small>
            </li>
        </ul>
    </menu>
    <div class="menuLang hidden" id="menuLang">
        <ul>
            <li>
                <a href="en/">
                    EN
                </a>
            </li>
            <li>
                <a href="../">
                    ES
                </a>
            </li>
        </ul>
    </div>
    <main>
        <section id="sectionHome" class="section1">
            <h2>
                ¡Bienvenido a ENFOCO!
            </h2>
            <img src="img/imgHome.jpg" alt="">
            <p>
                Encuentra la motivacion para avanzar con ENFOCO
                <br>
                <a class="buttonRegistro" href="#registro">
                    Registro
                    <i class="fa-solid fa-right-to-bracket"></i>
                </a>
            </p>
        </section>
        <section id="nosotros" class="section2">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0193B8" fill-opacity="1" d="M0,224L21.8,240C43.6,256,87,288,131,298.7C174.5,309,218,299,262,277.3C305.5,256,349,224,393,202.7C436.4,181,480,171,524,160C567.3,149,611,139,655,122.7C698.2,107,742,85,785,106.7C829.1,128,873,192,916,192C960,192,1004,128,1047,117.3C1090.9,107,1135,149,1178,170.7C1221.8,192,1265,192,1309,197.3C1352.7,203,1396,213,1418,218.7L1440,224L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg> -->
            <p>
                Estamos emocionados de tenerte con nosotros y esperamos que disfrutes de nuestra plataforma, la cual
                esta creada para ayudarte a encontrar la motivación adecuada para optimizar tu tiempo.
                <br>
                Nos esforzamos por ofrecerte la mejor experiencia posible y queremos que te sientas como en casa.
                <br>
                Si necesitas ayuda en cualquier momento, no dudes en ponerte en contacto con nosotros.
                <br>
                ¡Gracias por elegirnos y esperamos que disfrutes de tu tiempo en nuestra aplicación!
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#0193B8" fill-opacity="1" d="M0,96L34.3,117.3C68.6,139,137,181,206,213.3C274.3,245,343,267,411,266.7C480,267,549,245,617,245.3C685.7,245,754,267,823,229.3C891.4,192,960,96,1029,80C1097.1,64,1166,128,1234,154.7C1302.9,181,1371,171,1406,165.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
                </path>
            </svg>
        </section>
        <section id="registro" class="section3">
            <h3>REGISTRO</h3>
            <form action="index.php" method="POST">
                <label for="#">Completa los siguientes datos.</label>
                <input type="text" placeholder="Nombre Completo" required name="nombre">
                <input type="number" placeholder="Edad" inputmode="numeric" required name="edad">
                <input type="text" placeholder="Ciudad" required name="ciudad">
                <select name="genero" id="">
                    <option value="0" style="display: none;">Genero</option>
                    <option value="1">Hombre</option>
                    <option value="2">Mujer</option>
                    <option value="3">Otro</option>
                </select>
                <br>
                <label for="#">Cuentanos sobre ti...</label>
                <textarea name="mas" id="" placeholder="Cuales son tus gustos, pasatiempos, debilidades,fortalezas,..." required></textarea>
                <br>
                <label for="#">Coloca 3 objetivos en orden prioritario.</label>
                <input type="text" placeholder="1.- ..." required name="obj1">
                <input type="text" placeholder="2.- ..." required name="obj2">
                <input type="text" placeholder="3.- ..." required name="obj3">
                <button type="submit">
                    Enviar registro
                </button>
            </form>
        </section>
    </main>
    <script src="js/index.js"></script>

</body>

</html>