<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        label, input, select {
            display: block;
            margin: 10px 0;
            width: 100%;
        }
        input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Calculatrice</h1>
    <form action="calculatrice.php" method="post">
        <label for="nombre1">Nombre 1 :</label>
        <input type="text" id="nombre1" name="nombre1" required>
        
        <label for="nombre2">Nombre 2 :</label>
        <input type="text" id="nombre2" name="nombre2" required>
        
        <label for="operation">Opération :</label>
        <select id="operation" name="operation" required>
            <option value="addition">Addition</option>
            <option value="soustraction">Soustraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select>
        
        <input type="submit" value="Calculer">
    </form>
</body>
</html>
