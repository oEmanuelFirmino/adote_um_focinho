<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/global.css" />
  <link rel="stylesheet" href="/adote_um_focinho/reset.css" />
  <link rel="stylesheet" href="/adote_um_focinho/view/src/css/global.css" />
  <link rel="stylesheet" href="/adote_um_focinho/view/src/css/main.css" />
  <link rel="stylesheet" href="/adote_um_focinho/view/src/css/footer.css" />
  <link rel="stylesheet" href="/adote_um_focinho/view/src/css/header.css" />
  <title>Adote um Focinho</title>
</head>

<body>
  <div id="header">
    <?php include '../components/header.php'; ?>
  </div>
  <main class="main-c">
    <section id="about-us" class="section">
      <div>
        <h2>Sobre Nós</h2>
        <p>
          Somos uma equipe apaixonada por transformar ideias em realidade. Nosso foco é
          oferecer soluções inovadoras, acessíveis e que façam a diferença na vida das pessoas.
        </p>
      </div>

      <!-- Subseções de Missão, Visão e Valores -->
      <div class="about-details">
        <div class="about-item">
          <h3>Missão</h3>
          <p>Proporcionar soluções criativas e eficientes que atendam às necessidades de nossos clientes.</p>
        </div>
        <div class="about-item">
          <h3>Visão</h3>
          <p>Ser referência no mercado, destacando-se pela inovação e impacto positivo.</p>
        </div>
        <div class="about-item">
          <h3>Valores</h3>
          <ul>
            <li>Inovação</li>
            <li>Compromisso com a qualidade</li>
            <li>Transparência</li>
            <li>Foco no cliente</li>
          </ul>
        </div>
      </div>

      <!-- Estatísticas -->
      <div class="stats">
        <div class="stat-item">
          <h3>+500</h3>
          <p>Clientes atendidos</p>
        </div>
        <div class="stat-item">
          <h3>+10 anos</h3>
          <p>No mercado</p>
        </div>
        <div class="stat-item">
          <h3>+1 milhão</h3>
          <p>Usuários impactados</p>
        </div>
      </div>

      <!-- Equipe -->
      <div class="team">
        <h3>Nossa Equipe</h3>
        <div class="team-members">
          <div class="team-member">
            <img src="team1.jpg" alt="Foto do membro da equipe">
            <p>João Silva</p>
            <p>CEO & Fundador</p>
          </div>
          <div class="team-member">
            <img src="team2.jpg" alt="Foto do membro da equipe">
            <p>Maria Souza</p>
            <p>Designer</p>
          </div>
          <div class="team-member">
            <img src="team3.jpg" alt="Foto do membro da equipe">
            <p>Lucas Oliveira</p>
            <p>Desenvolvedor</p>
          </div>
        </div>
      </div>
    </section>


    <section id="how-to-help" class="section">
      <h2>Como Ajudar</h2>
      <a class="none-style" href="./view/src/pages/adoption.php">
        <div class="help-options">
          <div class="help-item">
            <img src="/adote_um_focinho/view/src/images/dog.png" alt="Adote" class="help-img" />
            <h3>Adote um Cachorro</h3>
            <p>Dê a um cachorro uma nova chance de vida ao adotá-lo.</p>
          </div>
      </a>
      <a class="none-style" href="/src/pages/register.php">
        <div class="help-item">
          <img src="/adote_um_focinho/view/src/images/register-dog.png" alt="Cadastre um focinho" class="help-img" />
          <h3>Cadastre um focinho</h3>
          <p>Dê um lar a um animalzinho que precisa.</p>
        </div>
      </a>
      <a class="none-style" href="/src/pages/contact.php">
        <div class="help-item">
          <img src="/adote_um_focinho/view/src/images/contact.png" alt="Contate-nos" class="help-img" />
          <h3>Contate-nos</h3>
          <p>Entre em contato conosco por aqui.</p>
        </div>
      </a>
      <a class="none-style" href="" id="copyBtn">
        <div class="help-item">
          <img src="/adote_um_focinho/view/src/images/share.png" alt="Compartilhe" class="help-img" />
          <h3>Compartilhe</h3>
          <p>Espalhe a palavra sobre o nosso trabalho nas redes sociais.</p>
        </div>
      </a>
      </div>
    </section>
  </main>
  <div id="footer">
    <?php include '../components/footer.php'; ?>
  </div>
  <script src="./view/src/js/main.js"></script>
  <script>
    document.getElementById('copyBtn').addEventListener('click', function () {
      const currentUrl = window.location.href;

      navigator.clipboard.writeText(currentUrl).then(function () {
        alert("URL copiada com sucesso! Você já pode compartilhar e ajudar um focinho que precisa!");
      }, function (err) {
        console.error("Erro ao copiar a URL: ", err);
      });
    });
  </script>
</body>

</html>