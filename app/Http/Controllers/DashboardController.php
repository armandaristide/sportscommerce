<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    // user controllers
    public function editUserProfilePage()
    {
        $user = Auth::user();
        return view('user.editprofile', ['user' => $user]);
    }

    public function editUserProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);

        $userId = Auth::id();

        $updatedData=[
            'name' =>$request->input('name'),
            'phone' => $request->input('phone'),];

        if ($request->filled('password')) {
            $updatedData['password'] = Hash::make($request->input('password'));
        }

        User::where('id', $userId)->update($updatedData);

        return redirect()->route('dashboard')->with('message', 'Profile updated successfully');

    }



    public function editProfile(Request $request,$id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);

        $profile = User::where('id','=',$id)->first();
        $profile->name = $request->input('name');
        $profile->phone = $request->input('phone');
        if ($request->input('password') != null) {
            $profile->password = Hash::make($request->input('password'));
            $profile->save();
            Auth::logout();
            return redirect()->route('adminLogin')->with('success', "Your Password has been updated");


        }
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

    public function editCategory($id)
    {
        $cat = Cat::where('id','=',$id)->first();
        return view('selleradmin.editcategory')->with('cat', $cat);
    }

    public function submitEditCategory(Request $request,$id)
    {
        $request->validate([
            'categories' => ['required', 'string'],
            'backgroundurl' => ['required', 'string'],
        ]);

        $cat = Cat::where('id','=',$id)->first();
        $cat->categories = $request->input('categories');
        $cat->backgroundurl = $request->input('backgroundurl');
        $cat->save();
        return redirect()->route('adminDashboardShow')->with('message', 'Category Edited successfully');
    }

    public function deleteCategory($id)
    {
        if ($id == 0){
            Product::truncate();
        }
        else{
            $item = Cat::find($id);
            $prodcats = Product::where('categories','=',$item->categories)->get();
            if (count($prodcats) > 0) {
                foreach ($prodcats as $prodcat) {
                    $prodcat->categories = "General";
                    $prodcat->save();
                }
            }
            $item->delete();
        }
        return redirect()->route('adminDashboardShow')->with('message', 'Category deleted successfully');
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

    public function editProduct($id)
    {
        $cats = Cat::all();
        $product = Product::where('id','=',$id)->first();
        return view('selleradmin.editproduct')->with('cats', $cats)->with('product', $product);
    }

    public function submitEditProduct(Request $request,$id)
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

        $product = Product::where('id','=',$id)->first();
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

        $product->save();

        return redirect()->route('adminDashboardShow')->with('message', 'Product Updated successfully');
    }
    public function deleteProduct($id)
    {
        if ($id == 0){
            Product::truncate();
        }
        else{
            $item = Product::find($id);
            $item->delete();
        }
        return redirect()->route('adminDashboardShow')->with('message', 'Product deleted successfully');
    }


    //super admin contollers
    public function superAdminDashboard()
    {
        $profile = User::where('email', Auth::user()->email)->first();
        $usersellers = User::where('type', 1)->get();
        $cats = Cat::where('seller', '=', Auth::user()->username)->Orderby('id', 'desc')->get();
        $idNo= Auth::user();
        $products = Product::paginate(5);
        $prods = Product::all();

        return view('superAdminDashboard')->with('profile', $profile)->with('cats', $cats)->with('products', $products)->with('sellers', $usersellers)->with('superId', $idNo)->with('prods', $prods);

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
            'phone' => ['required', 'string'],
        ]);

        $newinfo = User::where('id','=',$id)->first();
        $newinfo->name = $request->input('name');
        $newinfo->phone = $request->input('phone');
        if($request->password != null){
            $newinfo->password  =  Hash::make($request->password);
        }
        $newinfo->save();
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
        $user = User::where('id','=', $id)->first();

        return view('superadmin.editsuperadmin')->with('user',$user);
    }

    public function submitEditSuperAdmin(Request $request,$id){
        $request->validate([
            'name' => ['required', 'string'],
            'phone' => ['required', 'string'],
        ]);

        $newinfo = User::where('id','=',$id)->first();
        $newinfo->phone = $request->input('phone');
        $newinfo->name = $request->input('name');
        if ($request->password !=null){
            $newinfo->password =  Hash::make($request->password);
            $newinfo->save();
            Session::flush();
            Auth::logout();
            return redirect()->route('superAdminLogin')->with('success', "Your Password has been updated");
        }
        $newinfo->save();

        return redirect()->route('superAdminDashboardShow')->with('message', 'Super admin updated successfully');
    }
}
