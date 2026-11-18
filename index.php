<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php



    class Etudiant
    {

        public $nom;
        public $promotion;

        public function sePresenter()
        {

            echo "Je m'appelle " . $this->nom;
            echo " et je suis en " . $this->promotion;
        }
    }

    $etudiant = new Etudiant();

    $etudiant->nom = "Joseph";
    $etudiant->promotion = "L2";

    $etudiant->sePresenter();

    ?>





</body>

</html>