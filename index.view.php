<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
        header {
            background:#e3e3e3;
            padding: 2rem;
            text-align: center;
        }

    </style>
</head> 
<body>
    <header>

            
            <ul>

            <?php //suited for shorter functions without multiple html tags

                foreach ($names as $name) {
                    
                    echo "<li>$name</li>";

                }
            ?>
            
            </ul>
            

            <!--for longer ones-->
            <?php foreach ($names as $name) : ?> 
                    <li><?= $name; ?></li>

            <?php endforeach; ?>

            <?php 

                foreach ($animals as $animal) {
                    echo "<li>$animal</li>";
                }

            ?>

            <?php foreach ($person as $key => $feature) : ?>
                <li><?= "$key is $feature"; ?></li>
            <?php endforeach; ?>
            
            <?php foreach ($task as $heading => $value) : ?>

                <li>
                    <strong><?= ucwords($heading) . ", " . $value; ?></strong>
                </li>

            <?php endforeach ?>

            <ul>
                <li>Name: <strong> <?= $task["title"] ?></strong></li>
            </ul>

            <li>
                <strong>Status: </strong><?= $task["completed"] ? "Complete" : "Imcomplete"; ?> 
            </li>

            <strong> Status:</strong>

            <?php if ($task["completed"]) : ?> 

               Complete
            
            <?php else : ?>

                
                Incomplete
            

            <?php endif; ?>

    </header>
</body>
</html>