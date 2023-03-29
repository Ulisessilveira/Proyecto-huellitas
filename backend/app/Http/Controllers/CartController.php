<?php

namespace App\Http\Controllers;

use App\Models\Cart_product;
use Illuminate\Http\Request;
use Validator;

class CartController extends Controller
{
    //Agregar cosos al carrito
    public function store(Request $request){
        $reglas=Validator::make($request->all(),[
            'id_user'=>'required',
            'id_product'=>'required',
            'quantity'=>'required'
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $cart = new Cart_product();
            $cart->id_user = $request->id_user;
            $cart->id_product = $request->id_product;
            $cart->quantity = $request->quantity;
            $cart->save();
            return response()->json([
                'status'=>'success',
                'message'=>$cart
            ]);
        }
    }

    //Quitar cosos del carrito
    public function destroy($id){
        if(Cart_product::where('id',$id)->exists()){
            $cart_product = Cart_product::find($id);
            $cart_product->delete();
            return response()->json([
                'status'=>'success',
                'message'=>'Cart product deleted'
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'Cart product not found'
            ],201);
        }
    }
}
