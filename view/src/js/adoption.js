document.addEventListener("DOMContentLoaded", () => {
  const carregarPets = async () => {
    try {
      const response = await fetch("/adote_um_focinho/pets/list");
      const data = await response.json();

      if (data.status === "success") {
        const pets = data.data;
        const container = document.getElementById("adoption-list");
        container.innerHTML = "";

        pets.forEach((pet) => {
          const card = document.createElement("div");
          card.className = "dog-card";
          card.innerHTML = `
            <img src="data:image/jpeg;base64,${pet.imagem}" alt="${pet.nome}" class="dog-image">
            <h2 class="dog-name">${pet.nome}</h2>
            <div id="info-cont">
              <p class="dog-info"><strong>Porte:</strong> ${pet.porte}</p>
              <p class="dog-info"><strong>Idade:</strong> ${pet.idade}</p>
              <p class="dog-info"><strong>Personalidade:</strong> ${pet.personalidade}</p>
              <p class="dog-info"><strong>Raça:</strong> ${pet.raca}</p>
            </div>
          `;
          container.appendChild(card);
        });
      } else {
        console.error(data.message);
        const container = document.getElementById("adoption-list");
        container.innerHTML = `<p class="error-message">Erro: ${data.message}</p>`;
      }
    } catch (error) {
      console.error("Erro ao carregar os dados dos pets:", error);
      const container = document.getElementById("adoption-list");
      container.innerHTML = `<p class="error-message">Erro ao carregar os pets. Tente novamente mais tarde.</p>`;
    }
  };

  carregarPets();
});
