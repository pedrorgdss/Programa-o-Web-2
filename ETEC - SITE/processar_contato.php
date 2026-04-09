<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Processamento de Contato - Etec Zona Leste</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="img/etec_zona_leste.svg" alt="Etec Logo" style="height: 50px;">
                <span class="ms-2 fw-bold"></span>
            </a>
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger p-0">
                <div class="container-fluid px-0">
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Início</a></li>
                            <li class="nav-item"><a class="nav-link active" href="contato.html">Contato</a></li>
                            <li class="nav-item"><a class="nav-link active" href="sobreNos.html">Sobre</a></li>
                            <li class="nav-item"><a class="nav-link active" href="calendario.html">Calendário</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>

    <main class="bg-light py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card processar-card shadow-sm border-0">
                        <div class="card-body px-4 py-5">
                            <div class="d-flex align-items-center justify-content-between mb-4 flex-column flex-md-row">
                                <div>
                                    <h1 class="h3 text-danger mb-2">Contato Recebido com Sucesso!</h1>
                                    <p class="text-secondary mb-0">Veja abaixo os dados enviados e continue navegando no site.</p>
                                </div>
                                <div class="processar-status badge bg-danger text-white py-2 px-3">
                                    <i class="fas fa-check-circle me-2"></i>Processado</div>
                            </div>
                            <?php
                            // Receber dados do formulário
                            $nome = $_POST['name'];
                            $email = $_POST['email'];
                            $telefone = $_POST['phone'];
                            $assunto = $_POST['subject'];
                            $mensagem = $_POST['message'];

                            // Exibir os dados recebidos
                            echo "<h2>Dados Recebidos:</h2>";
                            echo "Nome: " . $nome . "<br>";
                            echo "Email: " . $email . "<br>";
                            echo "Telefone: " . $telefone . "<br>";
                            echo "Assunto: " . $assunto . "<br>";
                            echo "Mensagem: " . $mensagem . "<br>";
                            echo "<h3>Formulário enviado com sucesso!</h3>";
                            ?>
                            <div class="mt-4 text-center">
                                <a href="contato.html" class="btn btn-danger btn-lg px-5">Voltar ao formulário</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer bg-danger text-white mt-5 py-5">
        <div class="container">
            <div class="row mb-5 pb-4 border-bottom border-light border-opacity-25">
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="footer-logo mb-3">
                        <img src="img/etec_zona_leste.svg" alt="Etec Logo" style="height: 60px;">
                    </div>
                    <h5 class="fw-bold">Etec Zona Leste</h5>
                    <p class="footer-description">Excelência em educação técnica e profissional para transformar vidas e comunidades.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3"><i class="fas fa-link me-2"></i>Links Rápidos</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="index.html" class="text-white text-decoration-none"><i class="fas fa-arrow-right me-2"></i>Início</a></li>
                        <li><a href="contato.html" class="text-white text-decoration-none"><i class="fas fa-arrow-right me-2"></i>Contato</a></li>
                        <li><a href="sobreNos.html" class="text-white text-decoration-none"><i class="fas fa-arrow-right me-2"></i>Sobre Nós</a></li>
                        <li><a href="calendario.html" class="text-white text-decoration-none"><i class="fas fa-arrow-right me-2"></i>Calendário</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3"><i class="fas fa-info-circle me-2"></i>Contato</h5>
                    <div class="footer-contact">
                        <p class="mb-2"><i class="fas fa-envelope me-2 text-light"></i><a href="mailto:contato@etec.sp.gov.br" class="text-white text-decoration-none">contato@etec.sp.gov.br</a></p>
                        <p class="mb-2"><i class="fas fa-phone me-2 text-light"></i><a href="tel:+551112345678" class="text-white text-decoration-none">(11) 1234-5678</a></p>
                        <p><i class="fas fa-map-marker-alt me-2 text-light"></i>Zona Leste, São Paulo - SP</p>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-12">
                    <h5 class="fw-bold mb-3 text-center"><i class="fas fa-share-alt me-2"></i>Conecte-se Conosco</h5>
                    <div class="footer-social d-flex justify-content-center gap-3">
                        <a href="https://www.facebook.com/eteczonaeste" target="_blank" rel="noopener noreferrer" class="footer-social-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/eteczonaeste" target="_blank" rel="noopener noreferrer" class="footer-social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.twitter.com/eteczonaeste" target="_blank" rel="noopener noreferrer" class="footer-social-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.youtube.com/@eteczonaeste" target="_blank" rel="noopener noreferrer" class="footer-social-icon" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row pt-4 border-top border-light border-opacity-25">
                <div class="col-12 text-center">
                    <p class="mb-0 small"><i class="fas fa-copyright me-1"></i>2026 Etec Zona Leste. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

