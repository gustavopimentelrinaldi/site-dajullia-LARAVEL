<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <style>

        body{
            background-color: rgb(255, 255, 255);
            text-align: center;
        }

        h1{
            font-size: 50px;
            margin-left: auto;
            margin-right: auto;
            width: 170px;
        }

        button{
            font-size: 30px;
            background: purple;
        }
    </style>

    <nav class="navbar navbar navbar-dark navbar-expand-lg" style="background-color: #03BCDC">
        <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Jullia's Blog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="{{ url('/diario')}}">Diário</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-light" href="{{ url('/recados')}}">Recados</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Mimos
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="https://www.sephora.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=institucional&gad_source=1&gclid=Cj0KCQjw-uK0BhC0ARIsANQtgGMTNqMR-oFpXZSM4BWQnc5111HaOR7X8x_I5wPdK5328KP7u-1dHzcaAl0XEALw_wcB" target="_blank">Sephora</a></li>
                    <li><a class="dropdown-item" href="https://www.nike.com.br/?utm_source=google&utm_medium=cpc&utm_campaign=SN_NIKE-INST-ROAS&gad_source=1&gclid=Cj0KCQjw-uK0BhC0ARIsANQtgGMMGp2uACUuY7eB3DPV43d3ZuxjbT1QOru2BnVXL9DDigMuscqMkxgaAmpLEALw_wcB&utm_referrer=https://www.google.com/" target="_blank">Nike</a></li>
                    <li><a class="dropdown-item" href="https://br.shein.com/?url_from=brgooglebrandshein_sheinshein02_srsa_20210130&cid=1453018537&setid=58136794738&adid=495662299646&kwd=kwd-1667706624&pf=GOOGLE&gad_source=1&gclid=Cj0KCQjw-uK0BhC0ARIsANQtgGPc-Znx5XzUs1CIjypfl40lo_baVCN6IF1bSfX5lrHbE8ZYizF98J4aAkZ5EALw_wcB" target="_blank">Shein</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </div>
    </nav>


    <section id="galeria">
        <div class="card mt-5 col-md-8 mx-auto shadow-sm p-3 bg-body-tertiary rounded">
            <div class="card-body">
            <h5>Bem-vindos ao meu site :) <span class="badge text-bg-primary">VERSÃO BETA</span></h5>
            Minha galeria de fotos. 
            </div>
        </div>

        <div class="content">
            <div class="site-section mb-5">
              <div class="container owl-2-style">
                <div class="owl-carousel owl-2">
                  <div class="media-29101">
                    <a href="#"><img src="assets/img/WhatsApp Image 2024-07-18 at 14.30.14.jpeg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="assets/img/WhatsApp Image 2024-07-18 at 14.35.05.jpeg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="assets/img/WhatsApp Image 2024-07-18 at 14.35.06 (1).jpeg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="assets/img/WhatsApp Image 2024-07-18 at 14.35.06.jpeg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="assets/img/WhatsApp Image 2024-07-18 at 14.35.07.jpeg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="assets/img/WhatsApp Image 2024-07-18 at 14.35.08 (1).jpeg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="assets/img/WhatsApp Image 2024-07-18 at 14.35.08 (2).jpeg" alt="Image" class="img-fluid"></a>
                  </div>
                  <div class="media-29101">
                    <a href="#"><img src="assets/img/WhatsApp Image 2024-07-18 at 14.35.08.jpeg" alt="Image" class="img-fluid"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<script>

</script>
</html>