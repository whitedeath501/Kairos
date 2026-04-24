function enviar() {
  let nome = document.getElementById("nome").value;
  let mensagem = document.getElementById("mensagem").value;
  let resposta = document.getElementById("resposta");

  if (nome === "" || mensagem === "") {
    resposta.innerHTML = "Preencha todos os campos!";
    resposta.style.color = "red";
  } else {
    resposta.innerHTML = "Mensagem enviada com sucesso, " + nome + "!";
    resposta.style.color = "lightgreen";

    document.getElementById("nome").value = "";
    document.getElementById("mensagem").value = "";
  }
}
const button = document.getElementById("chat-button");
const chat = document.getElementById("chat-container");

button.addEventListener("click", () => {
  if (chat.style.display === "none" || chat.style.display === "") {
    chat.style.display = "block";
  } else {
    chat.style.display = "none";
  }
});