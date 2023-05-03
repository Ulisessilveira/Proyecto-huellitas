<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Product;
use App\Models\Product_media;
use App\Models\Question;
use App\Models\Review;
use Illuminate\Http\Request;
use Validator;

class ProductsController extends Controller
{
    //Ver todos los productos
    public function index(){
        $datos = Product::select('products.*','categorys.name as name_cate',
            'users.name as user_name','users.img as user_img')
        ->join('categorys','products.id_category','=','categorys.id')
        ->join('users','products.id_user','=','users.id')
        //->orderby('products.id','DESC')
        ->get();
        $arr = [];
        foreach($datos as $d){
            $media = Product_media::where('id_product',$d->id)->get();
            $likes = Like::where('id_product',$d->id)->get()->count();
            $review = Review::where('id_product',$d->id)->get();
            $question = Question::where('id_product',$d->id)
            ->select('questions.*','users.name as name_user','products.name as name_product')
            ->join('users','questions.id_user','=','users.id')
            ->join('products','questions.id_product','=','products.id')
            ->get();
            $arr[]=[
                'product'=>$d,
                'media' => $media,
                'likes'=>$likes,
                'review'=>$review,
                'questions'=>$question
            ];
        }
        return response()->json([
            'status'=>'success',
            'data'=>$arr
        ]);
    }

    //Dar like a un producto
    public function dolike(Request $request){
        $reglas=Validator::make($request->all(),[
            'id_user'=>'required',
            'id_product'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $like = new Like();
            $like->id_user = $request->id_user;
            $like->id_product = $request->id_product;
            $like->save();
            return response()->json([
                'status'=>'success',
                'message'=>'Like ok',
                'data'=>$like
            ],200);
        }
    }

    //Hacer pregunta para un producto
    public function addquestion(Request $request){
        $reglas=Validator::make($request->all(),[
            'question'=>'required',
            'id_user'=>'required',
            'id_product'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $question = new Question();
            $question->question = $request->question;
            $question->reply = "";
            $question->id_user = $request->id_user;
            $question->id_product = $request->id_product;
            $question->save();
            return response()->json([
                'status'=>'success',
                'message'=>'question ok',
                'data'=>$reglas->errors()
            ],200);
        }
    }

    //Contestar una pregunta
    public function reply(Request $request,$id){
        if(!Product::where('id',$id)->exists()){
            return response()->json([
                'status'=>'error',
                'message'=>'Product not found'
            ],201);
        }
        $reglas=Validator::make($request->all(),[
            'reply'=>'required|min:1'
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $question = Question::where('id_product',$id);
            //$question = Question::find($id);
            $question->reply = $request->reply;
            $question->save();
            return response()->json([
                'status'=>'success',
                'message'=>$question
            ]);
        }
    }

    //Hacer una review a un producto
    public function review(Request $request){
        $reglas=Validator::make($request->all(),[
            'calification'=>'required',
            'id_user'=>'required',
            'id_product'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $review = new Review();
            $review->calification = $request->calification;
            $review->id_user = $request->id_user;
            $review->id_product = $request->id_product;
            $review->save();
            return response()->json([
                'status'=>'success',
                'message'=>'review ok',
                'data'=>$review
            ],200);
        }
    }

    //agregar una imagen a un producto
    public function addimg(Request $request){
        $reglas=Validator::make($request->all(),[
            //'file'=>'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'file'=>'required|max:2048',
            'id_product'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $media = new Product_media();
            $media->file = $request->file;
            $media->id_product = $request->id_product;
            $media->save();
            return response()->json([
                'status'=>'success',
                'message'=>'Img ok',
                'data'=>$media
            ],200);
        }
    }

    //Mostrar producto por id
    public function show($id){
        if(Product::where('slug',$id)->exists()){
            $product = Product::where('slug',$id)->first();
            return response()->json([
                'status'=>'success',
                'data'=>$product
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'Product not found'
            ],201);
        }
    }

    //Agregar un producto
    public function store(Request $request){
        $reglas=Validator::make($request->all(),[
            'name'=>'required|min:2',
            'price'=>'required',
            'condition'=>'required',
            'description'=>'required|min:4',
            'ship'=>'required',
            'stock'=>'required',
            'size'=>'required',
            'status'=>'required',
            //'slug'=>'required',
            'id_category'=>'required',
            'id_user'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $product = new Product();
            $product->name = $request->name;
            $product->price = $request->price;
            $product->img = 'default_Product.jpg';
            $product->condition = $request->condition;
            $product->description = $request->description;
            $product->ship = $request->ship;
            $product->stock = $request->stock;
            $product->size = $request->size;
            $product->status = $request->status;
            //$product->slug = "";
            $product->id_category = $request->id_category;
            $product->id_user = $request->id_user;
            $product->save();
            return response()->json([
                'status'=>'success',
                'message'=>$product
            ]);
        }
    }

    //Actualizar un producto
    public function update(Request $request,$id){
        if(!Product::where('id',$id)->exists()){
            return response()->json([
                'status'=>'error',
                'message'=>'Product not found'
            ],201);
        }
        $reglas=Validator::make($request->all(),[
            'name'=>'required|min:2',
            'price'=>'required',
            'condition'=>'required',
            'description'=>'required|min:4',
            'ship'=>'required',
            'stock'=>'required',
            'size'=>'required',
            'status'=>'required',
            'slug'=>'required',
            'id_category'=>'required',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $product = Product::find($id);
            $product->name = $request->name;
            $product->price = $request->price;
            $product->condition = $request->condition;
            $product->description = $request->description;
            $product->ship = $request->ship;
            $product->stock = $request->stock;
            $product->size = $request->size;
            $product->status = $request->status;
            $product->slug = $request->slug;
            $product->id_category = $request->id_category;
            $product->save();
            return response()->json([
                'status'=>'success',
                'message'=>$product
            ]);
        }
    }

    //borrar un producto
    public function destroy($id){
        if(Product::where('id',$id)->exists()){
            $product = Product::find($id);
            $media = Product_media::where('id_product',$id);
            $like = Like::where('id_product',$id);
            $review = Review::where('id_product',$id);
            $question = Question::where('id_product',$id);
            $media->delete();
            $like->delete();
            $review->delete();
            $question->delete();
            $product->delete();
            return response()->json([
                'status'=>'success',
                'message'=>'product deleted'
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'Product not found'
            ],201);
        }
    }
}
