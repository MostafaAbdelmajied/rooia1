@extends("layouts.layout")
@section("content")
<div class="container mb-5 mt-md-5">
    <div class="row mt-md-5">
        <div class="col-md-4 text-center">
           <div class="d-flex flex-column gap-4 align-items-center">
            <img src="img/logo.png" alt="">
            <h4 class="fw-bold m-0">Connect with us</h4>
            <p class="m-0">to bring your construction
                vision to life</p>
           </div>
        </div>
        <div class="col-md-8">
            <div class="p-5 border shadow" style="border-radius:20px ;">
                <div class="d-flex justify-content-center gap-2">
                    <h2 class="fw-bold">Contact</h2>
                    <h2 class="fw-bold" style="color:#F48F00 ;">Us</h2>
                </div>
                <p class="text-center">Let’s get in touch!</p>
                <div class="d-flex flex-column gap-4 mt-5">
                    <input type="text" class="form-control border-0 border-bottom" placeholder="Email">
                    <input type="text" class="form-control border-0 border-bottom" placeholder="Name">
                    <textarea rows="6" class="form-control border-0 border-bottom" placeholder="Content"></textarea>
                    <div class="d-flex gap-2">
                        <input type="checkbox" id="i">
                        <label for="i">I would like to receive the newsletter.</label>
                    </div>
                    <div class="text-center">
                        <div class="btn text-white hovers px-5 py-2" style="background-color:#F48F00 ;">Submit</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
