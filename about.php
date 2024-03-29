<?php
  $currentPage = 'about';
  include_once(__DIR__ . '/components/public/header.php');

  function getActiveUsers() {
    return 500;
  }

  $activeUsers = getActiveUsers();
?>

<main class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="mb-4">Sobre o Biblioteca Obras da Vida</h1>
            <p>
                Bem-vindo ao Biblioteca Obras da Vida, o lugar onde a paixão pela leitura se encontra com a comunidade online. 
                Nosso objetivo é proporcionar uma experiência única para todos os amantes a leitura, desde iniciantes até autor experientes.
            </p>
            <p>
                Explore uma variedade incrível de leituras, compartilhe suas próprias criações, interaja com outros autores e faça parte de uma comunidade apaixonada.
                Acreditamos que a leitura é uma jornada compartilhada e queremos ser o seu guia nesse caminho.
            </p>
            <p>
                Atualmente, temos mais de <?php echo $activeUsers; ?> usuários ativos que contribuem diariamente para a riqueza da nossa comunidade.
            </p>
        </div>
        <div class="col-md-6">
            <img src="src/img/logo.png" alt="Imagem Sobre o Biblioteca Obras da Vida" class="img-fluid rounded">
        </div>
    </div>

    <hr class="my-5">

    <div class="row">
        <div class="col-md-12">
            <h2 class="mb-4">Notícias e Destaques</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="src/img/news1.jpg" class="card-img-top" alt="Parceria com Comunidades">
                <div class="card-body">
                    <h5 class="card-title">Parceria com Comunidades</h5>
                    <p class="card-text">Biblioteca Obras da Vida firma parceria para promover a leitura em comunidades locais.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="src/img/news2.jpg" class="card-img-top" alt="Biblioteca Obras da Vida na Mídia">
                <div class="card-body">
                    <h5 class="card-title">Biblioteca Obras da Vida na Mídia</h5>
                    <p class="card-text">Veja como o Biblioteca Obras da Vida está ganhando destaque nos principais veículos de comunicação.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="src/img/news3.jpg" class="card-img-top" alt="Canal no YouTube e Instagram">
                <div class="card-body">
                    <h5 class="card-title">Canal no YouTube e Instagram</h5>
                    <p class="card-text">Inscreva-se no nosso canal no YouTube e siga-nos no Instagram para dicas exclusivas e conteúdo incrível!</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
  include_once(__DIR__ . '/components/public/footer.php');
?>
