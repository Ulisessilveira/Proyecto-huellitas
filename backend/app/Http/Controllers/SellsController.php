<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use App\Models\Sell_item;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class SellsController extends Controller
{   
    //Hacer una venta sin login
    public function store(Request $request){
        $reglas=Validator::make($request->all(),[
            'name'=>'required|min:3',
            'ln'=>'required|min:3',
            'email'=>'required|email',
            'address'=>'required|min:4',
            'cp'=>'required',
            'reference'=>'required',
            'ln'=>'required',
            'phone'=>'required',
            'items'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Error',
                'data'=>$reglas->errors()
            ],201);
        }else{
            //VERIFICAR SI EXISTE EL USUARIO
            try{
                $user = User::where('email',$request->email)->first();
                if(is_null($user)){
                    $user = new User();
                    $user-> name = $request->name;
                    $user -> email = $request->email;
                    $user -> password = Hash::make($request->email);
                    $user -> phone = $request->phone;
                    $user -> img = "default.jpg";
                    $user -> address = $request->address;
                    $user->save();
                }//Llave null

                //Guardar venta
                $sell = new Sell();
                $sell->status = 'preparacion';
                $sell->ship_tax = 150.00;
                $sell->id_user = $user->id_user;
                $sell->save();

                //guardar productos de la venta
                foreach($request->items as $item){
                    $sell_item = new Sell_item();
                    $sell_item->price = $item['price'];
                    $sell_item->quantity = $item['cantidad'];
                    $sell_item->id_product = $item['id'];
                    $sell_item->id_sell = $sell->id;
                    $sell_item->save();
                }
                return response()->json([
                    'status'=>'success',
                    'sell'=>$sell,
                    'message'=>'Compra realizada :D'
                ],200);
            }catch(Exception $e){
                return response()->json([
                    'status'=>'error',
                    'message'=>'Todo imbecil(Validator Error)',
                    'data'=>$reglas->errors()
                ],201);
            }
        }
    }
    //Hacer una venta con login
    /*public function store2(Request $request){
        $reglas=Validator::make($request->all(),[
            'status'=>'required',
            'ship_tax'=>'required',
            'id_user'=>'required'
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $sell = new Sell();
            $sell->status = $request->status;
            $sell->ship_tax = $request->ship_tax;
            $sell->id_user = $request->id_user;
            $sell->save();
            foreach($request->products as $p){
                $sell_item = new Sell_item();
                $sell_item->price = $p['price'];
                $sell_item->quantity = $p['quantity'];
                $sell_item->id_product = $p['id_product'];
                $sell_item->id_sell = $sell->id;
                $sell_item->save();
            }
            return response()->json([
                'status'=>'success',
                'message'=>'Compra realizada :D'
            ]);
        }
    }*/
    //consultar una venta
    public function index(){
        $datos = Sell::select('sells.*','users.name as user_name')
        ->join('users','sells.id_user','=','users.id')
        ->get();
        $arr = [];
        foreach($datos as $s){
            $sell_item = Sell_item::select('sell_items.*','products.name as product_name')
            ->join('products','sell_items.id_product','=','products.id')
            ->where('id_sell',$s->id)
            ->get();
            $arr[]=[
                'sell'=>$s,
                'sell_items' => $sell_item
            ];
        }
        return response()->json([
            'status'=>'success',
            'data'=>$arr
        ]);
    }
    public function show($id){
        if(Sell::where('id',$id)->exists()){
            $sell = Sell::find($id)
            ->select('sells.*','users.name as user_name')
            ->join('users','sells.id_user','=','users.id')
            ->get();
            $arr = [];
            foreach($sell as $s){
                $sell_item = Sell_item::select('sell_items.*','products.name as product_name')
                ->join('products','sell_items.id_product','=','products.id')
                ->where('id_sell',$s->id)
                ->get();
                $arr[]=[
                    'sell'=>$s,
                    'sell_items' => $sell_item
                ];
            }
            return response()->json([
                'status'=>'success',
                'data'=>$arr
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'Sell not found'
            ],201);
        }
    }
}
