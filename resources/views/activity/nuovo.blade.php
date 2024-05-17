@extends("template.base")

@section("title", "Nuova Attività" )


 
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <h2 class="mt-5 mb-4">Nuova Attività</h2>
        <form>
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo dell'attività">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" placeholder="Prezzo"></input>
            </div>
            <div class="form-group">
                <label for="organizzatore">Organizzatore</label>
                <input type="text" class="form-control" id="organizzatore" placeholder="Nome organizzatore"></input>
            </div>
            <div class="form-group">
                <label for="img">Immagine</label>
                <input type="text" class="form-control" id="img" placeholder="Indirizzo dell'immagine"></input>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Aggiungi Attività</button>
        </form>
    </div>
</div>
    
@endsection







