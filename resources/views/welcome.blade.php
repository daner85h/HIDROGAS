<!DOCTYPE html>
<html lang="es-CO">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>HIDROGAS</title>
</head>
<!-- tailwind.config.js -->
<!-- Aquí puedes escribir tu comentario 
<body>
    <img src="img/agua.jpg" height="500px" width="500px">
     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body> -->

<body>
    <div class="items-center justify-between flex bg- bg-opacity-90 px-12 py-4 my-4 mx-auto shadow-2xl w-11/12">
        <div class="text-2xl text-white font-semibold inline-flex items-center">
            <span>HIDROGAS</span>
        </div>
    </div>
    <!-- component -->
    <div class="bg-white">
        <nav class="border-b">
            <div class="container px-6 py-2 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <div>
                        <img src="img/logo.png" height="300px" width="300px" />

                    </div>
                    <div class="flex md:hidden">
                        <button type="button" aria-label="toggle menu"
                            class="text-gray-500 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd"
                                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="items-center hidden md:flex">
                    <div
                        class="flex flex-col mt-4 space-y-8 md:flex-row md:items-center md:mt-0 md:space-y-0 md:space-x-16">
                        <a href="#"
                            class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">INICIO</a>
                        <a href="#"
                            class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">NOSOTROS</a>
                        <a href="#"
                            class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">SERVICIOS</a>
                        <a href="#"
                            class="block font-medium text-gray-700 hover:text-gray-900 hover:underline">CONTACTENOS</a>

                        <button
                            class="flex items-center px-5 py-3 font-medium tracking-wide text-center text-white capitalize bg-blue-600 rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            PLATAFORMA ELECTRONICA
                        </button>
                    </div>
                </div>
            </div>
        </nav>
              <!-- REDES SOCIALES -->
        <div class="flex flex-col h-screen bg-center bg-cover bg-no-repeat">
            <div class="grid place-items-center mx-auto p-20 sm:my-auto bg-white rounded-3xl space-y-10">
                <h1 class="text-5xl font-semibold text-blue-500">NUESTRAS REDES SOCIALES</h1>
                <div class="flex items-center justify-center space-x-3">

                    <button
                        class="bg-blue-500 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                        <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                        <span>Facebook</span>
                    </button>
                    <button
                        class="bg-blue-300 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                        <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                        </svg>
                        <span>Twitter</span>
                    </button>
                    <button
                        class="bg-red-500 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                        <svg class="w-5 h-5 fill-current" img="img/YouTube.jpg" "
                            xmlns="img/YouTube.jpg">
                            <path
                                d="M12 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0zm5.01 4.744c.688 0 1.25.561 1.25 1.249a1.25 1.25 0 0 1-2.498.056l-2.597-.547-.8 3.747c1.824.07 3.48.632 4.674 1.488.308-.309.73-.491 1.207-.491.968 0 1.754.786 1.754 1.754 0 .716-.435 1.333-1.01 1.614a3.111 3.111 0 0 1 .042.52c0 2.694-3.13 4.87-7.004 4.87-3.874 0-7.004-2.176-7.004-4.87 0-.183.015-.366.043-.534A1.748 1.748 0 0 1 4.028 12c0-.968.786-1.754 1.754-1.754.463 0 .898.196 1.207.49 1.207-.883 2.878-1.43 4.744-1.487l.885-4.182a.342.342 0 0 1 .14-.197.35.35 0 0 1 .238-.042l2.906.617a1.214 1.214 0 0 1 1.108-.701zM9.25 12C8.561 12 8 12.562 8 13.25c0 .687.561 1.248 1.25 1.248.687 0 1.248-.561 1.248-1.249 0-.688-.561-1.249-1.249-1.249zm5.5 0c-.687 0-1.248.561-1.248 1.25 0 .687.561 1.248 1.249 1.248.688 0 1.249-.561 1.249-1.249 0-.687-.562-1.249-1.25-1.249zm-5.466 3.99a.327.327 0 0 0-.231.094.33.33 0 0 0 0 .463c.842.842 2.484.913 2.961.913.477 0 2.105-.056 2.961-.913a.361.361 0 0 0 .029-.463.33.33 0 0 0-.464 0c-.547.533-1.684.73-2.512.73-.828 0-1.979-.196-2.512-.73a.326.326 0 0 0-.232-.095z" />
                        </svg>
                        <span>Youtube</span>
                    </button>
                    <button
                        class="bg-pink-600 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                        <svg class="w-5 h-5 fill-current" role="img" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <title>Youtube icon</title>
                            <path
                                d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z" />
                        </svg>
                        <span>Pinterest</span>
                    </button>
                </div>
            </div>
        </div>
        <button
            class="md:container md:mx-auto px-9 py-6 font-center tracking-wide text-center text-white capitalize bg-blue-700 rounded hover:bg-blue-700 focus:outline-none focus:bg-blue-700 ">
            AGENDA TU PRIMERA CITA DE DIAGNOSTICO

        </button>
        <br>
        </br>

        <!-- imagenes rodantes component -->

        <body>

            <head>
                <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
                <script>
                    var cont = 0;

                    function loopSlider() {
                        var xx = setInterval(function() {
                            switch (cont) {
                                case 0: {
                                    $("#slider-1").fadeOut(600);
                                    $("#slider-2").delay(600).fadeIn(600);
                                    $("#sButton1").removeClass("bg-blue-800");
                                    $("#sButton2").addClass("bg-blue-800");
                                    cont = 1;

                                    break;
                                }
                                case 1: {

                                    $("#slider-2").fadeOut(300);
                                    $("#slider-1").delay(300).fadeIn(300);
                                    $("#sButton2").removeClass("bg-blue-800");
                                    $("#sButton1").addClass("bg-blue-800");

                                    cont = 0;

                                    break;
                                }


                            }
                        }, 9000);

                    }

                    function reinitLoop(time) {
                        clearInterval(xx);
                        setTimeout(loopSlider(), time);
                    }



                    function sliderButton1() {

                        $("#slider-2").fadeOut(600);
                        $("#slider-1").delay(600).fadeIn(600);
                        $("#sButton2").removeClass("bg-purple-800");
                        $("#sButton1").addClass("bg-purple-800");
                        reinitLoop(4000);
                        cont = 0

                    }

                    function sliderButton2() {
                        $("#slider-1").fadeOut(600);
                        $("#slider-2").delay(600).fadeIn(600);
                        $("#sButton1").removeClass("bg-purple-800");
                        $("#sButton2").addClass("bg-purple-800");
                        reinitLoop(4000);
                        cont = 1

                    }

                    $(window).ready(function() {
                        $("#slider-2").hide();
                        $("#sButton1").addClass("bg-purple-800");


                        loopSlider();
                    });
                </script>
            </head>

            <body>

                <div class="sliderAx h-auto">
                    <div id="slider-1" class="container mx-auto">
                        <p class="text-4xl text-blue-600 font-bold">INSPECCION DE VERTIMIENTOS</p>
                        <p class="text-3xl text-blue-600 font-bold">ASESORÍA DE TRÁMITES DE URBANIZADORES Y
                            CONSTRUCTORES EMPRESA DE ACUEDUCTO </p>
                        <div class="bg-cover bg-center  text-blue-800 py-24 px-10 width: 100%"
                            style="background-image: url(img/icajas.jpg)">
                            <div class="md:width:100%">
                                <a href="#"
                                    class="bg-blue-600 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contactanos</a>
                            </div>
                        </div> <!-- container -->
                        <br>
                    </div>

                    <div id="slider-2" class="container mx-auto">
                        <p class="text-3xl text-blue-600 font-bold">SOLICITUD DE MEDIDORES ADICIONALES,ACOMETIDAS PARA
                            NUEVOS USUARIOS, INSTALACIONES DE REDES HIDRÁULICAS</p>
                        <div class="bg-cover bg-center text-blue-800 text-blue-800 py-24 px-24 width: 100vw; "
                            style="background-image: url(img/nicagua.jpg)">
                            <a href="#"
                                class="bg-blue-600 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contactanos</a>
                        </div> <!-- container -->
                        <br>
                    </div>
                </div>
                <div class="flex justify-between w-12 mx-auto pb-2">
                    <button id="sButton1" onclick="sliderButton1()" class="bg-blue-600 rounded-full w-4 pb-2 "></button>
                    <button id="sButton2" onclick="sliderButton2() " class="bg-blue-600 rounded-full w-4 p-2"></button>
                </div>

            </body>

            <!-- VIDEOS DE INSPECCION -->
            <button
                class="md:container md:mx-auto px-9 py-8 font-center tracking-wide text-center text-white capitalize bg-blue-700 rounded hover:bg-blue-700 focus:outline-none focus:bg-blue-700 ">
                VÍDEO DE INSPECCIÓN DE DOMICILIARIAS CCTV
            </button>
            <br>
            </br>
            <!-- component -->
            <!-- This is an example component -->
            <div>
                <div class='flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto'>
                    <div class="flex flex-col m-5 ">
                        <div class="relative">
                            <video class="w-screen ">
                                <source class="w-30 h-30" src='https://www.w3schools.com/html/mov_bbb.mp4'
                                    type='video/mp4'>

                            </video>
                            <div class="absolute bottom-0 w-full bg-gradient-to-r from-black">
                                <span class="text-white text-xs uppercase px-2">
                                    red
                                </span>
                            </div>
                        </div>
                        <div>
                            <div>
                                <div class="relative h-1 bg-gray-200">
                                    <div class="absolute h-full w-1/2 bg-green-500 flex items-center justify-end">
                                        <div class="rounded-full w-3 h-3 bg-white shadow"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between text-xs font-medium text-gray-500 py-1">
                                <div>
                                    1:50
                                </div>
                                <div class="flex space-x-3 pt-5">
                                    <button class="focus:outline-none">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="19 20 9 12 19 4 19 20"></polygon>
                                            <line x1="5" y1="19" x2="5" y2="5"></line>
                                        </svg>
                                    </button>
                                    <button
                                        class="rounded-full w-8 h-8 flex items-center justify-center pl-0.5 ring-2 ring-green-500 focus:outline-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                        </svg>
                                    </button>
                                    <button class="focus:outline-none">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="5 4 15 12 5 20 5 4"></polygon>
                                            <line x1="19" y1="5" x2="19" y2="19"></line>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    3:00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <script>
                //JS to switch slides and replace text in bar//
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    var i;
                    var slides = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("description");
                    var captionText = document.getElementById("caption");
                    if (n > slides.length) {
                        slideIndex = 1
                    }
                    if (n < 1) {
                        slideIndex = slides.length
                    }
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" opacity-100", "");
                    }
                    slides[slideIndex - 1].style.display = "block";
                    dots[slideIndex - 1].className += " opacity-100";
                    captionText.innerHTML = dots[slideIndex - 1].alt;
                }
            </script>
        </body>


        <div class="container px-6 py-10 mx-auto md:py-16">
            <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
                <div class="w-full md:w-1/2">
                    <div class="max-w-lg">
                        <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                            ACERCA DE HIDROGAS
                        </h1>
                        <p class="mt-3 text-gray-800">
                            Somos una empresa Colombiana líder en el sector de construccion tecnificada en Redes
                            HIDROSANITARIAs,
                            y Diseños de obra..
                            <button
                                class="flex items-center px-5 py-3 font-medium tracking-wide text-center text-white capitalize bg-blue-600 rounded hover:bg-blue-600 focus:outline-none focus:bg-blue-500">
                                CONOCE MAS DE NOSOTROS

                                <div class="grid gap-6 mt-8 sm:grid-cols-2">
                                    <div class="flex items-center space-x-6 text-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>BRINDAMOS ASESORÍA ANTE URBANIZADORES CON E.A.A.B</span>
                                    </div>
                                    <div class="flex items-center space-x-6 text-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>INDEPENDIZACIÓN DEL SERVICIO DE ACUEDUCTO</span>
                                    </div>
                                    <div class="flex items-center space-x-6 text-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>DISEÑO DE PLANOS DE REDES HIDROSANITARIAS Y LLUVIAS PARA EDIFICACIONES
                                        </span>
                                    </div>
                                    <div class="flex items-center space-x-6 text-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>INSTALACIÓN DE REDES HIDROSANITARIAS Y LLUVIAS PARA EDIFICIACIONES</span>
                                    </div>
                                    <div class="flex items-center space-x-6 text-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>VÍDEO DE INSPECCIÓN DE DOMICILIARIAS CCTV</span>
                                    </div>
                                    <div class="flex items-center space-x-6 text-gray-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>PLANOS Y MEMORIAS DE CALCULO REQUERIDOS POR URBANIZADORES Y CONSTRUCTORES
                                            E.A.A.B.</span>
                                    </div>
                                </div>
                    </div>
                </div>
                </button>
                </p>
                <div class="flex items-center justify-center w-full md:w-1/2">
                    <img src="img/tecnico.PNG"=100" alt="car photo" class="w-full h-full max-w-2xl rounded" />
                </div>
            </div>
        </div>


        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                SOMOS LA SOLUCION A SUS PROBLEMA
            </h1 <div class="flex items-center mt-6 space-x-9">
            <BR>
            <button
                class="flex items-center px-6 py-2 font-medium tracking-wide text-white capitalize bg-blue-600 rounded-full hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                NUESTROS SERVICIOS

                <div class="flex items-center space-x-8 text-white-900">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 9"></path>
                    </svg>
                    <span> En HIDROGAS DISEÑOS Y CONSTRUCCIONES.brinda asesoría técnica para trámites relacionados a
                        Temporales de Obra, Estado Técnico de Redes, Aprobación de Conexiones Domiciliarias de
                        Alcantarillado, Solicitud de medidores definitivos, Independizaciones y Adición de Totalizadora
                        para proyectos de construcción.
                        La empresa busca orientar a las firmas constructoras, medianos y pequeños constructores sobre
                        los procedimientos, trámites y requisitos técnicos, para la instalación de los servicios de agua
                        y alcantarillado en los proyectos de vivienda en la ciudad de Bogotá y otros municipios donde la
                        Empresa de Acueducto y Alcantarillado de Bogotá ofrece el servicio de agua potable y saneamiento
                        básico.
                        Con nuestra asesoría el cliente tendrá una mayor eficiencia en la gestión de sus proyectos de
                        construcción, además de la confiabilidad de una empresa con una amplia trayectoria y, personal
                        técnico y profesional capacitado para aportar mayor competitividad a nuestros clientes.
                    </span>
                </div>
                <br>
                <br>

            </button>
            </br>

        </div>
        <div class="container px-6 py-10 mx-auto md:py-16">
            <div class="flex flex-col space-y-6 md:flex-row md:items-center md:space-x-6">
                <div class="flex items-center justify-center w-full md:w-1/2">
                    <img src="img/promero.jpg" alt="car photo" class="w-full h-full max-w-2xl rounded" />
                </div>
                <div class="w-full md:w-1/2">
                    <div class="max-w-md mx-auto">
                        <h1 class="text-2xl font-medium tracking-wide text-gray-800 md:text-4xl">
                            PORQUE NOSOTROS?
                        </h1>
                        <p class="mt-5 leading-7 text-gray-900">
                            ASESORÍA ANTE URBANIZADORES Y CONSTRUCTORES E.A.A.B
                            Asesoría técnica en procesos de independización de servicio, temporales de obra, estado
                            técnico
                            de redes, aprobación de conexiones domiciliarias de alcantarillado y medidores de
                            definitivos
                            para sus proyectos de construcción ante Urbanizadores y Constructores de la Empresa de
                            Acueducto
                            y Alcantarillado de Bogotá.
                            <br />
                            INDEPENDIZACIÓN DEL SERVICIO DE ACUEDUCTO
                            Asesoría y solicitud de medidores adicionales para su hogar, además de solicitud de servicio
                            de
                            acueducto y alcantarillado para usuarios nuevos, independización de redes de agua potable
                            para
                            aprobación de medidores nuevos.<br />
                            PLANOS Y MEMORIAS DE CALCULO REQUERIDOS POR URBANIZADORES Y CONSTRUCTORES E.A.A.B.
                            Planos de geolocalización de redes nuevas, existentes y externas de acueducto y
                            alcantarillado
                            para proyectos de construcción con las memorias de cálculo requeridas por la E.A.A.B. para
                            la
                            aprobación de la tubería domiciliaria de alcantarillado



                        </p>
                        <div class="grid gap-6 mt-8 sm:grid-cols-2">
                            <div class="flex items-center space-x-6 text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>• Inspección con equipo de CCTV: para conocer el estado de la tubería y hacer un
                                    reconocimiento de los puntos a rehabilitar</span>
                            </div>
                            <div class="flex items-center space-x-6 text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>• Limpieza con equipo de presión: usando un equipo de presión se realiza una
                                    limpieza exhaustiva para retirar todo tipo de sólidos y obstrucciones en la tubería
                                    para evitar una mala instalación de la manga.</span>
                            </div>
                            <div class="flex items-center space-x-6 text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>• Instalación de manga: se instala mangas para tuberías con diámetros de 100 mm a
                                    150 mm (4 a 6 pulgadas) con una longitud de reforzamiento de 1 a 1.20 metros
                                    lineales y espesor de 3 mm en un tiempo no mayor a 1 hora por cada reparación
                                    puntual.</span>
                            </div>
                            <div class="flex items-center space-x-6 text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>• Ejecución de la obra civil para instalación de nueva tubería domiciliaria de
                                    alcantarillado: excavación, instalación, cimentación y recuperación de espacio
                                    público y/o vial.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 
    =======================================================================

    formulario de contactenos 
    https://web3forms.com/
    =======================================================================
 -->
        <div class="flex items-center min-h-screen bg-gray-50 dark:bg-gray-900">
            <div class="container mx-auto">
                <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                    <div class="text-center">
                        <h1 class="my-3 text-4xl font-semibold text-blue-700 dark:text-gray-200">Contactanos</h1>
                        <p class="text-blue-700 dark:text-gray-500">Queremos saber de ti, escribenos para ayudarte con
                            más información..</p>
                    </div>
                    <div class="m-7">
                        <form action="https://api.web3forms.com/submit" method="POST" id="form">

                            <input type="hidden" name="apikey" value="YOUR_ACCESS_KEY_HERE">
                            <input type="hidden" name="subject" value="New Submission from Web3Forms">
                            <input type="checkbox" name="botcheck" id="" style="display: none;">


                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">NOMBRES Y
                                    APELLIDOS</label>
                                <input type="text" name="name" id="name" placeholder="NOMBRES Y APELLIDOS" required
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            </div>
                            <div class="mb-6">
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">CORREO
                                    ELECTRONICO </label>
                                <input type="email" name="email" id="email" placeholder="ejemplo@company.com" required
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            </div>
                            <div class="mb-6">

                                <label for="phone" class="text-sm text-gray-600 dark:text-gray-400">NUMERO DE TELEFONO
                                </label>
                                <input type="text" name="phone" id="phone" placeholder="+1 (555) 1234-567" required
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            </div>
                            <div class="mb-6">
                                <label for="mensaje" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">TU
                                    MENSAJE</label>

                                <textarea rows="5" name="message" id="message" placeholder="su mensaje"
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500"
                                    required></textarea>
                            </div>
                            <div class="mb-6">
                                <button type="submit"
                                    class="w-full px-3 py-4 text-white bg-blue-700 rounded-md focus:bg-indigo-600 focus:outline-none">Ponte
                                    en contacto con nosotros</button>
                            </div>
                            <p class="text-base text-center text-gray-400" id="result">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- localizacion -->
        <section class="text-gray-600 body-font relative">
            <div class="absolute inset-0 bg-gray-300">
                <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
                    scrolling="no"
                    src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                    style=""></iframe>
            </div>
            <div class="container px-5 py-24 mx-auto flex">
                <div
                    class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">

                </div>
            </div>
        </section>

        <script>
            const form = document.getElementById('form');
            const result = document.getElementById('result');

            form.addEventListener('submit', function(e) {
                const formData = new FormData(form);
                e.preventDefault();
                var object = {};
                formData.forEach((value, key) => {
                    object[key] = value
                });
                var json = JSON.stringify(object);
                result.innerHTML = "Please wait..."

                fetch('https://api.web3forms.com/submit', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                        },
                        body: json
                    })
                    .then(async (response) => {
                        let json = await response.json();
                        if (response.status == 200) {
                            result.innerHTML = json.message;
                            result.classList.remove('text-gray-500');
                            result.classList.add('text-green-500');
                        } else {
                            console.log(response);
                            result.innerHTML = json.message;
                            result.classList.remove('text-gray-500');
                            result.classList.add('text-red-500');
                        }
                    })
                    .catch(error => {
                        console.log(error);
                        result.innerHTML = "Something went wrong!";
                    })
                    .then(function() {
                        form.reset();
                        setTimeout(() => {
                            result.style.display = "none";
                        }, 5000);
                    });
            })
        </script>

        <!-- component -->
        <div class="bg-gray-100">
            <div class="max-w-6xl m-auto text-gray-800 flex flex-wrap justify-center">
                <div class="p-5 w-48 ">
                    <div class="text-xs uppercase text-gray-500 font-medium">INICIO </div>
                    <a class="my-3 block" href="/#">Servicios <span
                            class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Productos
                        <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">sobre
                        nosotros <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                        href="/#">cotizaciones
                        <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Nuevas
                        solicitudes
                </div>
                <div class="p-5 w-48 ">
                    <div class="text-xs uppercase text-gray-500 font-medium">SUCURSAL ELECTRONICIA</div>
                    <a class="my-3 block" href="/#">Inicio Sesión <span
                            class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">crear
                        cuenta
                        <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                        href="/#">recordar
                        contraseña </a>

                </div>
                <div class="p-5 w-48 ">
                    <div class="text-xs uppercase text-gray-500 font-medium">Recursos</div>
                    <a class="my-3 block" href="/#">Documentacion <span
                            class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                        href="/#">Tutoriales
                        <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Soporte
                        en
                        linea </a>
                </div>
                <div class="p-5 w-48 ">
                    <div class="text-xs uppercase text-gray-500 font-medium">Productos</div>
                    <a class="my-3 block" href="/#">nuestros productos <span
                            class="text-teal-600 text-xs p-1"></span></a>

                </div>
                <div class="p-5 w-48 ">
                    <div class="text-xs uppercase text-gray-500 font-medium">APoyo</div>
                    <a class="my-3 block" href="/#">centro de ayuda <span
                            class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block" href="/#">Politicas
                        de
                        privacidad <span class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                        href="/#">noticias de interes
                        <span class="text-teal-600 text-xs p-1"></span></a>
                </div>
                <div class="p-5 w-48 ">
                    <div class="text-xs uppercase text-gray-500 font-medium">Contactos</div>
                    <a class="my-3 block" href="/#">Carrera 21a 28 32 sur,Bogota,Colombia<span
                            class="text-teal-600 text-xs p-1"></span></a><a class="my-3 block"
                        href="/#">servicioalcliente@hidrogas.com <span class="text-teal-600 text-xs p-1"></span></a>
                </div>
            </div>
        </div>

        <div class="bg-gray-100 pt-2 ">
            <div
                class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col
       md:flex-row max-w-6xl">
                <div class="mt-2">© Copyright 2021. All Rights Reserved.</div>
                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
                            height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                            xmlns:serif="http://www.serif.com/"
                            style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                            <path id="Twitter" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                   5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                   -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                   0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                   -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                   0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                   -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                   0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                   -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                   -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                   1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                   -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                   6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                   0.771,-0.67 1.054,-1.093Z"></path>
                        </svg>
                    </a>
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
                            height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                            xmlns:serif="http://www.serif.com/"
                            style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                            <path id="Facebook" d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                   5.373,-12 12,-12c6.627,0 12,5.373
                   12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                   0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                   -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"></path>
                        </svg>
                    </a>
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
                            height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                            xmlns:serif="http://www.serif.com/"
                            style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                            <g id="Layer_1">
                                <circle id="Oval" cx="12" cy="12" r="12"></circle>
                                <path id="Shape" d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                      -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                      -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                      -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                      -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                      0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                      2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                      1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                      0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                      -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                      -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                      -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                      0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                      0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z" style="fill: rgb(255, 255, 255);"></path>
                            </g>
                        </svg>
                    </a>
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
                            height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                            xmlns:serif="http://www.serif.com/"
                            style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                            <path id="Shape" d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                   3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                   -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                   -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                   -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                   0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                   3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                   -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                   -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                   1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                   -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                   -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                   0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                   0.4,1.5l0,4.5l2.9,0Z"></path>
                        </svg>
                    </a>
                    <a href="/#" class="w-6 mx-1">
                        <svg class="fill-current cursor-pointer text-gray-500 hover:text-gray-400" width="100%"
                            height="100%" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve"
                            xmlns:serif="http://www.serif.com/"
                            style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;">
                            <path id="Combined-Shape" d="M12,24c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12c-6.627,0
                   -12,5.373 -12,12c0,6.627 5.373,12 12,12Zm6.591,-15.556l-0.722,0c-0.189,0
                   -0.681,0.208 -0.681,0.385l0,6.422c0,0.178 0.492,0.323
                   0.681,0.323l0.722,0l0,1.426l-4.675,0l0,-1.426l0.935,0l0,-6.655l-0.163,0l-2.251,8.081l-1.742,0l-2.222,-8.081l-0.168,0l0,6.655l0.935,0l0,1.426l-3.74,0l0,-1.426l0.519,0c0.203,0
                   0.416,-0.145 0.416,-0.323l0,-6.422c0,-0.177 -0.213,-0.385
                   -0.416,-0.385l-0.519,0l0,-1.426l4.847,0l1.583,5.704l0.042,0l1.598,-5.704l5.021,0l0,1.426Z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

</html>
