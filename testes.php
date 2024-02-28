<html>
<head>
<title>Aula de método</title>
</head>
<body>
<form action="pag.php" method="get">
Nome: <input type="text" name="nome">
<input type="submit" value="Enviar">
</html>
<? php
$nome = $_GET["nome"];
echo "Nome: ". $nome;
-? >
</form>
</body>