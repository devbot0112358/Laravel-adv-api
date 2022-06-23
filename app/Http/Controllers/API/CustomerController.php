<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Resources\CustomerResource;
use App\Http\Requests\CustomerRequest;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    // Customer list Api - GET
    //URL: http://127.0.0.1:8000/api/list-customer
    public function getAllCustomer(){
        $customer = CustomerResource::collection(Customer::all());
        return response()->json([
            "status" => 1,
            "message" => "List Of all Customers.",
            "data" => $customer
        ], 200);
    }
    // Single Customer Api - GET
    //URL:http://127.0.0.1:8000/api/single-customer/{id}
    public function getSingleCustomer($id){
        if(Customer::where("id",$id)->exists()){
            $Customer_detail = new CustomerResource(Customer::where("id", $id)->first());
            return response()->json([
                "status" => 1,
                "message" => "Customer Found",
                'data' => $Customer_detail
            ], 200);
        }else{
            return response()->json([
                'status' => 0,
                'message' => 'Customer Not Found'
            ], 404);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Create Api -POST
    //URL:http://127.0.0.1:8000/api/add-customer
    public function store(CustomerRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone_no = $request->phone_no;
        $customer->gender = $request->gender;
        $customer->age = $request->age;
        $customer->save();

        return response()->json([
            "status" => 1,
            "message" => "Customer Created successfully."
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Update Api -PUT
    //URL:http://127.0.0.1:8000/api/update-customer/{id}
    public function update(CustomerRequest $request, $id)
    {
        if(Customer::where('id', $id)->exists()){
            $customer = Customer::where('id', $id);
            $customer->name = !empty($request->name) ? $request->name : $customer->name;
            $customer->email = !empty($request->email) ? $request->email : $customer->email;
            $customer->phone_no = !empty($request->phone_no) ? $request->phone_no : $customer->phone_no;
            $customer->gender = !empty($request->gender) ? $request->gender : $customer->gender;
            $customer->age = !empty($request->age) ? $request->age : $customer->age;
            return response()->json([
                "status" => 1,
                "message" => "Customer Updated Successfully."
            ], 200);

        }else{
            return response()->json([
                "status" => 0,
                "message" => " Customer Not Found."
            ], 404);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // Delete Api - DELETE
    //URL: http://127.0.0.1:8000/api/Delete-customer/{id}
    public function destroy($id)
    {
        if(Custom::where("id", $id)->exist()){
            $customer = Customer::find($id);

            $customer->delete();
            
            return response()->json([
                "status" => 1,
                "message" => "Customer Deleted Successfully."
            ], 200);
        }else{
            return response()->json([
                "status" => 0,
                "message" => "Customer Not Found."
            ], 404);
        }
    }
}
