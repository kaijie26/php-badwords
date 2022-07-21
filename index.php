<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creo la mia variabile di testo e una variabile contenente la lunghezza della stringa del testo -->
    <?php
    $myText = 'È una grande abilità saper nascondere la propria abilità.';
    $myTextString = strlen($myText);

    ?>

    <!-- Stampo il testo -->
    <div>
        <?php echo $myText ?>
    </div>

    <!-- Stampo la lunghezza della stringa del testo -->
    <div>
         Lunghezza della stringa è <?php echo $myTextString ?>
    </div>

    <!-- Predo la parola da censurare tramite il parametro GET -->
    <!-- Trasformo la parola da censurare in *** e modifico a sua volta la lunghezza della stringa -->
    <?php
    $badWords = $_GET['badwords'];
    $replacedString = str_replace('abilità', '***', $myText);
    $newString = strlen($replacedString);

    ?>

    <!-- Stampo il testo modificato  -->
    <div>
        Testo modificato: <?php echo $replacedString ?>
    </div>

    <!-- Stampo la lunghezza della stringa del testo modificato  -->
    <div>
        Lunghezza della stringa modificato è <?php echo $newString ?>
    </div>
    
</body>
</html>