@extends('layout')

@section('title', 'บทความ')

@section('content')
    <div class="d-flex justify-content-between align-items-center my-5">
        <h2>บทความทั้งหมด</h2>
        <a href="/create" class="btn btn-primary">เขียนบทความใหม่</a>
    </div>
    @if (count($blogs) > 0)
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">รายละเอียด</th>
                    <th scope="col">สถานะ</th>
                    <th scope="col">แก้ไขบทความ</th>
                    <th scope="col">ลบบทความ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ Str::limit($item->content, 10) }}</td>
                        <td>
                            @if ($item->status)
                                <a href="{{ route('change', $item->id) }}" class="btn btn-outline-success">เผยแพร่</a>
                            @else
                                <a href="{{ route('change', $item->id) }}" class="btn btn-outline-danger">ไม่เผยแพร่</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-primary">แก้ไขบทความ</a>
                        </td>
                        <td>
                            <a href="/blogs/delete/{{ $item->id }}" class="btn btn-danger"
                                onclick="return confirm('คุณต้องการลบบทความนี้จริงหรือไม่?')">ลบ</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $blogs->links() }}
    @else
        <div class="alert alert-warning text-center" role="alert">
            ไม่มีบทความ
        </div>
    @endif
@endsection
