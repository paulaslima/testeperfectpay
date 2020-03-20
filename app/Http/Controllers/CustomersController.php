<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;


class CustomersController extends Controller
{
    public function index() {
        $customerModel=app(Customer::class);
        $customers=$customerModel->all(); 

        return view ('clientes.index',compact('customers'));
  
      }

    public function create(){
        return view ('clientes.create');

    }

    public function store(Request $request){
        $data = $request->all();
        $customerModel = app(Customer::class);
        $customers = $customerModel->create([
            'name'=>$data['name'],
            'identification_type'=>$data['identification_type'],
            'identification_number'=>$data['identification_number'],
            'email'=>$data['email'],
        ]);

        return redirect()->route('customer.index');
        
    }
        
    public function destroy($id)
    {
        if(!empty($id)){
            $customerModel = app(Customer::class);
            $customers = $customerModel->find($id);
            if(!empty($customer)){
                $customer->delete();
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
            $customerModel = app(Customer::class);
            $customers = $customerModel->find($id);
            return view('clientes/edit',compact('customers'));
        }

        public function update(Request $request,$id){
            $data = $request->all();
            $customerModel = app(Customer::class);
            $customers = $customerModel->find($id);
            $customer->update([
                'name'=>$data['name'],
                'identification_type'=>$data['identification_type'],
                'identification_number'=>$data['identification_number'],
                'email'=>$data['email'],
            ]);
            return redirect()->route('customer.index');
        }
}
