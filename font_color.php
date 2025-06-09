<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php 
    $txt = isset($_GET["t"])?$_GET["t"]: "Texto Generico";
    $tam = isset($_GET["tam"])?$_GET["tam"]: "12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]: "#000"
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Font Color</title>
    <link rel="stylesheet" href="style.css">
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    
</head>
<body>
    <div class="conteudo">
    <div class="cont">
         <label for="itxt">Seu texto editado: </label>
    <?php 
            
        echo "<span class='texto'>$txt</span>"
    
    ?>
    </div>
</div>
</body>
</html>