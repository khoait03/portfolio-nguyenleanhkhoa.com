<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        // Nhận từ khóa tìm kiếm từ request
        $search = $request->input('tim-kiem');

        $categories = ProductCategory::where('status', 1)->get();


        // Lấy danh sách sản phẩm, nếu có từ khóa tìm kiếm thì lọc theo từ khóa
        $products = Product::where('status', 1)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->paginate(12);

        $data = [
            'categories' => $categories,
            'products' => $products,
            'search' => $search,
        ];

        return view('client.products.index', $data);
    }

    public function detail($slug) : View
    {
        //Danh sách sản phẩm
        $product = Product::where('slug', $slug)->where('status', 1)->first();

        if(!$product) {
            abort(404);
        }

        //Sp tương tự
        $product_similars = Product::where('category_id', $product->category_id)
                                ->where('status', 1)
                                ->where('id', '!=', $product->id)
                                ->get();

        $data = [
            'product' => $product,
            'product_similars' => $product_similars
        ];

        return view('client.products.detail', $data);
    }


    public function product_by_category($slug, Request $request)
    {
        // Nhận từ khóa tìm kiếm từ request
        $search = $request->input('tim-kiem');

        // Lấy danh mục sản phẩm theo slug
        $category = ProductCategory::where('slug', $slug)->first();

        // Lấy tất cả các danh mục có trạng thái 1
        $categories = ProductCategory::where('status', 1)->get();

        // Lấy danh sách sản phẩm, lọc theo danh mục và từ khóa tìm kiếm
        $products = Product::where('status', 1)
            ->where('category_id', $category->id)
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->paginate(12);

        $currentCategory = ProductCategory::where('slug', $slug)->first();

        // Dữ liệu để trả về view
        $data = [
            'categories' => $categories,
            'products' => $products,
            'search' => $search,
            'currentCategory' => $currentCategory,
        ];

        return view('client.products.index', $data);
    }
}
