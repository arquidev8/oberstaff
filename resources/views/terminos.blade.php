<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Términos y Condiciones de Contratación</title>
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

</head>
<body class="bg-white dark:bg-white">


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
    
      <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-md my-8">
        <h1 class="text-3xl font-bold mb-6 text-center mt-5">Términos y Condiciones de Contratación</h1>
        <p class="mb-4 text-justify">
            <strong>OBERTUS, LLC</strong> (“<strong>Oberstaff</strong>”), es una empresa dedicada al outsourcing de talento técnico y profesional en remoto, establecida y operando bajo las leyes del Estado Libre Asociado de Puerto Rico, Estados Unidos de América. Estos Términos y Condiciones y toda otra norma o política a la que más adelante se haga referencia o que en el futuro sean publicadas por Oberstaff en relación con los Servicios cubiertos por los presentes Términos y Condiciones (en adelante, en conjunto, los “<strong>T&C</strong>”), constituyen el acuerdo legalmente vinculante entre Oberstaff y toda persona (el “<strong>Cliente</strong>”) que haga un pago o utilice los Servicios que ofrece Oberstaff. La dirección de Oberstaff para todos los fines es B5 Calle Tabonuco, Suite 216 PMB 112 Guaynabo, PR 00968-3022, Estados Unidos de América.
        </p>
        
         <h2 class="text-2xl font-bold mb-4 text-center mt-10">1. OBJETO</h2>
        <p class="mb-4 text-justify">
            <strong class="text-xl">1.1.</strong> El Cliente ha contactado a Oberstaff para que éste le brinde los servicios de outsourcing de personal técnico remoto (“<strong>Profesional</strong>” o “<strong>Profesionales</strong>”), los contrate y los destaque para rendir sus servicios en beneficio del Cliente y en la modalidad temporal y remota. El objeto de estos Términos y Condiciones de Contratación ("T&C") es regular la forma y modo en que Oberstaff brindará los servicios al Cliente durante su relación contractual. A continuación, se detallan los “<strong>Servicios</strong>” a brindarse por parte de Oberstaff:
        </p>
        <ul class="text-justify mb-4">
            <li class="mb-2">
                <strong class="text-xl">1.1.1.</strong> <strong>Servicio de búsqueda y contratación.</strong> Oberstaff gestionará la búsqueda, pre-selección, y contratación de contratistas independientes para cubrir las necesidades solicitadas por el Cliente.
            </li>
            <li class="mb-2">
                <strong class="text-xl">1.1.2.</strong> <strong>Servicio de gestión contractual y de emolumentos.</strong> Oberstaff se encargará de la administración, cálculo y gestión de emolumentos; la gestión de pago y la gestión contractual con los Profesionales asignados a la empresa del Cliente.
            </li>
            <li class="mb-2">
                <strong class="text-xl">1.1.3.</strong> <strong>Servicio de asistencia en la gestión de la relación con el Profesional.</strong> Oberstaff mediará en la resolución de conflictos entre el Profesional y el Cliente. Oberstaff actuará en estos casos solo a petición de alguna de las partes y es quien deberá gestionar las asignaciones, reasignaciones, sanciones y mediaciones entre ellos.
            </li>
        </ul>

        
        
         <h2 class="text-2xl font-bold mb-15 text-center mt-10 font-bold">2. TÉRMINOS Y CONDICIONES GENERALES</h2>
        <div class="space-y-4 text-justify">
            <p><strong class="text-xl">2.1.</strong> Oberstaff brindará los servicios en una forma profesional y con la diligencia exigible para la prestación de los Servicios.</p>
            <p><strong class="text-xl">2.2.</strong> Luego del proceso de búsqueda, Oberstaff contratará y asignará al Cliente el Profesional que haya sido seleccionado por éste. La presentación de estos Profesionales será bona fide, en base a la información facilitada por el Candidato y el filtro realizado por Oberstaff en base a los requisitos especificados por el Cliente. El Cliente hará la selección final del profesional que será contratado por Oberstaff y destacado a rendirle sus servicios profesionales en beneficio del Cliente.</p>
            <p><strong class="text-xl">2.3.</strong> Entre Oberstaff y el Cliente no hay ninguna vinculación socio-legal, co-partícipes, director, agente, asegurador o representante. Ni Oberstaff ni los Profesionales tienen ningún derecho sobre los ingresos relacionados a la actividad empresarial del Cliente. El Cliente, por su parte, es el único responsable de cumplir sus metas de ganancias, costos, producción y programación. Los Profesionales no tienen autoridad para vincular a Oberstaff legalmente.</p>
            <p><strong class="text-xl">2.4.</strong> Ni Oberstaff ni los Profesionales se comprometen a proporcionarle un concepto o solución de diseño, ingeniería o sistema específico a un problema particular del Cliente. En consecuencia, no garantizamos que los Profesionales asignados produzcan una solución técnica a su problema o necesidad particular. Más bien, los Profesionales asignados se proporcionan para realizar los servicios técnicos que requiera el Cliente, según las instrucciones y requerimientos del Cliente. Por lo antes expuesto, el Cliente exime completamente de toda responsabilidad a Oberstaff, sus empleados, oficiales, socios, administradores, inversores, y empresas afiliadas por cualquier daño o perjuicio ocasionado por el Profesional.</p>
            <p><strong class="text-xl">2.5.</strong> Los servicios a prestarse por Oberstaff y los Profesionales se realizarán en los lugares y horarios que ellos libremente designen, sin intervención alguna por parte del Cliente. El Cliente conoce que los Profesionales son nacionales y residen fiscalmente en terceros países, y que los servicios que se brindarán serán en la modalidad “remoto”, por lo que no se les podrá exigir presencialidad bajo ningún concepto.</p>
            <p><strong class="text-xl">2.6.</strong> El Cliente es el encargado de monitorizar los tiempos de entrega de los trabajos encomendados, la calidad de la entrega de trabajos y/o proyectos, el control de la productividad y del tiempo que el Profesional asignado a su empresa no brinde sus servicios. Con relación al punto anterior, Oberstaff no puede garantizar el control, seguridad, exclusividad y garantía de los servicios a brindarse por el Profesional, siendo responsabilidad plena del Cliente de llevar un control sobre los servicios y trabajos realizados por el Profesional.</p>
            <p><strong class="text-xl">2.7.</strong> Para la prestación de servicios, Oberstaff podrá contratar, subcontratar, crear alianzas, acuerdos de colaboración, así como cualquier otro, para realizar los servicios contratados sin necesidad de recabar la confirmación por parte del Cliente.</p>
            <p><strong class="text-xl mb-10">2.8.</strong> Oberstaff sólo estará obligado a brindar los servicios especificados en los apartados 1.1, 1.2 y 1.3 anteriores, cuando el Cliente haya abonado el pago correspondiente en los términos expuestos en el apartado 3.1.3. de estos T&C.</p>
             
           
        
               <div class="max-w-4xl mx-auto bg-white rounded-md my-8 mt-10">
    <h1 class="text-2xl font-bold mb-6 text-center">3. Método de Trabajo y Condiciones Específicas del Servicio</h1>
    <div class="space-y-4 text-justify">
        <p class="text-xl font-bold"><strong>3.1.</strong> Oberstaff brindará el servicio detallado en el <strong>1.1.1</strong> bajo los siguientes términos y condiciones:</p>
        <ul class="mb-4 space-y-2">
            <li><strong class="text-xl">3.1.1.</strong> El Cliente proveerá una descripción detallada, preferiblemente por escrito y respondiendo a cualquier pregunta que pueda realizarle Oberstaff, para cada uno de los Profesionales que desea le sean asignados a su empresa.</li>
            <li><strong class="text-xl">3.1.2.</strong> Oberstaff usará esa descripción para realizar la búsqueda y la contratación posterior de los Profesionales. Por ende, en caso de querer modificar las condiciones de la oferta de contratación, el Cliente deberá comunicárselo con la diligencia debida a Oberstaff antes de que éste inicie sus labores para la selección y contratación de Profesionales para su empresa. En caso de que los cambios requeridos por el Cliente sean sustanciales, a modo de ejemplo; tipo de posición a cubrir, naturaleza de los servicios, cualificación requerida del profesional, inicio de la contratación con una dilación de más de 10 días, etc.; y Oberstaff, tenga hecha ya una pre-selección de Candidatos, el Cliente podrá perder las cantidades entregadas según en el <strong>3.1.3.</strong></li>
            <li><strong class="text-xl">3.1.3.</strong> Al momento de la aceptación de estos T&C, el Cliente deberá abonar por anticipado la cantidad que se establece en la cotización por concepto de la primera mensualidad de cada nueva incorporación. Estas cantidades no serán reembolsadas por ningún concepto. Para ello, si el Cliente desiste de la contratación final de personal externo a su empresa con Oberstaff, dicha cuantía quedará a beneficio de Oberstaff por sus gestiones realizadas. Oberstaff no se obliga a contratar a ningún Profesional si no ha recibido el pago anticipado.</li>
            <li><strong class="text-xl">3.1.4.</strong> Oberstaff realizará las gestiones de búsqueda y selección de los profesionales que considere oportunas según cada caso. Finalizado el proceso de búsqueda o pre-selección, le brindará al Cliente hasta un máximo de cinco perfiles profesionales alineados con la descripción brindada por el Cliente.</li>
            <li><strong class="text-xl">3.1.5.</strong> El Cliente culminará el proceso mediante la selección de un Profesional luego de una ronda de entrevistas entre Oberstaff, el Cliente y el Candidato.</li>
            <li><strong class="text-xl">3.1.6.</strong> La decisión de contratación del candidato propuesto es exclusiva del Cliente. Oberstaff no se hace responsable por las decisiones de contratación que pueda tomar el Cliente ni por los daños que pudieran derivar de dicha decisión.</li>
            <li><strong class="text-xl">3.1.7.</strong> Oberstaff se encargará de formalizar la contratación del Profesional elegido por el Cliente a través de su figura jurídica y de dar inicio a la prestación de servicios. La contratación será como Profesional independiente en modalidad remota por un plazo indefinido, con la obligación de ambas partes de notificar la cancelación del mismo con treinta (30) días de anticipación.</li>
        </ul>

        <p class="text-xl font-bold"><strong>3.2.</strong> Oberstaff brindará los servicios contratados en el <strong>1.1.2</strong> bajo los siguientes términos y condiciones:</p>
        <ul class="mb-4 space-y-2">
            <li><strong class="text-xl">3.2.1.</strong> Oberstaff o la persona que designe, será el responsable de pagar a los Profesionales en el tiempo y forma pactado con ellos de forma individual.</li>
            <li><strong class="text-xl">3.2.2.</strong> El Cliente deberá informar a Oberstaff si el Profesional se ausentó de sus obligaciones profesionales durante el mes vencido. Dicha comunicación deberá realizarse de forma expresa, y mediante el sistema provisto por Oberstaff para tales propósitos, antes del último día de cada mes, y para cada Profesional asignado a su empresa. En ausencia de dicha comunicación o llegado el primer día del mes sin notificación por parte del Cliente, Oberstaff entenderá que no hubo ausencias deducibles y emitirá el pago al Profesional por la totalidad de sus honorarios pactados, sin derecho a créditos por parte del Cliente.</li>
            <li><strong class="text-xl">3.2.3.</strong> El servicio contratado entre Oberstaff y el Profesional será por un máximo de 40 horas por semana. Si el Cliente requiere más tiempo por los servicios del Profesional, deberá solicitarlo por escrito a Oberstaff. Las horas extra que se trabajen por el Profesional con previa autorización del Cliente, se facturarán al doble de la tarifa horaria proporcional.</li>
            <li><strong class="text-xl">3.2.4.</strong> El Cliente no podrá gestionar, ofrecer ni pagar directa o indirectamente al Profesional ninguna cantidad económica, ni por ningún concepto, pues entre ellos no existe ni podrá existir ningún vínculo laboral ni mercantil. Tampoco podrá ofrecer premios, recompensas, gratificaciones, regalos ni incentivos económicos, sin previa autorización expresa y consensuada con Oberstaff.</li>
        </ul>

        <p class="text-xl font-bold"><strong>3.3.</strong> Oberstaff brindará los servicios contratados en el <strong>1.1.3</strong> bajo los siguientes términos y condiciones:</p>
        <ul class="mb-4 space-y-2">
            <li><strong class="text-xl">3.3.1.</strong> El Cliente reconoce que el Profesional prestará los servicios sin la intervención por parte Oberstaff. Las funciones contratadas responderán a las detalladas en la descripción provista por el Cliente y cualquier modificación a las mismas deberá ser notificadas por escrito a Oberstaff. Para ello, el Cliente por su propia cuenta, facilitará al Profesional de todas las herramientas, técnicas y conocimientos previos que sean necesarios para que éste pueda brindar sus servicios de forma profesional, con total indemnidad para Oberstaff. De ser necesario, el Cliente formará al Profesional sobre sus propios sistemas y procesos.</li>
            <li><strong class="text-xl">3.3.2.</strong> Oberstaff será el responsable de asignar o reasignar a los Profesionales para el Cliente.</li>
            <li><strong class="text-xl">3.3.3.</strong> Oberstaff será el responsable administrar la relación contractual con el Profesional o extinguir la relación con el Profesional. El Cliente se obliga a comunicar a Oberstaff en un lapso de 24 horas desde que tenga conocimiento de cualquier acto u omisión que el Profesional hubiese hecho y que requiera la intervención de Oberstaff con el Profesional.</li>
        </ul>
    </div>
</div>
            
            
          <div class="max-w-4xl mx-auto bg-white  rounded-md my-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Garantía de Servicio</h1>
    <div class="space-y-4">
        <ul class=" mb-4 space-y-2">
            <li><strong class="text-xl">4.1.</strong> El Cliente podrá solicitar a Oberstaff un cambio de Profesional asignado a su empresa cuando éste último no cumpla con las expectativas del Cliente, falte reiteradamente, o sea el Profesional el que extinga su relación profesional con Oberstaff. En estos casos, Oberstaff realizará el servicio de selección y contratación de un nuevo Profesional para el Cliente sin coste adicional.</li>
        </ul>
    </div>
</div>

            
        </div>
        
        
        
        <div class="max-w-4xl mx-auto bg-white  rounded-md my-8 text-justify">
    <h1 class="text-2xl font-bold mb-6 text-center">5. DURACIÓN DE LA RELACIÓN CONTRACTUAL</h1>

    <div class="space-y-4">
        <div>
            <h2 class="text-xl font-bold mb-2">5.1. Entrada en vigor de los T&C</h2>
            <p>Estos T&C entrarán en vigor desde la fecha en que el Cliente realiza el primer pago detallado en el 3.1.3 y, por ende, acepta estos términos y condiciones en su totalidad, concretándose así una relación contractual para todos los efectos legales.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">5.2. Rescisión de la relación contractual</h2>
            <p>Las Partes acuerdan poder rescindir la relación contractual en cualquier momento mediante notificación por escrito a la otra parte con al menos treinta (30) días de antelación, a menos de que la rescisión sea por el incumplimiento de cualquiera de las disposiciones de estos T&C. En caso de una extinción de la relación contractual entre el Cliente y Oberstaff, el Cliente estará obligado al pago por los servicios prestados hasta la fecha.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">5.3. Vigencia post rescisión</h2>
            <p>Sea cual sea la causa de extinción de la relación contractual entre el Cliente y Oberstaff, seguirán rigiendo entre las Partes las cláusulas 7 a 12 las cuales permanecerán vigentes a pesar de la extinción de este.</p>
        </div>
    </div>

    <h1 class="text-2xl font-bold mt-8 mb-6 text-center">6. BAJAS DEL SERVICIO Y TERMINACIÓN DE UN PROFESIONAL ASIGNADO</h1>

    <div class="space-y-4">
        <div>
            <h2 class="text-xl font-bold mb-2">6.1. Baja del servicio de un Profesional</h2>
            <p>El Cliente podrá solicitar por escrito a Oberstaff su voluntad de dar de baja el servicio de un Profesional asignado a su empresa con un preaviso mínimo de treinta (30) días naturales.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">6.2. Rescisión durante los primeros treinta (30) días</h2>
            <p>Sin perjuicio de la cláusula anterior, durante los primeros treinta (30) días desde la incorporación del Profesional al servicio del Cliente, éste podrá rescindir los servicios del Profesional en cualquier momento, y sin necesidad de preaviso.</p>
        </div>
    </div>
</div>


<div class="max-w-4xl mx-auto bg-white rounded-md my-8">
    <h1 class="text-2xl font-bold mb-6 text-center">7. DESCARGO DE RESPONSABILIDAD</h1>

    <div class="space-y-4">
        <div>
            <h2 class="text-xl font-bold mb-2">7.1. Naturaleza mercantil y no laboral</h2>
            <p class="mb-4">Dada la naturaleza mercantil y no laboral, y por los servicios que prestan las partes, Oberstaff no se responsabiliza en ningún caso de las actuaciones y trabajos del Profesional realice para el Cliente. El Cliente exonera expresamente a Oberstaff de cualquier responsabilidad por cualquier daño, reclamo, pérdida o responsabilidad de cualquier tipo, ya sea directa o indirecta, consecuencial, especial, pérdidas empresariales de información, económicas o similares, previsibles o imprevisibles, fruto de la actuación del Profesional, quedando así liberado frente al Cliente y/o terceros.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">7.2. Inexactitudes y falsedades</h2>
            <p>Oberstaff no se responsabiliza ante el Cliente y/o terceros respecto a las inexactitudes, falsedades o representaciones inadecuadas por parte del Profesional, así como de sus datos profesionales, curriculares, aptitudes técnicas y otras características profesionales valorables y puestas a disposición del Cliente.</p>
        </div>
    </div>
</div>


<div class="max-w-4xl mx-auto bg-white rounded-md my-8 text-justify">
    <h1 class="text-2xl font-bold mb-6 text-center">8. FACTURACIÓN, PAGO Y TARJETAS DE TIEMPO</h1>

    <div class="space-y-4">
        <div>
            <h2 class="text-xl font-bold mb-2">8.1. Emisión de factura mensual</h2>
            <p>Mensualmente se le emitirá una factura global con la tarifa mensual acordada y cualquier ajuste, para cada Profesional.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">8.2. Pago anticipado y prorrateo</h2>
            <p>Los servicios de Oberstaff se pagan por mes anticipado y se aplicarán prorratas, según sea el caso.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">8.3. Cargos a tarjeta de débito o crédito</h2>
            <p>El cargo por los servicios se realizará a la tarjeta de débito o crédito provista por el Cliente dentro de los primeros cinco días de cada mes. El Cliente se obliga a siempre mantener una tarjeta de crédito o débito vigente, con saldo suficiente para realizar los pagos a Oberstaff y notificar cualquier cambio en el método de pago antes de la finalización del mes natural. Todo cobro declinado a la tarjeta del Cliente por falta de fondos o por cualquier otra razón, conllevará un cargo de $60.00.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">8.4. Condiciones por falta de pago</h2>
            <p>En caso de que Oberstaff no pueda cargar los servicios a la tarjeta del Cliente durante los primeros 5 días naturales del mes, Oberstaff podrá descontinuar el servicio del Profesional y/o aplicar un cargo del 5% por cada día transcurrido, sin necesidad de notificación, y hasta que se efectúe el pago. Esta interrupción o cese del servicio no implicará incumplimiento por parte de Oberstaff ni dará derecho a indemnización alguna al Cliente, debiendo responder el Cliente por los honorarios devengados y no satisfechos durante esos días.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">8.5. Proceso por falta de pago</h2>
            <p>En caso de interrumpir o cesar el servicio por falta de pago y que, por ende, el Profesional no esté disponible para continuar sus servicios, Oberstaff procederá a reclutar a un reemplazo y le cobrará al Cliente lo equivalente a un (1) mes de la tarifa mensual pactada por el nuevo proceso de selección.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">8.6. Ajuste de precios</h2>
            <p>Oberstaff podrá ajustar los precios debido a un aumento de costos, factores cambiarios, macroeconómicos o relacionados a la mano de obra.</p>
        </div>
    </div>
</div>

<div class="max-w-4xl mx-auto  bg-white  rounded-md my-8 text-justify">
    <h1 class="text-2xl font-bold mb-6 text-center">9. INFORMACIÓN CONFIDENCIAL</h1>

    <div class="space-y-4">
        <div>
            <h2 class="text-xl font-bold mb-2">9.1. Información confidencial de Oberstaff</h2>
            <p>Cualquier información respecto a la operatividad de Oberstaff y la información relacionada a los candidatos presentados por Oberstaff al Cliente son de carácter confidencial y no podrán ser divulgados a terceros.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">9.2. Información confidencial del Cliente</h2>
            <p>Los Profesionales que brindarán servicio al Cliente pueden tener acceso a información privilegiada o que sea considerada propiedad exclusiva y confidencial del Cliente. Oberstaff exigirá a cada Profesional que acepte tratar dicha información de manera confidencial y que se comprometa a no divulgarla a terceros; sin embargo, es responsabilidad del Cliente proteger dicha información, marcarla como tal, implantar las medidas de seguridad necesarias para evitar que realicen tratamientos indebidos y hacerles conocedores de dichas políticas a los Profesionales asignados a su empresa, entregándoles copia de sus políticas internas y haciéndoles firmar los acuerdos de confidencialidad y no divulgación propios de su empresa.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">9.3. Obligación de guardar confidencialidad</h2>
            <p>Las Partes se obligan a guardar absoluta confidencialidad sobre la información, documentación, material, así como otros, que entre ellas se faciliten y/o tengan acceso durante la vigencia de este Acuerdo; así como no revelar ni usar, directa o indirectamente, la información brindada por la otra parte a consecuencia de este Acuerdo.</p>
        </div>
    </div>
</div>


<div class="max-w-4xl mx-auto bg-white  rounded-md my-8 text-justify">
    <h1 class="text-2xl font-bold mb-6 text-center">10. PROHIBICIÓN DE CONTRATACIÓN DIRECTA</h1>

    <div class="space-y-4">
        <div>
            <h2 class="text-xl font-bold mb-2">10.1. Prohibición durante y después de la relación contractual</h2>
            <p>Durante la vigencia de la relación contractual entre el Cliente y Oberstaff y hasta los doce (12) meses después de su terminación o terminación de la asignación de un Profesional para el Cliente, lo que ocurra más tarde, el Cliente acepta no ofrecer, inducir o contratar de ninguna manera a: a) los empleados o contratistas de Oberstaff, b) Profesionales asignados por Oberstaff al Cliente, c) Candidatos presentados por Oberstaff durante la relación contractual entre Oberstaff y el Cliente; ni persuadir o intentar persuadir al Profesional para que resuelva la relación con Oberstaff.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">10.2. Cláusula penal por incumplimiento</h2>
            <p>Debido a la escasez de talento humano que posee las habilidades y la experiencia necesaria para desempeñar servicios para Oberstaff, el Cliente reconoce que los daños y pérdidas sufridas por Oberstaff derivados de cualquier violación a esta Sección serían extremadamente difíciles de fijar monetariamente en un monto acorde y real. Por lo tanto, se acuerda que si el Cliente incumple con el punto anterior, directamente o indirectamente a través de empresas afiliadas o asociadas, mediante alguno de sus socios, accionistas, representantes, empleados o personas con las que tengan algún tipo de vinculación personal, profesional o empresarial; el Cliente pagará a Oberstaff una cantidad equivalente a cuatrocientos por ciento (400%) de la compensación anual contratada o proyectada para ese empleado o contratista de Oberstaff, para ese Profesional asignado al Cliente o para ese Candidato presentado por Oberstaff al Cliente, en concepto de cláusula penal libremente pactada. A esta penalidad se le sumarán las costas y honorarios de abogados necesarios para llevar a cabo el proceso judicial y la debida ejecución de la sentencia emitida. Dicha penalidad deberá ser pagada inmediatamente después de la notificación realizada por Oberstaff al respecto. Ello no sustituye la reclamación de cualquier otra indemnización por daños y/o perjuicios que pueda instar Oberstaff al Cliente acorde a la Ley vigente.</p>
        </div>
    </div>
</div>

<div class="max-w-4xl mx-auto bg-white  rounded-md my-8 text-justify">
    <h1 class="text-2xl font-bold mb-6 text-center">11. OTROS</h1>

    <div class="space-y-4">
        <div>
            <h2 class="text-xl font-bold mb-2">11.1. Cláusula de salvaguarda</h2>
            <p>Si cualquiera de las cláusulas de estos T&C o sus anexos pasare a ser inválida, ilegal o inejecutable en virtud de alguna norma jurídica o resultara ser nula o fuese anulada, por cualquier juzgado o autoridad administrativa, la nulidad o ineficacia de la misma no afectará las demás estipulaciones.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">11.2. Confirmación de acuerdo</h2>
            <p>Las Partes manifiestan haber leído en su totalidad estos T&C y al utilizar los servicios confirman estar de acuerdo con todos sus términos y condiciones, que podrán ser actualizados por Oberstaff en cualquier momento, sin necesidad de notificar al Cliente. Por lo tanto, es la responsabilidad exclusiva del Cliente revisar o pedir la actualización de estos T&C en todo momento.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">11.3. Renuncia a derechos</h2>
            <p>La omisión o demora en el ejercicio de cualquier derecho o acción no constituirá una renuncia de estos.</p>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-2">11.4. Ley aplicable y jurisdicción</h2>
            <p>Los presentes T&C se regirán y serán interpretados en conformidad con las disposiciones de las leyes del Estado Libre Asociado de Puerto Rico. Las Partes se someten voluntariamente y sin exclusividad de foro, a la jurisdicción del Tribunal de Primera Instancia de San Juan, Puerto Rico y renuncian a cualquier defensa de falta de jurisdicción del Tribunal sobre su persona.</p>
        </div>
    </div>
</div>

<div class="max-w-4xl mx-auto bg-white rounded-md my-8 text-justify">
    <h1 class="text-2xl font-bold mb-6 text-center">12. ACEPTACIÓN</h1>

    <div class="space-y-4">
        <div>
            <h2 class="text-xl font-bold mb-2">12.1. Acuerdo al realizar un pago o utilizar servicios</h2>
            <p>Al realizar un pago a Oberstaff y/o hacer uso de nuestros servicios, el Cliente acepta estos Términos y Condiciones de Contratación, estableciendo un acuerdo legalmente vinculante con Oberstaff. Estos T&C representan el acuerdo completo entre las partes y reemplazan cualquier acuerdo previo, verbal o escrito, entre las mismas.</p>
        </div>
    </div>
</div>

        
        
        
        
        
        </div
        
        
        
        
        
        
    </div>





        
        
        
    </div>



    <!--<div class="container mx-auto py-8">-->
    <!--    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">-->
    <!--        <h1 class="text-2xl font-bold mb-6">TÉRMINOS Y CONDICIONES DE CONTRATACIÓN</h1>-->
    <!--        <p class="mb-4">El Cliente necesita incorporar personal técnico en la modalidad “remoto” o “teletrabajo” para cubrir algunas de las necesidades profesionales para su empresa. Oberstaff es una empresa dedicada al outsourcing de personal técnico en remoto, establecida y operando bajo las leyes de Puerto Rico, Estados Unidos de América. El Cliente ha contactado a Oberstaff para que éste le brinde los servicios de outsourcing de personal técnico remoto, en adelante como el “Profesional” o “Profesionales” y administre para el Cliente los servicios de los Profesionales en la modalidad temporal y remota. Al realizar un pago a Oberstaff y/o hacer uso de nuestros servicios, usted y su empresa acceden expresamente a un acuerdo legalmente vinculante con OBERTUS, LLC h/n/c Oberstaff para todos los propósitos legales, según los siguientes Términos y Condiciones:</p>-->
            
    <!--        <h2 class="text-xl font-semibold mb-4">1. OBJETO</h2>-->
    <!--        <p class="mb-4">El objeto de este Acuerdo es regular la forma y modo en que Oberstaff brindará los servicios al Cliente durante su relación contractual. Este Acuerdo vincula a las partes en los perfiles profesionales presentados por Oberstaff a su empresa, según se establece en este documento. A continuación, se detallan los “Servicios” a brindarse por parte de Oberstaff:</p>-->
            
    <!--        <h3 class="text-lg font-semibold mb-2">1.1. Servicio de selección y contratación</h3>-->
    <!--        <p class="mb-4">Oberstaff gestionará la búsqueda, selección, gestión y contratación, de candidatos para cubrir las necesidades de personal solicitadas por el Cliente.</p>-->
            
    <!--        <h3 class="text-lg font-semibold mb-2">1.2. Servicio de gestión documental y de emolumentos</h3>-->
    <!--        <p class="mb-4">Oberstaff se encargará de la administración, cálculo y gestión de emolumentos, la gestión de pago y la gestión documental con los Profesionales asignados a la empresa del Cliente.</p>-->
            
    <!--        <h3 class="text-lg font-semibold mb-2">1.3. Servicio de control de la actividad y recursos humanos</h3>-->
    <!--        <p class="mb-4">Oberstaff mediará en la resolución de conflictos entre el Profesional y el Cliente. Oberstaff actuará en estos casos solo a petición de alguna de las partes y es quien deberá gestionar las asignaciones, reasignaciones, disciplinas, amonestaciones, sanciones y mediaciones entre ellos.</p>-->
            
    <!--        <h2 class="text-xl font-semibold mb-4">2. TÉRMINOS Y CONDICIONES GENERALES</h2>-->
    <!--        <p class="mb-4">2.1. Oberstaff brindará los servicios en una forma profesional y con la diligencia exigible para la prestación de los Servicios.</p>-->
    <!--        <p class="mb-4">2.2. Oberstaff es responsable de asignar un Profesional al Cliente con las habilidades y destrezas que éste le especifique. La presentación de estos candidatos será bona fide, en base a la información facilitada por el Candidato y el filtro realizado por Oberstaff en base a los requisitos especificados por el Cliente.</p>-->
    <!--        <p class="mb-4">2.3. Entre Las Partes no hay ninguna vinculación socio-legal, co-partícipes, director, agente, asegurador o representante. Ni Oberstaff ni los Profesionales tienen ningún derecho sobre los ingresos relacionados a la actividad empresarial del Cliente. El Cliente, por su parte, es el único responsable de cumplir sus metas de ganancias, costos, producción y programación. Los Profesionales no tienen autoridad para vincular al Obertus, LLC legalmente.</p>-->
    <!--        <p class="mb-4">2.4. Ni Oberstaff ni los Profesionales se comprometen a proporcionarle un concepto o solución de diseño, ingeniería o sistema especifico a un problema particular del Cliente. En consecuencia, no garantizamos que los Profesionales asignados produzcan una solución técnica a su problema o necesidad particular. Más bien, los Profesionales asignados se proporcionan para realizar los servicios técnicos que usted indique en el Formulario de Petición.</p>-->
    <!--        <p class="mb-4">2.5. Los servicios a prestarse por Oberstaff y los Profesionales se realizarán en los lugares que ellos libremente designen, sin intervención alguna por parte del Cliente. El Cliente conoce que los Profesionales son nacionales y residen fiscalmente en terceros países, y que los servicios que se brindarán serán en la modalidad “remoto” o “teletrabajo”, por lo que no se les podrá exigir presencialidad.</p>-->
    <!--        <p class="mb-4">2.6. El Cliente es el encargado de monitorizar el horario de trabajo, la entrega de trabajos y/o proyectos, el control de la productividad y los días que se ausente el Profesional asignado a su empresa. Con relación al punto anterior, Oberstaff no puede garantizar el control, seguridad, exclusividad y garantía de los servicios a brindarse por el Profesional, siendo responsabilidad plena del Cliente de llevar un control sobre los servicios y trabajos realizados por el Profesional.</p>-->
    <!--        <p class="mb-4">2.7. Para la prestación de servicios, Oberstaff podrá contratar, subcontratar, crear alianzas, acuerdos de colaboración, así como cualquier otro, para realizar los servicios contratados sin necesidad de recabar la confirmación por parte del Cliente.</p>-->
    <!--        <p class="mb-4">2.8. Oberstaff sólo estará obligado a brindar los servicios especificados en los apartados 1.1, 1.2 y 1.3 anteriores, cuando el Cliente haya abonado el depósito correspondiente en los términos expuestos en el apartado 3.1.3. de este Acuerdo.</p>-->
    <!--        <p class="mb-4">2.9. Oberstaff brindará sus servicios con plena autonomía técnica, administrativa y sin requerir la intervención del Cliente.</p>-->

    <!--        <h2 class="text-xl font-semibold mb-4">3. MÉTODO DE TRABAJO Y CONDICIONES ESPECIFICAS DEL SERVICIO</h2>-->
    <!--        <p class="mb-4">3.1. Oberstaff brindará el servicio detallado en el 1.1. bajo los siguientes términos y condiciones:</p>-->
    <!--        <p class="mb-4">3.1.1. El Cliente proveerá una descripción detallada, preferiblemente por escrito, para cada uno de los puestos que requiera incorporar en su empresa.</p>-->
    <!--        <p class="mb-4">3.1.2. Oberstaff usará esa descripción para redactar la oferta de empleo y la contratación posterior de los Profesionales. Por ende, en caso de querer modificar las condiciones de la oferta de contratación, el Cliente deberá comunicárselo con la diligencia debida a Oberstaff antes de que éste inicie sus labores para la selección y contratación de Profesionales para su empresa. En caso de que los cambios requeridos por el Cliente sean sustanciales, a modo de ejemplo, tipo de posición a cubrir, naturaleza del trabajo, cualificación requerida del profesional, inicio de la contratación con una dilación de más de 3 meses, etc; y Oberstaff, tenga hecha ya una pre-selección de Candidatos, el Cliente podrá perder las cantidades entregadas en depósito previstas en el 3.1.3.</p>-->
    <!--        <p class="mb-4">3.1.3. Al momento de la firma de este Acuerdo, el Cliente deberá abonar por anticipado la cantidad de que se establece en la cotización por concepto de la primera mensualidad de cada nueva incorporación. Estas cantidades no serán reembolsadas por ningún concepto. Para ello, si el Cliente desiste de la contratación final de personal externo a su empresa con Oberstaff, dicha cuantía quedará a beneficio de Oberstaff por sus gestiones realizadas. Oberstaff no se obliga a contratar a ningún Profesional si no ha recibido el pago anticipado.</p>-->
    <!--        <p class="mb-4">3.1.4. Oberstaff realizará las gestiones de búsqueda y selección de personal que considere oportunos según cada caso. Finalizado el proceso de pre-selección de personal, le brindará al Cliente hasta un máximo de cinco perfiles profesionales alineados con la descripción brindada por el cliente.</p>-->
    <!--        <p class="mb-4">3.1.5. El Cliente culminará el proceso de selección de la persona para ocupar la vacante en su empresa en una entrevista final entre Oberstaff, el Cliente y el Candidato.</p>-->
    <!--        <p class="mb-4">3.1.6. La decisión de contratación del candidato propuesto es exclusiva del Cliente. Oberstaff no se hace responsable por las decisiones de contratación que pueda tomar el Cliente ni por los daños que pudieran derivar de dicha decisión.</p>-->
    <!--        <p class="mb-4">3.1.7. Oberstaff se encargará de formalizar la contratación del personal elegido por el Cliente a través de su figura jurídica y de dar inicio a la prestación de servicios. La contratación será bajo la modalidad temporal, por un tiempo máximo de 12 meses. El plazo se podrá prorrogar automáticamente por un año más, y así sucesivamente, si ninguna de las partes manifestase su voluntad de resolver la relación con una antelación mínima de 60 días al vencimiento del plazo inicialmente estipulado o sus prorrogas.</p>-->
    <!--        <p class="mb-4">3.1.8. Si en los 30 días posteriores a la fecha de la contratación del Profesional, se produjese una renuncia voluntaria o despido justificado del candidato que el Cliente había decidido contratar, Oberstaff le brindará una nueva terna de candidatos sin coste adicional.</p>-->
    <!--        <p class="mb-4">3.1.9. A efectos de establecer los términos de contratación y emolumentos, el Cliente se compromete a abonar a Oberstaff los costos y servicios que se deriven de la contratación, selección y supervisión de personal.</p>-->
    <!--        <p class="mb-4">3.1.10. El Cliente se compromete a abonar el primer día de cada mes, por anticipado, las cantidades facturadas por Oberstaff para el pago de nómina de los Profesionales contratados, a su cuenta bancaria.</p>-->
    <!--        <p class="mb-4">3.1.11. Oberstaff facturará mensualmente al Cliente por sus servicios administrativos y gestión, así como el costo de la nómina correspondiente.</p>-->
    <!--        <p class="mb-4">3.1.12. Oberstaff facturará por adelantado el tiempo de dedicación de cada Profesional asignado al Cliente. La jornada laboral normal es de 40 horas semanales. El Cliente puede requerir más tiempo de dedicación del Profesional, en cuyo caso deberá abonar la cantidad proporcional adicional al valor hora previamente pactado.</p>-->
    <!--        <p class="mb-4">3.1.13. El Cliente es responsable de abonar los costos adicionales que se generen, tales como software, hardware, licencias y cualquier otro elemento necesario para que el Profesional realice su trabajo.</p>-->
            
    <!--        <h2 class="text-xl font-semibold mb-4">4. DURACIÓN DEL ACUERDO</h2>-->
    <!--        <p class="mb-4">Este Acuerdo entrará en vigor desde la fecha de la firma del mismo y tendrá una duración indefinida, siempre y cuando no medie un aviso de terminación por escrito de cualquiera de las partes con una antelación de sesenta (60) días calendario.</p>-->

    <!--        <h2 class="text-xl font-semibold mb-4">5. PROTECCIÓN DE DATOS</h2>-->
    <!--        <p class="mb-4">Oberstaff y el Cliente se comprometen a cumplir con todas las leyes y normativas aplicables en materia de protección de datos personales. Ambas partes aseguran que adoptarán todas las medidas técnicas y organizativas necesarias para garantizar la seguridad de los datos personales y evitar su alteración, pérdida, tratamiento o acceso no autorizado.</p>-->
            
    <!--        <h2 class="text-xl font-semibold mb-4">6. MODIFICACIONES</h2>-->
    <!--        <p class="mb-4">Cualquier modificación o adición a los términos de este Acuerdo deberá ser realizada por escrito y firmada por ambas partes para que tenga validez.</p>-->

    <!--        <h2 class="text-xl font-semibold mb-4">7. LEY APLICABLE Y JURISDICCIÓN</h2>-->
    <!--        <p class="mb-4">Este Acuerdo se regirá e interpretará de acuerdo con las leyes de Puerto Rico, y ambas partes se someten a la jurisdicción de los tribunales de Puerto Rico para la resolución de cualquier controversia que pudiera surgir en relación con este Acuerdo.</p>-->
            
    <!--        <h2 class="text-xl font-semibold mb-4">8. ACEPTACIÓN</h2>-->
    <!--        <p class="mb-4">El Cliente y Oberstaff aceptan los términos y condiciones establecidos en este Acuerdo con la firma del mismo. Este documento representa el acuerdo completo entre las partes y reemplaza cualquier acuerdo previo, verbal o escrito, entre las mismas.</p>-->

    <!--        <div class="mt-8">-->
    <!--            <p>Firmado el <span class="font-semibold">{{ date('d-m-Y') }}</span></p>-->
    <!--            <div class="mt-4">-->
    <!--                <p class="font-semibold">Por Oberstaff</p>-->
    <!--                <p>_____________________________</p>-->
    <!--                <p>Nombre y Firma</p>-->
    <!--            </div>-->
    <!--            <div class="mt-4">-->
    <!--                <p class="font-semibold">Por el Cliente</p>-->
    <!--                <p>_____________________________</p>-->
    <!--                <p>Nombre y Firma</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->



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
                                <a href="https://oberstaff.zohorecruit.com/jobs/Careers" title=""
                                    class="text-sm text-gray-900 transition-all duration-200 hover:text-opacity-80 focus:text-opacity-80">Fulfillment</a>
                            </li>

                            <li>
                                <a href="#contacto" title=""
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
