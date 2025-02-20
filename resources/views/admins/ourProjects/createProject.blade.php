@extends('admins.layouts.parent')

@section('title', 'إنشاء')

@section('content')

@include('admins.incloudes.messages')

<section id="about" class="mt-5 mb-5">
    <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data" style="width: 70%; margin: 0 auto;">
        @csrf

        <div class="form-group">
            <label for="project_image" style="color: #0B7077;">صورة المشروع</label>
            <input type="file" name="image" id="project_image" class="form-control" accept="image/*" required>
        </div>

        <div class="form-group">
            <label for="project_name" style="color: #0B7077;">اسم المشروع</label>
            <input type="text" name="ar_title" id="project_name" class="form-control" value="{{ old('ar_title') }}" required>
        </div>

        <div class="form-group">
            <label for="ar_desc" style="color:#696984;">وصف المشروع</label>
            <textarea name="ar_desc" id="ar_desc" class="form-control" rows="3" required>{{ old('ar_desc') }}</textarea>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn px-4 py-2" style="background-color: #0B7077; color: #fff;">إضافة المشروع</button>
        </div>
    </form>
</section>
@endsection
