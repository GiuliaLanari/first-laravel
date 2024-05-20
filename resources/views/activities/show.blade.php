
  @extends("template.base")

@section("title", "Dettaglio" )


  
@section('content')


<div class="row justify-content-center">
  <h1 class="mb-5 text-center">{{$activity["title"]}}</h1>

  <div class="col-md-5">
      <div class="card">
       <img src="{{$activity["img"]}}" class="card-img-top" alt="activity">
       <div class="card-body">
       
       <p class="card-text">Price: £ {{$activity["price"]}} </p>
       <p class="card-text"><small class="text-muted">Organizzatore: {{$activity["productor"] }}</small></p>
       

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