<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<div class="titolino">
    <h3>Non hai voglia di pensare ad una nuova password?</h3>
    <h2>TRANQUILLO,</h2>
    <h3>ci pensiamo noi!!!!</h3>
</div>      
<form action="password.php" method="POST" class="login">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
        <label for="pass" class="spazio">Lunghezza password</label>
        <input type="number" name="pass" id="pass">

        <div class="checklist">
            <input type="checkbox" name="lowercase" id="lowercase">
            <label for="lowercase">Lettere minuscole</label>
        </div>
        <div class="checklist">
            <input type="checkbox" name="uppercase" id="uppercase">
            <label for="uppercase">Lettere maiuscole</label>
        </div>
        <div class="checklist">
            <input type="checkbox" name="numbers" id="numbers">
            <label for="numbers">Numeri</label>
        </div>
        <div class="checklist">
            <input type="checkbox" name="symbols" id="symbols">
            <label for="symbols">Simboli</label>
        </div>    
        <button id="generate" class="bottone">Genera password</button>
        <button id="generate" class="bottone">Copia negli appunti</button>

    </form>
</body>
</html>