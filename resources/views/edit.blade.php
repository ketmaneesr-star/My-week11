@extends('layout')

@section('title', 'แก้ไขบทความ')

@section('content')
    <h2 class="text text-center py-2">แก้ไขบทความ</h2>
    <form method="POST" action="{{ route('update', $blog->id) }}">
        @csrf
        <div class="form-group">
            <label for="title" class="form-label">ชื่อบทความ</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
        </div>
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="content" class="form-label my-2">เนื้อหา</label>
            <textarea class="form-control" id="content" name="content" cols="30" rows="5">{{ $blog->content }}</textarea>
        </div>
        @error('content')
            <p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group my-3">
            <label class="form-label d-block">สถานะการแสดงผล</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status_active" value="1" {{ $blog->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_active">เผยแพร่</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status" id="status_inactive" value="0" {{ !$blog->status ? 'checked' : '' }}>
                <label class="form-check-label" for="status_inactive">ไม่เผยแพร่</label>
            </div>
        </div>
        <input type="submit" class="btn btn-primary my-3" value="อัปเดต">
        <a href="{{ route('blogs') }}" class="btn btn-secondary my-3">บทความทั้งหมด</a>
    </form>
@endsection
