<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;

class SalesController extends Controller
{
    public function index() {
        $saleModel=app(Sale::class);
        $sales=$saleModel->all(); 

        return view ('vendas.index',compact('sales'));
  
      }

    public function create(){
        return view ('vendas.edit');

    }

        
   
        
    public function edit($id){
        $saleModel=app(Sale::class);
        $sales=$saleModel->find($id);
        return view('vendas/edit',compact('sales'));
    }

        public function update(Request $request,$id){
            $data = $request->all();
            $saleModel=app(Sale::class);
            $sales=$saleModel->find($id);
            $sale->update([
                'quantity',
                'discout',
                'sale_amount',
                'status',
            ]);
            return redirect()->route('sale.index');
        }



}




