<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    //

    public function adminDashboard()
    {

        $profile = User::where('email', Auth::user()->email)->first();
        $cats = Cat::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->get();
        $products = Product::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->paginate(5);
        return view('adminDashboard')->with('profile', $profile)->with('cats', $cats)->with('products', $products);
    }

    public function editProfile(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);

        $profile = User::where('id','=',$id)->first();
        $profile->name = $request->input('name');
        $profile->email = $request->input('email');
        $profile->phone = $request->input('phone');
        $profile->save();
        return redirect()->route('adminDashboardShow')->with('message', 'Profile Info Updated Successfully added successfully');

    }

    public function submitCategory(Request $request)
    {
        $request->validate([
            'categories' => ['required', 'string'],
            'backgroundurl' => ['required', 'string'],
        ]);

        $cat = new Cat();
        $cat->categories = $request->input('categories');
        $cat->backgroundurl = $request->input('backgroundurl');
        $cat->seller = Auth::user()->username;
        $cat->save();
        return redirect()->route('adminDashboardShow')->with('message', 'Category added successfully');
    }

    public function addCategory()
    {
        return view('selleradmin.addcategory');
    }

    public function addProduct()
    {
        $cats = Cat::all();
        return view('selleradmin.addproduct')->with('cats', $cats);
    }

    public function submitProduct(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'categories' => ['required', 'string'],
            'subcategories' => ['required', 'string'],
            'quantity' => ['required', 'numeric'],
            'color' => ['required', 'string'],
            'tag' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'imageone' => ['required', 'string'],
            'imagetwo' => ['required', 'string'],
            'imagethree' => ['required', 'string'],
            'imagefour' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string'],
            'size' => ['required', 'string'],
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->categories = $request->input('categories');
        $product->subcategories = $request->input('subcategories');
        $product->color = $request->input('color');
        $product->tag = $request->input('tag');
        $product->brand = $request->input('brand');
        $product->imageone = $request->input('imageone');
        $product->imagetwo = $request->input('imagetwo');
        $product->imagethree = $request->input('imagethree');
        $product->imagefour = $request->input('imagefour');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->size = $request->input('size');
        $product->filter = "none";
        $product->seller = Auth::user()->username;
        $product->save();
        return redirect()->route('adminDashboardShow')->with('message', 'Product added successfully');
    }


    public function generalUserDashboard()
    {
        $user = Auth::user();
        $orders = Order::where('buyer_id','=',$user->id)->get(); // Retrieve the orders for the authenticated user

        return view('generalUserDashboard', compact('user', 'orders'));
    }



    //super admin contollers
    public function superAdminDashboard()
    {
        $profile = User::where('email', Auth::user()->email)->first();
        $usersellers = User::where('type', 1)->get();
        $cats = Cat::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->get();
        $idNo= Auth::user();
        $products = Product::all();

        return view('superAdminDashboard')->with('profile', $profile)->with('cats', $cats)->with('products', $products)->with('sellers', $usersellers)->with('superId', $idNo);

    }

    public function addSellerPage()
    {
        $profile = User::where('email', Auth::user()->email)->first();
        $usersellers = User::where('type', 0)->get();
        $cats = Cat::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->get();
        $products = Product::all();


        return view('superadmin.addseller')->with('profile', $profile)->with('cats', $cats)->with('products', $products)->with('sellers', $usersellers);

    }

    public function addSeller(Request $request){
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'username' => ['required', 'string'],
        ]);


        $data = [
            'name' =>$request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'type' => 1,
            'phone' => $request->input('phone'),
            'username' => $request->input('username'),
        ];

        User::create($data);
        return redirect()->route('superAdminDashboardShow')->with('message', 'Seller added successfully');
    }

    public function editSellerPage($id)
    {
        $userseller = User::where('id', $id)->get();
        //dd($userseller);
        return view('superadmin.editseller',['seller'=> $userseller]);
    }
    public function editSeller(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'username' => ['required', 'string'],
        ]);

        $updatedData=[
            'name' =>$request->input('name'),
            'email' => $request->input('email'),
            'password' =>  Hash::make($request->password),
            'type' => 1,
            'phone' => $request->input('phone'),
            'username' => $request->input('username'),];

         $userupdate=User::where('id', $id);
        $userupdate->update($updatedData);

        //dd($userseller);
        return redirect()->route('superAdminDashboardShow')->with('message', 'Seller updated successfully');
    }

    public function deleteSeller($id){
        User::where('id', $id)->delete();

        //dd($userseller);
        return redirect()->route('superAdminDashboardShow')->with('message', 'Seller deleted successfully');
    }
    public function addSuperProduct()
    {
        $cats = Cat::all();
        return view('superadmin.addproduct')->with('cats', $cats);
    }

    public function submitSupperProduct(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'categories' => ['required', 'string'],
            'subcategories' => ['required', 'string'],
            'quantity' => ['required', 'numeric'],
            'color' => ['required', 'string'],
            'tag' => ['required', 'string'],
            'brand' => ['required', 'string'],
            'imageone' => ['required', 'string'],
            'imagetwo' => ['required', 'string'],
            'imagethree' => ['required', 'string'],
            'imagefour' => ['required', 'string'],
            'description' => ['required', 'string'],
            'price' => ['required', 'string'],
            'size' => ['required', 'string'],
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->categories = $request->input('categories');
        $product->subcategories = $request->input('subcategories');
        $product->color = $request->input('color');
        $product->tag = $request->input('tag');
        $product->brand = $request->input('brand');
        $product->imageone = $request->input('imageone');
        $product->imagetwo = $request->input('imagetwo');
        $product->imagethree = $request->input('imagethree');
        $product->imagefour = $request->input('imagefour');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->size = $request->input('size');
        $product->filter = "none";
        $product->seller = Auth::user()->username;
        $product->save();
        return redirect()->route('superAdminDashboardShow')->with('message', 'Product added successfully');
    }


    public function deletesuperProduct($id){
        Product::where('id', $id)->delete();

        //dd($userseller);
        return redirect()->route('superAdminDashboardShow')->with('message', 'Product deleted successfully');
    }
    public function editsuperadmin($id){

        $user = User::where('id', $id)->get();

        return view('superadmin.editsuperadmin',['seller'=> $user]);
    }

    public function editsuperadmindeds(Request $request,$id){
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'username' => ['required', 'string'],
        ]);

        $updatedData=[
            'name' =>$request->input('name'),
            'email' => $request->input('email'),
            'password' =>  Hash::make($request->password),
            'type' => 2,
            'phone' => $request->input('phone'),
            'username' => $request->input('username'),];

        $superupdate=User::where('id', $id);
        $superupdate->update($updatedData);


        return redirect()->route('superAdminDashboardShow')->with('message', 'Super admin updated successfully');
    }
}
