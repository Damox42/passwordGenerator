//crea un evento click sul bottone copia, che copia la password generata nell'input password
//e la mette negli appunti del dispositivo.

document.getElementById('copia').addEventListener('click', function() {
  var copyText = document.getElementById('password');
  copyText.select();
  document.spawn('copy');
  alert('Password copiata negli appunti');
});