@extends("template.base")

@section("title", "Elenco" )


 
@section('content')

<h1 class="my-5 text-center">List of activities</h1>
<div class="row justify-content-center mx-5">
  


{{-- Ciclo sulle attività e visualizzazione delle card --}}

    @forelse ($activities as $activity) 
        <div class="col-12 col-md-3 mb-3 ">
           <div class="card h-100">
              <img src= {{$activity["img"]}} class="card-img-top" alt="attivity cover">

          <div class="card-body d-flex flex-column ">
            <div class="mb-auto">
              <h5 class="card-title">Title: {{$activity["title"]}}</h5>
              <p class="card-text">Price: £ {{$activity["price"]}}</p>
              <p class="card-text"><small class="text-muted">Organizzatore: {{$activity["productor"] }}</small></p>

            </div>
             

               <div class="d-flex flex-wrap justify-content-center mt-5">
                
                  <a href="{{route ('activities.edit', ['activity'=>$activity] )}}" class="btn btn-warning mb-3 ">Edit</a>
                
                  <a href="{{route ('activities.show', ['activity'=>$activity] )}}" class="btn btn-primary mb-3 mx-2">Dettails</a>
                
                <form action="{{route ('activities.destroy', ['activity'=>$activity])}}" method="POST">
                  @method('DELETE')
                  @csrf
          
                  <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                
                </form>

               </div>
             

            </div>
          </div>
        </div>
    
    

    @empty
       <h2>Non ci sono attività disponibili</h2>
    @endforelse 

    <div class="my-5 ">
      {{ $activities->links() }} 
    </div>
    
   
</div>
    


@endsection


