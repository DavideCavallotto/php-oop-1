<?php 

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__. '/Models/Serie.php';
require_once __DIR__. '/Models/Movie.php';

$film1 = new Movie ('Harry Potter e la Pietra Filosofale','ita', 7.6, 974755371, 151);
$film2 = new Movie ('Harry Potter e la Camera dei Segreti','ita',7.4, 878979634, 142);
$film3 = new Movie ('Harry Potter e il Prigioniero di Azkaban','ita',7.9, 796688549, 161);
$film4 = new Movie ('Harry Potter e il Calice di Fuoco','ita',7.7, 896911078, 157);
$film5 = new Movie ('Harry Potter e l\'Ordine della Fenice','ita',7.5, 939885929, 138);
$film6 = new Movie ('Harry Potter e il Principe Mezzosangue','ita',7.6, 934416487, 153);
$film7 = new Movie ('Harry Potter e i Doni della Morte - Parte 1','ita',7.7, 956399711, 146);
$film8 = new Movie ('Harry Potter e i Doni della Morte - Parte 2','ita',8.1, 1328111219, 130);

$serie1 = new Serie ('Sandman', 'eng', 7.7, 1);
// 1 stagione
$serie2=  new Serie ('Carnival Row','eng', 7.7, 2);
// 2 stagioni
$serie3=  new Serie ('Tenebre e Ossa','ita', 7.6, 2);
// 2 stagioni
$serie4=  new Serie ('Shadowhunters','eng', 6.5, 3);
// 3 stagioni
$serie5=  new Serie ('Stranger Things','eng', 8.7, 4);
// 4 stagioni


$productions = [

    'movies' => [

        $film1,
        $film2,
        $film3,
        $film4,
        $film5,
        $film6,
        $film7,
        $film8,
    ],

    'series' => [
        $serie1,
        $serie2,
        $serie3,
        $serie4,
        $serie5,
    ]
];

var_dump($productions['series']);
var_dump($productions['movies']);

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
        <h1>Film</h1>
        <thead>
            <tr>                
                <th scope="col">Titolo</th>
                <th scope="col">Lingua</th>
                <th scope="col">Voto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productions['movies'] as $film) { ?>
                <tr>             
                    <td><?php echo $film->title ?></td>
                    <td><?php echo $film->language ?></td>
                    <td><?php echo $film->rating ?></td>
                    
                </tr> 

            <?php } ?>
        </tbody>
    </table>

    <table class="table table-dark table-striped">
        <h1>Serie</h1>
        <thead>
            <tr>                
                <th scope="col">Titolo</th>
                <th scope="col">Lingua</th>
                <th scope="col">Voto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productions['series'] as $serie) { ?>
                <tr>             
                    <td><?php echo $serie->title ?></td>
                    <td><?php echo $serie->language ?></td>
                    <td><?php echo $serie->rating ?></td>
                    
                </tr> 

            <?php } ?>
        </tbody>
    </table>


   
<?php    

?>    
</body>
</html>

