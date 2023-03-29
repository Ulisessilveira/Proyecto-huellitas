<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Like;
use App\Models\Product;
use App\Models\Product_media;
use App\Models\Question;
use App\Models\Review;
use Illuminate\Http\Request;
use Validator;

class CategorysController extends Controller
{
    //Ver todos las categorias
    public function index(){
        $datos = Category::all();
        return response()->json([
            'status'=>'success',
            'data'=>$datos
        ]);
    }//Fin de index

    //Ver categorias por id
    public function show($id){
        if(Category::where('id',$id)->exists()){
            $category = Category::find($id);
            return response()->json([
                'status'=>'success',
                'data'=>$category
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'Category not found'
            ],201);
        }
    }//fin de show

    //Crear categoria
    public function store(Request $request){
        $reglas=Validator::make($request->all(),[
            'name'=>'required|min:2',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $category = new Category();
            $category->name = $request->name;
            $category->save();
            return response()->json([
                'status'=>'success',
                'message'=>$category
            ]);
        }
    }//Fin de store

    //Actualizar categoria
    public function update(Request $request,$id){
        if(!Category::where('id',$id)->exists()){
            return response()->json([
                'status'=>'error',
                'message'=>'Category not found'
            ],201);
        }
        $reglas=Validator::make($request->all(),[
            'name'=>'required|min:2',
        ]);
        if($reglas->fails()){
            return response()->json([
                'status'=>'error',
                'message'=>'Todo imbecil(Validator Error)',
                'data'=>$reglas->errors()
            ],201);
        }else{
            $category = Category::find($id);
            $category->name = $request->name;
            $category->save();
            return response()->json([
                'status'=>'success',
                'message'=>$category
            ]);
        }
    }//Fin de update

    //Borrar categoria
    public function destroy($id){
        if(Category::where('id',$id)->exists()){
            $category = Category::find($id);
            Product::where('id_category',$id)->delete();
            $media = Product_media::where('id_product',$id);
            $like = Like::where('id_product',$id);
            $review = Review::where('id_product',$id);
            $question = Question::where('id_product',$id);
            $media->delete();
            $like->delete();
            $review->delete();
            $question->delete();
            $category->delete();
            return response()->json([
                'status'=>'success',
                'message'=>'category deleted'
            ],200);
        }else{
            return response()->json([
                'status'=>'error',
                'message'=>'Category not found'
            ],201);
        }
    }//Fin de destroy
}
