<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Web-Site</title>
</head>
<body>
    <?php 
        $books = [
            [
                'bookName' => 'Outliers',
                'author' => 'Malcolm Goldwel',
                'shopUrl' => 'https://example.com'
            ],
            [
                'bookName' => 'Moby Dick',
                'author' => 'Herman Melville',
                'shopUrl' => 'https://example.com'
            ]
        ]
    ?>
    
    <div>
        <?php 
            foreach($books as $book){?>

            <h1><?= $book['bookName']?></h1>
            <p><?= $book['author']?></p>
            <a href="<?= $book['shopUrl'] ?>">Click to download</a>
            
       <?php }?>
    </div>

   
</body>
</html>