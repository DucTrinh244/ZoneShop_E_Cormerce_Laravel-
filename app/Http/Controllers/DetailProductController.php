<?php

namespace App\Http\Controllers;

use App\Models\Attributes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Models\Brand_Product;
use App\Models\Category_Product;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class DetailProductController extends Controller
{
    // public function Show_Detail_Product($category_id)
    // {
    //     $category = Category_Product::with('attributes')->where('category_id', $category_id)->first();

    //     return view('admin.product.detail.all_detail', compact('category'));
    // }
    public function Show_Detail_Product()
    {
        $products = Product::all();
        $product_count = Product::count();
        $categories = Category_Product::all();
        $brands = Brand_Product::all();

        return view('admin.product.detail.all_detail', compact(
            'products',
            'product_count',
            'categories',
            'brands'
        ));
    }


    public function Add_Detail_Product($product_id)
    {
        $Product = Product::with(['category'])->where('product_id', $product_id)->first();
        if ($Product) {
            $category = Category_Product::with('attributes')->where('category_id', $Product->category_id)->first();
            return view('admin.product.detail.add_detail', compact('category', 'Product'));
        } else {
            return redirect()->back()->with('error', 'Product not found');
        }
    }

    public function Edit_Attribute_Product($category_id)
    {

        return view('admin.product.detail.edit_detail');
    }
    public function Add_detail_action(Request $request)
    {
        $checklistAttributes = $request->attribute_name;
        if ($checklistAttributes) {
            $result = validateAttributesText($checklistAttributes);
            if (is_string($result)) {
                $data = new Attributes();
                $data->category_id = $request->category_id;
                $data->attribute_name = $result;
                $data->save();
                Session::flash('success', 'Add Attributes Successfully!');
                return redirect('add-attribute-product');
            } else if ($result !== false) {
                foreach ($result as $key) {
                    $data = new Attributes();
                    $data->category_id = $request->category_id;
                    $data->attribute_name = $key;
                    $data->save();
                }
                Session::flash('success', 'Add Attributes Successfully!');
                return redirect('add-attribute-product');
            } else {
                return redirect('add-attribute-product')->withInput(); // Trả về với input đã nhập
            }
        } else {
            Session::flash('error', 'Please provide attributes.');
            return redirect('add-attribute-product')->withInput(); // Trả về với input đã nhập
        }
    }

    public function search(Request $request)
    {
        $output = "";
        $products = Product::where('product_name', 'Like', '%' . $request->search . '%')
            ->orWhere('product_price_selling', 'Like', '%' . $request->search . '%')
            ->get();


        $output = view('components.detail_product', compact('products'))->render();
        // if ($products->isEmpty()) {
        //     $output .= '<h4 class="text-center">No products found</h4>';
        // } else {
        //     foreach ($products as $product) {
        //         $output .= '<div class="col-md-6 col-xl-4">
        //                         <div class="card">
        //                             <img src="' . asset($product->product_image) . '" alt="' . $product->product_name . '" class="img-fluid">
        //                             <div class="card-body bg-light-subtle rounded-bottom">
        //                                 <a href="" class="text-dark fw-medium fs-16">
        //                                     ' . $product->product_name . '</a>
        //                                 <h4 class="fw-semibold text-dark mt-2 d-flex align-items-center gap-2">
        //                                     <span class="text-muted text-decoration-line-through">
        //                                         $' . number_format($product->product_price_original, 2) . ' 
        //                                     </span>
        //                                     $' . number_format($product->product_price_selling, 2) . ' 
        //                                     <small class="text-muted">
        //                                         ( ' . number_format((($product->product_price_original - $product->product_price_selling) / $product->product_price_original) * 100, 0) . ' Off)
        //                                     </small>
        //                                 </h4>
        //                                 <div class="mt-3">
        //                                     <div class="d-flex gap-2">
        //                                         <div class="dropdown">
        //                                             <a href="#"
        //                                                 class="btn btn-soft-primary border border-primary-subtle"
        //                                                 data-bs-toggle="dropdown" aria-expanded="false"><i
        //                                                     class="bx bx-dots-horizontal-rounded"></i></a>
        //                                             <div class="dropdown-menu">
        //                                                 <!-- item-->
        //                                                 <a href="#!" class="dropdown-item">Edit</a>
        //                                                 <!-- item-->
        //                                                 <a href="#!" class="dropdown-item">Overview</a>
        //                                                 <!-- item-->
        //                                                 <a href="#!" class="dropdown-item">Delete</a>
        //                                             </div>
        //                                         </div>
        //                                         <a href=""
        //                                             class="btn btn-outline-dark border border-secondary-subtle d-flex align-items-center justify-content-center gap-1 w-100">
        //                                             Add To Cart</a>
        //                                     </div>
        //                                 </div>
        //                             </div>
        //                             <span class="position-absolute top-0 end-0 p-3">
        //                                 <button type="button"
        //                                     class="btn btn-soft-danger avatar-sm d-inline-flex align-items-center justify-content-center fs-20 rounded-circle"><iconify-icon
        //                                         icon="solar:heart-broken"></iconify-icon></button>
        //                             </span>
        //                         </div>
        //                     </div>';
        //     }
        // }
        return response($output);
    }
    public function getData(Request $request)
    {
        // dd($request->all());
        $query = Product::where('product_status', 1);


        if ($request->filled(['minCost', 'maxCost'])) {
            $query->whereBetween('product_price_selling', [
                $request->input('minCost'),
                $request->input('maxCost')
            ]);
        }
        if ($request->has('category')) {
            $query->whereIn('category_id', $request->input('category'));
        }

        if ($request->has('brand')) {
            $query->whereIn('brand_id', $request->input('brand'));
        }

        $products = $query->get();
        $output = view('components.detail_product', compact('products'))->render();

        return response()->json(['output' => $output]); // Trả về JSON
    }
    public function Product_Details($product_id)
    {
        $product_item = Product::where('product_id', $product_id)->first();
        return view('admin.product.detail.product_details', compact('product_item'));
    }
}
