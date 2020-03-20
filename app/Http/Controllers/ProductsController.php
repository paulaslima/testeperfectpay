<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $productModel=app(Product::class);
        $products=$productModel->all(); 

        return view ('clientes.index',compact('products'));
  
      }

    public function create(){
        return view ('clientes.create');

    }

    public function store(Request $request){
        $data = $request->all();
        $productModel=app(Product::class);
        $products=$productModel->create([
            'name'=> $data['name'],
            'description'=> $data['description'],
            'price'=> $data['price'],
        ]);

        return redirect()->route('customer.index');
        
    }
        
    public function destroy($id)
    {
        if(!empty($id)){
            $productModel=app(Product::class);
            $products=$productModel->find($id);
            if(!empty($product)){
                $product->delete();
                return response()->json([
                    'status'  => 'success',
                    'message' => 'Cliente deletado com sucesso.',
                    'reload'  => true,
                ]);
            }
            else{
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Cliente não encontrado.',
                    'reload'  => true,
                ]);
            }
            

        }
        else{
            return response()->json([
                'status'  => 'error',
                'message' => 'ID não está na requisição',
                'reload'  => true,
            ]);

        }
    }

        public function edit($id){
            $productModel=app(Product::class);
            $products=$productModel->find($id);
            return view('clientes/edit',compact('customers'));
        }

        public function update(Request $request,$id){
            $data = $request->all();
            $productModel=app(Product::class);
            $products=$productModel->find($id);
            $customer->update([
                'name'=> $data['name'],
                'description'=> $data['description'],
                'price'=> $data['price'],
            ]);
            return redirect()->route('customer.index');
        }
}
