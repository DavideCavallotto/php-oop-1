<?php 

class Production {
    public $title;
    public $language;
    public $rating;


    function __construct($_title,$_language,$_rating)
    {
        $this->setTitle($_title);
        $this->language = $_language;         
        $this->getRating($_rating);
    }

    public function getRating($rating) {
        if($rating >= 0 && $rating <= 10) {
            $this->rating = $rating;
        } else {
            var_dump('il voto deve essere superiore a 0 e inferiore a 10');
        }
        
    }

    public function setTitle($title) {
        if($title != '') {
            $this->title = $title;
        } else {
            $this->title = 'Titolo non disponibile'; 
        }

    }   

}

$film1 = new Production ('Harry Potter e la Pietra Filosofale','ita',7.6);
$film2 = new Production ('Harry Potter e la Camera dei Segreti','ita',7.4);
$film3 = new Production ('Harry Potter e il Prigioniero di Azkaban','ita',7.9);
$film4 = new Production ('Harry Potter e il Calice di Fuoco','ita',7.7);
$film5 = new Production ('Harry Potter e l\'Ordine della Fenice','ita',7.5);
$film6 = new Production ('Harry Potter e il Principe Mezzosangue','ita',7.6);
$film7 = new Production ('Harry Potter e i Doni della Morte - Parte 1','ita',7.7);
$film8 = new Production ('Harry Potter e i Doni della Morte - Parte 2','ita',8.1);

$saga = [
    $film1,
    $film2,
    $film3,
    $film4,
    $film5,
    $film6,
    $film7,
    $film8,
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>OOP</title>
</head>
<body>
    
    <table class="table table-dark table-striped">
        <thead>
            <tr>                
                <th scope="col">Titolo</th>
                <th scope="col">Lingua</th>
                <th scope="col">Voto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($saga as $film) { ?>
                <tr>             
                    <td><?php echo $film->title ?></td>
                    <td><?php echo $film->language ?></td>
                    <td><?php echo $film->rating ?></td>
                    
                </tr> 

            <?php } ?>
        </tbody>
    </table>


   
<?php    

?>    
</body>
</html>

