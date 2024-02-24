<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use Image;
use File;

class ProductController extends Controller
{
    public function index(){
        $product = Product::orderBy('created_at','desc')->Paginate();
        return view('admin.product.index',compact('product'));

    }

    public function create(){
        return view('admin.product.create');
    }
    public function insert(Request $request){

        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'image' => 'mimes:jpg,bmp,png',
        ],[
            'name.required' => 'กรุณากรอกชื่อสินค้า',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'price.required' => 'กรุณากรอกราคาสินค้า',
            'price.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'description.required' => 'กรุณากรอกรายละเอียดสินค้า',
            'description.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร',
            'image.mimes' => 'อัพดหลดได้เฉพาะไฟล์นามสกุล .jpg , .png , .jpeg',
            
        ]);
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
 
        if($request->hasFile('image')){
            $filename = Str::random(10). '.'
            .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(
                public_path().'/backend/upload/',$filename);
            Image::make(public_path().'/backend/upload/'
            .$filename)->resize(250,250)->save(public_path().
            '/backend/upload/resize/'.$filename);
            $product->image = $filename;
 
        }else{
            $product->image = 'nopic.jpg';
        }
        alert()->success('บันทึกข้อมูลสำเร็จ','ข้อมูลได้ถูกบันทึกแล้ว');

        $product->save();
        return redirect('admin/product/index');
 
    }
    public function delete($id){
        $product = Product::find($id);
        if($product->image != 'nopic.jpg'){
            File::delete(public_path().'/backend/upload/'.$product->image);
            File::delete(public_path().'/backend/upload/resize/'.$product->image);
        }
        alert()->success('ลบขอมูลสำเร็จ','ลบข้อมูลแล้ว');
        $product->delete();
        return redirect('admin/product/index');

    }
    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            
            'image' => 'mimes:jpg,bmp,png',
        ],[
            
            'image.mimes' => 'อัพดหลดได้เฉพาะไฟล์นามสกุล .jpg , .png , .jpeg',
            
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
 
        if($request->hasFile('image')){
            if($product->image != 'nopic.jpg'){
                File::delete(public_path().'/backend/upload/'.$product->image);
                File::delete(public_path().'/backend/upload/resize/'.$product->image);
            }

            $filename = Str::random(10). '.'
            .$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(
                public_path().'/backend/upload/',$filename);
            Image::make(public_path().'/backend/upload/'
            .$filename)->resize(500,500)->save(public_path().
            '/backend/upload/resize/'.$filename);
            $product->image = $filename;
        }
        alert()->success('แก้ไขข้อมูลสำเร็จ','ข้อมูลได้ถูกแก้ไขแล้ว');
        $product->update();
        return redirect('admin/product/index');
    }
}
