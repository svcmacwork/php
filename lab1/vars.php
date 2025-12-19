<?php
$name = 'Максим';
$age = 20;
$outputName = "Меня зовут: $name";
$outputAge = "Мне $age лет";
$outputTypeName = "Тип переменной \$name - ".gettype($name);
$outputTypeAge = "Тип переменной \$age - ".gettype($age);

unset($name, $age);
?>


<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Переменные и вывод</title>
</head>
<body>
	<h1>Переменные и вывод</h1>
    <p><?= $outputName ?><br>
     <?= $outputAge ?><br>
     <?= $outputTypeName ?><br>
     <?= $outputTypeAge ?></p>
</body>
</html>