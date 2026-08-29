@extends('layout')

@section('title', 'เขียนบทความใหม่')

@section('content')
    <h2 class="text text-center py-2">เขียนบทความใหม่</h2>
    <form method="POST" action ='/insert'>
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">ชื่อบทความ</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="content" class="form-label my-2">เนื้อหา</label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        @error('content')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="submit" class="btn btn-primary my-3" value="บันทึก">
        <a href="{{ route('blogs') }}" class="btn btn-secondary my-3">บทความทั้งหมด</a>
    </form>
@endsection
