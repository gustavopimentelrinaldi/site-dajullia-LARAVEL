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
    <link href="assets/css/offcanvas-navbar.css" rel="stylesheet">
</head>
<body>
    
    <nav class="navbar navbar navbar-dark navbar-expand-lg" style="background-color: #03BCDC">
        <div class="container">
            <div class="container-fluid">
                <a class="navbar-brand text-light" href="index.html">Jullia's Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="{{ url('/')}}">Home</a>
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

    <section id="blog">
        <main class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
                <img class="me-3" src="assets/img/WhatsApp Image 2024-07-18 at 14.35.07.jpeg" alt="" width="80" height="80">
                <div class="lh-1">
                    <h1 class="h6 mb-0 text-white lh-1">Diário da Jullia</h1>
                    <small>Desde 2024</small>
                </div>
            </div>

            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- Lista de notas -->
                <h6 class="border-bottom pb-2 mb-0">Atualizações recentes</h6>
                <div id="notas-list">
                    <!-- Aqui serão inseridas as notas dinamicamente -->
                    @foreach ($notas as $diario)
                        <div class="d-flex text-body-secondary pt-3">
                            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                            <p class="pb-3 mb-0 small border-bottom">
                                <strong class="d-block text-gray-dark mb-3">@JULLIA.SCHIAVOLINI</strong>
                                <strong class="d-block text-gray-dark">Assunto: {{$diario->assunto ?? 'sem assunto'}}</strong>
                                {{$diario->texto ?? 'sem texto'}}
                            </p>
                        </div>
                    @endforeach
                </div>
                <small class="d-block text-end mt-3">
                    <a href="#" id="open-form-link">Adicionar uma nota no diário</a>
                </small>
            </div>

            <!-- Formulário oculto para adicionar nota -->
            <div id="form-container" class="my-3 p-3 bg-body rounded shadow-sm d-none">
                <h6 class="border-bottom pb-2 mb-3">Adicionar Nota no Diário</h6>
                <form id="add-note-form">
                    @csrf <!-- CSRF Token para proteção contra CSRF -->
                    <div class="mb-3">
                        <label for="assunto" class="form-label">Assunto</label>
                        <input type="text" class="form-control" id="assunto" name="assunto">
                    </div>
                    <div class="mb-3">
                        <label for="texto" class="form-label">Texto</label>
                        <textarea class="form-control" id="texto" name="texto" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Adicionar Nota</button>
                    <button type="button" class="btn btn-secondary ms-2" id="cancelar">Cancelar</button>
                </form>
            </div>
        </main>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<script>
    $(document).ready(function() {
        // Manipular abertura do formulário
        $('#open-form-link').click(function(e) {
            e.preventDefault();
            $('#form-container').removeClass('d-none'); // Mostra o formulário
        });

        // Cancelar e fechar formulário
        $('#cancelar').click(function() {
            $('#form-container').addClass('d-none'); // Oculta o formulário
        });

        // Manipular envio do formulário via AJAX
        $('#add-note-form').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize(); // Serializa os dados do formulário

            $.ajax({
                type: 'POST',
                url: '{{ route("nota.criar") }}', // Rota Laravel definida anteriormente
                data: formData,
                success: function(response) {
                    // Limpar campos do formulário após envio
                    $('#assunto').val('');
                    $('#texto').val('');

                    // Adicionar a nova nota dinamicamente à lista
                    var notaHtml = `
                        <div class="d-flex text-body-secondary pt-3">
                            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                            <p class="pb-3 mb-0 small border-bottom">
                                <strong class="d-block text-gray-dark mb-3">@JULLIA.SCHIAVOLINI</strong>
                                <strong class="d-block text-gray-dark">Assunto: ${response.assunto ?? 'sem assunto'}</strong>
                                ${response.texto ?? 'sem texto'}
                            </p>
                        </div>
                    `;
                    $('#notas-list').prepend(notaHtml); // Adiciona no início da lista

                    // Fechar formulário após envio
                    $('#form-container').addClass('d-none');
                },
                error: function(error) {
                    console.error('Erro ao enviar nota:', error);
                    // Exibir mensagem de erro (opcional)
                    alert('Erro ao adicionar nota. Por favor, tente novamente.');
                }
            });
        });
    });
</script>
</html>