{{-- <!DOCTYPE html>
<html>

<head>
   <title>Proceso</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.8/lottie.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">

         <style>
        .background-image {
            background-image: url('https://i.postimg.cc/tgVyL4n0/pexels-jeshoots-144230.jpg'); /* Reemplaza con la URL de tu imagen de fondo */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8); /* Ajusta el nivel de opacidad aquí */
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
        }
    </style>
    <!-- Styles -->
</head>

<body class="bg-black dark:bg-gray-800">


    <div class="font-[Poppins] bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee]">
        <header class="bg-white z-50 dark:bg-white">
            <nav class="flex justify-between items-center w-[92%] mx-auto">
                <div>
                    <img style="width: 180px; height:52px;" class="w-16 cursor-pointer"
                        src="https://i.postimg.cc/VLdG5DN4/logo-oberstaff-8.png" alt="...">
                </div>
                <div
                    class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[40vh] left-0 top-[-100%] md:w-auto w-full flex justify-center items-center px-5 z-40">
                    <ul class="flex md:flex-row text-center text-gray-900 flex-col md:items-center md:gap-[4vw] gap-8">
                        <li>
                            <a href="/proceso" class="hover:text-gray-500">Nuestro Proceso</a>
                        </li>
                        <li>
                            <a href="/precio" class="hover:text-gray-500">Precios</a>
                        </li>
                        <li>
                            <a href="/articles" class="hover:text-gray-500">Pildoras Remotas</a>
                        </li>
                        <li>
                            <a href="https://oberstaff.zohorecruit.com/jobs/Careers" class="hover:text-gray-500">¿Buscas
                                Trabajo?</a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center gap-6">
                    <a href="#contact"
                        class="transform transition-transform duration-300 hover:scale-110 cursor-pointer hidden md:block bg-pink-400 text-white px-5 py-2 rounded-full hover:bg-black hover:text-white">Contacto</a>
                    <ion-icon onclick="onToggleMenu(this)" name="menu"
                        class="text-3xl cursor-pointer md:hidden dark:text-black"></ion-icon>
                </div>
            </nav>
        </header>
    </div>


    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[6%]')
        }
    </script>
 

     <div class="flex h-screen justify-center items-center dark:bg-black bg-black background-image">
        <div class="background-overlay"></div>
        <div class="content mx-auto mt-10 flex justify-center px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-white dark:text-slate-200 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline"><span class="mb-1 block">Ahorra 70%</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200">
                        en costes de personal
                    </span>
                    </span>
                    <div class="mt-2">Con profesionales 
                        <span class="relative mt-3 whitespace-nowrap text-blue-600"><svg aria-hidden="true" viewBox="0 0 418 42"
                            class="absolute top-3/4 left-0 right-0 m-auto h-[0.58em] w-fit fill-pink-400"
                            preserveAspectRatio="none">
                            <path
                                d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                            </path>
                        </svg>
                        <span class="relative text-pink-400">en Sudamerica</span>
                        </span>
                    </div>
                </h1>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center">
                    <div class="rounded-md shadow">
                        <a href="/llamada" class="transform transition-transform duration-300 hover:scale-110 flex w-full items-center justify-center rounded-md border border-transparent bg-pink-400 px-8 py-3 text-base font-medium text-white hover:bg-white hover:text-black md:py-4 md:px-10 md:text-lg" href="#">
                            Agendemos una llamada 🚀
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
        <div class="py-16 bg-black">
            <div class="xl:container m-auto px-6 text-gray-500 md:px-12">
                <div class="text-center">
            
                     <h1
                class="text-4xl font-extrabold tracking-tight text-white dark:text-slate-200 sm:text-5xl md:text-6xl">
                <span class="block xl:inline"><span class="mb-1 block">Simplificamos nuestro flujo de trabajo en</span>
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200">
                    9 Pasos
                </span>
                </span>
               
            </h1>
                </div>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-10 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden hidden lg:block">
                            <img alt="feature" class="object-cover object-center h-full w-full"
                                src="https://i.postimg.cc/xdtFTXh2/2148923795.jpg">
                        </div>
                        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                            <div class="flex flex-col mb-10 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div id="contract"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 1: Descubriendo tus Necesidades</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="font-montserrat leading-relaxed text-base text-gray-100 text-center">
                                        En nuestra primera llamada, profundizamos en tus necesidades para las vacantes
                                        disponibles, iniciando así la construcción de tu equipo ideal.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-10 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div id="form"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 2: Transformando Ideas en Acción</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="leading-relaxed text-base text-gray-100 text-center">Nos proporcionas
                                        las características clave y el presupuesto máximo por perfil mediante un
                                        formulario detallado, convirtiendo tus ideas en acciones concretas que guían
                                        nuestro proceso.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-2 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="busqueda"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 3: En Busca del Talento Oculto</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Con tu visión en mente, buscamos
                                        talentos en portales internacionales y en nuestra base de datos de más de
                                        200,000 profesionales.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-10 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden hidden lg:block mt-10">
                            <img alt="feature" class="object-cover object-center h-full w-full"
                                src="https://i.postimg.cc/W3ZWm5t2/1232.jpg">
                        </div>
                        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                            <div class="flex flex-col mb-10 lg:items-center items-center p-2">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="busqueda2"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 4: Filtrando la Esencia del Talento</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">
                                        Validamos y filtramos perfiles con rigurosos criterios, realizando un primer
                                        corte para presentarte solo a los candidatos más prometedores y alineados con
                                        tus necesidades.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-10 lg:items-center items-center p-2">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="entrevista"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 5: Descubriendo a los Verdaderos Talentos</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">
                                        Los candidatos seleccionados pasan por pruebas exhaustivas, seguidas de un
                                        segundo corte que identifica de 20 a 30 perfiles para entrevistas con nuestro
                                        equipo de recursos humanos.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-10 lg:items-center items-center p-2">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="entrevista2"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 6: La Primera Conversación</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Organizamos entrevistas en las que
                                        nuestros expertos en recursos humanos evalúan la compatibilidad y habilidades de
                                        los candidatos, complementadas con una prueba psicotécnica para una evaluación
                                        completa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-2 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden hidden lg:block">
                            <img alt="feature" class="object-cover object-center h-full w-full"
                                src="https://i.postimg.cc/WbxdCS4R/7940.jpg">
                        </div>
                        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                            <div class="flex flex-col mb-10 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="entrevista3"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 7: Destacando la Excelencia</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Seleccionamos de 3 a 5 candidatos
                                        destacados para una segunda entrevista, afinando la selección para garantizar un
                                        ajuste perfecto con tu empresa.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-10 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="entrevista4"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 8: Mostrando el Talento</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Te presentamos a los candidatos
                                        seleccionados con una visión clara y detallada de sus competencias, experiencia
                                        y potencial para tu empresa.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-2 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="pago"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 9: La Decisión Final</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Te ayudamos a elegir al candidato
                                        ideal que cumpla con todas tus expectativas y requisitos, listo para integrarse
                                        a tu equipo y contribuir al éxito de tu empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>



  <div class="relative h-screen w-screen flex flex-col justify-center items-center gap-5 bg-black">
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://i.postimg.cc/TwVx3NcC/pexels-pixabay-159784.jpg');"></div>
        <div class="relative flex flex-col items-center gap-5">
            <h2 style="font-family: Montserrat;" class="text-5xl lg:text-7xl text-pink-400 font-bold dark:text-white">
                ¿Hablamos?
            </h2>
            <p style="font-family: Montserrat; font-size: 20px;" class="text-white dark:bg-black dark:text-white text-3xl max-w-xl">
                Agenda una llamada con nosotros para valorar tu caso.
            </p>
            <div class="relative inline-flex group">
                <div class="absolute transition-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-pink-400 via-pink-400 to-pink-400 rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt"></div>
                <a href="/llamada" title="llamada" class="transform transition-transform duration-300 hover:scale-110 relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-pink-400 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" role="button">
                    Agendemos una llamada
                </a>
            </div>
        </div>
    </div>


 <x-footer />


<script>
    var animation = bodymovin.loadAnimation({
    container: document.getElementById('contract'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'contrato.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('form'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'form.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('busqueda'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'busqueda.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('busqueda2'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'busqueda2.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('entrevista'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'entrevista.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('entrevista2'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'entrevista2.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('entrevista3'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'entrevista3.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('entrevista4'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'entrevista4.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('pago'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'pago.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });
    
    
</script>

</body>
</html> --}}





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
         @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.7.8/lottie.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Styles -->
       <style>
        .background-image {
            background-image: url('https://i.postimg.cc/tgVyL4n0/pexels-jeshoots-144230.jpg'); /* Reemplaza con la URL de tu imagen de fondo */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.8); /* Ajusta el nivel de opacidad aquí */
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body class="bg-black dark:bg-gray-800">

   
    <div class="font-[Poppins] bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee]">
        <header class="bg-white z-50 dark:bg-white">
            <nav class="flex justify-between items-center w-[92%] mx-auto">
                   <a href="/">
                    <img style="width: 180px; height:52px;" class="w-16 cursor-pointer"
                        src="https://i.postimg.cc/VLdG5DN4/logo-oberstaff-8.png" alt="logo">
                </a>
                <div
                    class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[40vh] left-0 top-[-100%] md:w-auto w-full flex justify-center items-center px-5 z-40">
                    <ul class="flex md:flex-row text-center text-gray-900 flex-col md:items-center md:gap-[4vw] gap-8">
                        <li>
                            <a href="/proceso" class="hover:text-gray-500">Nuestro Proceso</a>
                        </li>
                        <li>
                            <a href="/precio" class="hover:text-gray-500">Precios</a>
                        </li>
                        <li>
                            <a href="/articles" class="hover:text-gray-500">Pildoras Remotas</a>
                        </li>
                        <li>
                            <a href="https://oberstaff.zohorecruit.com/jobs/Careers" class="hover:text-gray-500">¿Buscas
                                Trabajo?</a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center gap-6">
                    <a href="/llamada"
                        class="transform transition-transform duration-300 hover:scale-110 cursor-pointer hidden md:block bg-pink-400 text-white px-5 py-2 rounded-full hover:bg-black hover:text-white">Contacto</a>
                    <ion-icon onclick="onToggleMenu(this)" name="menu"
                        class="text-3xl cursor-pointer md:hidden dark:text-black"></ion-icon>
                </div>
            </nav>
        </header>
    </div>


    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[6%]')
        }
    </script>
 

      <div class="flex h-96 justify-center items-center dark:bg-black bg-black background-image">
        <div class="background-overlay"></div>
        <div class="content mx-auto mt-10 flex justify-center px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold tracking-tight text-white dark:text-slate-200 sm:text-5xl md:text-6xl">
                    <span class="block xl:inline"><span class="mb-1 block">Ahorra 70%</span>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200">
                        en costes de personal
                    </span>
                    </span>
                    <div class="mt-2">Con profesionales 
                        <span class="relative mt-3 whitespace-nowrap text-blue-600"><svg aria-hidden="true" viewBox="0 0 418 42"
                            class="absolute top-3/4 left-0 right-0 m-auto h-[0.58em] w-fit fill-pink-400"
                            preserveAspectRatio="none">
                            <path
                                d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                            </path>
                        </svg>
                        <span class="relative text-pink-400">en Sudamerica</span>
                        </span>
                    </div>
                </h1>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center mb-10">
                    <div class="rounded-md shadow">
                        <a href="/llamada" class="transform transition-transform duration-300 hover:scale-110 flex w-full items-center justify-center rounded-md border border-transparent bg-pink-400 px-8 py-3 text-base font-medium text-white hover:bg-white hover:text-black md:py-4 md:px-10 md:text-lg" href="#">
                            Agendemos una llamada 🚀
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
        <div class="py-16 bg-black ">
            <div class="xl:container m-auto px-6 text-gray-500 md:px-12">
                <div class="text-center">
            
                     <h1
                class="text-4xl font-extrabold tracking-tight text-white dark:text-slate-200 sm:text-5xl md:text-6xl">
                <span class="block xl:inline"><span class="mb-1 block">Simplificamos nuestro flujo de trabajo en</span>
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200">
                    9 Pasos
                </span>
                </span>
               
            </h1>
                </div>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-10 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden hidden lg:block">
                            <img alt="feature" class="object-cover object-center h-full w-full"
                                src="https://i.postimg.cc/xdtFTXh2/2148923795.jpg">
                        </div>
                        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                            <div class="flex flex-col mb-10 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div id="contract"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 1: Descubriendo tus Necesidades</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="font-montserrat leading-relaxed text-base text-gray-100 text-center">
                                        En nuestra primera llamada, profundizamos en tus necesidades para las vacantes
                                        disponibles, iniciando así la construcción de tu equipo ideal.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-10 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div id="form"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 2: Transformando Ideas en Acción</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="leading-relaxed text-base text-gray-100 text-center">Nos proporcionas
                                        las características clave y el presupuesto máximo por perfil mediante un
                                        formulario detallado, convirtiendo tus ideas en acciones concretas que guían
                                        nuestro proceso.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-2 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="busqueda"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 3: En Busca del Talento Oculto</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Con tu visión en mente, buscamos
                                        talentos en portales internacionales y en nuestra base de datos de más de
                                        200,000 profesionales.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-10 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden hidden lg:block mt-10">
                            <img alt="feature" class="object-cover object-center h-full w-full"
                                src="https://i.postimg.cc/W3ZWm5t2/1232.jpg">
                        </div>
                        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                            <div class="flex flex-col mb-10 lg:items-center items-center p-2">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="busqueda2"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 4: Filtrando la Esencia del Talento</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">
                                        Validamos y filtramos perfiles con rigurosos criterios, realizando un primer
                                        corte para presentarte solo a los candidatos más prometedores y alineados con
                                        tus necesidades.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-10 lg:items-center items-center p-2">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="entrevista"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 5: Descubriendo a los Verdaderos Talentos</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">
                                        Los candidatos seleccionados pasan por pruebas exhaustivas, seguidas de un
                                        segundo corte que identifica de 20 a 30 perfiles para entrevistas con nuestro
                                        equipo de recursos humanos.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-10 lg:items-center items-center p-2">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="entrevista2"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 6: La Primera Conversación</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Organizamos entrevistas en las que
                                        nuestros expertos en recursos humanos evalúan la compatibilidad y habilidades de
                                        los candidatos, complementadas con una prueba psicotécnica para una evaluación
                                        completa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-2 mx-auto flex flex-wrap">
                        <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden hidden lg:block">
                            <img alt="feature" class="object-cover object-center h-full w-full"
                                src="https://i.postimg.cc/WbxdCS4R/7940.jpg">
                        </div>
                        <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                            <div class="flex flex-col mb-10 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="entrevista3"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 7: Destacando la Excelencia</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Seleccionamos de 3 a 5 candidatos
                                        destacados para una segunda entrevista, afinando la selección para garantizar un
                                        ajuste perfecto con tu empresa.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-10 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="entrevista4"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 8: Mostrando el Talento</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Te presentamos a los candidatos
                                        seleccionados con una visión clara y detallada de sus competencias, experiencia
                                        y potencial para tu empresa.</p>
                                </div>
                            </div>
                            <div class="flex flex-col mb-2 lg:items-center items-center">
                                <div
                                    class="w-60 h-60 inline-flex items-center justify-center rounded-full bg-white text-indigo-500 mb-5">
                                    <div style="width: 250px; height: 250px" id="pago"></div>
                                </div>
                                <div class="flex-grow">
                                    <h2
                                        class="text-center mt-4 text-2xl font-bold text-white dark:text-white md:text-4xl">
                                        Paso 9: La Decisión Final</h2>
                                    <p style="font-family: Montserrat; font-size: 18px;"
                                        class="text-center text-2x1 text-gray-100">Te ayudamos a elegir al candidato
                                        ideal que cumpla con todas tus expectativas y requisitos, listo para integrarse
                                        a tu equipo y contribuir al éxito de tu empresa.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>



  <div class="relative h-screen w-screen flex flex-col justify-center items-center gap-5 bg-black">
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://i.postimg.cc/TwVx3NcC/pexels-pixabay-159784.jpg');"></div>
        <div class="relative flex flex-col items-center gap-5">
            <h2 style="font-family: Montserrat;" class="text-5xl lg:text-7xl text-pink-400 font-bold dark:text-white">
                ¿Hablamos?
            </h2>
            <p style="font-family: Montserrat; font-size: 20px;" class="text-center text-white dark:text-white text-3xl max-w-xl">
                Agenda una llamada con nosotros para valorar tu caso.
            </p>
            <div class="relative inline-flex group">
                <div class="absolute transition-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-pink-400 via-pink-400 to-pink-400 rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt"></div>
                <a href="/llamada" title="llamada" class="transform transition-transform duration-300 hover:scale-110 relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-pink-400 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" role="button">
                    Agendemos una llamada
                </a>
            </div>
        </div>
    </div>




      <section class="py-12 bg-white dark:bg-white">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="text-center xl:flex xl:items-center xl:justify-between xl:text-left">
                    <div class="xl:flex xl:items-center xl:justify-start gap-8">
                        <img class="w-auto mx-auto h-7" src="https://i.postimg.cc/4xz1D07Q/logo-png-2-8.png"
                            alt="" />


                        <p class="mt-5 text-sm text-gray-900 xl:ml-6 xl:mt-0 ml-8 mr-6">Copyright 2024</p>
                    </div>

                    <div class="items-center mt-8 xl:mt-0 xl:flex xl:justify-end xl:space-x-8">
                        <ul class="flex flex-wrap items-center justify-center gap-x-4 gap-y-3 xl:justify-center">




                            <li>
                                <a href="https://oberstaff.com/terminos_y_condiciones_de_contratacion/" title=""
                                    class="text-sm text-gray-900 transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">Fulfillment</a>
                            </li>

                            <li>
                                <a href="https://oberstaff.com/politica-de-privacidad-y-cookies-de-oberstaff-com/" title=""
                                    class="text-sm text-gray-900 transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">Privacy
                                    Policy and Use of Cookies</a>
                            </li>


                        </ul>

                        <div class="w-full h-px mt-2 mb-5 xl:w-px xl:m-0 xl:h-6 bg-gray-50/20"></div>

                        <ul class="flex items-center justify-center space-x-8 xl:justify-end">
                            <li>
                                <a href="https://linkedin.com/company/oberstaff" target="_blank" title="linkedin"
                                    class="block text-gray-900 transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        viewBox="0,0,256,256" width="32px" height="32px">
                                        <g fill="#000000" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                            font-weight="none" font-size="none" text-anchor="none"
                                            style="mix-blend-mode: normal">
                                            <g transform="scale(8,8)">
                                                <path
                                                    d="M7.5,5c-1.36719,0 -2.5,1.13281 -2.5,2.5v17c0,1.36719 1.13281,2.5 2.5,2.5h17c1.36719,0 2.5,-1.13281 2.5,-2.5v-17c0,-1.36719 -1.13281,-2.5 -2.5,-2.5zM7.5,7h17c0.28516,0 0.5,0.21484 0.5,0.5v17c0,0.28516 -0.21484,0.5 -0.5,0.5h-17c-0.28516,0 -0.5,-0.21484 -0.5,-0.5v-17c0,-0.28516 0.21484,-0.5 0.5,-0.5zM10.4375,8.71875c-0.94922,0 -1.71875,0.76953 -1.71875,1.71875c0,0.94922 0.76953,1.71875 1.71875,1.71875c0.94922,0 1.71875,-0.76953 1.71875,-1.71875c0,-0.94922 -0.76953,-1.71875 -1.71875,-1.71875zM19.46875,13.28125c-1.43359,0 -2.38672,0.78516 -2.78125,1.53125h-0.0625v-1.3125h-2.8125v9.5h2.9375v-4.6875c0,-1.23828 0.24609,-2.4375 1.78125,-2.4375c1.51172,0 1.53125,1.39844 1.53125,2.5v4.625h2.9375v-5.21875c0,-2.55469 -0.54297,-4.5 -3.53125,-4.5zM9,13.5v9.5h2.96875v-9.5z">
                                                </path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.facebook.com/oberstaff/?locale=hi_IN" target="_blank"
                                    title=""
                                    class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="#000000">
                                        <path
                                            d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z">
                                        </path>
                                    </svg>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/oberstaff/" target="_blank" title=""
                                    class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="#000000">
                                        <path
                                            d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z">
                                        </path>
                                        <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                        <path
                                            d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z">
                                        </path>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@oberstaff" target="_blank" title=""
                                    class="block text-white transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">
                                    <svg class="w-6 h-6" clip-rule="evenodd" fill-rule="evenodd"
                                        stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/">
                                        <path
                                            d="m23 7c0-3.311-2.689-6-6-6h-10c-3.311 0-6 2.689-6 6v10c0 3.311 2.689 6 6 6h10c3.311 0 6-2.689 6-6zm-2 0v10c0 2.208-1.792 4-4 4h-10c-2.208 0-4-1.792-4-4v-10c0-2.208 1.792-4 4-4h10c2.208 0 4 1.792 4 4z" />
                                        <path
                                            d="m12 6.471h2c.567 1.124 1.214 1.877 2 2v2c-.723-.054-1.403-.32-2-1v4.812c0 .894-.123 1.623-.592 2.185-.269.324-.612.582-1.028.774-.416.191-.843.287-1.28.287-.871 0-1.606-.293-2.204-.879-.597-.586-.896-1.305-.896-2.156 0-.825.297-1.537.891-2.139.593-.602 1.297-.902 2.109-.902.129 0 .324.011.586.035v2.414c-.18-.141-.359-.211-.539-.211-.227 0-.421.083-.583.249s-.243.366-.243.601c0 .226.084.42.252.583.168.162.369.243.603.243.563 0 .924-.389.924-1.166z"
                                            fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <img class="w-auto mx-auto h-7 mt-5 lg:mt-0" src="https://i.postimg.cc/XYtS3h89/logo2-8.png"
                        alt="" />
                </div>
            </div>
        </section>



    <script>
    var animation = bodymovin.loadAnimation({
    container: document.getElementById('contract'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'contrato.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('form'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'form.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('busqueda'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'busqueda.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('busqueda2'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'busqueda2.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('entrevista'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'entrevista.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('entrevista2'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'entrevista2.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('entrevista3'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'entrevista3.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('entrevista4'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'entrevista4.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });

    var animation = bodymovin.loadAnimation({
    container: document.getElementById('pago'),
    renderer: 'svg',
    background: 'transparent',
    loop: true,
    autoplay: true,
    path: 'pago.json',
    width: 350, // ancho de la animación
    height: 350 // altura de la animación
    });
    
    
</script>
</body>
</html>
