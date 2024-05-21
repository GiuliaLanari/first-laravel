
  @extends("template.base")

@section("title", "Dettaglio" )


  
@section('content')


<div class="row justify-content-center">
  <h1 class="mb-5 text-center">{{$activity["title"]}}</h1>

 

  <div class="col-md-5">
    @session('update_successer')

    <div class="alert alert-success" role="alert">
      The {{session('update_successer')->title}} has been successfully modified!
    </div>
  
    @endsession
      <div class="card">
       <img src="{{$activity["img"]}}" class="card-img-top" alt="activity">
       <div class="card-body">
       
       <p class="card-text">Price: £ {{$activity["price"]}} </p>
       <p class="card-text"><small class="text-muted">Organizzatore: {{$activity["productor"] }}</small></p>

       @auth

       <form action="{{route ('activities.destroy', ['activity'=>$activity])}}" method="POST">
        @method('DELETE')
        @csrf

        <button class="btn btn-danger">Delete</button>
      
      </form>
         
       @endauth

     
       </div>
      </div>
  </div>
</div>

    
@endsection