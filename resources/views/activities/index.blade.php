@extends("template.base")

@section("title", "Elenco" )


 
@section('content')

<h1 class="my-5 text-center">Elenco delle attività</h1>
<div class="row justify-content-center mx-5">
  


{{-- Ciclo sulle attività e visualizzazione delle card --}}

    @forelse ($activities as $activity) 
        <div class="col-md-4 h-100">
           <div class="card mb-3">
             <img src= {{$activity["img"]}} class="card-img-top" alt="attivity cover">
             <div class="card-body">
              <h5 class="card-title">{{$activity["title"]}}</h5>
              <p class="card-text">{{$activity["price"]}}</p>
              <p class="card-text"><small class="text-muted">Organizzatore: {{$activity["productor"] }}</small></p>

              <a href="{{route ('activities.show', ['activity'=>$activity] )}}" class="btn btn-primary">Dettails</a>
             </div>

             <form action="{{route ('activities.destroy', ['activity'=>$activity])}}" method="POST">
                @method('DELETE')
                @csrf
        
                <button class="btn btn-danger">Delete</button>
              
              </form>
             
            </div>
        </div>
    
    @empty
       <h2>Non ci sono attività disponibili</h2>
    @endforelse 

</div>
    
@endsection


