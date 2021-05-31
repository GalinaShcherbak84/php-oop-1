<?php
   require_once __DIR__ . '/movies.php';
   require_once __DIR__ . '/movies_data.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    <?php
    foreach($movies as $movie){ 
        $movie = new Movie($movie['title'], $movie['year'], $movie['description']);?>
        <h2>Title: <?php echo $movie->title ?></h2>
        <h2>Year: <?php echo $movie->year ?> </h2>
        <p><?php echo $movie->description ?></p>
    <?php } ?>
    
</body>
</html>