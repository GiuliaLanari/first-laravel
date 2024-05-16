<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attività</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <?php
            // Esempio di dati delle attività
            $activities = [
                ["id" => 1, "title" => "Attività 1", "description" => "Descrizione dell'attività 1", "deadline" => "2024-05-20"],
                ["id" => 2, "title" => "Attività 2", "description" => "Descrizione dell'attività 2", "deadline" => "2024-05-22"],
                ["id" => 3, "title" => "Attività 3", "description" => "Descrizione dell'attività 3", "deadline" => "2024-05-25"]
            ];

            // Ciclo sulle attività e visualizzazione delle card
            foreach ($activities as $activity) {
                echo '<div class="col-md-4">';
                echo '<div class="card mb-3">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $activity["title"] . '</h5>';
                echo '<p class="card-text">' . $activity["description"] . '</p>';
                echo '<p class="card-text"><small class="text-muted">Scadenza: ' . $activity["deadline"] . '</small></p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>