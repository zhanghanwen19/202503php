<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(): Factory|Application|View
    {
        $data = [
            'name' => 'Laravel',
            'version' => '12.x',
            'author' => 'Taylor Otwell',
        ];

        $author = 'Zhang Hanwen';

        $categories = Categories::paginate($this->perPage);

        // 查询构建器
//         $categories = \DB::table('categories')
//             ->select('id', 'name')
//             ->where('name', 'like', 'c%')
//             ->orderBy('id', 'desc')
//             ->paginate($this->perPage);

        // order 表中有一个 status 字段用来标识订单的状态, 1 已下单, 2 已支付, 3 已发货, 4 已完成, 5 已取消
        // ->whereIn('status', [2, 3, 4])

        // ->leftJoin('users', 'users.id', '=', 'orders.user_id')

//         $products = \DB::table('products')
//             ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
//             ->select('products.id', 'products.name AS product_name', 'categories.name AS category_name')
//             ->orderBy('id', 'desc')
//             ->paginate($this->perPage);
//
//         dd($products);

        // Eloquent ORM 基础
        // $user->orders;

        // 获取单个 category 然后像面向对象修改对象属性一样来修改实际的数据
        // $category = Categories::find(1);
        // if ($category) {
        //     $category->name = '家用电器';
        //     $category->save();
        // }

        // $category->delete();

        // $newCategory = new Categories();
        // $newCategory->name = '家用电器';
        // $newCategory->save();

        // 运行 php artisan migrate:fresh --seed

        // create_time create_time
        // const CREATED_AT = 'create_time';
        // const UPDATED_AT = 'create_time';

         $products = Products::all(); // 得到的是一个集合对象, 里面是多个模型对象
//        $products = Products::where('id', '<', 100)
//            ->orderBy('id', 'desc')
//            ->get();
//        $products = Products::findMany([1, 2, 3]);

        // $product = Products::find(1); // 返回的是一个模型对象, 如果没有找到就返回 null
        // $product = Products::findOrFail(1); // 如果没有找到(例如 id 改成 100000)就抛出异常, 404 页面
        // $product = Products::first(); // 返回的是第一个模型对象, 如果没有找到就返回 null
        // $product = Products::firstOrFail(); // 如果没有找到就抛出异常, 404 页面
        // $product = Products::firstWhere('id', '>', '50'); // 返回的是第一个模型对象, 如果没有找到就返回 null
        // dd($product->toArray());
        // echo $product->toJson();
        // die;
//        $productCount = Products::count(); // 返回的是一个整数, 统计表中有多少条数据
        // dd($productCount);

        // 测试软删除
//         $product = Products::find(1);
//         $product->delete(); // 数据库中数据没有删除, 只是标记为已删除

        $product = Products::find(2);
        $product->price = 999;
        $product->save();

        $html = '<h1 class="text-4xl">Hello World</h1>';

        // session()->flash('success', 'This is a flash message!');

        return view('test.index', compact('data', 'author', 'categories', 'html'));
    }
}
