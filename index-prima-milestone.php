<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="sfondo">
        <div class="immagine">
            <img src="./img/spotify-logo.png" alt="spotify-logo">
        </div>
    </div>
    <div class="sfondo2">
        <div class="albums-container">
            <div class="container-inner">
                <?php
                    require_once __DIR__ . "/database/database.php";

                    foreach ($database as $albums) {
                        echo "<div class=albums-inner-container>
                                <div class=sfondo-album>
                                    <img src={$albums['poster']}> <br/>
                                    <div class=title>{$albums['title']}</div> <br/>
                                    <div class=author>{$albums['author']}</div> <br/>
                                    <div class=year>{$albums['year']}</div> <br/>
                                </div>                                
                            </div>";
                    }
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>