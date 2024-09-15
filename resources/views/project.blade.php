@extends("layouts.layout")
@section("content")
<div class="container mt-4">
    <h2 class="fw-bold text-center">Our projects</h2>
    <h3 class="titles my-5">netbel project</h3>
    @foreach ($netbal as $item)
    <div class="mb-5">
        <h4>{{$item->en_title}}</h4>
        <p>{{$item->en_desc}}</p>
        <img src="{{asset("img/".$item->image)}}" class="img-fluid w-100" style="height:500px ;" alt="">
    </div>
    @endforeach

  </div>
  <div class="container mt-4">
    <h3 class="titles my-5">ongoing project</h3>
    @foreach ($ongoing as $item)
    <div class="mb-5">
        <h4>{{$item->en_title}}</h4>
        <p>{{$item->en_desc}}</p>
        <img src="{{asset("img/".$item->image)}}" class="img-fluid w-100" style="height:500px ;" alt="">
    </div>
   @endforeach

  </div>
@endsection
