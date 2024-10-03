<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./reset.css" />
    <link rel="stylesheet" href="/src/css/global.css" />
    <link rel="stylesheet" href="/src/css/main.css" />
    <link rel="stylesheet" href="/src/css/header.css" />
    <link rel="stylesheet" href="/src/css/footer.css" />
    <title>Adote um Focinho</title>
  </head>
  <body>
    <div id="header">
      <?php include './src/components/header.php'; ?>
    </div>
    <main class="main-c">
      <section id="about-us" class="section">
        <div class="section-c">
          <h2>Sobre Nós</h2>
          <p class="intro">
            Adote um Focinho é a plataforma para o resgate e adoção de cachorros
            abandonados. Nossa missão é oferecer cuidados médicos, alimentação e
            abrigo, além de ajudar esses animais a encontrar um lar amoroso.
          </p>
          <p class="call-to-action">
            Conheça nossos cães disponíveis e descubra como você pode fazer a
            diferença!
          </p>
        </div>
      </section>
      

      <section id="how-to-help" class="section">
        <h2>Como Ajudar</h2>
        <a class="none-style" href="/src/pages/adoption.php">
          <div class="help-options">
            <div class="help-item">
              <img src="./src/images/dog.png" alt="Adote" class="help-img" />
              <h3>Adote um Cachorro</h3>
              <p>Dê a um cachorro uma nova chance de vida ao adotá-lo.</p>
            </div>
          </a>
          <a class="none-style" href="/src/pages/register.php">
          <div class="help-item">
            <img
              src="/src/images/register-dog.png"
              alt="Cadastre um focinho"
              class="help-img"
            />
            <h3>Cadastre um focinho</h3>
            <p>Dê um lar a um animalzinho que precisa.</p>
          </div>
        </a>
        <a class="none-style" href="/src/pages/contact.php">
          <div class="help-item">
            <img
              src="./src/images/contact.png"
              alt="Contate-nos"
              class="help-img"
            />
            <h3>Contate-nos</h3>
            <p>Entre em contato conosco por aqui.</p>
          </div>
        </a>
        <a class="none-style" href="" id="copyBtn">
          <div class="help-item">
            <img
              src="./src/images/share.png"
              alt="Compartilhe"
              class="help-img"
            />
            <h3>Compartilhe</h3>
            <p>Espalhe a palavra sobre o nosso trabalho nas redes sociais.</p>
          </div>
        </a>
        </div>
      </section>
    </main>
    <div id="footer">
      <?php include './src/components/footer.php'; ?>
    </div>
    <script src="/src/js/main.js"></script>
    <script>
           document.getElementById('copyBtn').addEventListener('click', function() {
            const currentUrl = window.location.href;
            
            navigator.clipboard.writeText(currentUrl).then(function() {
                alert("URL copiada com sucesso! Você já pode compartilhar e ajudar um focinho que precisa!");
            }, function(err) {
                console.error("Erro ao copiar a URL: ", err);
            });
        });
    </script>
  </body>
</html>
