<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <form action="password.php" method="POST">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name"> <br>
        <label for="pass">Lunghezza password</label>
        <input type="number" name="pass" id="pass"> <br>

        <input type="checkbox" name="lowercase" id="lowercase">
        <label for="lowercase">Lettere minuscole</label> <br>
        <input type="checkbox" name="uppercase" id="uppercase">
        <label for="uppercase">Lettere maiuscole</label> <br>
        <input type="checkbox" name="numbers" id="numbers">
        <label for="numbers">Numeri</label> <br>
        <input type="checkbox" name="symbols" id="symbols">
        <label for="symbols">Simboli</label> <br>
            
        <button id="generate">Genera password</button>
    </form>
</body>
</html>