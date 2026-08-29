@extends('layout')

@section('title', 'แก้ไขข้อมูลสินค้า')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-4">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-primary-subtle text-primary rounded-3 p-2.5 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="mb-0 fw-bold text-dark">แก้ไขข้อมูลสินค้า</h4>
                        <p class="mb-0 text-muted small">รหัสสินค้าอ้างอิง: #{{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }}</p>
                    </div>
                </div>
            </div>
            <hr class="my-0 opacity-10">
            <div class="card-body p-4">
                <form method="POST" action="{{ route('products.update', $product->id) }}">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold text-secondary">ชื่อสินค้า</label>
                        <input type="text" class="form-control py-2.5 px-3 rounded-3 @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $product->name) }}" placeholder="กรอกชื่อสินค้า">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label fw-semibold text-secondary">ราคาสินค้า (บาท)</label>
                        <div class="input-group">
                            <span class="input-group-text rounded-start-3 bg-light text-secondary">฿</span>
                            <input type="text" class="form-control py-2.5 px-3 rounded-end-3 @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $product->price) }}" placeholder="0.00">
                            @error('price')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="detail" class="form-label fw-semibold text-secondary">รายละเอียดสินค้า</label>
                        <textarea class="form-control py-2.5 px-3 rounded-3 @error('detail') is-invalid @enderror" id="detail" name="detail" rows="5" placeholder="กรอกรายละเอียดเฉพาะหรือสรรพคุณสินค้า...">{{ old('detail', $product->detail) }}</textarea>
                        @error('detail')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2 justify-content-end">
                        <a href="{{ route('products.index') }}" class="btn btn-light border py-2.5 px-4 rounded-pill fw-semibold hover-shadow">
                            ยกเลิก
                        </a>
                        <button type="submit" class="btn btn-primary py-2.5 px-4 rounded-pill fw-semibold shadow-sm">
                            บันทึกการแก้ไข
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
    }
    .input-group-text {
        border-right: 0;
    }
    .input-group .form-control {
        border-left: 0;
    }
    .input-group .form-control:focus {
        border-left: 1px solid #0d6efd;
    }
    .p-2.5 {
        padding: 0.65rem !important;
    }
</style>
@endsection
