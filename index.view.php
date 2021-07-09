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

        

            <?php foreach($tasks as $task) : ?>

                <li>
                
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else : ?>
                    <?= $task->description; ?>
                <?php endif; ?>

            <?php endforeach; ?>

        </ul>


    </header>
</body>
</html>