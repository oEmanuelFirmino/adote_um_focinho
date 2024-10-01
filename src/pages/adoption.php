<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/adote_um_focinho/reset.css" />
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="./css/adoption.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <title>Adote o seu Novo Amigo</title>
  </head>
  <body>
    <div id="header">
      <?php include '../components/header.php'; ?>
    </div>
  <main class="container">
      <div id="adoption-list">
        <script>
          function carregarPets() {
            const xhr = new XMLHttpRequest();
            xhr.open("GET", "/adote_um_focinho/api/list_pets.php", true);
            xhr.onload = function () {
              if (xhr.status === 200) {
                const pets = JSON.parse(xhr.responseText);
                const container = document.getElementById("adoption-list");
                container.innerHTML = "";

                pets.forEach((pet) => {
                  const card = document.createElement("div");
                  card.className = "dog-card";
                  card.innerHTML = `
                            <img src="data:image/jpeg;base64,${pet.imagem}" alt="${pet.nome} class="dog-image">
                            <h2 class="dog-name">${pet.nome}</h2>
                            <div id="info-cont">
                            <p class="dog-info"><span style="font-weight:bold;">Porte:</span> ${pet.porte}</p>
                            <p class="dog-info"><span style="font-weight:bold;">Idade:</span> ${pet.idade}</p>
                            <p class="dog-info"><span style="font-weight:bold;">Personalidade:</span> ${pet.personalidade}</p>
                            <p class="dog-info"><span style="font-weight:bold;">Raça:</span> ${pet.raca}</p>
                            </div>
                        `;
                  container.appendChild(card);
                });
              } else {
                console.error("Erro ao carregar dados");
              }
            };
            xhr.send();
          }

          window.onload = carregarPets; 
        </script>
      </div>
    </main>
    <div id="footer">
      <?php include '../components/footer.php'; ?>
    </div>
  </body>
</html>
