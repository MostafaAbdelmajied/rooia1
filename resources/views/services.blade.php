@extends("layouts.layout")
@section("content")
<div class="container">
    <div>
        <div class="row my-5">
        @foreach ($head_services as $service)
          <div class="col-md-4">
            <div class="card h-100">
              <img src="{{asset("img/".$service->image)}}" class="img-fluid w-100" style="height:300px" alt="">
              <div class="p-4 position-relative" style="background-color:#E7E7E78F ;">
                <span class="position-absolute p-2 rounded-circle" style="background-color:#D16D0A ;top:-50px;cursor: pointer;"><img src="img/Widget_alt.png" alt=""></span>
               <h4 class="fw-bold">{{$service->title}}</h4>
               <p class="text-black-50 fw-bold">{{$service->en_desc}}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
      @foreach ($services as $service)
    <div class="mt-5 row">
        <div class="d-flex align-items-center gap-2">
            <span class="p-2 px-3 text-white rounded-circle" style="background-color:#D16D0A ;">1</span>
            <h3 class="m-0">{{$service->title}} </h3>
        </div>
      <div class="col-md-6 p-md-4">
        <img src="{{asset("img/".$service->image)}}" class="img-fluid w-100" style="height:400px ;" alt="">
      </div>
      <div class="col-md-6 p-md-4 about-desc">
        <h2 class="fw-bold">{{$service->title}}</h2>
        <p>involving the controlled use of explosives to break down

            rock formations. This method is essential for creating tunnels,

             excavating foundations, and

            extracting valuable minerals.  Key Steps in the Rock Blasting Process:

             Drilling: Holes are

            drilled into the rock at specific depths and patterns to ensure optimal

             fragmentation.

            Charging: Explosives and detonators are placed into the drilled holes.

             Blasting: The

            explosives are detonated, causing the rock to fracture and break

             apart. Clearing: The

            broken rock is removed, making way for further excavation or

            construction.</p>
      </div>
    </div>
    @endforeach

  </div>
@endsection
