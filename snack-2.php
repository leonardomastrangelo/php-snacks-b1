<?php
if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"])) {
    $name = $_GET["name"];
    $email = $_GET["email"];
    str_replace("%40", "@", $email);
    $age = $_GET["age"];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Snacks 2</title>
</head>

<body id="snack2">
    <header>
        <h1 class="display-1 text-center fw-bold py-5 text-light">
            PHP Snacks 2
        </h1>
    </header>

    <div class="text-center">
        <?php if ((!empty($name) && !empty($email) && !empty($age)) && (strlen($name) > 3 && str_contains($email, '.com') && is_numeric($age))) { ?>
            <div class="d-flex justify-content-center pb-5">
                <h3 class="text-bg-success p-3 rounded-3">Accesso riuscito</h3>
            </div>
        <?php } else { ?>
            <div class="d-flex justify-content-center pb-5">
                <h3 class="text-bg-danger p-3 rounded-3">Accesso negato</h3>
            </div>
            <main class="container">
                <form action="snack-2.php" method="GET" class="w-50 m-auto">
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-light">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label text-light">Age</label>
                        <input type="number" class="form-control" id="age" name="age">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </main>
        <?php } ?>
    </div>
    <div class="text-center py-5">
        <a class="btn btn-success" href="index.php">Snack 1</a>
    </div>



</body>

</html>