
  @extends("template.base")

@section("title", "Dettaglio" )


  
@section('content')


<div class="row justify-content-center">
  <h1 class="my-5 text-center">Pagina di dettaglio</h1>

  <div class="col-md-9">
      <div class="card">
       <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
       <div class="card-body">
       <h5 class="card-title">Titolo della Card</h5>
       <p class="card-text">Testo della card. Qui puoi inserire la descrizione del contenuto della card.</p>
       

       <form action="{{route ('activities.destroy', ['activity'=>$activity])}}" method="POST">
        @method('DELETE')
        @csrf

        <button class="btn btn-danger">Delete</button>
      
      </form>
       </div>
      </div>
  </div>
</div>

    
@endsection