<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precio</title>
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
</head>

<body>


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
 
 <section id="servicio" class="block bg-black sm:py-10 lg:py-10">
            <div id="precio" class="py-10 bg-black sm:py-16 lg:py-12">
                <div id="pricesSection"></div>
            </div>
        </section>


          <div class="relative h-screen w-screen flex flex-col justify-center items-center gap-5 bg-black">
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://i.postimg.cc/G2C0VJ1Y/pexels-vlada-karpovich-4050291.jpg');"></div>
        <div class="relative flex flex-col items-center gap-5">
            <h2 style="font-family: Montserrat;" class="text-center text-5xl lg:text-7xl text-pink-400 font-bold dark:text-white">
                ¿En qué te podemos ayudar?
            </h2>
            <p style="font-family: Montserrat; font-size: 18px;" class="text-center text-white  dark:text-white text-3xl max-w-xl">
                Agenda una llamada con nosotros para valorar tu caso. No pierdes nada y tienes mucho que ganar.
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



<script>
    document.addEventListener('DOMContentLoaded', function() {
    fetch('https://ipapi.co/json/')
        .then(response => response.json())
        .then(data => {
            let countryName;
            console.log(data)
            if (data && data.timezone) {
                if (data.timezone.includes('America')) {
                    countryName = "Puerto Rico";
                } else if (data.timezone.includes('Europe')) {
                    countryName = "España";
                } else {
                    countryName = "Otro";
                }

                showPricesForCountry(countryName, data);
            } else {
                console.log('Error al obtener el país:', data);
                showPricesForCountry("España", data);
            }
        })
        .catch(error => console.error('Error:', error));
});



document.addEventListener('DOMContentLoaded', function() {
    fetch('https://ipapi.co/json/')
        .then(response => response.json())
        .then(data => {
            let countryName;
            console.log(data)
            if (data && data.timezone) {
                if (data.timezone.includes('America')) {
                    countryName = "Puerto Rico";
                } else if (data.timezone.includes('Europe')) {
                    countryName = "España";
                } else {
                    countryName = "Otro";
                }

                showPricesForCountry(countryName, data);
            } else {
                console.log('Error al obtener el país:', data);
                showPricesForCountry("España", data);
            }
        })
        .catch(error => console.error('Error:', error));
});                   
function showPricesForCountry(country, data) {
    const prices = {
        "España": {
            "Diseñador Grafico": {
                "image": "https://i.postimg.cc/02Xq70DY/pexels-antoni-shkraba-4348404.jpg",
                "precio": "Desde 850€/mes"
            },
            "Editor de Video": {
                "image": "https://i.postimg.cc/Vvc7CNxX/pexels-ron-lach-8102676.jpg",
                "precio": "Desde 920€/mes"
            },
            "Community Manager": {
                "image": "https://i.postimg.cc/t41mw8NZ/pexels-vlada-karpovich-4050319.jpg",
                "precio": "Desde 750€/mes"
            },
            "Google y Facebook Ads": {
                "image": "https://i.postimg.cc/X7VwrPHZ/pexels-firmbeecom-6961859.jpg",
                "precio": "Desde 850€/mes"
            },
            "Especialista SEO": {
                "image": "https://i.postimg.cc/3RRsr1sz/pexels-fauxels-3183170.jpg",
                "precio": "Desde 900€/mes"
            },
            "Programador Wordpress": {
                "image": "https://i.postimg.cc/xdCQq9Hs/pexels-thisisengineering-3861958.jpg",
                "precio": "Desde 975€/mes"
            },
            "Programador Full Stack": {
                "image": "https://i.postimg.cc/SN1F5wHC/pexels-christina-morillo-1181675.jpg",
                "precio": "Desde 1700€/mes"
            },
            "Contable": {
                "image": "https://i.postimg.cc/bwqgxJmR/pexels-rdne-stock-project-7821702.jpg",
                "precio": "Desde 875€"
            },
            "Asistente Administrativo": {
                "image": "https://i.postimg.cc/zDjFJ5zb/pexels-pavel-danilyuk-8111881.jpg",
                "precio": "Desde 690€/mes"
            },
            "Telemarketer": {
                "image": "https://i.postimg.cc/L8H79RZn/pexels-mart-production-7709262.jpg",
                "precio": "Desde 790€/mes"
            },
            "Data Entry": {
                "image": "https://i.postimg.cc/qMTGQPX0/pexels-pixabay-265087.jpg",
                "precio": "Desde 665€/mes"
            },
            "Atención al Cliente": {
                "image": "https://i.postimg.cc/6pKs8gyG/pexels-mart-production-7709270.jpg",
                "precio": "Desde 690€/mes"
            }
        },
        "Puerto Rico": {
            "Diseñador Grafico": {
                "image": "https://i.postimg.cc/02Xq70DY/pexels-antoni-shkraba-4348404.jpg",
                "precio": "Desde 890$/mes"
            },
            "Editor de Video": {
                "image": "https://i.postimg.cc/Vvc7CNxX/pexels-ron-lach-8102676.jpg",
                "precio": "Desde 960$/mes"
            },
            "Community Manager": {
                "image": "https://i.postimg.cc/t41mw8NZ/pexels-vlada-karpovich-4050319.jpg",
                "precio": "Desde 780$/mes"
            },
            "Google y Facebook Ads": {
                "image": "https://i.postimg.cc/X7VwrPHZ/pexels-firmbeecom-6961859.jpg",
                "precio": "Desde 890$/mes"
            },
            "Especialista SEO": {
                "image": "https://i.postimg.cc/3RRsr1sz/pexels-fauxels-3183170.jpg",
                "precio": "Desde 940$/mes"
            },
            "Programador Wordpress": {
                "image": "https://i.postimg.cc/xdCQq9Hs/pexels-thisisengineering-3861958.jpg",
                "precio": "Desde 1020$/mes"
            },
            "Programador Full Stack": {
                "image": "https://i.postimg.cc/SN1F5wHC/pexels-christina-morillo-1181675.jpg",
                "precio": "Desde 1770$/mes"
            },
            "Contable": {
                "image": "https://i.postimg.cc/bwqgxJmR/pexels-rdne-stock-project-7821702.jpg",
                "precio": "Desde 910$/mes"
            },
            "Asistente Administrativo": {
                "image": "https://i.postimg.cc/zDjFJ5zb/pexels-pavel-danilyuk-8111881.jpg",
                "precio": "Desde 720$/mes"
            },
            "Telemarketer": {
                "image": "https://i.postimg.cc/L8H79RZn/pexels-mart-production-7709262.jpg",
                "precio": "Desde 820$/mes"
            },
            "Data Entry": {
                "image": "https://i.postimg.cc/qMTGQPX0/pexels-pixabay-265087.jpg",
                "precio": "Desde 690$/mes"
            },
            "Atención al Cliente": {
                "image": "https://i.postimg.cc/6pKs8gyG/pexels-mart-production-7709270.jpg",
                "precio": "Desde 720$/mes"
            }
        },
    };

    const pricesSection = document.getElementById('pricesSection');
    pricesSection.innerHTML = '';


   // Crear el elemento <h1>
    const heading = document.createElement('h3');
    heading.className = 'mt-6 text-3xl font-bold text-white sm:text-4xl lg:text-4xl text-center leading-9'; // Clases de Tailwind CSS para estilizar el encabezado

    // Actualizar el texto del <h1> según el país
    if (data.timezone.includes('America')) {
        // Crear el texto con el precio y aplicar estilos CSS en línea
        heading.innerHTML = "Profesionales cualificados a tiempo completo <br> <h1 style='font-family: Montserrat;' class='mb-6 text-4xl font-extrabold text-white dark:text-white md:text-5xl lg:text-6xl text-center'><span style='font-family: Montserrat;' class='text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-400'>Desde 750$/mes, todo incluido.</h1></span>";

    } else if (data.timezone.includes('Europe')) {
        // Crear el texto con el precio y aplicar estilos CSS en línea
        heading.innerHTML = "Profesionales cualificados a tiempo completo <br> <h1 style='font-family: Montserrat;' class='mb-6 text-4xl font-extrabold text-white dark:text-white md:text-5xl lg:text-6xl text-center'><span style='font-family: Montserrat;' class='text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-400'>Desde €690/mes, todo incluido.</h1></span>";

    } else {
        heading.textContent = "Precios en otras zonas";
    }

    // Añadir el <h1> al DOM
    pricesSection.appendChild(heading);

    const text = document.createElement('h6');
    text.className = 'font-montserrat text-2xl font-regular mb-4 text-center font-bold mt-10 text-white';
    text.innerHTML = "Algunos ejemplos:";

    pricesSection.appendChild(text);


    if (prices[country]) {
        // Crear un contenedor para el grid
        const gridContainer = document.createElement('div');
        gridContainer.className = 'grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-10';


        Object.entries(prices[country]).forEach(([service, details]) => {
            // Crear un elemento de tarjeta
            const card = document.createElement('div');
            card.className = 'card bg-white rounded-lg shadow-lg p-4';

            // Crear la imagen
            const img = document.createElement('img');
            img.src = details.image;
            img.alt = service;
            img.className = 'w-full h-96 object-cover mb-4 rounded';

            // Crear el título
            const title = document.createElement('h4');
            title.textContent = service;
            title.className = 'font-monserrat text-4x1 font-bold mb-2 text-white text-center bg-pink-400 p-2';

            // Crear la descripción
            const description = document.createElement('h6');
            description.textContent = details.precio;
            description.className = 'font-montserrat text-gray-800 font-bold mb-2 text-center text-60';

            // Agregar los elementos a la tarjeta
            card.appendChild(img);
            card.appendChild(title);
            card.appendChild(description);

            // Agregar la tarjeta al contenedor del grid
            gridContainer.appendChild(card);
        });

        // Agregar el contenedor del grid a la sección de precios
        pricesSection.appendChild(gridContainer);
    } else {
        pricesSection.textContent = "Lo sentimos, no tenemos precios disponibles para tu país.";
    }
}

</script>

</body>
</html>