@extends('layout')

@section('title', "เกี่ยวกับเรา")

@section('content')
<h2>เกี่ยวกับเรา</h2>
<hr>
<p>ผู้พัฒนาระบบ : <?php echo $name; ?> <br>
    รหัสนักศึกษา : <?php echo $studentCode; ?> <br>
    สาขาที่เรียน : <?php echo $branch; ?> <br>
    ห้องเรียน : <?php echo $class; ?> <br>
</p>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem eveniet, quis odit architecto illum dicta
    earum totam aliquam id, corrupti consectetur delectus corporis sapiente minus. Amet optio inventore ipsa ut!
</p>
@endsection