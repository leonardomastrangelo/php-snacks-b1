<?php
$matches = [
    [
        'team_home' => 'Los Santos',
        'team_away' => 'Apumecani',
        'goals_home' => rand(1, 100),
        'goals_away' => rand(1, 100),
    ],
    [
        'team_home' => 'Barbiet',
        'team_away' => 'All Star',
        'goals_home' => rand(1, 100),
        'goals_away' => rand(1, 100),
    ],
    [
        'team_home' => 'LA Monnezza',
        'team_away' => 'FC AZZ d Bari',
        'goals_home' => rand(1, 100),
        'goals_away' => rand(1, 100),
    ],
    [
        'team_home' => 'Chicago Bulli',
        'team_away' => 'Dark Polo Gang',
        'goals_home' => rand(1, 100),
        'goals_away' => rand(1, 100),
    ],
    [
        'team_home' => 'Maria Salvadores',
        'team_away' => 'Mumble TC',
        'goals_home' => rand(1, 100),
        'goals_away' => rand(1, 100),
    ],
    [
        'team_home' => 'Soul Sister',
        'team_away' => 'Camavinga',
        'goals_home' => rand(1, 100),
        'goals_away' => rand(1, 100),
    ],
];
// var_dump($matches);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Snacks 1</title>
</head>

<body id="snack1">
    <header>
        <h1 class="display-1 text-center fw-bold py-5">
            PHP Snacks 1
        </h1>
    </header>
    <main class="container">
        <h2 class="display-3 text-center">Teams</h2>
        <div class="row">
            <?php
            foreach ($matches as $key => $value) { ?>
                <div class="col-4 py-4">
                    <div class="snack1-col p-3 rounded-3">
                        <span>
                            <?php echo $value['team_home'] . ' - ' . $value['team_away'] . ' | ' ?>
                        </span>
                        <span>
                            <?php echo $value['goals_home'] . ' ' . $value['goals_away'] ?>
                        </span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="text-center py-4">
            <a class="btn btn-success" href="snack-2.php">Snack 2</a>
            <a class="btn btn-success" href="bonus.php">Snack Bonus</a>

        </div>
    </main>

</body>

</html>