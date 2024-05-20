@extends("template.base")

@section("title", "welcome" )


  
@section("content")
<h1 class="my-5 text-center">Welcome to our website!</h1>
<div class="row justify-content-center">
  <div class="col-10 mx-auto mb-5">

     <div class="card">
  
       <div class="card-body">
        <h5 class="card-title">Who we are?</h5>
        <p class="card-text">Welcome to Activity, the reference point for those who love adventure and nature! We are a team of outdoor enthusiasts and explorers dedicated to creating unique and memorable experiences. For years we have been organizing activities and excursions for all those who wish to discover the hidden treasures of our beautiful land.</p>

        <h5 class="card-title">Our mission</h5>
        <p class="card-text">Our mission is to bring people closer to nature, offering a wide range of outdoor activities ranging from hiking in the mountains to kayaking adventures, cultural walks to cycling. We believe that exploration and contact with the natural environment are fundamental to physical and mental well-being.</p>
      
        <h5 class="card-title">Our activities</h5>
        <p class="card-text">We offer a wide range of activities designed for all ages and levels of experience. Whether you are a beginner or an experienced hiker, you will find the perfect adventure for you. Some of our activities include:
          <ul>
            <li><strong>Guided Excursions:</strong> Explore breathtaking trails and discover enchanting views accompanied by expert guides.</li>
            <li><strong>Water activities:</strong> Kayaking, rafting and snorkeling adventures to discover the aquatic world.</li>
            <li><strong>Cultural tours:</strong> Walks to discover the history, culture and local traditions.</li>
            <li><strong>Adventures by bike:</strong> Cycle paths for all levels, from beginner to experienced cyclist.</li>
          </ul>
        </p>
        <div class="col-12">
          <div class="row">
            <div class="col-12 col-md-4 overflow-hidden">
              <img src="https://images.pexels.com/photos/2158963/pexels-photo-2158963.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="nature">
            </div>

            <div class="col-12 col-md-4 overflow-hidden ">
              <img src="https://images.pexels.com/photos/132429/pexels-photo-132429.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="nature">
            </div>
            
            <div class="col-12 col-md-4 overflow-hidden">
              <img src="https://images.pexels.com/photos/532803/pexels-photo-532803.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="nature">
            </div>
            
          </div> 
        </div>

       </div>
    </div>
  </div>
</div>
    
@endsection



  