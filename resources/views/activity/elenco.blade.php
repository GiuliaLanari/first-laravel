@extends("template.base")

@section("title", "Elenco" )


 
@section('content')

<h1 class="my-5 text-center">Elenco delle attività</h1>
<div class="row justify-content-center mx-5">
    
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
    
@endsection


