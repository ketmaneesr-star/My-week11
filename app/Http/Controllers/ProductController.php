<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
        return view('products', compact('products'));
    }

    public function changeStatus($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if ($product) {
            $newStatus = !$product->status;
            DB::table('products')->where('id', $id)->update([
                'status' => $newStatus,
                'updated_at' => now()
            ]);
        }
        return redirect('/products')->with('success', 'สลับสถานะสินค้าเรียบร้อยแล้ว');
    }

    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first();
        if (!$product) {
            return redirect('/products')->with('error', 'ไม่พบสินค้าที่ต้องการแก้ไข');
        }
        return view('edit-product', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            'detail' => 'required',
        ], [
            'name.required' => 'กรุณากรอกชื่อสินค้า',
            'name.max' => 'ชื่อสินค้าต้องไม่เกิน 255 ตัวอักษร',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.numeric' => 'ราคาสินค้าต้องเป็นตัวเลขเท่านั้น',
            'price.min' => 'ราคาสินค้าต้องไม่ต่ำกว่า 0',
            'detail.required' => 'กรุณากรอกรายละเอียดสินค้า',
        ]);

        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'detail' => $request->detail,
            'updated_at' => now()
        ];

        DB::table('products')->where('id', $id)->update($data);

        return redirect('/products')->with('success', 'ปรับปรุงข้อมูลสินค้าเรียบร้อยแล้ว');
    }
}
