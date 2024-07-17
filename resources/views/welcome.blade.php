<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   

    <title>Oberstaff</title>
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
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
    <style>
        /* Estilos para la flecha siguiente */
        .swiper-button-next {

            color: black;
            /* Color del texto si es necesario */
        }

        /* Estilos para la flecha anterior */
        .swiper-button-prev {

            color: black;
            /* Color del texto si es necesario */
        }
        
             .h-160 { height: 40rem; }
        .w-screen { width: 100vw; }
        .bg-black { background-color: black; }
        .pb-10 { padding-bottom: 2.5rem; }
        .text-white { color: white; }
        .font-bold { font-weight: bold; }
        .text-4xl { font-size: 2.25rem; }
        .text-base { font-size: 1rem; }
        .text-gray-200 { color: #E5E7EB; }
        .bg-pink-400 { background-color: #F472B6; }
        .rounded-md { border-radius: 0.375rem; }
        .w-84 { width: 21rem; }
        .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
        .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
        
         .background-image {
            position: relative;
            background-color: black; /* Cambia el color de fondo si la imagen no se carga */
        }

        .background-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://i.postimg.cc/Gpnn06B7/pexels-pixabay-159784.jpg');
            background-size: cover;
            background-position: center;
            opacity: 0.8; /* Ajusta la opacidad según sea necesario */
            z-index: -1;
        }
        
    </style>
</head>

<body class="antialiased font-header bg-black dark:bg-black dark:text-white/50">



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



        <style>
         .fixed-button {
            position: fixed;
            bottom: 16px;
            right: 16px;
            z-index: 50;
        }
        .hidden-form {
            display: none;
        }
        .form-container {
            position: fixed;
            bottom: 100px; /* Adjust this value as needed */
            right: 16px;
            z-index: 50;
            width: 24rem;
        }



        
    </style>
</head>

       <div class="form-container hidden-form" id="contactForm">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="bg-pink-400 h-16 flex items-center justify-between px-4">
                <div class="text-white text-lg">Contáctanos</div>
                <button class="text-white" id="closeForm">&times;</button>
            </div>
            <div class="p-4 space-y-4">
                <div class="flex flex-col text-gray-700">
                    <div class="text-3xl mb-2">Contáctanos 👋</div>
                    <div class="text-gray-700 text-sm mb-1">
                        Envíanos tus consultas y te responderemos lo antes posible.
                    </div>
                </div>
                <div class="border-t-4 border-pink-400 rounded shadow-md text-sm">
                    <div class="bg-white border-t-0 rounded-b flex flex-col space-y-2 p-4">
                                    <iframe aria-label='New lead' frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.com/oberstaff/form/Newlead/formperma/ELEFycfizbIK2OoWVrTEBCW8aiUHhHDI5mGtv8dZEHw'></iframe>

                        <!--<form action="https://hooks.zapier.com/hooks/catch/12433184/3vae1pv/" class="w-full">-->
                        <!--    <div class="mb-4">-->
                        <!--        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>-->
                        <!--        <input type="text" name="nombres" id="nombres" placeholder="Tu nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">-->
                        <!--    </div>-->
                        <!--    <div class="mb-4">-->
                        <!--        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo electrónico:</label>-->
                        <!--        <input type="email" name="email" id="email" placeholder="Tu correo electrónico" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">-->
                        <!--    </div>-->
                        <!--    <div class="mb-4">-->
                        <!--        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Teléfono:</label>-->
                        <!--        <input type="phone" name="phone" id="phone" placeholder="Tu teléfono" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">-->
                        <!--    </div>-->
                        <!--    <div class="mb-4">-->
                        <!--        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">País:</label>-->
                        <!--        <input type="text" name="country" id="country" placeholder="Tu País" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">-->
                        <!--    </div>-->
                        <!--    <div class="mb-4">-->
                        <!--        <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Mensaje:</label>-->
                        <!--        <textarea name="message" id="message" rows="4" placeholder="Tu mensaje" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>-->
                        <!--    </div>-->
                        <!--    <button type="submit" class="bg-pink-400 rounded-full text-white flex flex-row gap-2 py-3 px-5 w-full justify-center">-->
                        <!--        Enviar mensaje-->
                        <!--    </button>-->
                        <!--</form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="toggleButton" class="fixed-button bg-pink-400 rounded-full w-16 h-16 flex items-center justify-center cursor-pointer shadow-xl p-3">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="350" height="350" x="0" y="0" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M510.156 401.843 480.419 315.3c14.334-29.302 21.909-61.89 21.96-94.679.088-57.013-21.97-110.92-62.112-151.79-40.15-40.878-93.652-63.889-150.652-64.792-59.105-.934-114.661 21.548-156.428 63.314-40.274 40.273-62.612 93.366-63.319 150.102-39.694 29.886-63.123 76.481-63.046 126.25.037 23.29 5.279 46.441 15.212 67.376L1.551 470.689c-3.521 10.247-.949 21.373 6.713 29.035 5.392 5.393 12.501 8.264 19.812 8.264 3.076 0 6.188-.508 9.223-1.551l59.609-20.483c20.935 9.933 44.086 15.175 67.376 15.212h.248c50.51-.002 97.46-24.035 127.237-64.702 30.987-.816 61.646-8.317 89.363-21.876l86.544 29.738a33.696 33.696 0 0 0 10.959 1.843c8.688 0 17.136-3.412 23.545-9.822 9.104-9.105 12.16-22.326 7.976-34.504zM164.53 470.69h-.199c-20.614-.031-41.085-5.113-59.196-14.695a15.244 15.244 0 0 0-12.078-.942l-61.123 21.003 21.003-61.122a15.24 15.24 0 0 0-.942-12.078c-9.582-18.112-14.664-38.582-14.696-59.197-.051-33.159 12.848-64.588 35.405-88.122 7.368 44.916 28.775 86.306 61.957 118.898 32.937 32.351 74.339 52.949 119.011 59.683-23.588 23.249-55.384 36.572-89.142 36.572zm316.098-55.893c-.867.867-1.895 1.103-3.051.705l-92.648-31.836a15.232 15.232 0 0 0-12.077.942c-26.453 13.994-56.345 21.416-86.447 21.462h-.288c-100.863 0-184.176-81.934-185.774-182.773-.805-50.785 18.513-98.514 54.394-134.395 35.881-35.881 83.618-55.192 134.396-54.392 100.936 1.601 182.926 85.068 182.77 186.063-.047 30.102-7.468 59.995-21.461 86.446a15.24 15.24 0 0 0-.942 12.078l31.835 92.648c.397 1.16.159 2.187-.707 3.052z" fill="#ffffff" opacity="1" data-original="#000000"></path><path d="M376.892 139.512h-181.56c-8.416 0-15.238 6.823-15.238 15.238 0 8.416 6.823 15.238 15.238 15.238h181.56c8.416 0 15.238-6.823 15.238-15.238s-6.822-15.238-15.238-15.238zM376.892 202.183h-181.56c-8.416 0-15.238 6.823-15.238 15.238s6.823 15.238 15.238 15.238h181.56c8.416 0 15.238-6.823 15.238-15.238s-6.822-15.238-15.238-15.238zM307.004 264.852H195.331c-8.416 0-15.238 6.823-15.238 15.238 0 8.416 6.823 15.238 15.238 15.238h111.672c8.416 0 15.238-6.823 15.238-15.238s-6.821-15.238-15.237-15.238z" fill="#ffffff" opacity="1" data-original="#000000"></path></g></svg>
    </div>

    {{-- first section --}}



    {{-- <div style=" height: 500px " class="relative bg-gradient-to-t from-[#fbc2eb] to-[#a6c1ee] h-96 text-white ">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1522252234503-e356532cafd5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxjb2RlfGVufDB8MHx8fDE2OTQwOTg0MTZ8MA&ixlib=rb-4.0.3&q=80&w=1080"
                alt="Background Image" class="object-cover object-center w-full h-full" />
            <div class="absolute inset-0 bg-black opacity-80"></div>
        </div>

        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center p-3 lg:p-6">
            <h1 class="font-header text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight mb-4">¿Tienes un negocio y
                <span
                    class="font-montserrat text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200">quieres
                    ahorrar en costes de personal?</span></h1>
            <p class="font-header font-bold text-md sm:text-xl lg:text-xl text-gray-300 mb-8">Consigue talento remoto
                con Oberstaff, <span
                    class="font-montserrat text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200"><br>trabajando
                    al 100% para ti por una fracción del coste </span>de empleados en plantilla.</p>
            <a style="width: 350px;" href="#contact" title=""
                class="w-84 text-xl inline-flex items-center justify-center px-6 py-4  text-base font-black bg-pink-400 rounded-md">

                <span class="text-white"> Descubre cómo </span>
            </a>

        </div> --}}






    <div class="h-120 w-screen pb-10 bg-cover bg-center bg-opacity-50">
        <div class="bg-black mx-auto max-w-7xl pt-16 sm:pt-24">
            <div class="space-y-8 lg:space-y-0 lg:grid lg:grid-cols-12 lg:gap-8">
                <div class="px-6 text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                    <div class="space-y-8">
                        <div class="space-y-4">
                            <div class="space-y-2">
                                <h1 id="dynamic-heading" class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-5xl">
                                    <!-- El contenido se establecerá dinámicamente -->
                                </h1>
                            </div>

                            <a href="/llamada" title=""
                               class="transform transition-transform duration-300 hover:scale-110 w-86 text-xl inline-flex items-center justify-center px-6 py-4 mt-10 text-base font-black bg-pink-400 rounded-md">
                                <svg class="w-5 h-5 mr-2 -ml-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                <span class="text-white"> Agendemos una llamada </span>
                            </a>
                        </div>

                        <div class="border-t border-gray-700"></div>

                        <div class="flex space-x-4 items-center text-white justify-center lg:justify-start">
                            <div class="flex items-center space-x-2">
                                <div class="flex flex-shrink-0 -space-x-1">
                                    <img loading="lazy" width="400" height="400" decoding="async"
                                         class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"
                                         style="color:transparent" src="https://randomuser.me/api/portraits/men/29.jpg">
                                    <img loading="lazy" width="400" height="400" decoding="async"
                                         class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"
                                         style="color:transparent" src="https://randomuser.me/api/portraits/men/90.jpg">
                                    <img loading="lazy" width="100" height="100" decoding="async"
                                         class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"
                                         style="color:transparent" src="https://randomuser.me/api/portraits/men/75.jpg">
                                    <img loading="lazy" width="200" height="200" decoding="async"
                                         class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"
                                         style="color:transparent" src="https://randomuser.me/api/portraits/men/5.jpg">
                                </div>

                                <span class="flex-shrink-0 text-xs font-medium leading-5">+15</span>
                            </div>

                            <div class="h-4 border-l border-gray-700"></div>

                            <div class="flex items-center">
                                <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">
                                    </path>
                                </svg>
                                <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">
                                    </path>
                                </svg>
                                <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">
                                    </path>
                                </svg>
                                <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">
                                    </path>
                                </svg>
                                <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">
                                    </path>
                                </svg>
                            </div>
                            <div class="h-4 border-l border-gray-700"></div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center w-full col-span-6">
                    <div class="px-6 h-96 lg:h-100% w-full max-w-2xl col-span-6 flex items-center mx-auto">
                        <div style="width: 100%; height: 100%;">
                            <div style="width: 100%; height: 100%;">
                                <iframe frameborder="0" allowfullscreen="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        width="100%" height="100%"
                                        src="https://www.youtube.com/embed/Pg0diJ_Smc8?rel=0&autoplay=0&loop=0"
                                        id="widget2">
                                </iframe>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // Función para establecer el texto dinámico
        function setDynamicText(region) {
            const headingElement = document.getElementById('dynamic-heading');
            console.log("Región detectada: ", region);
            if (region === 'Europe') {
                headingElement.innerHTML = '<span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-200 to-pink-400">Ahorra hasta un 70% en costes de personal</span> con Oberstaff, contratando talento <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-200 to-pink-400">profesional remoto desde Sudamérica.</span>';
            } else {
                headingElement.innerHTML = '<span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-200 to-pink-400">Ahorra hasta un 70% en costos de personal</span> con Oberstaff, contratando talento <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-200 to-pink-400">profesional remoto para tu negocio.</span>';
            }
        }

        // Ejecutar la función cuando el DOM esté completamente cargado
        document.addEventListener('DOMContentLoaded', function() {
            fetch('https://ipapi.co/json/')
                .then(response => response.json())
                .then(data => {
                    let region;
                    console.log(data);
                    if (data && data.timezone) {
                        if (data.timezone.includes('America')) {
                            region = 'America';
                        } else if (data.timezone.includes('Europe')) {
                            region = 'Europe';
                        } else {
                            region = 'Other';
                        }

                        setDynamicText(region);
                    } else {
                        console.log('Error al obtener la región:', data);
                        setDynamicText('Europe'); // Valor por defecto
                    }
                })
                .catch(error => console.error('Error:', error));
        });
    </script>




   



<!--<div class="h-160 w-screen bg-black pb-10 ">-->

<!--    <div class="mx-auto max-w-7xl pt-16 sm:pt-24">-->
    
<!--        <div class="space-y-8 lg:space-y-0 lg:grid lg:grid-cols-12 lg:gap-8">-->
<!--            <div class="px-6 text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">-->
<!--                <div class="space-y-8">-->
<!--                    <div class="space-y-4">-->
<!--                        <div class="space-y-2">-->
<!--                            {{-- <span-->
<!--                                class="rounded-full uppercase bg-pink-400 px-3 py-0.5 text-sm font-semibold leading-5 text-white">-->
<!--                                Ahorra 70% en costes de personal-->
<!--                            </span> --}}-->
<!--                            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">-->
<!--                                <span class="sm:text-6xl"></span>Consigue talento remoto con Oberstaff,-->
<!--                                <span-->
<!--                                    class="font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-pink-200 to-pink-400">trabajando 100% para ti por una fracción del coste-->
<!--                                </span>-->
<!--                            </h1>-->
<!--                        </div>-->

<!--                        <p class="text-base text-gray-200 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl font-bold">-->
<!--                            ¿Tienes un negocio y quieres ahorrar en costes de personal?-->
<!--                        </p>-->

<!--                           <a href="/llamada" title=""-->
<!--                        class="transform transition-transform duration-300 hover:scale-110 w-84 text-xl inline-flex items-center justify-center px-6 py-4 mt-10 text-base font-black bg-pink-400 rounded-md">-->
<!--                        <svg class="w-5 h-5 mr-2 -ml-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"-->
<!--                            viewBox="0 0 24 24" stroke="currentColor">-->
<!--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
<!--                                d="M13 10V3L4 14h7v7l9-11h-7z" />-->
<!--                        </svg>-->
<!--                        <span class="text-white"> Agendemos una llamada </span>-->
<!--                    </a>-->

<!--                    </div>-->

<!--                    <div class="border-t border-gray-700"></div>-->

<!--                    <div class="flex space-x-4 items-center text-white justify-center lg:justify-start">-->
<!--                        <div class="flex items-center space-x-2">-->
<!--                            <div class="flex flex-shrink-0 -space-x-1">-->
<!--                                <img loading="lazy" width="400" height="400" decoding="async"-->
<!--                                    class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"-->
<!--                                    style="color:transparent" src="https://randomuser.me/api/portraits/men/29.jpg">-->
<!--                                <img loading="lazy" width="400" height="400" decoding="async"-->
<!--                                    class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"-->
<!--                                    style="color:transparent" src="https://randomuser.me/api/portraits/men/90.jpg">-->
<!--                                <img loading="lazy" width="100" height="100" decoding="async"-->
<!--                                    class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"-->
<!--                                    style="color:transparent" src="https://randomuser.me/api/portraits/men/75.jpg">-->
<!--                                <img loading="lazy" width="200" height="200" decoding="async"-->
<!--                                    class="h-6 w-6 max-w-none rounded-full ring-2 ring-white"-->
<!--                                    style="color:transparent" src="https://randomuser.me/api/portraits/men/5.jpg">-->
<!--                            </div>-->

<!--                            <span class="flex-shrink-0 text-xs font-medium leading-5">+15</span>-->
<!--                        </div>-->

<!--                        <div class="h-4 border-l border-gray-700"></div>-->

<!--                        <div class="flex items-center">-->
<!--                            <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">-->
<!--                                <path-->
<!--                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">-->
<!--                                </path>-->
<!--                            </svg>-->
<!--                            <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">-->
<!--                                <path-->
<!--                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">-->
<!--                                </path>-->
<!--                            </svg>-->
<!--                            <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">-->
<!--                                <path-->
<!--                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">-->
<!--                                </path>-->
<!--                            </svg>-->
<!--                            <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">-->
<!--                                <path-->
<!--                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">-->
<!--                                </path>-->
<!--                            </svg>-->
<!--                            <svg class="h-4 w-4 fill-current text-yellow-500" viewBox="0 0 24 24">-->
<!--                                <path-->
<!--                                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z">-->
<!--                                </path>-->
<!--                            </svg>-->
<!--                        </div>-->
<!--                        <div class="h-4 border-l border-gray-700"></div>-->
<!--                        {{-- <a href="" target="_blank">-->
<!--                         <span class="text-white text-xl bg-pink-400 rounded-md p-3 font-black"> Agendemos una llamada </span>-->
<!--                        </a> --}}-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            

<!--            <div class="flex items-center w-full col-span-6">-->
<!--                <div class="px-6 h-96 lg:h-100% w-full max-w-2xl col-span-6 flex items-center mx-auto">-->
<!--                    <div style="width: 100%; height: 100%;">-->
<!--                        <div style="width: 100%; height: 100%;">-->
<!--                            <iframe frameborder="0" allowfullscreen="1"-->
<!--                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"-->
<!--                                width="100%" height="100%"-->
<!--                                src="https://www.youtube.com/embed/Pg0diJ_Smc8?si=26HAH-z78xCxNCmd"-->
<!--                                id="widget2">-->
<!--                            </iframe>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->
<!--</div>-->


        <section class=" py-4 bg-white sm:py-16 lg:py-10">

            {{-- <iframe class="w-full max-w-3xl mx-auto shadow-xl sm:mt-5 mb-5 p-2" width="560" height="315"
                src="https://www.youtube.com/embed/Pg0diJ_Smc8?si=26HAH-z78xCxNCmd" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}

            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                <div class="max-w-xl mx-auto text-center">

                    <h2 class="text-5xl font-bold leading-tight text-gray-900 sm:text-4xl lg:text-7xl mt-10"><span
                            class="text-pink-400">¿Sabías que...?</span></h2>
                    <p class="mt-4 text-xl font-bold leading-relaxed text-black">Encontramos el mejor talento en
                        Sudamérica para tu empresa, <span class="text-pink-400">dedicado 100% a tu negocio. Ahorra hasta
                            el 70%</span> en costes de personal en tiempo récord.</p>

                    <a href="/llamada" title=""
                        class="transform transition-transform duration-300 hover:scale-110 w-84 text-xl inline-flex items-center justify-center px-6 py-4 mt-10 text-base font-black bg-pink-400 rounded-md">
                        <svg class="w-5 h-5 mr-2 -ml-1 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="text-white"> Agendemos una llamada </span>
                    </a>
                </div>

                <div
                    class="flex flex-col items-start justify-center max-w-lg px-10 mx-auto mt-8 space-y-8 lg:max-w-xl sm:px-0 sm:space-y-0 sm:flex-row sm:mt-16 sm:space-x-6 lg:space-x-12 sm:items-center">

                </div>
            </div>
        </section>
        
        
        
           <h1 id="como"
                class="mb-3 text-4xl font-extrabold text-gray-900 dark:text-white md:text-7xl lg:text-7xl text-center mt-10">
                <span
                    class="font-montserrat text-gray-100">¿Qué
                    hacemos?</span>
            </h1>
        
     <div class="flex flex-col md:grid md:grid-cols-3 gap-3 p-10">
             
         
  <div class="relative rounded overflow-hidden">
    
    <img src="https://i.postimg.cc/9F4fc5MC/pexels-michelangelo-buonarroti-4175446.jpg" alt="perfiles remotos" class="w-full">
    
<p class=" absolute inset-0 bg-black bg-opacity-75 flex flex-col items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
    <svg class="h-20 w-20 mb-10 text-white sm:ml-12-" xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                                    height="40" x="0" y="0" viewBox="0 0 5171.524 4796.003"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="m3693.28 2439.646-9.56 89.828h1487.804l-9.56-89.828c-28.679-271.877-201.378-494.985-437.854-598.203 112.693-88.271 185.327-225.251 185.327-379.162 0-265.678-216.142-481.717-481.815-481.717s-481.814 216.193-481.814 481.871c0 153.911 72.633 290.712 185.325 378.977-236.482 103.218-409.178 326.351-437.853 598.234zm416.619-977.161c0-175.199 142.529-317.728 317.723-317.728s317.723 142.529 317.723 317.728c0 175.189-142.529 317.718-317.723 317.718s-317.723-142.529-317.723-317.718zm317.723 480.168c263.439 0 487.569 176.591 554.246 422.729H3873.371c66.678-246.138 290.812-422.729 554.251-422.729z"
                                            style="" fill="#e875ab" data-original="#000000" class=""
                                            opacity="1"></path>
                                        <path
                                            d="M4842.905 3800.825 3530.38 2620.884c378.722-669.568 283.272-1536.774-286.55-2106.594C2912.186 182.651 2471.244 0 2002.229 0S1092.272 182.651 760.628 514.29c-331.644 331.649-514.29 772.586-514.29 1241.596 0 469.02 182.645 909.957 514.29 1241.606 331.644 331.639 772.586 514.29 1241.601 514.29 303.214 0 594.644-76.442 852.445-220.023l423.804 471.429.004-.005 758.425 843.64c105.772 117.651 251.12 184.764 409.273 188.97 5.253.14 10.486.21 15.719.21 152.264 0 294.853-59.011 403.009-167.167l.005-.01c111.867-111.872 171.163-260.58 166.956-418.733-4.205-158.152-71.314-303.495-188.964-409.268zm-1831.857-580.571 116.087-116.088c40.195-33.657 79.179-69.156 116.695-106.674 37.399-37.397 72.63-76.147 105.943-115.973l106.559-106.559 304.531 273.77-476.044 476.051-273.771-304.527zm-2119.89-353.303C594.383 2570.176 430.942 2175.6 430.942 1755.886c0-419.704 163.441-814.28 460.217-1111.056 296.781-296.786 691.366-460.227 1111.071-460.227s814.29 163.441 1111.066 460.227h.005c296.771 296.776 460.212 691.351 460.212 1111.056 0 419.714-163.441 814.29-460.217 1111.066-296.776 296.786-691.361 460.227-1111.066 460.227s-814.291-163.442-1111.072-460.228zM4748.88 4512.798c-79.702 79.702-185.505 121.977-298.338 118.962-112.683-2.995-216.247-50.818-291.608-134.646l-764.257-850.125 488.39-488.395 850.128 764.258c83.829 75.366 131.642 178.925 134.642 291.598 2.996 112.683-39.254 218.646-118.957 298.348z"
                                            style="" fill="#e875ab" data-original="#000000" class=""
                                            opacity="1"></path>
                                        <path
                                            d="M2949.518 808.592c-522.332-522.322-1372.247-522.322-1894.578 0-522.342 522.342-522.342 1372.257 0 1894.599 253.028 253.028 589.45 392.382 947.289 392.382s694.261-139.354 947.289-392.382c522.342-522.343 522.342-1372.258 0-1894.599zM2002.229 2931.48c-314.012 0-609.225-124.13-831.261-346.171-14.278-14.277-28.127-25.068-41.574-45.58h1745.67c-13.447 20.511-27.296 31.303-41.574 45.58-222.041 222.041-517.254 346.171-831.261 346.171zm-419.96-1693.82c0-228.18 185.635-413.815 413.81-413.815s413.81 185.635 413.81 413.815c0 228.17-185.635 413.805-413.81 413.805s-413.81-185.634-413.81-413.805zM1283.31 2375.637c76.317-328.184 368.16-563.765 712.769-563.765s636.452 235.582 712.769 563.765H1283.31zm1611.233 145.694-7.23-68.565c-36.077-342.035-259.948-621.058-563.202-739.701 150.818-104.39 249.871-278.513 249.871-475.405 0-318.659-259.248-577.907-577.902-577.907s-577.902 259.248-577.902 577.907c0 196.892 99.053 371.015 249.871 475.405-303.254 118.642-527.125 397.665-563.202 739.701l-5.862 55.59c-176.289-210.874-272.335-474.273-272.335-752.46 0-314.012 122.283-609.235 344.319-831.266 229.182-229.182 530.219-343.768 831.261-343.768s602.079 114.586 831.261 343.768c222.036 222.031 344.319 517.254 344.319 831.266-.001 283.906-99.987 552.448-283.267 765.435zM1040.39 4004.182c112.694-88.271 185.327-225.461 185.327-379.377 0-265.668-216.142-481.81-481.815-481.81s-481.815 216.142-481.815 481.81c0 153.916 72.633 291.107 185.327 379.377C210.937 4107.396 38.239 4330.914 9.56 4602.786L0 4693.436h1487.804l-9.56-90.649c-28.679-271.873-201.377-495.391-437.854-598.605zm-614.211-379.377c0-175.189 142.529-317.718 317.723-317.718s317.723 142.529 317.723 317.718c0 175.199-142.529 317.728-317.723 317.728s-317.723-142.529-317.723-317.728zm-236.523 904.539c66.677-246.429 290.806-422.719 554.246-422.719s487.569 176.291 554.246 422.719H189.656z"
                                            style="" fill="#e875ab" data-original="#000000" class=""
                                            opacity="1"></path>
                                    </g>
                                </svg>
    <span class="mb-4">Búsqueda de Perfiles Remotos</span>
</p>

  </div>
  
 <div class="relative rounded overflow-hidden">
    
    <img src="https://i.postimg.cc/vmvY0GPL/pexels-goumbik-590016.jpg" alt="perfiles remotos" class="w-full">
    
<p class=" absolute inset-0 bg-black bg-opacity-75 flex flex-col items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
      <svg class="h-20 w-20 text-white sm:ml-12-" xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                                    height="40" x="0" y="0" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M82.931 198.457a8 8 0 0 1 8-8h202.057a8 8 0 0 1 0 16H90.931a8 8 0 0 1-8-8zm210.056 170.639H90.931a8 8 0 0 0 0 16h202.057a8 8 0 1 0-.001-16zm0 59.547H90.931a8 8 0 0 0 0 16h202.057a8 8 0 1 0-.001-16zM90.931 146.91h145.046a8 8 0 0 0 0-16H90.931a8 8 0 0 0 0 16zm333.25 239.239v64.324a8 8 0 0 1-8 8h-45.527V504a8 8 0 0 1-8 8H21.263a8 8 0 0 1-8-8V61.527a8 8 0 0 1 8-8H66.79V8a8 8 0 0 1 8-8h286.079a8 8 0 0 1 5.657 2.343l55.312 55.312a8 8 0 0 1 2.343 5.657v117.451c43.231 14.114 74.556 54.811 74.556 102.693s-31.325 88.579-74.556 102.693zM368.869 55.312h27.998l-27.998-27.998zM82.791 53.527h224.552A8 8 0 0 1 313 55.87l55.312 55.312a8 8 0 0 1 2.343 5.657v60.497a108.155 108.155 0 0 1 37.527-.464V71.312H360.87a8 8 0 0 1-8-8V16H82.791zm232.551 55.311h27.998L315.342 80.84zM354.654 496V385.25c-28.541-10.147-51.595-31.97-63.375-59.7H90.931a8 8 0 0 1 0-16h195a107.85 107.85 0 0 1-3.194-26.094c0-5.941.49-11.769 1.417-17.453H90.931a8 8 0 0 1 0-16h197.116c10.387-31.807 35.164-57.163 66.608-68.341v-56.824h-47.312a8 8 0 0 1-8-8V69.527H29.263V496zm53.527-105.96a108.244 108.244 0 0 1-37.527-.464v52.897h37.527zm74.556-106.584c0-50.729-41.271-92-92-92s-92 41.271-92 92 41.271 92 92 92 92-41.271 92-92zm-27.348-19.376c-7.672 7.749-15.345 15.531-23.02 23.314-13.867 14.064-28.207 28.608-42.404 42.806-3.667 3.667-8.543 5.687-13.729 5.687s-10.062-2.02-13.729-5.687l-36.374-36.374c-7.571-7.57-7.571-19.889 0-27.459a19.29 19.29 0 0 1 13.729-5.687 19.29 19.29 0 0 1 13.73 5.687l22.598 22.598 51.697-52.212c3.663-3.684 8.525-5.713 13.703-5.728h.056a19.255 19.255 0 0 1 13.667 5.639c7.578 7.538 7.612 19.836.076 27.416zm-11.359-16.07a3.388 3.388 0 0 0-4.787.014l-57.342 57.913a8.001 8.001 0 0 1-5.665 2.371h-.02a8.002 8.002 0 0 1-5.657-2.343l-28.283-28.283a3.4 3.4 0 0 0-2.416-1c-.528 0-1.545.13-2.416 1s-1 1.888-1 2.416.13 1.545 1 2.416l36.374 36.374a3.42 3.42 0 0 0 4.832 0c14.158-14.158 28.477-28.681 42.325-42.726 7.682-7.792 15.362-15.582 23.055-23.351a3.393 3.393 0 0 0 0-4.801z"
                                            fill="#e875ab" opacity="1" data-original="#000000" class="">
                                        </path>
                                    </g>
                                </svg>
    <span class="mb-4 mt-10">Validación de Habilidades</span>
</p>

  </div>
  
<div class="relative rounded overflow-hidden">
    
    <img src="https://i.postimg.cc/KjCx1jzF/pexels-pixabay-327540.jpg" alt="perfiles remotos" class="w-full">
    
<p class=" absolute inset-0 bg-black bg-opacity-75 flex flex-col items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
  <svg class="h-20 w-20 text-pink-400 sm:ml-12-" xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                                    height="40" x="0" y="0" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path d="M374.453 333.89V497H15V15h254.497l104.956 105.956v127.855"
                                            style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            fill="none" stroke="#e875ab" stroke-width="30" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"
                                            class="" opacity="1"></path>
                                        <path
                                            d="M153.367 437h0a41.736 41.736 0 0 1 44.403-10.925L228.804 437M119.956 356.661h146.648M119.956 296.661h149.541M119.956 236.661h149.541M119.956 176.661h149.541M445.651 177.614 245.927 377.337 228.804 437l59.663-17.124L488.19 220.153c11.747-11.747 11.747-30.792 0-42.539h0c-11.747-11.747-30.792-11.747-42.539 0zM424.305 198.96l42.539 42.539"
                                            style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            fill="none" stroke="#e875ab" stroke-width="30" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"
                                            class="" opacity="1"></path>
                                        <path d="m466.844 241.499-.365 84.661-45.716 45.715M374.453 120.956H269.497V15"
                                            style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            fill="none" stroke="#e875ab" stroke-width="30" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"
                                            class="" opacity="1"></path>
                                    </g>
                                </svg>
    <span class="mb-4 mt-10">Contratación Formal</span>
</p>

  </div>
  
 <div class="relative rounded overflow-hidden">
    
    <img src="https://i.postimg.cc/Dwk7FSHP/pexels-pixabay-259200.jpg" alt="perfiles remotos" class="w-full">
    
<p class="absolute inset-0 bg-black bg-opacity-75 flex flex-col items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
   <svg class="h-20 w-20 text-pink-400 sm:ml-12-" xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                                    height="40" x="0" y="0" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M172.55 391.902c-.13-.64-.32-1.27-.57-1.88-.25-.6-.56-1.18-.92-1.72a9.57 9.57 0 0 0-1.24-1.52 9.57 9.57 0 0 0-1.52-1.24 9.87 9.87 0 0 0-1.73-.92c-.6-.25-1.23-.45-1.87-.57a9.847 9.847 0 0 0-3.9 0c-.64.12-1.27.32-1.88.57-.6.25-1.18.56-1.72.92-.55.36-1.06.78-1.52 1.24-.46.46-.88.97-1.24 1.52-.37.54-.67 1.12-.92 1.72a9.69 9.69 0 0 0-.57 1.88c-.13.64-.2 1.3-.2 1.95 0 .65.07 1.31.2 1.95.12.64.32 1.27.57 1.87.25.61.55 1.19.92 1.73.36.55.78 1.06 1.24 1.52.46.46.97.88 1.52 1.24.54.361 1.12.671 1.72.921.61.25 1.24.45 1.88.57.64.13 1.3.2 1.95.2.65 0 1.31-.07 1.95-.2.64-.12 1.27-.32 1.87-.57.61-.25 1.19-.561 1.73-.921a9.57 9.57 0 0 0 1.52-1.24c.46-.46.88-.97 1.24-1.52.36-.54.67-1.12.92-1.73a10.098 10.098 0 0 0 .77-3.82c0-.65-.07-1.31-.2-1.95z"
                                            fill="#e875ab" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path
                                            d="M459.993 394.982a9.705 9.705 0 0 0-.121-.297c-9.204-21.537-30.79-29.497-56.336-20.772l-69.668 19.266c-4.028-12.198-14.075-22.578-28.281-27.85a11.876 11.876 0 0 0-.265-.094l-76.581-25.992c-6.374-8.239-26.34-29.321-63.723-29.321-26.125 0-49.236 17.922-62.458 37.457H10c-5.523 0-10 4.477-10 10v126.077c0 5.523 4.477 10 10 10h59.457c5.523 0 10-4.477 10-10v-8.634h27.883c5.523 0 10-4.477 10-10v-2.878c16.254 1.418 21.6 4.501 36.528 13.109 11.48 6.62 28.831 16.625 60.077 30.674.145.065.292.127.439.185 5.997 2.359 17.72 6.065 32.173 6.065 10.06 0 21.445-1.797 33.131-7.094l153.991-55.136c.274-.098.544-.208.808-.33 14.717-6.771 36.648-25.854 25.506-54.435zM59.457 473.455H20V367.378h39.457v106.077zm37.883-18.634H79.457v-87.443H97.34v87.443zm329.156-23.747-153.922 55.111a12.33 12.33 0 0 0-.854.348c-21.437 9.852-41.814 3.954-49.8.849-30.182-13.581-46.291-22.87-58.061-29.657-16.364-9.436-24.249-13.984-46.519-15.823V361.36c9.479-15.536 27.861-31.439 47.679-31.439 33.986 0 48.387 22.105 48.953 22.997a10 10 0 0 0 5.305 4.232l79.475 26.974c12.693 4.764 19.401 15.634 16.318 26.474a19.354 19.354 0 0 1-9.257 11.691 19.367 19.367 0 0 1-14.683 1.758l-89.593-28.392c-5.268-1.669-10.886 1.247-12.554 6.512-1.669 5.265 1.247 10.885 6.512 12.554l89.749 28.441c.095.03.19.059.286.086a39.657 39.657 0 0 0 10.857 1.523c6.638 0 13.203-1.691 19.161-5.011 9.213-5.133 15.875-13.547 18.759-23.692.23-.81.434-1.62.611-2.43l75.083-20.8c10.844-3.704 25.079-5.039 31.417 9.558 6.56 17.137-10.49 26.564-14.922 28.678zM359.06 131.543c-.13-.64-.32-1.27-.58-1.88-.25-.6-.55-1.18-.92-1.72a9.57 9.57 0 0 0-1.24-1.52 9.57 9.57 0 0 0-1.52-1.24c-.54-.36-1.12-.67-1.72-.92a9.81 9.81 0 0 0-1.87-.57 9.898 9.898 0 0 0-3.91 0c-.64.12-1.27.32-1.87.57-.61.25-1.19.56-1.73.92-.55.36-1.06.78-1.52 1.24-.46.46-.88.97-1.24 1.52-.36.54-.67 1.12-.92 1.72a9.69 9.69 0 0 0-.57 1.88c-.13.64-.2 1.3-.2 1.95 0 .65.07 1.31.2 1.95.12.64.32 1.27.57 1.87.25.61.56 1.19.92 1.73.36.55.78 1.06 1.24 1.52.46.46.97.88 1.52 1.24.54.36 1.12.67 1.73.92.6.25 1.23.44 1.87.57s1.3.2 1.95.2c.65 0 1.31-.07 1.96-.2.63-.13 1.26-.32 1.87-.57.6-.25 1.18-.56 1.72-.92a9.57 9.57 0 0 0 1.52-1.24c.46-.46.88-.97 1.24-1.52.37-.54.67-1.12.92-1.73.26-.6.45-1.23.58-1.87.13-.64.19-1.3.19-1.95 0-.65-.06-1.31-.19-1.95z"
                                            fill="#e875ab" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path
                                            d="M502 33.891h-59.457c-5.523 0-10 4.477-10 10v8.634H404.66c-5.523 0-10 4.477-10 10v2.878c-16.254-1.419-21.6-4.501-36.527-13.109-11.48-6.62-28.831-16.625-60.078-30.674a8.51 8.51 0 0 0-.44-.185c-10.171-4.002-36.828-11.876-65.299 1.027l-40.24 14.408-33.919-33.918c-3.905-3.905-10.237-3.905-14.142 0L32.657 114.309c-3.602 3.603-4.293 9.85 0 14.143l190.287 190.287c3.045 3.046 10.175 3.967 14.143 0l101.665-101.664c2.643.228 5.386.351 8.229.351 26.126 0 49.236-17.922 62.457-37.456H502c5.523 0 10-4.477 10-10V43.891c0-5.523-4.477-10-10-10zm-350.915-9.726 22.792 22.792c-6.775 4.19-14.608 6.432-22.792 6.432-8.185 0-16.017-2.241-22.792-6.432l22.792-22.792zM76.663 144.173 53.871 121.38l22.792-22.792c4.19 6.775 6.432 14.608 6.432 22.792 0 8.184-2.241 16.017-6.432 22.793zm153.353 153.352-22.788-22.788c13.913-8.586 31.661-8.586 45.575 0l-22.787 22.788zm37.195-37.194c-22.098-16.03-52.292-16.03-74.39 0L91.07 158.579c7.809-10.74 12.025-23.641 12.025-37.199 0-13.559-4.215-26.459-12.025-37.199l22.817-22.816c10.74 7.809 23.64 12.025 37.199 12.025 13.559 0 26.459-4.216 37.199-12.025l21.629 21.629a39.465 39.465 0 0 0-13.462 4.592c-7.168 3.994-12.792 9.975-16.294 17.211a56.985 56.985 0 0 0-29.915 15.741c-22.225 22.226-22.225 58.389.001 80.615 11.112 11.112 25.709 16.669 40.307 16.669 14.597 0 29.195-5.556 40.308-16.669 7.23-7.23 12.295-16.116 14.832-25.8l33.764 11.459c-3.801 17.608.092 36.132 10.593 50.682l-22.837 22.837zm-60.798-98.313c.088.032.176.064.265.094l19.996 6.787c-1.51 6.815-4.927 13.081-9.957 18.112-14.428 14.426-37.904 14.428-52.33 0-14.428-14.427-14.428-37.902 0-52.33a36.977 36.977 0 0 1 12.062-8.048c1.846 15.362 12.907 29.055 29.964 35.385zm98.044 61.066a43.739 43.739 0 0 1-6.389-20.796 77.755 77.755 0 0 0 17.636 9.549l-11.247 11.247zm90.202-57.101c-9.478 15.538-27.86 31.441-47.678 31.441-3.708 0-7.183-.264-10.432-.734l-.039-.006c-21.596-3.137-33.213-15.411-37.042-20.271-.204-.3-1.073-1.437-1.202-1.626a9.964 9.964 0 0 0-5.511-4.583l-79.508-26.985c-12.688-4.762-19.395-15.627-16.321-26.463l.006-.021.007-.025a19.355 19.355 0 0 1 9.247-11.656 19.351 19.351 0 0 1 14.683-1.757l89.593 28.391c5.266 1.671 10.886-1.247 12.554-6.512 1.668-5.265-1.247-10.885-6.512-12.554l-71.255-22.58-.622-.622-.019-.019-36.89-36.89 31.708-11.354c.107-.039.239-.088.345-.131l.105-.042a9.59 9.59 0 0 0 .403-.174c21.436-9.852 41.812-3.955 49.799-.849 30.183 13.581 46.293 22.87 58.063 29.657 16.364 9.437 24.249 13.984 46.518 15.823v80.542zm37.884-6.015H414.66V72.525h17.883v87.443zm59.457 0h-39.457V53.891H492v106.077z"
                                            fill="#e875ab" opacity="1" data-original="#000000" class="">
                                        </path>
                                    </g>
                                </svg>
    <span class="mb-4 mt-10">Gestión de Pagos</span>
</p>

  </div>
  
 <div class="relative rounded overflow-hidden">
    
    <img src="https://i.postimg.cc/4ddgwVHs/pexels-vojtech-okenka-127162-392018.jpg" alt="perfiles remotos" class="w-full">
    
<p class="absolute inset-0 bg-black bg-opacity-75 flex flex-col items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
     <svg class="h-20 w-20 text-pink-400 sm:ml-12-" xmlns="http://www.w3.org/2000/svg"
                                    version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                                    height="40" x="0" y="0" viewBox="0 0 16.933 16.933"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M2.12 0c-.582 0-1.06.478-1.06 1.06v4.414C.69 5.6.42 5.84.257 6.11A1.845 1.845 0 0 0 0 7.064v2.255c0 .47.213 1.046.413 1.606.1.28.198.552.27.778.071.227.111.42.111.485v1.002a.793.793 0 0 0-.264.589v2.384a.8.8 0 0 0 .794.797h3.712a.8.8 0 0 0 .793-.797V13.78a.798.798 0 0 0-.453-.716c.045-.182.137-.43.24-.72.122-.342.25-.748.288-1.212h4.931l1.24 2.481a.797.797 0 0 0-.414.697v1.854a.8.8 0 0 0 .793.797h3.71c.435 0 .796-.36.796-.797V14.31a.8.8 0 0 0-.495-.734c.042-.145.118-.316.207-.516.136-.305.288-.678.288-1.135V1.061C16.96.478 16.482 0 15.9 0zm0 .53H15.9c.298 0 .53.232.53.53v7.73a.736.736 0 0 0-.267-.046c-.138.003-.176.02-.264.048V1.854a.797.797 0 0 0-.793-.793H2.914a.797.797 0 0 0-.793.793v4.603l-.05-.02a.854.854 0 0 0-.48-.058V1.061c0-.299.231-.531.53-.531zm.53 6.41V1.853c0-.15.113-.263.264-.263h12.192c.15 0 .263.112.263.263v6.674a.703.703 0 0 0-.263-.048c-.219 0-.345.077-.393.102a.788.788 0 0 0-.668-.368c-.143.008-.167.017-.266.046V7.156h.792a.265.265 0 0 0 0-.53h-.792c0-.436-.358-.797-.794-.797s-.797.36-.797.797H9.804a.265.265 0 0 0 0 .53h2.384V9.61l-.312-.541a.93.93 0 0 0-1.266-.34.919.919 0 0 0-.454.811h-6.83c-.122-.134-.233-.243-.305-.33-.083-.101-.107-.155-.107-.2V7.87a1.827 1.827 0 0 0-.263-.93zm10.335-4.82a.8.8 0 0 0-.797.794H9.804a.265.265 0 0 0 0 .531h2.384a.8.8 0 0 0 .797.794.797.797 0 0 0 .794-.794h.796a.265.265 0 0 0 0-.53h-.796a.797.797 0 0 0-.794-.794zm0 .53c.151 0 .264.113.264.264v.531c0 .151-.113.266-.264.266s-.267-.115-.267-.266v-.53a.26.26 0 0 1 .267-.264zm-6.89.264A2.919 2.919 0 0 0 3.182 5.83v1.06c0 .147.117.266.264.267h5.298a.265.265 0 0 0 .267-.267V5.83a2.919 2.919 0 0 0-2.914-2.915zm-.266.545v.252a.265.265 0 0 0 .53 0v-.252c.462.051.883.232 1.226.506l-.179.178a.265.265 0 0 0 0 .376.265.265 0 0 0 .376 0l.178-.179c.274.343.455.764.505 1.226h-.249a.265.265 0 1 0 0 .53h.263v.53H7.156c0-.264-.098-.507-.26-.693l.446-.446a.265.265 0 0 0-.186-.451.265.265 0 0 0-.188.078l-.516.514a1.064 1.064 0 0 0-1.416.998H3.71v-.53h.264a.265.265 0 0 0 0-.53h-.25c.051-.462.232-.883.506-1.226l.178.179a.265.265 0 0 0 .374-.376l-.178-.177a2.372 2.372 0 0 1 1.224-.507zm5.035.516a.797.797 0 0 0-.794.794h-.266a.265.265 0 0 0 0 .53h.266a.8.8 0 0 0 .794.797c.436 0 .797-.36.797-.797h2.914a.265.265 0 0 0 0-.53h-2.914a.8.8 0 0 0-.797-.794zm0 .53a.26.26 0 0 1 .267.264v.53a.261.261 0 0 1-.267.267.259.259 0 0 1-.264-.267v-.53c0-.151.113-.264.264-.264zm-9.803 1.54v2.967a.265.265 0 0 0 .53 0V7.077c0-.127.028-.145.062-.164.034-.018.113-.03.22.014.212.086.494.377.511.954V9.01c0 .22.112.397.228.538.115.14.247.262.37.4.245.278.462.592.463 1.183a.265.265 0 0 0 .53 0h1.397c-.037.377-.142.72-.255 1.034a5.417 5.417 0 0 0-.226.82H1.324v-.797c0-.198-.057-.401-.135-.645-.077-.244-.179-.516-.278-.794C.714 10.194.53 9.601.53 9.32V7.064c0-.21.05-.471.178-.68a.895.895 0 0 1 .353-.339zm5.035.05c.295 0 .53.235.53.53h-1.06c0-.295.234-.53.53-.53zm7.153.53v3.445c.008.346.522.346.53 0V9.01c0-.151.115-.267.266-.267s.264.116.264.267v1.06c.008.346.522.346.53 0v-.796a.26.26 0 0 1 .267-.264c.15 0 .263.113.263.264v.796c.008.346.523.346.53 0v-.53c0-.151.113-.266.264-.266a.26.26 0 0 1 .266.266v2.384c0 .34-.112.628-.242.92-.096.215-.207.43-.259.671h-3.31l-1.88-3.77c-.11-.218-.059-.445.136-.557a.392.392 0 0 1 .544.144l.808 1.399c.136.23.488.136.492-.131V6.626c0-.152.116-.266.267-.267s.264.115.264.267zM3.713 10.07h6.592l.265.53H3.914a2.132 2.132 0 0 0-.2-.53zm-2.389 3.445h3.712c.15 0 .263.113.263.264v2.384a.259.259 0 0 1-.263.266H1.324a.259.259 0 0 1-.263-.266V13.78c0-.151.112-.264.263-.264zm11.13.53h3.71c.15 0 .265.113.265.264v1.854a.26.26 0 0 1-.266.266h-3.709a.26.26 0 0 1-.266-.266V14.31c0-.151.115-.264.266-.264z"
                                            fill="#e875ab" opacity="1" data-original="#000000" class="">
                                        </path>
                                    </g>
                                </svg>
    <span class="mb-4 mt-10">Monitoreo y Garantía</span>
</p>

  </div>
  
<div class="relative rounded overflow-hidden">
    
    <img src="https://i.postimg.cc/5yQMWJmr/pexels-olly-3769021-1.jpg" alt="perfiles remotos" class="w-full">
    
<p class=" absolute inset-0 bg-black bg-opacity-75 flex flex-col items-center justify-center text-2xl text-center text-white font-roboto font-medium group-hover:bg-opacity-60 transition">
   <svg class="h-20 w-20 text-pink-400 sm:ml-12-" xmlns="http://www.w3.org/2000/svg"
                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"
                height="40" x="0" y="0" viewBox="0 0 512 512"
                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                <g>
                    <path
                        d="m509.042 355.862-24.409-24.21c-3.923-3.891-10.255-3.864-14.145.058-3.891 3.922-3.864 10.255.058 14.145l24.408 24.21a9.968 9.968 0 0 0 7.043 2.901 9.968 9.968 0 0 0 7.101-2.959c3.892-3.922 3.866-10.255-.056-14.145zM459.762 306.881c-3.906-3.906-10.237-3.906-14.145 0l-.017.017c-3.906 3.906-3.897 10.231.009 14.137a9.96 9.96 0 0 0 7.067 2.926c2.564 0 5.13-.979 7.085-2.934 3.906-3.906 3.906-10.239.001-14.146z"
                        fill="#cd5eb0" opacity="1" data-original="#000000"></path>
                    <path
                        d="m374.493 353 97.028-97.027c14.695-14.696 14.695-38.608-.001-53.304a37.449 37.449 0 0 0-18.177-10.055 37.573 37.573 0 0 0 3.496-15.888c0-10.068-3.921-19.533-11.039-26.651-5.583-5.584-12.612-9.19-20.241-10.489 4.295-13.086 1.259-28.073-9.128-38.459a37.469 37.469 0 0 0-20.227-10.462 37.75 37.75 0 0 0 1.897-11.833c0-10.068-3.921-19.533-11.039-26.651-7.119-7.118-16.584-11.039-26.651-11.039-6.393 0-12.54 1.586-18.001 4.564l-.965-1.037c-12.542-13.478-30.295-21.207-48.704-21.207h-78.54c-5.523 0-10.002 4.479-10.002 10.002V46.58c0 5.249.888 10.359 2.586 15.164a37.636 37.636 0 0 0-14.465-2.866c-10.068 0-19.533 3.921-26.652 11.039-10.392 10.392-13.425 25.39-9.12 38.48a37.476 37.476 0 0 0-20.248 10.466c-7.118 7.119-11.039 16.584-11.039 26.651 0 4.076.653 8.05 1.89 11.811-7.62 1.303-14.642 4.907-20.22 10.486-11.477 11.477-13.99 28.577-7.539 42.516-6.831 1.561-13.105 5.001-18.183 10.078-14.695 14.695-14.695 38.607 0 53.303l19.954 19.953-98.234 98.232c-3.906 3.906-3.906 10.239 0 14.146 1.953 1.952 4.513 2.93 7.072 2.93s5.119-.977 7.072-2.93l99.182-99.182c5.615 3.204 11.987 4.918 18.628 4.918 10.067 0 19.532-3.921 26.651-11.04 7.734-7.733 11.392-18.02 10.985-28.172.507.021 1.014.036 1.521.036 9.65-.001 19.305-3.675 26.651-11.021 7.118-7.119 11.039-16.584 11.039-26.651 0-.509-.017-1.015-.037-1.521.501.02 1.002.036 1.504.036 9.651 0 19.304-3.674 26.651-11.021 7.118-7.119 11.039-16.584 11.039-26.651 0-.509-.017-1.015-.037-1.521.501.02 1.002.036 1.504.036 9.652 0 19.304-3.674 26.651-11.021 13.808-13.808 14.639-35.751 2.5-50.542l66.394-66.394c3.341-3.342 7.781-5.181 12.506-5.181s9.166 1.839 12.507 5.181a17.567 17.567 0 0 1 5.18 12.506c0 4.724-1.839 9.166-5.181 12.506l-9.789 9.789-35.518 35.518c-3.906 3.906-3.906 10.239 0 14.146 1.953 1.952 4.513 2.93 7.072 2.93s5.119-.977 7.072-2.93l35.518-35.518c6.895-6.896 18.116-6.897 25.013-.001 6.896 6.897 6.896 18.117 0 25.014l-9.79 9.79-25.728 25.728c-3.906 3.906-3.906 10.239 0 14.146 1.953 1.952 4.513 2.93 7.072 2.93s5.119-.977 7.072-2.93l25.728-25.728a17.566 17.566 0 0 1 12.506-5.181c4.725 0 9.166 1.839 12.507 5.181a17.567 17.567 0 0 1 5.18 12.506c0 4.724-1.839 9.166-5.181 12.506l-13.437 13.437-12.291 12.291c-3.906 3.906-3.906 10.239 0 14.146 1.953 1.952 4.513 2.93 7.072 2.93s5.119-.977 7.072-2.93l12.3-12.3c6.897-6.885 18.111-6.884 25.004.009 6.897 6.896 6.897 18.117 0 25.014l-97.028 97.027c-24.364 24.365-56.745 38.47-91.178 39.72a10 10 0 0 0-6.723 2.937l-89.632 89.964c-3.899 3.913-3.888 10.246.026 14.145a9.971 9.971 0 0 0 7.059 2.917 9.967 9.967 0 0 0 7.085-2.943l65.927-66.17c16.746 10.743 36.44 15.851 56.465 14.527l51.598 51.599a9.976 9.976 0 0 0 7.072 2.93 9.97 9.97 0 0 0 7.072-2.93c3.906-3.906 3.906-10.239 0-14.146l-54.86-54.866a10.008 10.008 0 0 0-7.89-2.897l-3.171.26a73.01 73.01 0 0 1-41.737-9.085l6.428-6.451c38.016-2.345 73.608-18.363 100.615-45.371zM147.39 286.591a17.568 17.568 0 0 1-12.506 5.181 17.563 17.563 0 0 1-12.506-5.181l-27.026-27.025c-6.896-6.896-6.896-18.117 0-25.014a17.568 17.568 0 0 1 12.507-5.181c4.724 0 9.166 1.839 12.506 5.181l27.026 27.025c6.895 6.896 6.895 18.117-.001 25.014zm39.159-39.159c-6.897 6.896-18.12 6.896-25.014 0l-27.026-27.026-13.438-13.438c-6.896-6.896-6.896-18.117 0-25.013a17.568 17.568 0 0 1 12.506-5.181c4.725 0 9.166 1.839 12.506 5.181l40.463 40.463h.001c3.342 3.342 5.181 7.783 5.181 12.507s-1.839 9.166-5.179 12.507zm39.157-39.158c-6.897 6.895-18.119 6.896-25.014 0l-50.253-50.253a17.567 17.567 0 0 1-5.18-12.506c0-4.724 1.839-9.166 5.181-12.506a17.633 17.633 0 0 1 12.506-5.172c4.526 0 9.051 1.722 12.498 5.164l22.904 22.904 27.356 27.356h.001a17.57 17.57 0 0 1 5.179 12.506 17.558 17.558 0 0 1-5.178 12.507zm39.158-39.158c-6.896 6.896-18.117 6.896-25.013 0l-50.253-50.253-.017-.016-9.773-9.773c-6.896-6.897-6.896-18.117 0-25.014a17.63 17.63 0 0 1 12.507-5.173c4.529 0 9.059 1.724 12.506 5.173l60.041 60.041a17.566 17.566 0 0 1 5.181 12.506 17.562 17.562 0 0 1-5.179 12.509zm2.63-50.672-27.472-27.472a45.764 45.764 0 0 0 9.578 1.017h.221l27.448-.129c5.523-.026 9.981-4.525 9.955-10.049-.026-5.508-4.499-9.955-10.001-9.955h-.048l-27.448.129h-.124c-6.763 0-13.124-2.625-17.92-7.398-4.826-4.804-7.483-11.198-7.483-18.008v-3.114h68.538c12.875 0 25.29 5.405 34.062 14.831l.407.437-59.713 59.711z"
                        fill="#e875ab" opacity="1" data-original="#000000"></path>
                </g>
            </svg>
    <span class="mb-4 mt-10">Apoyo y Eficiencia</span>
</p>

  </div>

</div>

    

<div class="relative">
    <!--<div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-gradient-to-b from-pink-100 to-pink-400">-->
    
    <!--        <h1 id="como"-->
    <!--            class="mb-3 text-4xl font-extrabold text-gray-900 dark:text-white md:text-7xl lg:text-7xl text-center ">-->
    <!--            <span-->
    <!--                class="font-montserrat text-gray-100">¿Qué-->
    <!--                hacemos?</span>-->
    <!--        </h1>-->
    <!--</div>-->
    <!--<div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-black text-white text-center gap-6">-->
    <!-- <svg class="h-40 w-40 mb-10 text-white sm:ml-12-" xmlns="http://www.w3.org/2000/svg"-->
    <!--                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"-->
    <!--                                height="40" x="0" y="0" viewBox="0 0 5171.524 4796.003"-->
    <!--                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">-->
    <!--                                <g>-->
    <!--                                    <path-->
    <!--                                        d="m3693.28 2439.646-9.56 89.828h1487.804l-9.56-89.828c-28.679-271.877-201.378-494.985-437.854-598.203 112.693-88.271 185.327-225.251 185.327-379.162 0-265.678-216.142-481.717-481.815-481.717s-481.814 216.193-481.814 481.871c0 153.911 72.633 290.712 185.325 378.977-236.482 103.218-409.178 326.351-437.853 598.234zm416.619-977.161c0-175.199 142.529-317.728 317.723-317.728s317.723 142.529 317.723 317.728c0 175.189-142.529 317.718-317.723 317.718s-317.723-142.529-317.723-317.718zm317.723 480.168c263.439 0 487.569 176.591 554.246 422.729H3873.371c66.678-246.138 290.812-422.729 554.251-422.729z"-->
    <!--                                        style="" fill="#e875ab" data-original="#000000" class=""-->
    <!--                                        opacity="1"></path>-->
    <!--                                    <path-->
    <!--                                        d="M4842.905 3800.825 3530.38 2620.884c378.722-669.568 283.272-1536.774-286.55-2106.594C2912.186 182.651 2471.244 0 2002.229 0S1092.272 182.651 760.628 514.29c-331.644 331.649-514.29 772.586-514.29 1241.596 0 469.02 182.645 909.957 514.29 1241.606 331.644 331.639 772.586 514.29 1241.601 514.29 303.214 0 594.644-76.442 852.445-220.023l423.804 471.429.004-.005 758.425 843.64c105.772 117.651 251.12 184.764 409.273 188.97 5.253.14 10.486.21 15.719.21 152.264 0 294.853-59.011 403.009-167.167l.005-.01c111.867-111.872 171.163-260.58 166.956-418.733-4.205-158.152-71.314-303.495-188.964-409.268zm-1831.857-580.571 116.087-116.088c40.195-33.657 79.179-69.156 116.695-106.674 37.399-37.397 72.63-76.147 105.943-115.973l106.559-106.559 304.531 273.77-476.044 476.051-273.771-304.527zm-2119.89-353.303C594.383 2570.176 430.942 2175.6 430.942 1755.886c0-419.704 163.441-814.28 460.217-1111.056 296.781-296.786 691.366-460.227 1111.071-460.227s814.29 163.441 1111.066 460.227h.005c296.771 296.776 460.212 691.351 460.212 1111.056 0 419.714-163.441 814.29-460.217 1111.066-296.776 296.786-691.361 460.227-1111.066 460.227s-814.291-163.442-1111.072-460.228zM4748.88 4512.798c-79.702 79.702-185.505 121.977-298.338 118.962-112.683-2.995-216.247-50.818-291.608-134.646l-764.257-850.125 488.39-488.395 850.128 764.258c83.829 75.366 131.642 178.925 134.642 291.598 2.996 112.683-39.254 218.646-118.957 298.348z"-->
    <!--                                        style="" fill="#e875ab" data-original="#000000" class=""-->
    <!--                                        opacity="1"></path>-->
    <!--                                    <path-->
    <!--                                        d="M2949.518 808.592c-522.332-522.322-1372.247-522.322-1894.578 0-522.342 522.342-522.342 1372.257 0 1894.599 253.028 253.028 589.45 392.382 947.289 392.382s694.261-139.354 947.289-392.382c522.342-522.343 522.342-1372.258 0-1894.599zM2002.229 2931.48c-314.012 0-609.225-124.13-831.261-346.171-14.278-14.277-28.127-25.068-41.574-45.58h1745.67c-13.447 20.511-27.296 31.303-41.574 45.58-222.041 222.041-517.254 346.171-831.261 346.171zm-419.96-1693.82c0-228.18 185.635-413.815 413.81-413.815s413.81 185.635 413.81 413.815c0 228.17-185.635 413.805-413.81 413.805s-413.81-185.634-413.81-413.805zM1283.31 2375.637c76.317-328.184 368.16-563.765 712.769-563.765s636.452 235.582 712.769 563.765H1283.31zm1611.233 145.694-7.23-68.565c-36.077-342.035-259.948-621.058-563.202-739.701 150.818-104.39 249.871-278.513 249.871-475.405 0-318.659-259.248-577.907-577.902-577.907s-577.902 259.248-577.902 577.907c0 196.892 99.053 371.015 249.871 475.405-303.254 118.642-527.125 397.665-563.202 739.701l-5.862 55.59c-176.289-210.874-272.335-474.273-272.335-752.46 0-314.012 122.283-609.235 344.319-831.266 229.182-229.182 530.219-343.768 831.261-343.768s602.079 114.586 831.261 343.768c222.036 222.031 344.319 517.254 344.319 831.266-.001 283.906-99.987 552.448-283.267 765.435zM1040.39 4004.182c112.694-88.271 185.327-225.461 185.327-379.377 0-265.668-216.142-481.81-481.815-481.81s-481.815 216.142-481.815 481.81c0 153.916 72.633 291.107 185.327 379.377C210.937 4107.396 38.239 4330.914 9.56 4602.786L0 4693.436h1487.804l-9.56-90.649c-28.679-271.873-201.377-495.391-437.854-598.605zm-614.211-379.377c0-175.189 142.529-317.718 317.723-317.718s317.723 142.529 317.723 317.718c0 175.199-142.529 317.728-317.723 317.728s-317.723-142.529-317.723-317.728zm-236.523 904.539c66.677-246.429 290.806-422.719 554.246-422.719s487.569 176.291 554.246 422.719H189.656z"-->
    <!--                                        style="" fill="#e875ab" data-original="#000000" class=""-->
    <!--                                        opacity="1"></path>-->
    <!--                                </g>-->
    <!--                            </svg>-->
    <!--   <h2 style="font-family: Montserrat; gap-5"-->
    <!--                            class="text-5xl text-pink-400 font-bold dark:text-white">Búsqueda de Perfiles Remotos-->
    <!--                        </h2>-->
    <!--                        <p style="font-family: Montserrat; font-size: 20px;" class="text-neutral-50 dark:text-neutral-50 text-3x1 max-w-xl">-->
    <!--                            Buscamos los mejores perfiles remotos desde Sudamérica en diversas áreas, que trabajen-->
    <!--                            en tu horario y 100% para ti.-->
    <!--                        </p>-->
    <!--</div>-->
    <!--<div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white text-black text-center gap-6">-->
    <!--                        <svg class="h-40 w-40 text-white sm:ml-12-" xmlns="http://www.w3.org/2000/svg"-->
    <!--                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"-->
    <!--                                height="40" x="0" y="0" viewBox="0 0 512 512"-->
    <!--                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">-->
    <!--                                <g>-->
    <!--                                    <path-->
    <!--                                        d="M82.931 198.457a8 8 0 0 1 8-8h202.057a8 8 0 0 1 0 16H90.931a8 8 0 0 1-8-8zm210.056 170.639H90.931a8 8 0 0 0 0 16h202.057a8 8 0 1 0-.001-16zm0 59.547H90.931a8 8 0 0 0 0 16h202.057a8 8 0 1 0-.001-16zM90.931 146.91h145.046a8 8 0 0 0 0-16H90.931a8 8 0 0 0 0 16zm333.25 239.239v64.324a8 8 0 0 1-8 8h-45.527V504a8 8 0 0 1-8 8H21.263a8 8 0 0 1-8-8V61.527a8 8 0 0 1 8-8H66.79V8a8 8 0 0 1 8-8h286.079a8 8 0 0 1 5.657 2.343l55.312 55.312a8 8 0 0 1 2.343 5.657v117.451c43.231 14.114 74.556 54.811 74.556 102.693s-31.325 88.579-74.556 102.693zM368.869 55.312h27.998l-27.998-27.998zM82.791 53.527h224.552A8 8 0 0 1 313 55.87l55.312 55.312a8 8 0 0 1 2.343 5.657v60.497a108.155 108.155 0 0 1 37.527-.464V71.312H360.87a8 8 0 0 1-8-8V16H82.791zm232.551 55.311h27.998L315.342 80.84zM354.654 496V385.25c-28.541-10.147-51.595-31.97-63.375-59.7H90.931a8 8 0 0 1 0-16h195a107.85 107.85 0 0 1-3.194-26.094c0-5.941.49-11.769 1.417-17.453H90.931a8 8 0 0 1 0-16h197.116c10.387-31.807 35.164-57.163 66.608-68.341v-56.824h-47.312a8 8 0 0 1-8-8V69.527H29.263V496zm53.527-105.96a108.244 108.244 0 0 1-37.527-.464v52.897h37.527zm74.556-106.584c0-50.729-41.271-92-92-92s-92 41.271-92 92 41.271 92 92 92 92-41.271 92-92zm-27.348-19.376c-7.672 7.749-15.345 15.531-23.02 23.314-13.867 14.064-28.207 28.608-42.404 42.806-3.667 3.667-8.543 5.687-13.729 5.687s-10.062-2.02-13.729-5.687l-36.374-36.374c-7.571-7.57-7.571-19.889 0-27.459a19.29 19.29 0 0 1 13.729-5.687 19.29 19.29 0 0 1 13.73 5.687l22.598 22.598 51.697-52.212c3.663-3.684 8.525-5.713 13.703-5.728h.056a19.255 19.255 0 0 1 13.667 5.639c7.578 7.538 7.612 19.836.076 27.416zm-11.359-16.07a3.388 3.388 0 0 0-4.787.014l-57.342 57.913a8.001 8.001 0 0 1-5.665 2.371h-.02a8.002 8.002 0 0 1-5.657-2.343l-28.283-28.283a3.4 3.4 0 0 0-2.416-1c-.528 0-1.545.13-2.416 1s-1 1.888-1 2.416.13 1.545 1 2.416l36.374 36.374a3.42 3.42 0 0 0 4.832 0c14.158-14.158 28.477-28.681 42.325-42.726 7.682-7.792 15.362-15.582 23.055-23.351a3.393 3.393 0 0 0 0-4.801z"-->
    <!--                                        fill="#e875ab" opacity="1" data-original="#000000" class="">-->
    <!--                                    </path>-->
    <!--                                </g>-->
    <!--                            </svg>-->
    <!--                        <h2 style="font-family: Montserrat; gap-5"-->
    <!--                            class="text-5xl text-pink-400 font-bold dark:text-white">Validación de Habilidades-->
    <!--                        </h2>-->
    <!--                        <p style="font-family: Montserrat; font-size: 20px;" class="text-black dark:text-black text-3x1 max-w-xl">-->
    <!--                             Validamos habilidades y conocimientos con entrevistas exhaustivas, pruebas psicométricas-->
    <!--                            y psicotécnicas para asegurar que cumplen con tus necesidades.-->
    <!--                        </p>-->
    <!--</div>-->
    <!--  <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-black text-white text-center gap-6">-->
    <!--   <svg class="h-40 w-40 text-pink-400 sm:ml-12-" xmlns="http://www.w3.org/2000/svg"-->
    <!--                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"-->
    <!--                                height="40" x="0" y="0" viewBox="0 0 512 512"-->
    <!--                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">-->
    <!--                                <g>-->
    <!--                                    <path d="M374.453 333.89V497H15V15h254.497l104.956 105.956v127.855"-->
    <!--                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"-->
    <!--                                        fill="none" stroke="#e875ab" stroke-width="30" stroke-linecap="round"-->
    <!--                                        stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"-->
    <!--                                        class="" opacity="1"></path>-->
    <!--                                    <path-->
    <!--                                        d="M153.367 437h0a41.736 41.736 0 0 1 44.403-10.925L228.804 437M119.956 356.661h146.648M119.956 296.661h149.541M119.956 236.661h149.541M119.956 176.661h149.541M445.651 177.614 245.927 377.337 228.804 437l59.663-17.124L488.19 220.153c11.747-11.747 11.747-30.792 0-42.539h0c-11.747-11.747-30.792-11.747-42.539 0zM424.305 198.96l42.539 42.539"-->
    <!--                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"-->
    <!--                                        fill="none" stroke="#e875ab" stroke-width="30" stroke-linecap="round"-->
    <!--                                        stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"-->
    <!--                                        class="" opacity="1"></path>-->
    <!--                                    <path d="m466.844 241.499-.365 84.661-45.716 45.715M374.453 120.956H269.497V15"-->
    <!--                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"-->
    <!--                                        fill="none" stroke="#e875ab" stroke-width="30" stroke-linecap="round"-->
    <!--                                        stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"-->
    <!--                                        class="" opacity="1"></path>-->
    <!--                                </g>-->
    <!--                            </svg>-->
    <!--   <h2 style="font-family: Montserrat; gap-5"-->
    <!--                            class="text-5xl text-pink-400 font-bold dark:text-white">Contratación Formal-->
    <!--                        </h2>-->
    <!--                        <p style="font-family: Montserrat; font-size: 20px;" class="text-neutral-50 dark:text-neutral-50 text-3x1 max-w-xl">-->
    <!--                              Contratamos formalmente a los profesionales, minimizando riesgos laborales y ahorrando-->
    <!--                            costes de nómina, como seguridad social y otros beneficios.-->
    <!--                        </p>-->
    <!--</div>-->
    <!--<div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white text-black text-center gap-6">-->
    <!--                         <svg class="h-40 w-40 text-pink-400 sm:ml-12-" xmlns="http://www.w3.org/2000/svg"-->
    <!--                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"-->
    <!--                                height="40" x="0" y="0" viewBox="0 0 512 512"-->
    <!--                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">-->
    <!--                                <g>-->
    <!--                                    <path-->
    <!--                                        d="M172.55 391.902c-.13-.64-.32-1.27-.57-1.88-.25-.6-.56-1.18-.92-1.72a9.57 9.57 0 0 0-1.24-1.52 9.57 9.57 0 0 0-1.52-1.24 9.87 9.87 0 0 0-1.73-.92c-.6-.25-1.23-.45-1.87-.57a9.847 9.847 0 0 0-3.9 0c-.64.12-1.27.32-1.88.57-.6.25-1.18.56-1.72.92-.55.36-1.06.78-1.52 1.24-.46.46-.88.97-1.24 1.52-.37.54-.67 1.12-.92 1.72a9.69 9.69 0 0 0-.57 1.88c-.13.64-.2 1.3-.2 1.95 0 .65.07 1.31.2 1.95.12.64.32 1.27.57 1.87.25.61.55 1.19.92 1.73.36.55.78 1.06 1.24 1.52.46.46.97.88 1.52 1.24.54.361 1.12.671 1.72.921.61.25 1.24.45 1.88.57.64.13 1.3.2 1.95.2.65 0 1.31-.07 1.95-.2.64-.12 1.27-.32 1.87-.57.61-.25 1.19-.561 1.73-.921a9.57 9.57 0 0 0 1.52-1.24c.46-.46.88-.97 1.24-1.52.36-.54.67-1.12.92-1.73a10.098 10.098 0 0 0 .77-3.82c0-.65-.07-1.31-.2-1.95z"-->
    <!--                                        fill="#e875ab" opacity="1" data-original="#000000" class="">-->
    <!--                                    </path>-->
    <!--                                    <path-->
    <!--                                        d="M459.993 394.982a9.705 9.705 0 0 0-.121-.297c-9.204-21.537-30.79-29.497-56.336-20.772l-69.668 19.266c-4.028-12.198-14.075-22.578-28.281-27.85a11.876 11.876 0 0 0-.265-.094l-76.581-25.992c-6.374-8.239-26.34-29.321-63.723-29.321-26.125 0-49.236 17.922-62.458 37.457H10c-5.523 0-10 4.477-10 10v126.077c0 5.523 4.477 10 10 10h59.457c5.523 0 10-4.477 10-10v-8.634h27.883c5.523 0 10-4.477 10-10v-2.878c16.254 1.418 21.6 4.501 36.528 13.109 11.48 6.62 28.831 16.625 60.077 30.674.145.065.292.127.439.185 5.997 2.359 17.72 6.065 32.173 6.065 10.06 0 21.445-1.797 33.131-7.094l153.991-55.136c.274-.098.544-.208.808-.33 14.717-6.771 36.648-25.854 25.506-54.435zM59.457 473.455H20V367.378h39.457v106.077zm37.883-18.634H79.457v-87.443H97.34v87.443zm329.156-23.747-153.922 55.111a12.33 12.33 0 0 0-.854.348c-21.437 9.852-41.814 3.954-49.8.849-30.182-13.581-46.291-22.87-58.061-29.657-16.364-9.436-24.249-13.984-46.519-15.823V361.36c9.479-15.536 27.861-31.439 47.679-31.439 33.986 0 48.387 22.105 48.953 22.997a10 10 0 0 0 5.305 4.232l79.475 26.974c12.693 4.764 19.401 15.634 16.318 26.474a19.354 19.354 0 0 1-9.257 11.691 19.367 19.367 0 0 1-14.683 1.758l-89.593-28.392c-5.268-1.669-10.886 1.247-12.554 6.512-1.669 5.265 1.247 10.885 6.512 12.554l89.749 28.441c.095.03.19.059.286.086a39.657 39.657 0 0 0 10.857 1.523c6.638 0 13.203-1.691 19.161-5.011 9.213-5.133 15.875-13.547 18.759-23.692.23-.81.434-1.62.611-2.43l75.083-20.8c10.844-3.704 25.079-5.039 31.417 9.558 6.56 17.137-10.49 26.564-14.922 28.678zM359.06 131.543c-.13-.64-.32-1.27-.58-1.88-.25-.6-.55-1.18-.92-1.72a9.57 9.57 0 0 0-1.24-1.52 9.57 9.57 0 0 0-1.52-1.24c-.54-.36-1.12-.67-1.72-.92a9.81 9.81 0 0 0-1.87-.57 9.898 9.898 0 0 0-3.91 0c-.64.12-1.27.32-1.87.57-.61.25-1.19.56-1.73.92-.55.36-1.06.78-1.52 1.24-.46.46-.88.97-1.24 1.52-.36.54-.67 1.12-.92 1.72a9.69 9.69 0 0 0-.57 1.88c-.13.64-.2 1.3-.2 1.95 0 .65.07 1.31.2 1.95.12.64.32 1.27.57 1.87.25.61.56 1.19.92 1.73.36.55.78 1.06 1.24 1.52.46.46.97.88 1.52 1.24.54.36 1.12.67 1.73.92.6.25 1.23.44 1.87.57s1.3.2 1.95.2c.65 0 1.31-.07 1.96-.2.63-.13 1.26-.32 1.87-.57.6-.25 1.18-.56 1.72-.92a9.57 9.57 0 0 0 1.52-1.24c.46-.46.88-.97 1.24-1.52.37-.54.67-1.12.92-1.73.26-.6.45-1.23.58-1.87.13-.64.19-1.3.19-1.95 0-.65-.06-1.31-.19-1.95z"-->
    <!--                                        fill="#e875ab" opacity="1" data-original="#000000" class="">-->
    <!--                                    </path>-->
    <!--                                    <path-->
    <!--                                        d="M502 33.891h-59.457c-5.523 0-10 4.477-10 10v8.634H404.66c-5.523 0-10 4.477-10 10v2.878c-16.254-1.419-21.6-4.501-36.527-13.109-11.48-6.62-28.831-16.625-60.078-30.674a8.51 8.51 0 0 0-.44-.185c-10.171-4.002-36.828-11.876-65.299 1.027l-40.24 14.408-33.919-33.918c-3.905-3.905-10.237-3.905-14.142 0L32.657 114.309c-3.602 3.603-4.293 9.85 0 14.143l190.287 190.287c3.045 3.046 10.175 3.967 14.143 0l101.665-101.664c2.643.228 5.386.351 8.229.351 26.126 0 49.236-17.922 62.457-37.456H502c5.523 0 10-4.477 10-10V43.891c0-5.523-4.477-10-10-10zm-350.915-9.726 22.792 22.792c-6.775 4.19-14.608 6.432-22.792 6.432-8.185 0-16.017-2.241-22.792-6.432l22.792-22.792zM76.663 144.173 53.871 121.38l22.792-22.792c4.19 6.775 6.432 14.608 6.432 22.792 0 8.184-2.241 16.017-6.432 22.793zm153.353 153.352-22.788-22.788c13.913-8.586 31.661-8.586 45.575 0l-22.787 22.788zm37.195-37.194c-22.098-16.03-52.292-16.03-74.39 0L91.07 158.579c7.809-10.74 12.025-23.641 12.025-37.199 0-13.559-4.215-26.459-12.025-37.199l22.817-22.816c10.74 7.809 23.64 12.025 37.199 12.025 13.559 0 26.459-4.216 37.199-12.025l21.629 21.629a39.465 39.465 0 0 0-13.462 4.592c-7.168 3.994-12.792 9.975-16.294 17.211a56.985 56.985 0 0 0-29.915 15.741c-22.225 22.226-22.225 58.389.001 80.615 11.112 11.112 25.709 16.669 40.307 16.669 14.597 0 29.195-5.556 40.308-16.669 7.23-7.23 12.295-16.116 14.832-25.8l33.764 11.459c-3.801 17.608.092 36.132 10.593 50.682l-22.837 22.837zm-60.798-98.313c.088.032.176.064.265.094l19.996 6.787c-1.51 6.815-4.927 13.081-9.957 18.112-14.428 14.426-37.904 14.428-52.33 0-14.428-14.427-14.428-37.902 0-52.33a36.977 36.977 0 0 1 12.062-8.048c1.846 15.362 12.907 29.055 29.964 35.385zm98.044 61.066a43.739 43.739 0 0 1-6.389-20.796 77.755 77.755 0 0 0 17.636 9.549l-11.247 11.247zm90.202-57.101c-9.478 15.538-27.86 31.441-47.678 31.441-3.708 0-7.183-.264-10.432-.734l-.039-.006c-21.596-3.137-33.213-15.411-37.042-20.271-.204-.3-1.073-1.437-1.202-1.626a9.964 9.964 0 0 0-5.511-4.583l-79.508-26.985c-12.688-4.762-19.395-15.627-16.321-26.463l.006-.021.007-.025a19.355 19.355 0 0 1 9.247-11.656 19.351 19.351 0 0 1 14.683-1.757l89.593 28.391c5.266 1.671 10.886-1.247 12.554-6.512 1.668-5.265-1.247-10.885-6.512-12.554l-71.255-22.58-.622-.622-.019-.019-36.89-36.89 31.708-11.354c.107-.039.239-.088.345-.131l.105-.042a9.59 9.59 0 0 0 .403-.174c21.436-9.852 41.812-3.955 49.799-.849 30.183 13.581 46.293 22.87 58.063 29.657 16.364 9.437 24.249 13.984 46.518 15.823v80.542zm37.884-6.015H414.66V72.525h17.883v87.443zm59.457 0h-39.457V53.891H492v106.077z"-->
    <!--                                        fill="#e875ab" opacity="1" data-original="#000000" class="">-->
    <!--                                    </path>-->
    <!--                                </g>-->
    <!--                            </svg>-->
    <!--                        <h2 style="font-family: Montserrat; gap-5"-->
    <!--                            class="text-5xl text-pink-400 font-bold dark:text-white">Gestión de Pagos-->
    <!--                        </h2>-->
    <!--                        <p style="font-family: Montserrat; font-size: 20px;" class="text-black dark:text-black text-3x1 max-w-xl">-->
    <!--                             Facturamos mensualmente y gestionamos pagos internacionales, sin permanencia ni-->
    <!--                            preocupaciones por transferencias o cambios de divisa.-->
    <!--                        </p>-->
    <!--</div>-->

    <!--  <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-black text-white text-center gap-6">-->
    <!--   <svg class="h-40 w-40 text-pink-400 sm:ml-12-" xmlns="http://www.w3.org/2000/svg"-->
    <!--                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"-->
    <!--                                height="40" x="0" y="0" viewBox="0 0 16.933 16.933"-->
    <!--                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">-->
    <!--                                <g>-->
    <!--                                    <path-->
    <!--                                        d="M2.12 0c-.582 0-1.06.478-1.06 1.06v4.414C.69 5.6.42 5.84.257 6.11A1.845 1.845 0 0 0 0 7.064v2.255c0 .47.213 1.046.413 1.606.1.28.198.552.27.778.071.227.111.42.111.485v1.002a.793.793 0 0 0-.264.589v2.384a.8.8 0 0 0 .794.797h3.712a.8.8 0 0 0 .793-.797V13.78a.798.798 0 0 0-.453-.716c.045-.182.137-.43.24-.72.122-.342.25-.748.288-1.212h4.931l1.24 2.481a.797.797 0 0 0-.414.697v1.854a.8.8 0 0 0 .793.797h3.71c.435 0 .796-.36.796-.797V14.31a.8.8 0 0 0-.495-.734c.042-.145.118-.316.207-.516.136-.305.288-.678.288-1.135V1.061C16.96.478 16.482 0 15.9 0zm0 .53H15.9c.298 0 .53.232.53.53v7.73a.736.736 0 0 0-.267-.046c-.138.003-.176.02-.264.048V1.854a.797.797 0 0 0-.793-.793H2.914a.797.797 0 0 0-.793.793v4.603l-.05-.02a.854.854 0 0 0-.48-.058V1.061c0-.299.231-.531.53-.531zm.53 6.41V1.853c0-.15.113-.263.264-.263h12.192c.15 0 .263.112.263.263v6.674a.703.703 0 0 0-.263-.048c-.219 0-.345.077-.393.102a.788.788 0 0 0-.668-.368c-.143.008-.167.017-.266.046V7.156h.792a.265.265 0 0 0 0-.53h-.792c0-.436-.358-.797-.794-.797s-.797.36-.797.797H9.804a.265.265 0 0 0 0 .53h2.384V9.61l-.312-.541a.93.93 0 0 0-1.266-.34.919.919 0 0 0-.454.811h-6.83c-.122-.134-.233-.243-.305-.33-.083-.101-.107-.155-.107-.2V7.87a1.827 1.827 0 0 0-.263-.93zm10.335-4.82a.8.8 0 0 0-.797.794H9.804a.265.265 0 0 0 0 .531h2.384a.8.8 0 0 0 .797.794.797.797 0 0 0 .794-.794h.796a.265.265 0 0 0 0-.53h-.796a.797.797 0 0 0-.794-.794zm0 .53c.151 0 .264.113.264.264v.531c0 .151-.113.266-.264.266s-.267-.115-.267-.266v-.53a.26.26 0 0 1 .267-.264zm-6.89.264A2.919 2.919 0 0 0 3.182 5.83v1.06c0 .147.117.266.264.267h5.298a.265.265 0 0 0 .267-.267V5.83a2.919 2.919 0 0 0-2.914-2.915zm-.266.545v.252a.265.265 0 0 0 .53 0v-.252c.462.051.883.232 1.226.506l-.179.178a.265.265 0 0 0 0 .376.265.265 0 0 0 .376 0l.178-.179c.274.343.455.764.505 1.226h-.249a.265.265 0 1 0 0 .53h.263v.53H7.156c0-.264-.098-.507-.26-.693l.446-.446a.265.265 0 0 0-.186-.451.265.265 0 0 0-.188.078l-.516.514a1.064 1.064 0 0 0-1.416.998H3.71v-.53h.264a.265.265 0 0 0 0-.53h-.25c.051-.462.232-.883.506-1.226l.178.179a.265.265 0 0 0 .374-.376l-.178-.177a2.372 2.372 0 0 1 1.224-.507zm5.035.516a.797.797 0 0 0-.794.794h-.266a.265.265 0 0 0 0 .53h.266a.8.8 0 0 0 .794.797c.436 0 .797-.36.797-.797h2.914a.265.265 0 0 0 0-.53h-2.914a.8.8 0 0 0-.797-.794zm0 .53a.26.26 0 0 1 .267.264v.53a.261.261 0 0 1-.267.267.259.259 0 0 1-.264-.267v-.53c0-.151.113-.264.264-.264zm-9.803 1.54v2.967a.265.265 0 0 0 .53 0V7.077c0-.127.028-.145.062-.164.034-.018.113-.03.22.014.212.086.494.377.511.954V9.01c0 .22.112.397.228.538.115.14.247.262.37.4.245.278.462.592.463 1.183a.265.265 0 0 0 .53 0h1.397c-.037.377-.142.72-.255 1.034a5.417 5.417 0 0 0-.226.82H1.324v-.797c0-.198-.057-.401-.135-.645-.077-.244-.179-.516-.278-.794C.714 10.194.53 9.601.53 9.32V7.064c0-.21.05-.471.178-.68a.895.895 0 0 1 .353-.339zm5.035.05c.295 0 .53.235.53.53h-1.06c0-.295.234-.53.53-.53zm7.153.53v3.445c.008.346.522.346.53 0V9.01c0-.151.115-.267.266-.267s.264.116.264.267v1.06c.008.346.522.346.53 0v-.796a.26.26 0 0 1 .267-.264c.15 0 .263.113.263.264v.796c.008.346.523.346.53 0v-.53c0-.151.113-.266.264-.266a.26.26 0 0 1 .266.266v2.384c0 .34-.112.628-.242.92-.096.215-.207.43-.259.671h-3.31l-1.88-3.77c-.11-.218-.059-.445.136-.557a.392.392 0 0 1 .544.144l.808 1.399c.136.23.488.136.492-.131V6.626c0-.152.116-.266.267-.267s.264.115.264.267zM3.713 10.07h6.592l.265.53H3.914a2.132 2.132 0 0 0-.2-.53zm-2.389 3.445h3.712c.15 0 .263.113.263.264v2.384a.259.259 0 0 1-.263.266H1.324a.259.259 0 0 1-.263-.266V13.78c0-.151.112-.264.263-.264zm11.13.53h3.71c.15 0 .265.113.265.264v1.854a.26.26 0 0 1-.266.266h-3.709a.26.26 0 0 1-.266-.266V14.31c0-.151.115-.264.266-.264z"-->
    <!--                                        fill="#e875ab" opacity="1" data-original="#000000" class="">-->
    <!--                                    </path>-->
    <!--                                </g>-->
    <!--                            </svg>-->
    <!--   <h2 style="font-family: Montserrat; gap-5"-->
    <!--                            class="text-5xl text-pink-400 font-bold dark:text-white">Monitoreo y Garantía-->
    <!--                        </h2>-->
    <!--                        <p style="font-family: Montserrat; font-size: 20px;" class="text-neutral-50 dark:text-neutral-50 text-3x1 max-w-xl">-->
    <!--                              Monitoreamos el desempeño y calidad de los profesionales, ofreciendo garantía de-->
    <!--                            satisfacción y reemplazo sin coste si no estás conforme.-->
    <!--                        </p>-->
    <!--</div>-->

    <!--<div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-white text-black text-center gap-6">-->
    <!--    <svg class="h-40 w-40 text-pink-400 sm:ml-12-" xmlns="http://www.w3.org/2000/svg"-->
    <!--            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40"-->
    <!--            height="40" x="0" y="0" viewBox="0 0 512 512"-->
    <!--            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">-->
    <!--            <g>-->
    <!--                <path-->
    <!--                    d="m509.042 355.862-24.409-24.21c-3.923-3.891-10.255-3.864-14.145.058-3.891 3.922-3.864 10.255.058 14.145l24.408 24.21a9.968 9.968 0 0 0 7.043 2.901 9.968 9.968 0 0 0 7.101-2.959c3.892-3.922 3.866-10.255-.056-14.145zM459.762 306.881c-3.906-3.906-10.237-3.906-14.145 0l-.017.017c-3.906 3.906-3.897 10.231.009 14.137a9.96 9.96 0 0 0 7.067 2.926c2.564 0 5.13-.979 7.085-2.934 3.906-3.906 3.906-10.239.001-14.146z"-->
    <!--                    fill="#cd5eb0" opacity="1" data-original="#000000"></path>-->
    <!--                <path-->
    <!--                    d="m374.493 353 97.028-97.027c14.695-14.696 14.695-38.608-.001-53.304a37.449 37.449 0 0 0-18.177-10.055 37.573 37.573 0 0 0 3.496-15.888c0-10.068-3.921-19.533-11.039-26.651-5.583-5.584-12.612-9.19-20.241-10.489 4.295-13.086 1.259-28.073-9.128-38.459a37.469 37.469 0 0 0-20.227-10.462 37.75 37.75 0 0 0 1.897-11.833c0-10.068-3.921-19.533-11.039-26.651-7.119-7.118-16.584-11.039-26.651-11.039-6.393 0-12.54 1.586-18.001 4.564l-.965-1.037c-12.542-13.478-30.295-21.207-48.704-21.207h-78.54c-5.523 0-10.002 4.479-10.002 10.002V46.58c0 5.249.888 10.359 2.586 15.164a37.636 37.636 0 0 0-14.465-2.866c-10.068 0-19.533 3.921-26.652 11.039-10.392 10.392-13.425 25.39-9.12 38.48a37.476 37.476 0 0 0-20.248 10.466c-7.118 7.119-11.039 16.584-11.039 26.651 0 4.076.653 8.05 1.89 11.811-7.62 1.303-14.642 4.907-20.22 10.486-11.477 11.477-13.99 28.577-7.539 42.516-6.831 1.561-13.105 5.001-18.183 10.078-14.695 14.695-14.695 38.607 0 53.303l19.954 19.953-98.234 98.232c-3.906 3.906-3.906 10.239 0 14.146 1.953 1.952 4.513 2.93 7.072 2.93s5.119-.977 7.072-2.93l99.182-99.182c5.615 3.204 11.987 4.918 18.628 4.918 10.067 0 19.532-3.921 26.651-11.04 7.734-7.733 11.392-18.02 10.985-28.172.507.021 1.014.036 1.521.036 9.65-.001 19.305-3.675 26.651-11.021 7.118-7.119 11.039-16.584 11.039-26.651 0-.509-.017-1.015-.037-1.521.501.02 1.002.036 1.504.036 9.651 0 19.304-3.674 26.651-11.021 7.118-7.119 11.039-16.584 11.039-26.651 0-.509-.017-1.015-.037-1.521.501.02 1.002.036 1.504.036 9.652 0 19.304-3.674 26.651-11.021 13.808-13.808 14.639-35.751 2.5-50.542l66.394-66.394c3.341-3.342 7.781-5.181 12.506-5.181s9.166 1.839 12.507 5.181a17.567 17.567 0 0 1 5.18 12.506c0 4.724-1.839 9.166-5.181 12.506l-9.789 9.789-35.518 35.518c-3.906 3.906-3.906 10.239 0 14.146 1.953 1.952 4.513 2.93 7.072 2.93s5.119-.977 7.072-2.93l35.518-35.518c6.895-6.896 18.116-6.897 25.013-.001 6.896 6.897 6.896 18.117 0 25.014l-9.79 9.79-25.728 25.728c-3.906 3.906-3.906 10.239 0 14.146 1.953 1.952 4.513 2.93 7.072 2.93s5.119-.977 7.072-2.93l25.728-25.728a17.566 17.566 0 0 1 12.506-5.181c4.725 0 9.166 1.839 12.507 5.181a17.567 17.567 0 0 1 5.18 12.506c0 4.724-1.839 9.166-5.181 12.506l-13.437 13.437-12.291 12.291c-3.906 3.906-3.906 10.239 0 14.146 1.953 1.952 4.513 2.93 7.072 2.93s5.119-.977 7.072-2.93l12.3-12.3c6.897-6.885 18.111-6.884 25.004.009 6.897 6.896 6.897 18.117 0 25.014l-97.028 97.027c-24.364 24.365-56.745 38.47-91.178 39.72a10 10 0 0 0-6.723 2.937l-89.632 89.964c-3.899 3.913-3.888 10.246.026 14.145a9.971 9.971 0 0 0 7.059 2.917 9.967 9.967 0 0 0 7.085-2.943l65.927-66.17c16.746 10.743 36.44 15.851 56.465 14.527l51.598 51.599a9.976 9.976 0 0 0 7.072 2.93 9.97 9.97 0 0 0 7.072-2.93c3.906-3.906 3.906-10.239 0-14.146l-54.86-54.866a10.008 10.008 0 0 0-7.89-2.897l-3.171.26a73.01 73.01 0 0 1-41.737-9.085l6.428-6.451c38.016-2.345 73.608-18.363 100.615-45.371zM147.39 286.591a17.568 17.568 0 0 1-12.506 5.181 17.563 17.563 0 0 1-12.506-5.181l-27.026-27.025c-6.896-6.896-6.896-18.117 0-25.014a17.568 17.568 0 0 1 12.507-5.181c4.724 0 9.166 1.839 12.506 5.181l27.026 27.025c6.895 6.896 6.895 18.117-.001 25.014zm39.159-39.159c-6.897 6.896-18.12 6.896-25.014 0l-27.026-27.026-13.438-13.438c-6.896-6.896-6.896-18.117 0-25.013a17.568 17.568 0 0 1 12.506-5.181c4.725 0 9.166 1.839 12.506 5.181l40.463 40.463h.001c3.342 3.342 5.181 7.783 5.181 12.507s-1.839 9.166-5.179 12.507zm39.157-39.158c-6.897 6.895-18.119 6.896-25.014 0l-50.253-50.253a17.567 17.567 0 0 1-5.18-12.506c0-4.724 1.839-9.166 5.181-12.506a17.633 17.633 0 0 1 12.506-5.172c4.526 0 9.051 1.722 12.498 5.164l22.904 22.904 27.356 27.356h.001a17.57 17.57 0 0 1 5.179 12.506 17.558 17.558 0 0 1-5.178 12.507zm39.158-39.158c-6.896 6.896-18.117 6.896-25.013 0l-50.253-50.253-.017-.016-9.773-9.773c-6.896-6.897-6.896-18.117 0-25.014a17.63 17.63 0 0 1 12.507-5.173c4.529 0 9.059 1.724 12.506 5.173l60.041 60.041a17.566 17.566 0 0 1 5.181 12.506 17.562 17.562 0 0 1-5.179 12.509zm2.63-50.672-27.472-27.472a45.764 45.764 0 0 0 9.578 1.017h.221l27.448-.129c5.523-.026 9.981-4.525 9.955-10.049-.026-5.508-4.499-9.955-10.001-9.955h-.048l-27.448.129h-.124c-6.763 0-13.124-2.625-17.92-7.398-4.826-4.804-7.483-11.198-7.483-18.008v-3.114h68.538c12.875 0 25.29 5.405 34.062 14.831l.407.437-59.713 59.711z"-->
    <!--                    fill="#e875ab" opacity="1" data-original="#000000"></path>-->
    <!--            </g>-->
    <!--        </svg>-->
    <!--    <h2 style="font-family: Montserrat; gap-5"-->
    <!--        class="text-5xl text-pink-400 font-bold dark:text-white">Apoyo y Eficiencia-->
    <!--    </h2>-->
    <!--    <p style="font-family: Montserrat; font-size: 20px;" class="text-black dark:text-black text-3x1 max-w-xl">-->
    <!--            Te brindamos apoyo para maximizar el trabajo de los profesionales contratados con-->
    <!--        tecnología y técnicas que mejoran su desempeño y motivación.-->
    <!--    </p>-->
    <!--</div>-->

    
    <div class="sticky top-0 h-96 items-center justify-center bg-black text-white text-center mb-20">
   

    <div class="h-96 w-screen bg-black flex flex-col justify-center items-center gap-5">
    <h2 style="font-family: Montserrat;"
    class="text-5xl lg:text-7xl text-pink-400 font-bold dark:text-white">
    ¿Hablamos?
</h2>

        <p style="font-family: Montserrat; font-size: 20px;" class="text-white dark:bg-black dark:text-white text-3x1 max-w-xl">
               Agenda una llamada con nosotros para valorar tu caso.

        </p>
        <div class="relative inline-flex  group">
            <div class="absolute transition-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-pink-400 via-pink-400 to-pink-400 rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
            </div>
            <a href="/llamada" title="llamada" class=" transform transition-transform duration-300 hover:scale-110 relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-pink-400 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" role="button">Agendemos una llamada
            </a>
        </div>
    </div>
 

</div>


</div>









        

        <section id="faq" class="py-10 bg-white sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 style="font-family: Montserrat;"
                        class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl text-pink-400">
                        Preguntas frecuentes</h2>
                    <p style="font-family: Montserrat;"
                        class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-800 text-xl font-bold">
                        Consulta las <span class="text-pink-400">dudas mas recurrentes</span> acerca de nuestro
                        servicio</p>
                </div>

                <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
                    <div
                        class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                        <button type="button" class="faq-button flex justify-between w-full px-4 py-5 sm:p-6">
                            <span style="font-family: Montserrat;" class="flex text-lg font-semibold text-black "> ¿La
                                persona trabajara solo para mi? </span>

                            <svg class="w-6 h-6 text-gray-400 rotate-180" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="hidden px-4 pb-5 sm:px-6 sm:pb-6 text-gray-800">
                            <p style="font-family: Montserrat;">Sí, 100% para ti a jornada completa.</p>
                        </div>
                    </div>

                    <div
                        class="transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                        <button type="button" class="faq-button flex justify-between w-full px-4 py-5 sm:p-6">
                            <span style="font-family: Montserrat;" class="flex text-lg font-semibold text-black ">
                                ¿Puedo prescindir de la persona cuando quiera? </span>

                            <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="hidden px-4 pb-5 sm:px-6 sm:pb-6 text-gray-800">
                            <p style="font-family: Montserrat;">Sí. Solamente requerimos un preaviso de 30 días.</p>
                        </div>
                    </div>

                    <div
                        class="transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                        <div class="">
                            <button type="button" class="faq-button flex justify-between w-full px-4 py-5 sm:p-6">
                                <span style="font-family: Montserrat;" class="flex text-lg font-semibold text-black">
                                    ¿Qué coste tiene prescindir de sus servicios? </span>

                                <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>

                            <div class="hidden px-4 pb-5 sm:px-6 sm:pb-6 text-gray-800">
                                <p style="font-family: Montserrat;">$0. No te penalizamos por prescindir del servicio.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div
                        class="transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                        <button type="button" class="faq-button flex justify-between w-full px-4 py-5 sm:p-6">
                            <span style="font-family: Montserrat;" class="flex text-lg font-semibold text-black">
                                ¿Tengo que pagar beneficios como la seguridad social? </span>

                            <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="hidden px-4 pb-5 sm:px-6 sm:pb-6 text-gray-800">
                            <p style="font-family: Montserrat;">No, en lo absoluto. Uno de los principales beneficios
                                de nuestro sistema de outsourcing de personal es que no tienes que pagar beneficios como
                                seguridad social. Se te factura como un servicio profesional externo, parecido a como
                                pagarías por servicios legales o de contabilidad.</p>
                        </div>
                    </div>


                    <div
                        class="transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                        <button type="button" class="faq-button flex justify-between w-full px-4 py-5 sm:p-6">
                            <span style="font-family: Montserrat;" class="flex text-lg font-semibold text-black">
                                ¿Puedo entrevistar a la persona antes de que comience a trabajar para mi? </span>

                            <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="hidden px-4 pb-5 sm:px-6 sm:pb-6 text-gray-800">
                            <p style="font-family: Montserrat;">Claro que sí. Te enviaremos de 3 a 5 perfiles para que
                                los entrevistes y hagas una selección.</p>
                        </div>
                    </div>

                    <div
                        class="transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                        <button type="button" class="faq-button flex justify-between w-full px-4 py-5 sm:p-6">
                            <span style="font-family: Montserrat;" class="flex text-lg font-semibold text-black">
                                ¿Cómo controlas al equipo a distancia? </span>

                            <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="hidden px-4 pb-5 sm:px-6 sm:pb-6 text-gray-800">
                            <p style="font-family: Montserrat;">Nosotros no lo hacemos, lo harás tú. Te recomendaremos
                                herramientas tecnológicas y métodos. Para gestionar al equipo y sus tareas, además de
                                servicios de telefonía VOIP para que la persona tenga un teléfono de empresa en tu país,
                                independientemente de dónde se encuentre en el mundo.</p>
                        </div>
                    </div>

                    <div
                        class="transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                        <button type="button" class="faq-button flex justify-between w-full px-4 py-5 sm:p-6">
                            <span style="font-family: Montserrat;" class="flex text-lg font-semibold text-black ">
                                ¿Cuánto tiempo tarda desde la contratación hasta la selección? </span>

                            <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="hidden px-4 pb-5 sm:px-6 sm:pb-6 text-gray-800">
                            <p style="font-family: Montserrat;">Por lo general entre 2 semanas y 1 mes. Todo depende
                                del número de perfiles solicitados.</p>
                        </div>
                    </div>

                    <div
                        class="transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                        <button type="button" class="faq-button flex  justify-between w-full px-4 py-5 sm:p-6">
                            <span style="font-family: Montserrat;" class="flex text-lg font-semibold text-black">¿Qué
                                hacemos con la diferencia horaria?</span>

                            <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="hidden px-4 pb-5 sm:px-6 sm:pb-6 text-gray-800">
                            <p style="font-family: Montserrat;">Los perfiles pueden trabajar a tu conveniencia y en el
                                horario que mejor le convenga a tu empresa.</p>
                        </div>
                    </div>

                    <div
                        class="transition-all duration-200 bg-white border border-gray-200 cursor-pointer hover:bg-gray-50">
                        <button type="button" class="faq-button flex justify-between w-full px-4 py-5 sm:p-6">
                            <span style="font-family: Montserrat;"
                                class="flex text-lg font-semibold text-black text-center sm:ml-0 ml-10">¿Cómo me hacen
                                el cobro?</span>

                            <svg class="w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="hidden px-4 pb-5 sm:px-6 sm:pb-6 text-gray-800">
                            <p style="font-family: Montserrat;">Mediante cobro automático mensual a una tarjeta de
                                débito o crédito.</p>
                        </div>
                    </div>





                </div>

                <p style="font-family: Montserrat;" class="text-center text-gray-600 textbase mt-9">¿Aún no resuelves
                    tus dudas? <a href="#" title=""
                        class="font-medium text-pink-400 transition-all duration-200 hover:text-black focus:text-black hover:underline">Contacta
                        a soporte</a></p>
            </div>
        </section>





        <section class="py-10 bg-black sm:py-16 lg:py-24">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="max-w-2xl mx-auto text-center">
                    <div class="flex items-center justify-center">
                        <div class="w-20 h-20 -mr-6 overflow-hidden bg-gray-300 rounded-full">
                            <img class="object-cover w-full h-full"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/2/female-avatar-1.jpg"
                                alt="" />
                        </div>

                        <div class="relative overflow-hidden bg-gray-300 border-8 border-white rounded-full w-28 h-28">
                            <img class="object-cover w-full h-full"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/2/male-avatar-1.jpg"
                                alt="" />
                        </div>

                        <div class="w-20 h-20 -ml-6 overflow-hidden bg-gray-300 rounded-full">
                            <img class="object-cover w-full h-full"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/cta/2/female-avatar-2.jpg"
                                alt="" />
                        </div>
                    </div>

                    <h2 class="mt-8 text-3xl font-bold leading-tight text-white lg:mt-12 sm:text-4xl lg:text-5xl">Sé
                        parte de la globalización digital y <span
                            class="font-black text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200">ahorra
                            en costes de personal</span></h2>

                    <p class="mt-4 text-base font-semibold leading-relaxed text-gray-100">Impulsa tu negocio con el
                        mejor <span
                            class="font-black text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200">talento
                            de Sudamérica</span></p>


                    <a href="#contact" title=""
                        class="transform transition-transform duration-300 hover:scale-110 text-xl w-80 inline-flex items-center justify-center px-4 py-4 mt-8 font-black text-white transition-all duration-200 bg-pink-400 border border-transparent rounded-md lg:mt-12 hover:bg-white focus:bg-black hover:text-black focus:text-white"
                        role="button">
                        <svg class="w-5 h-5 mr-2 -ml-1 font-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Empieza hoy
                    </a>
                </div>
            </div>
        </section>







        <section class="py-10 bg-white sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="text-center">

                    <!--<h2 class="text-4x1 mt-4 text-base text-gray-900 dark:text-white lg:mt-8 sm:text-4xl md:text-4xl lg:text-5xl xl:text-5xl 3xl:text-6xl font-bold">¿Eres dueño de un negocio y quieres<span class="font-bold text-pink-400 dark:text-white"> ahorrar en costes de personal?</span></h2>-->
                    <h2 class="mt-8 text-3xl font-bold leading-tight text-gray-900 lg:mt-12 sm:text-4xl lg:text-5xl">
                        Ahorra hasta el <span class="text-pink-400">70% en costes de personal</span></h2>

                </div>

                <div class="grid gap-6 px-6 mt-8 sm:px-0 lg:mt-16 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-12">
                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="px-4 py-6">
                            <div class="flex items-start">
                                <svg class="flex-shrink-0 w-12 h-12 text-pink-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                                <div class="ml-4">
                                    <h4 class="text-4xl font-bold text-gray-900">6+</h4>
                                    <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">Años de
                                        experiencia</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="px-4 py-6">
                            <div class="flex items-start">
                                <svg class="flex-shrink-0 w-12 h-12 text-pink-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                <div class="ml-4">
                                    <h4 class="text-4xl font-bold text-gray-900">300+</h4>
                                    <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">clientes
                                        satisfechos</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="px-4 py-6">
                            <div class="flex items-start">
                                <svg class="flex-shrink-0 w-12 h-12 text-pink-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div class="ml-4">
                                    <h4 class="text-4xl font-bold text-gray-900">200.000+</h4>
                                    <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">Profesionales</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-hidden bg-white border border-gray-200 rounded-lg">
                        <div class="px-4 py-6">
                            <div class="flex items-start">
                                <svg class="flex-shrink-0 w-12 h-12 text-pink-400" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                        d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                                </svg>
                                <div class="ml-4">
                                    <h4 class="text-4xl font-bold text-gray-900">98%</h4>
                                    <p class="mt-1.5 text-lg font-medium leading-tight text-gray-500">De satisfacción
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="mt-5 text-lg font-bold leading-tight text-gray-900 text-center p-6">Con Oberstaff, obtén talento
                remoto que trabaja <span class="text-pink-400">100% para ti por una fracción del coste</span> de
                empleados en nómina.</p>

        </section>


        {{-- third section --}}




<section class="py-8 bg-black sm:py-8 ">
            <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                <div class="text-center sm:flex sm:items-center sm:justify-center sm:text-left gap-8">
                    <div class="flex items-center justify-center">
                        <div class="w-20 h-20 -mr-6 overflow-hidden bg-gray-300 rounded-full">
                            <img class="object-cover w-full h-full"
                                src="https://i.postimg.cc/5tS3pqMF/pexels-liza-summer-6347901.jpg" alt="" />
                        </div>

                        <div class="relative overflow-hidden bg-gray-300 border-8 border-white rounded-full w-28 h-28">
                            <img class="object-cover w-full h-full"
                                src="https://i.postimg.cc/50k8ksKj/pexels-olly-3769021.jpg" alt="" />
                        </div>

                        <div class="w-20 h-20 -ml-6 overflow-hidden bg-gray-300 rounded-full">
                            <img class="object-cover w-full h-full"
                                src="https://i.postimg.cc/xjhKvFb4/pexels-andrew-3178818.jpg" alt="" />
                        </div>
                    </div>
                    <h2 class="text-2xl font-bold text-white sm:text-3xl lg:max-w-md">Podemos <span
                            class="text-pink-400">encontrar grandes profesionales,</span> en todas las posiciones de tu
                        empresa.</h2>


                    <a href="#contact" style="width: 350px;" href="#" title=""
                        class="transform transition-transform duration-300 hover:scale-110 w-84 text-xl inline-flex items-center justify-center px-6 py-4 mt-5 text-base font-black bg-pink-400 rounded-md">

                        <span class="text-white"> Descubre cómo </span>
                    </a>

                </div>
            </div>
        </section>



        <div class="h-sreen bg-white dark:bg-gray-900 text-gray-800 dark:text-white py-10">
            <div class="container mx-auto px-4 py-8">
                <div class="mb-12 space-y-4 px-6 md:px-0">
                    <h2 style="font-family: Montserrat;"
                        class="text-center text-4xl font-bold text-gray-800 dark:text-white md:text-5xl">
                        Casos de <span class="text-pink-400">éxito</span>
                    </h2>
                    <p style="font-family: Montserrat;"
                        class="text-center font-bold text-black dark:text-white font-montserrat text-lg">
                        En Oberstaff creemos que nuestros resultados hablan mucho más que las palabras <br /><span
                            class="text-pink-400">¿Quieres ser parte de la lista de clientes satisfechos con nuestro
                            servicio?</span>
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                        <video class="md:col-span-2 h-80 w-full object-cover" controls auto loop width="640"
                            height="422" loading="lazy" poster="https://i.postimg.cc/SsTkmzvr/sha.png">
                            <source src="shaf.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
                        <div class="p-4 md:p-6">

                            <p class="text-gray-700 dark:text-gray-300 mb-4 two-lines text-center">
                                Con Oberstaff pude dar trabajo a dos personas a tiempo completo, ahorrando costes de
                                contratación, espacios de oficina y salario que tendría al hacerlo en España. Lo mejor
                                de todo es que todo está incluido en una misma factura. Con Oberstaff, encontré la
                                solución perfecta para mis necesidades de contratación remota y optimización de costes.
                            </p>
                            <h3 class="text-xl font-bold text-pink-400 dark:text-pink-400 mb-2 text-center">Shadai
                                Iborra</h3>
                            <p class="text-black font-bold dark:text-gray-300 mb-4 two-lines text-center"> CEO de
                                @amediastory
                            </p>

                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                        <video class="md:col-span-2 h-80 w-full object-cover" controls auto loop width="640"
                            height="422" loading="lazy" poster="https://i.postimg.cc/6qHQSHSZ/fernando.png">
                            <source src="fernando.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
                        <div class="p-4 md:p-6">

                            <p class="text-gray-700 dark:text-gray-300 mb-4 two-lines text-center">
                                Estaba en busca de un editor de video para mi empresa y después de varias búsquedas sin
                                éxito, encontré a Oberstaff en Instagram. Desde nuestra primera llamada, su
                                profesionalismo y calidad de trabajo me dejaron impresionado. Ahora, gracias a su
                                excelente servicio, he expandido mi contrato con ellos para incluir más personal.
                            </p>
                            <h3 class="text-xl font-bold text-pink-400 dark:text-pink-400 mb-2 text-center">Fernando
                                Calderon</h3>
                            <p class="text-black font-bold dark:text-gray-300 mb-4 two-lines text-center"> CEO de
                                www.bybeautypro.com
                            </p>

                        </div>
                    </div>

                    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                        <video class="md:col-span-2 h-80 w-full object-cover" controls auto loop width="640"
                            height="422" loading="lazy" poster="https://i.postimg.cc/bYgkQGgs/Kate.png">
                            <source src="Kate.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
                        <div class="p-4 md:p-6">

                            <p class="text-gray-700 dark:text-gray-300 mb-4 two-lines text-center">
                                “I’ve been working with Oberstaff now for about 2 years. Me and my company had a great
                                experience”, from the moment you sign up you immediately have the best team looking up
                                for you into 20000 profiles. It is actually unbelievable the money you can save.
                            </p>
                            <h3 class="text-xl font-bold text-pink-400 dark:text-pink-400 mb-2 text-center">Kate
                                McCaferty</h3>
                            <p class="text-black font-bold dark:text-gray-300 mb-4 two-lines text-center">KM Real
                                Estate
                            </p>

                        </div>
                    </div>

                    <!-- Add more items as needed, following the same structure -->

                </div>
            </div>
        </div>





        
                <div class="flex justify-center items-center bg-black hover-text-black mt-10">
           <div class="relative inline-flex  group">
            <div class="absolute transition-all duration-1000 opacity-70 -inset-px bg-gradient-to-r from-pink-400 via-pink-400 to-pink-400 rounded-xl blur-lg group-hover:opacity-100 group-hover:-inset-1 group-hover:duration-200 animate-tilt">
            </div>
            <a href="/llamada" title="llamada" class=" transform transition-transform duration-300 hover:scale-110 relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-pink-400 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900" role="button">Agendemos una llamada
            </a>
        </div>
        </div>


          <section class="bg-black sm:py-6 lg:py-4">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="mt-8 text-3xl font-bold leading-tight text-white lg:mt-12 sm:text-4xl lg:text-5xl text-center max-w-xl mx-auto">
            Sé parte de la globalización digital y <span class="font-black text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200">ahorra en costes de personal</span>
        </h2>
   
         <p
                class="max-w-md mx-auto mt-4 text-base text-white text-center text-2xl sm:text-2xl lg:text-2xl ">
                El mejor talento de <span
                class="text-transparent bg-clip-text bg-gradient-to-r to-pink-400 from-pink-200 font-black">Sudamérica</span>
                 esta esperando por ti</p>
    </div>
</section>


            


        {{-- Teen section --}}
        


        

     <section id="contact" class="py-10 bg-black sm:py-16 lg:py-10 mt-10 relative">
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1522252234503-e356532cafd5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxjb2RlfGVufDB8MHx8fDE2OTQwOTg0MTZ8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="Fondo" class="w-full h-full object-cover opacity-50">
    </div>
    <div class="relative max-w-4xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-md p-6 sm:p-10">
            <h3 style="font-family: Montserrat;" class="text-3xl font-bold text-pink-400 text-center">Contáctanos</h3>
            <p style="font-family: Montserrat;" class="mt-4 text-base text-gray-600 text-center font-semibold">
                Déjanos saber tus requerimientos y nos pondremos en contacto contigo a la brevedad posible.
            </p>
            
            <iframe aria-label='New lead' frameborder="0" style="height:980px;width:99%;border:none;" src='https://forms.zohopublic.com/oberstaff/form/Newlead/formperma/ELEFycfizbIK2OoWVrTEBCW8aiUHhHDI5mGtv8dZEHw'></iframe>

            <!--<form id="contactForm" method="POST" class="mt-4">-->
            <!--    <div class="space-y-6">-->
            <!--        <div>-->
            <!--            <label style="font-family: Montserrat;" for="nombres" class="text-base font-bold text-pink-400">Nombre y Apellido</label>-->
            <!--            <div class="mt-2.5 relative">-->
            <!--                <input type="text" name="nombres" id="nombres" placeholder="Introduce tu nombre y apellido"-->
            <!--                       class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring-pink-400 focus:border-pink-400 caret-pink-400" />-->
            <!--            </div>-->
            <!--        </div>-->

            <!--        <div>-->
            <!--            <label style="font-family: Montserrat;" for="email" class="text-base font-bold text-pink-400">Email address</label>-->
            <!--            <div class="mt-2.5 relative">-->
            <!--                <input type="text" name="email" id="email" placeholder="Introduce tu email"-->
            <!--                       class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 caret-orange-500" />-->
            <!--            </div>-->
            <!--        </div>-->

            <!--        <div>-->
            <!--            <label style="font-family: Montserrat;" for="phone" class="text-base font-bold text-pink-400">Teléfono</label>-->
            <!--            <div class="mt-2.5 relative">-->
            <!--                <input type="phone" name="phone" id="phone" placeholder="Introduce tu teléfono"-->
            <!--                       class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 caret-orange-500" />-->
            <!--            </div>-->
            <!--        </div>-->

            <!--        <div>-->
            <!--            <label style="font-family: Montserrat;" for="country" class="text-base font-bold text-pink-400">País</label>-->
            <!--            <div class="mt-2.5 relative">-->
            <!--                <input type="text" name="country" id="country" placeholder="Introduce el país donde resides"-->
            <!--                       class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500 caret-orange-500" />-->
            <!--            </div>-->
            <!--        </div>-->

            <!--        <div>-->
            <!--            <label style="font-family: Montserrat;" for="message" class="text-base font-bold text-pink-400">Mensaje</label>-->
            <!--            <div class="mt-2.5 relative">-->
            <!--                <textarea name="message" id="message" placeholder="Déjanos saber tus requerimientos"-->
            <!--                          class="block w-full px-4 py-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md resize-y focus:outline-none focus:ring-orange-500 focus:border-orange-500 caret-orange-500"-->
            <!--                          rows="4"></textarea>-->
            <!--            </div>-->
            <!--        </div>-->

            <!--        <div>-->
            <!--            <button type="submit" style="font-family: Montserrat;"-->
            <!--                    class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-bold text-white transition-all duration-200 bg-pink-400 border border-transparent rounded-md focus:outline-none hover:bg-black focus:bg-black focus:text-white hover:text-white">-->
            <!--                Enviar-->
            <!--            </button>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</form>-->
        </div>
    </div>
</section>

// <script>
// document.getElementById('contactForm').addEventListener('submit', async function(event) {
//     event.preventDefault(); // Evita que el formulario se envíe de manera predeterminada

//     const formData = new FormData(this);
//     const data = Object.fromEntries(formData.entries());

//     try {
//         await fetch('https://hooks.zapier.com/hooks/catch/12433184/3vae1pv/', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json'
//             },
//             body: JSON.stringify(data)
//         });

//         // Redirige al usuario a la página deseada
//         window.location.href = "https://oberstaff.com/";
//     } catch (error) {
//         console.error("Error enviando datos a Zapier:", error);
//     }
// });
// </script>





        {{-- Footer --}}

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
