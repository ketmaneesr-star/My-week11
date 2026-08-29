@extends('layout')

@section('title', 'จัดการข้อมูลสินค้า')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white border-0 py-4 d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="mb-1 fw-bold text-dark">ระบบคลังสินค้า</h3>
                    <p class="mb-0 text-muted small">อัปเดต ตรวจสอบข้อมูล และจัดการสถานะพร้อมจำหน่ายของสินค้า</p>
                </div>
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold fs-6">
                    ทั้งหมด {{ count($products) }} รายการ
                </span>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light border-0">
                            <tr>
                                <th class="py-3 px-4 text-secondary text-uppercase font-monospace" style="width: 80px; font-size: 0.85rem;">รหัส</th>
                                <th class="py-3 text-secondary text-uppercase" style="font-size: 0.85rem;">ชื่อสินค้า</th>
                                <th class="py-3 text-secondary text-uppercase" style="width: 150px; font-size: 0.85rem;">ราคา</th>
                                <th class="py-3 text-secondary text-uppercase" style="font-size: 0.85rem;">รายละเอียดสินค้า</th>
                                <th class="py-3 text-center text-secondary text-uppercase" style="width: 200px; font-size: 0.85rem;">สถานะคลังสินค้า</th>
                                <th class="py-3 text-center text-secondary text-uppercase" style="width: 150px; font-size: 0.85rem;">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody class="border-top-0">
                            @forelse ($products as $index => $product)
                                <tr>
                                    <td class="px-4 font-monospace fw-bold text-muted">#{{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-primary-subtle text-primary rounded-3 p-2 me-3 d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
                                                    <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="mb-0 fw-semibold text-dark">{{ $product->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="fs-6 fw-bold text-dark">฿{{ number_format($product->price, 2) }}</span>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-secondary text-truncate" style="max-width: 280px;" title="{{ $product->detail }}">
                                            {{ $product->detail }}
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        @if ($product->status)
                                            <a href="{{ route('products.change', $product->id) }}" class="btn btn-success-subtle text-success border border-success-subtle btn-sm px-3 rounded-pill fw-medium py-1">
                                                <span class="d-inline-block bg-success rounded-circle me-1" style="width: 6px; height: 6px;"></span>
                                                พร้อมวางขาย
                                            </a>
                                        @else
                                            <a href="{{ route('products.change', $product->id) }}" class="btn btn-danger-subtle text-danger border border-danger-subtle btn-sm px-3 rounded-pill fw-medium py-1">
                                                <span class="d-inline-block bg-danger rounded-circle me-1" style="width: 6px; height: 6px;"></span>
                                                ระงับการขาย
                                            </a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-light btn-sm px-3 border rounded-pill fw-medium hover-shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-square me-1" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                            </svg>
                                            แก้ไข
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">
                                        <p class="mb-0">ไม่มีข้อมูลสินค้าในระบบ</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Premium style improvements */
    .btn-success-subtle {
        background-color: #d1e7dd !important;
    }
    .btn-danger-subtle {
        background-color: #f8d7da !important;
    }
    .btn-success-subtle:hover {
        background-color: #badbcc !important;
    }
    .btn-danger-subtle:hover {
        background-color: #f5c2c7 !important;
    }
    .hover-shadow:hover {
        background-color: #f8f9fa;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }
    .table-hover tbody tr:hover {
        background-color: #fafbfd;
    }
</style>
@endsection
