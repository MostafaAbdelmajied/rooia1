@extends('admins.layouts.parent')

@section('title', 'عرض الخدمات')

@section('content')

@include('admins.incloudes.messages')

<section id="services" class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            @if($services->isEmpty())
                <div class="col-12">
                    <div class="alert alert-warning text-center" role="alert">
                        لا توجد خدمات لعرضها.
                    </div>
                </div>
            @else
                @foreach($services as $service)
                    <div class="col-12 mb-3">
                        <div class="services-card p-3 text-center">
                            @php
                                $imagePath = url('public/img/admins/' . ($service->image ?? 'default.png'));
                            @endphp
                            <img src="{{ $imagePath }}" style="width:100%; height:auto;" class="img-fluid mb-2">
                            <p style="color:#696984;">{{ $service->ar_desc }}</p>
                            <div class="mt-3">
                                <a href="{{ route('admin.service.edit', $service->id) }}" class="btn btn-primary">تعديل</a>
                                <form action="{{ route('admin.service.destroy', $service->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDelete()">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">حذف</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>

<script>
    function confirmDelete() {
        return confirm('هل أنت متأكد أنك تريد حذف هذه الخدمة؟');
    }
</script>

@endsection
