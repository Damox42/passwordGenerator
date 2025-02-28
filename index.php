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
            
        <button id="generate">Genera password</button>
    </form>
</body>
</html>