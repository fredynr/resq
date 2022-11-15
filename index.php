<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <title>RES-QSOLUTIONS</title>
</head>

<body>
    <header>
        <figure><img src="./images/logo.png" alt=""></figure>
        <nav class="menu">
            <ul>
                <li><a href="#">INICIO</a></li>
                <li><a href="#">PRODUCTOS</a></li>
                <li><a href="#">SERVICIOS</a></li>
                <li><a href="#">NOSOTROS</a></li>
                <li><a href="#">CONTÁCTENOS</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="slide">
            <div id="mask"></div>
            <img src="./images/slide.jpg" alt="">
            <h1>
                Equipos para emergencias, combate de incendios y seguridad industrial
            </h1>
        </div>
        <section id="section1" class="flex-around">
            <article class="flex-around">
                <img src="./images/firetruck.png" alt="">
                <div>
                    <h1>VEHÍCULOS</h1>
                    <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, iusto?</P>
                </div>
            </article>
            <article class="flex-around">
                <img src="./images/firefighter.png" alt="">
                <div>
                    <h1>EQUIPOS</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, incidunt!</p>
                </div>
            </article>
            <article class="flex-around">
                <img src="./images/worker.png" alt="">
                <div>
                    <h1>SEGURIDAD INDUSTRIAL</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, debitis.</p>
                </div>
            </article>
        </section>
        <section id="oferta" class="flex-around">
            <span>OFERTA</span>
            <figure class="flex-around">
                <img src="./images/radio1.jpg" alt="">
                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, fugiat.</figcaption>
            </figure>
            <figure class="flex-around">
                <img src="./images/guante.png" alt="">
                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, fugiat.</figcaption>
            </figure>
            <figure class="flex-around">
                <img src="./images/auditivo.png" alt="">
                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, fugiat.</figcaption>
            </figure>
        </section>
        <section id="section2" class="flex-around">
            <article>
                <h1>LA SEGURIDAD EN SU EMPRESA ES NUESTRA CAUSA</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique porro repellendus, unde dolore facere recusandae iste provident itaque! Expedita vel dolores dolorem omnis quia, quasi sapiente culpa deserunt ab eos.
                    Soluta perferendis necessitatibus at sint cum quasi corporis dignissimos eaque laboriosam beatae. Saepe blanditiis laborum porro perspiciatis vitae itaque placeat cupiditate ex eius. Labore perferendis aut aliquam recusandae culpa quod.
                </p>
                <a href="#">CONTÁCTENOS</a>
            </article>
            <img src="./images/fireWomen.jpg" alt="">
        </section>
        <section id="section3">
            <h1>NUESTROS CLIENTES</h1>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum molestiae similique quibusdam dolorum quod magnam at, animi, incidunt cum neque deserunt nam temporibus beatae architecto est sit nesciunt sed non.
                Perspiciatis optio veritatis delectus nihil magnam mollitia ut iure recusandae dolore, neque amet reiciendis
            </h2>
            <div id="logos" class="flex-around">
                <img src="./images/laravel.png" alt="">
                <img src="./images/microsoft.png" alt="">
                <img src="./images/lenovo.png" alt="">
                <img src="./images/tesla.png" alt="">
            </div>
        </section>
        <section id="section4" class="flex-around">
            <div>
                <h1>CONTÁCTENOS</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum, aspernatur.
                </p>
            </div>
            <form action="">
                <input type="text" placeholder="Nombre">
                <input type="text" placeholder="Teléfono">
                <input type="email" placeholder="correo">
                <textarea name="asunto" id="asunto" cols="30" rows="10" placeholder="Déjanos un mensaje"></textarea>
                <button>Enviar</button>
            </form>
        </section>
    </main>
    <footer class="flex-around">
        <div>
            <ul>
                <li>Dirección: Avenida Calle 72 No. 65B - 31</li>
                <li>Teléfonos: (57) 310 4808623 - 3105802556 - (57+1) 801 21 22</li>
                <li>Bogotá - Colombia</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>email: info@res-qsolutions.com</li>
                <li>whatsapp: 3204107105</li>
            </ul>
        </div>
        <div>
            <ul>
                <li>Whatsapp</li>
                <li>facebook</li>
                <li>twitter</li>
            </ul>
        </div>
    </footer>
</body>

</html>