<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Logo_Prov_Trusty.png" type="image/x-icon">
    <link rel="stylesheet" href="css/layout/navbar.css">
    <link rel="stylesheet" href="css/layout/sidebar.css">
    <script src="js/template.js"></script>
    <script src="https://kit.fontawesome.com/a9e19848a9.js" crossorigin="anonymous"></script>
    <title>Prov-Trusty</title>

</head>

<body>
    <header class="header">
        <div class="box">
            <i class="fa-solid fa-bars"></i>
            <button class="button-show-menu">
                <img src="img/Logo_Prov_Trusty.png" alt="Icon-Prov-Trusty" srcset="">
                <i class="fa-solid fa-play"></i>
                <div class="show-menu">
                    <div class="cont-menu">
                        <a href="">Perfil</a>
                        <a href="">Salir</a>
                    </div>
                </div>
            </button>

        </div>
    </header>
    <div class="content">
        <div class="sidebar">
            <div class="box-user">

                <img src="img/Logo_Prov_Trusty.png" alt="" srcset="">
                <h3>Nombre</h3>
            </div>
            <div class="box-candidato">
                <div class="section">
                    <img src="img/icons/biografia.png" alt="" width="17%" srcset="">
                    <h4>Candidatos</h4>
                </div>


                <table>
                    <tbody>
                        <tr>
                            <td colspan="2"> <a href="#"> Registrar </a></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <a href="#"> Consultar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="box-empresa">
                    <div class="section">

                        <img src="img/icons/edificio-de-oficinas.png" width="20%" alt="" srcset="">
                        <h4>Empresas</h4>
                    </div>
                    <table>
                        <tbody>
                        <tr>
                            <td colspan="2"> <a href="#"> Registrar </a></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <a href="#"> Consultar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            {{-- <div class="box-empresa">
                    <div class="section">

                        <img src="img/icons/edificio-de-oficinas.png" width="20%" alt="" srcset="">
                        <h4>Empleados</h4>
                    </div>
                    <table>
                        <tbody>
                        <tr>
                            <td colspan="2"> <a href="#"> Registrar </a></td>
                        </tr>
                        <tr>
                            <td colspan="2"> <a href="#"> Consultar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div> --}}
            <div class="box-ayuda">
                    <a href="#">
                        <i class="fa-solid fa-circle-exclamation"></i>
                        <p> Ayuda</p>
                    </a>
            </div>


        </div>
        <div class="box-content">
            <div class="box-info">
                @yield('nabvar')
            </div>
        </div>
    </div>


</body>

</html>