document.getElementById("formAgendamento").addEventListener("submit", function (e) {
    const nome = document.getElementById("nome").value.trim();
    const email = document.getElementById("email").value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
    if (nome === "") {
      alert("Por favor, preencha seu nome.");
      e.preventDefault();
      return;
    }
  
    if (!emailRegex.test(email)) {
      alert("Por favor, insira um email válido.");
      e.preventDefault();
    }
    if (nome === "") {
        alert("Por favor, preencha seu nome.");
        e.preventDefault();
        return;
      }
    
      if (!emailRegex.test(email)) {
        alert("Por favor, insira um email válido.");
        e.preventDefault();
    }
  });  