document.addEventListener("DOMContentLoaded", () => {
  const carregarPets = async () => {
    try {
      const response = await fetch("/adote_um_focinho/register/pet");
    } catch (error) {
      console.error("Erro ao adicionat pet:", error);
      const container = document.getElementById("customForm");
      container.innerHTML = `<p class="error-message">Erro ao adicionar pet. Tente novamente mais tarde.</p>`;
    }
  };

  carregarPets();
});
