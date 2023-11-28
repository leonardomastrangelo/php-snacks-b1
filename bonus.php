<?php
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis excepturi consequatur praesentium adipisci molestiae et voluptates dolorem, dicta in, voluptatem enim labore tempora accusantium atque minima recusandae tempore officia. Voluptas placeat optio facere sunt laudantium hic maxime. Delectus, temporibus illo repellendus possimus, consectetur blanditiis iste est error maiores voluptas perspiciatis totam nobis culpa natus quis asperiores. Itaque tempora rerum sit odio incidunt laboriosam quaerat in, ea cumque qui commodi est aut velit porro excepturi delectus minus doloribus, sapiente ducimus a fuga esse. Molestiae totam necessitatibus, deserunt nesciunt quam corporis eaque veniam id doloribus ipsa velit. Quod assumenda nisi aut! Vitae";
$sub_text = explode(".", $text);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Snacks Bonus</title>
</head>

<body id="bonus">
    <header>
        <h1 class="display-1 text-center fw-bold py-5">
            PHP Snacks Bonus
        </h1>
    </header>
    <main class="container">
        <div class="row justify-content-center">
            <?php for ($i = 0; $i < count($sub_text); $i++) { ?>
                <div class="col-4 bonus-col py-5">
                    <div class="fw-bold fs-4">Frase :
                        <?php echo $i + 1 ?>
                    </div>
                    <span>
                        <?php echo $sub_text[$i] ?>
                    </span>
                </div>
            <?php } ?>
        </div>
    </main>
    <div class="text-center py-5">
        <a class="btn btn-success" href="index.php">Snack 1</a>
        <a class="btn btn-success" href="snack-2.php">Snack 2</a>
    </div>

</body>

</html>