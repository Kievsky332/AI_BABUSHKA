<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Babushka</title>
    <link rel="icon" href="https://masterpiecer-images.s3.yandex.net/f787cd3867a511ee8ccd92669a1675b3:upscaled" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header><h1 id="header">ИИ ПЕРЕВОДЧИК БАБУШКА</h1></header>
    <center><div class="main">
        <div id="left">
            <h1 class="input-output">Input</h1>
            <textarea form="myForm" name="input" maxlength="270" class="input"><? 
              if(isset($_POST['user_message'])){
              	echo strip_tags($_POST['user_message']);
              };
              
              ?></textarea>
        </div>
        <div id="row">
            <h1 id="rows"></h1>
        </div>
        <div id="right">
            <h1 class="input-output" >Output</h1>
            <textarea  readonly maxlength="300" class="input"><?php 
              if(isset($_POST['ai_answer'])){
              	echo strip_tags($_POST['ai_answer']);
              };
              ?></textarea>
        </div>
    </div></center><br>
    <center><form id="myForm" action="ai.php" method="POST"><button id="shaman">Пошаманить над текстом</button></form></center>
</body>
</html>