<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = Auth::user();

        if ($user) {

            $usercart = new Cart();
//            $usercart->user_id = $user->id();
            $usercart->name = 'Sample Product1';
            $usercart->identity = '1';
            $usercart->quantity = '2';
            $usercart->size = 'S';
            $usercart->color = 'Red';
            $usercart->save();


            $usercart1 = new Cart();
           // $usercart1->user_id =  $user->id();
            $usercart1->name = 'Sample Product1';
            $usercart1->identity = '4';
            $usercart1->quantity = '5';
            $usercart1->size = 'S';
            $usercart1->color = 'Blue';
            $usercart1->save();

            $usercart3 = new Cart();
          //  $usercart3->user_id =  $user->id();
            $usercart3->name = 'Sample Product3';
            $usercart3->identity = '3';
            $usercart3->quantity = '10';
            $usercart3->size = 'Xl';
            $usercart3->color = 'White';
            $usercart3->save();

        }


    }


}
