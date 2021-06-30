<?php 
    include __DIR__ . '/database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <main>
            <div> 
                <?php foreach($disks as $disk) { ?>
                <div class="container">
                <?= $disk["cover"]; ?>
                <div class="text">
                    <h2>
                        <?= $disk["title"]; ?>
                    </h2>
                    
                    <h2>
                        <?= $disk["author"]; ?>
                    </h2>
    
                    <h2>
                        <?= $disk["year"]; ?>
                    </h2>
    
                    <h2>
                        <?= $disk["genre"]; ?>
                    </h2>
                </div>
    
                </div>

                <?php }; ?>
                
                
            </div>

            <div>

                
            </div>

    </main>
    <script src="js/script.js"></script>
</body>
</html>