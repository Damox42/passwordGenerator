const copia = document.getElementById("copia");
const passwordInput = document.getElementById("password");

copia.addEventListener("click", function() {
    copiaPassword(passwordInput.value);
  });
  
  function copiaPassword(password) {
    navigator.clipboard.writeText(password)
      .then(() => alert("Password copiata negli appunti!"))
      .catch((err) => console.error("Errore:", err));
  }