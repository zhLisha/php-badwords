<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

    <?php 
    // Paragrafo iniziale
        $newParagraph = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse asperiores laboriosam eveniet earum impedit quidem aspernatur orem ipsum dolor, sit amet consectetur adipisicing elit. Esse itaque, ipsum aperiam reiciendis. Aspernatur perferendis voluptas labore orem ipsum dolor, sit amet consectetur adipisicing elit. Esse repelleorem ipsum dolor, sit amet consectetur adipisicing elit.";

    // Censura della parola scelta dall'utente tramite url $get
        $censuredWord = $_GET['censured'];

    // Paragrafo con le parole censurate dall'utente
        $bedWords = str_replace($censuredWord, '***', $newParagraph);
    ?>

    <!-- Stampa del paragrafo senza censure -->
    <div class="without-censure">
        <h2>Testo completo</h2>
        <p>
            <div class="text">
                <?php echo $newParagraph; ?> 
            </div>
            <div class="text-length">
                <span>La lunghezza del testo è:</span>
                <?php echo strlen($newParagraph); ?>
            </div>
        </p>
    </div>

    <!-- Stampa del paragrafo con le censure -->
    <div class="with-censure">
        <h2>Testo censurato</h2>
        <h4>Prego inserire nell'url: 
            <span>?censured=(parola a vostra scelta del paragrafo)</span>
        </h4>
        <p>
            <div class="text">
                <?php echo $bedWords; ?>
            </div>
            <div class="text-length">
                <span>La lunghezza del testo censurato è:</span>
                <?php echo strlen($bedWords); ?>
            </div>
        </p>
    </div>

</body>
</html>