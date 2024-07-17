<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy and Cookies Policy for Oberstaff.com</title>
      @vite('resources/css/app.css')
    @vite('resources/js/app.js')
      <script src="https://cdn.tailwindcss.com"></script>

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

</head>
<body class="bg-white dark:bg-white text-gray-800">


         <div class="font-[Poppins]">
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
                        class="cursor-pointer hidden md:block bg-pink-400 text-white px-5 py-2 rounded-full hover:bg-black hover:text-white">Contacto</a>
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



    <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-2xl font-bold mb-6">Política de Privacidad y Cookies para Oberstaff.com</h1>
            <p class="mb-4">En Oberstaff, una de nuestras principales prioridades es la privacidad de nuestros visitantes. Este documento de Política de Privacidad contiene los tipos de información que se recopilan y registran en Oberstaff.com y cómo los utilizamos.</p>
            <p class="mb-4">Si tienes preguntas adicionales o necesitas más información sobre nuestra Política de Privacidad, no dudes en contactarnos.</p>
            
            <h2 class="text-xl font-semibold mb-4">Archivos de Registro</h2>
            <p class="mb-4">Oberstaff sigue un procedimiento estándar de uso de archivos de registro. Estos archivos registran a los visitantes cuando visitan sitios web. Todas las compañías de hosting hacen esto y forman parte del análisis de los servicios de hosting. La información recopilada por los archivos de registro incluye direcciones de protocolo de Internet (IP), tipo de navegador, proveedor de servicios de Internet (ISP), fecha y hora, páginas de referencia/salida y, posiblemente, el número de clics. Estos datos no están vinculados a ninguna información que sea personalmente identificable. El propósito de la información es analizar tendencias, administrar el sitio, rastrear el movimiento de los usuarios en el sitio web y recopilar información demográfica.</p>
            
            <h2 class="text-xl font-semibold mb-4">Cookies y Balizas Web</h2>
            <p class="mb-4">Como cualquier otro sitio web, Oberstaff utiliza 'cookies'. Estas cookies se utilizan para almacenar información, incluidas las preferencias de los visitantes y las páginas del sitio web que el visitante accedió o visitó. La información se utiliza para optimizar la experiencia de los usuarios personalizando el contenido de nuestras páginas web según el tipo de navegador de los visitantes y/o otra información.</p>
            
            <h2 class="text-xl font-semibold mb-4">Cookie de Google DoubleClick DART</h2>
            <p class="mb-4">Google es uno de los terceros proveedores en nuestro sitio. También utiliza cookies, conocidas como cookies DART, para publicar anuncios a nuestros visitantes basados en su visita a www.oberstaff.com y otros sitios en Internet. Sin embargo, los visitantes pueden optar por rechazar el uso de las cookies DART visitando la Política de Privacidad de la red de anuncios y contenido de Google en la siguiente URL – <a href="https://policies.google.com/technologies/ads" class="text-blue-500 hover:underline">https://policies.google.com/technologies/ads</a></p>
            
            <h2 class="text-xl font-semibold mb-4">Nuestros Socios Publicitarios</h2>
            <p class="mb-4">Algunos de los anunciantes en nuestro sitio pueden usar cookies y balizas web. Nuestros socios publicitarios se enumeran a continuación. Cada uno de nuestros socios publicitarios tiene su propia Política de Privacidad para sus políticas sobre los datos del usuario, que puedes consultar en sus respectivos sitios web.</p>
            <ul class="list-disc ml-8 mb-4">
                <li>Google</li>
                <li>Facebook</li>
                <li>Instagram</li>
                <li>TickTock</li>
                <li>Linkedin</li>
                <li>Twitter</li>
            </ul>
            
            <h2 class="text-xl font-semibold mb-4">Políticas de Privacidad</h2>
            <p class="mb-4">Puedes consultar esta lista para encontrar la Política de Privacidad de cada uno de los socios publicitarios de Oberstaff.</p>
            <p class="mb-4">Los servidores o redes publicitarias de terceros utilizan tecnologías como cookies, JavaScript o balizas web que se utilizan en sus respectivos anuncios y enlaces que aparecen en Oberstaff, y que se envían directamente al navegador de los usuarios. Ellos reciben automáticamente tu dirección IP cuando esto ocurre. Estas tecnologías se utilizan para medir la efectividad de sus campañas publicitarias y/o para personalizar el contenido publicitario que ves en los sitios web que visitas.</p>
            <p class="mb-4">Ten en cuenta que Oberstaff no tiene acceso ni control sobre estas cookies que son utilizadas por anunciantes de terceros.</p>
            
            <h2 class="text-xl font-semibold mb-4">Políticas de Privacidad de Terceros</h2>
            <p class="mb-4">La Política de Privacidad de Oberstaff no se aplica a otros anunciantes o sitios web. Por lo tanto, te aconsejamos que consultes las respectivas Políticas de Privacidad de estos servidores de anuncios de terceros para obtener información más detallada. Puede incluir sus prácticas e instrucciones sobre cómo optar por no participar en ciertas opciones.</p>
            <p class="mb-4">Puedes optar por desactivar las cookies a través de las opciones individuales de tu navegador. Para obtener información más detallada sobre la gestión de cookies con navegadores web específicos, se puede encontrar en los respectivos sitios web de los navegadores. ¿Qué son las cookies?</p>
            
            <h2 class="text-xl font-semibold mb-4">Información para Niños</h2>
            <p class="mb-4">Otra parte de nuestra prioridad es agregar protección para los niños mientras usan Internet. Alentamos a los padres y tutores a observar, participar y/o monitorear y guiar su actividad en línea.</p>
            <p class="mb-4">Oberstaff no recopila intencionalmente ninguna Información de Identificación Personal de niños menores de 13 años. Si crees que tu hijo proporcionó este tipo de información en nuestro sitio web, te recomendamos encarecidamente que nos contactes de inmediato y haremos todo lo posible para eliminar rápidamente dicha información de nuestros registros.</p>
            
            <h2 class="text-xl font-semibold mb-4">Política de Privacidad en Línea Solamente</h2>
            <p class="mb-4">Esta Política de Privacidad se aplica únicamente a nuestras actividades en línea y es válida para los visitantes de nuestro sitio web con respecto a la información que compartieron y/o recopilaron en Oberstaff. Esta política no es aplicable a ninguna información recopilada fuera de línea o a través de canales distintos a este sitio web.</p>
            
            <h2 class="text-xl font-semibold mb-4">Consentimiento</h2>
            <p class="mb-4">Al utilizar nuestro sitio web, aceptas nuestra Política de Privacidad y aceptas sus Términos y Condiciones.</p>
            
            <p class="mt-8">Actualizado: 17 de noviembre de 2022</p>
            <p class="mt-4">© 2022 Oberstaff. Todos los derechos reservados.</p>
        </div>
    </div>


  <section class="py-12 bg-white dark:bg-white">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="text-center xl:flex xl:items-center xl:justify-between xl:text-left">
                    <div class="xl:flex xl:items-center xl:justify-start gap-8">
                        <img class="w-auto mx-auto h-7" src="https://i.postimg.cc/4xz1D07Q/logo-png-2-8.png"
                            alt="" />


                        <p class="mt-5 text-sm text-gray-900 xl:ml-6 xl:mt-0 ml-8 mr-6">© Copyright 2024</p>
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

    
</body>
</html>
