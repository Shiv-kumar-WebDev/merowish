<?php

namespace App\Http\Controllers;

use App\Models\MembershipCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CouponCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('customer.customer_form');
    }
    public function list()
    {
        $data['employees'] = DB::table('employees')
            ->select('employees.*')
            // ->join('membership_plans', 'customer.id_plan', '=', 'membership_plans.id_membership_plan')
            ->get();

        return view('city.city')->with($data);
    }
    public function listCouponCode()
    {
        $data['coupon_code'] = DB::table('coupon_code')
            ->select('coupon_code.*')
            // ->select('coupon_code.*','city.name as city_name')
            // ->join('city', 'pincode.city', '=', 'city.id')
            ->get();

        return view('couponCode.couponCode')->with($data);
    }
    public function listBlog()
    {
        $data['blogs'] = DB::table('blogs')
            ->select('blogs.*')
            // ->join('membership_plans', 'customer.id_plan', '=', 'membership_plans.id_membership_plan')
            ->get();

        return view('blog.blog')->with($data);
    }
    public function updateData(Request $request)
    {
        $id = $request->input();


        $data['warehouseindia'] = DB::table('warehouseindia')
            ->select('warehouseindia.*')
            // ->join('membership_plans', 'membership_customers.id_plan', '=', 'membership_plans.id_membership_plan')
            ->where('id',$id)
            ->get();
        return view('warehouse.warehouse_form')->with($data);
    }
    public function updateCouponCode(Request $request)
    {
        $id = $request->input();


        $data['coupon_code'] = DB::table('coupon_code')
            ->select('coupon_code.*')
            // ->join('membership_plans', 'membership_customers.id_plan', '=', 'membership_plans.id_membership_plan')
            ->where('id',$id)
            ->get();

        return view('couponCode.add-couponCode')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        // $res = new MembershipPlan();
        if($id){

            $res = $request->input();

            // echo $request->input('is_extend');exit;

            $res['birthday'] = $res['day']."-".$res['month']."-".$res['year'];



            unset($res['_token']);
            unset($res['id_customer']);
            unset($res['id']);
            unset($res['year']);
            unset($res['month']);
            unset($res['day']);

            $update = DB::table('customer')
                ->where('id_customer', $id)
                ->update($res);

            if ($update) {
                $request->session()->flash('message', 'Customer updated successfully');
            }
        }else{
            // echo '<pre>';
            // print_r($request->input());exit;
            $res = $request->input();
            // echo $res['year'];
            // echo $res['month'];
            // echo $res['day'];exit;
            $res['birthday'] = $res['day']."-".$res['month']."-".$res['year'];
            $res['passwd'] = Hash::make($request->input('passwd'));


            // $res->img_name = $request->input('plan_image');
            unset($res['_token']);
            unset($res['id_customer']);
            unset($res['id']);
            unset($res['year']);
            unset($res['month']);
            unset($res['day']);
            if (DB::table('customer')->insert($res)) {
                $request->session()->flash('message', 'Customer created successfully');
            }
        }
        
        return redirect('CustomerList');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipCustomer  $membershipCustomer
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipCustomer $membershipCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipCustomer  $membershipCustomer
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipCustomer $membershipCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipCustomer  $membershipCustomer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembershipCustomer $membershipCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipCustomer  $membershipCustomer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input();
        $deleted = DB::table('warehouseindia')->where('id', '=', $id)->delete();
        if($deleted){
            $request->session()->flash('message', 'Warehouse Deleted successfully');
            return Redirect('/warehouseIndia');
        }else{
            $request->session()->flash('message', 'Failed');
        }
    }
    public function destroyCouponCode (Request $request)
    {
        $id = $request->input();
        $deleted = DB::table('coupon_code')->where('id', '=', $id)->delete();
        if($deleted){
            $request->session()->flash('message', 'Coupon Code Deleted successfully');
            return Redirect('/CouponCodeList');
        }else{
            $request->session()->flash('message', 'Failed');
        }
    }
    public function addCouponCode(Request $request)
    {
        $data['city'] = DB::table('city')
            ->select('city.*')
            ->get();
        return view('couponCode.add-couponCode')->with($data);
    }
    public function storeWarehouse(Request $request)
    {
        $id = $request->input('id');
        // $res = new MembershipPlan();
        if($id){

            $res = $request->input();

            // echo $request->input('is_extend');exit;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images/employee'), $filename);
                $res['image'] = $filename;
            }


            unset($res['_token']);
            unset($res['id']);
            unset($res['passwd']);
            unset($res['year']);
            unset($res['month']);
            unset($res['day']);
            
            $update = DB::table('warehouseindia')
                ->where('id', $id)
                ->update($res);

            if ($update) {
                $request->session()->flash('message', 'Warehouse updated successfully');
            }
        }else{
            // echo '<pre>';
            // print_r($request->input());exit;
            $res = $request->input();
            

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images/employee'), $filename);
                $res['image'] = $filename;
            }


            // $res->img_name = $request->input('plan_image');
            unset($res['_token']);
            unset($res['id']);
            unset($res['year']);
            unset($res['month']);
            unset($res['day']);

            if (DB::table('warehouseindia')->insert($res)) {
                $request->session()->flash('message', 'Warehouse created successfully');
            }
        }
        
        return redirect('warehouseIndia');
    }
    public function CouponCodeCreate(Request $request)
    {
        $id = $request->input('id');
        // $res = new MembershipPlan();
        if($id){

            $res = $request->input();

            // echo $request->input('is_extend');exit;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images/employee'), $filename);
                $res['image'] = $filename;
            }


            unset($res['_token']);
            unset($res['id']);
            unset($res['passwd']);
            unset($res['year']);
            unset($res['month']);
            unset($res['day']);
            
            $update = DB::table('coupon_code')
                ->where('id', $id)
                ->update($res);

            if ($update) {
                $request->session()->flash('message', 'Coupon Code updated successfully');
            }
        }else{
            // echo '<pre>';
            // print_r($request->input());exit;
            $res = $request->input();
            

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images/employee'), $filename);
                $res['image'] = $filename;
            }

            // $category = implode(',', $request->input('category'));

            // $res['category']=$category;


            // $res->img_name = $request->input('plan_image');
            unset($res['_token']);
            unset($res['id']);
            unset($res['year']);
            unset($res['month']);
            unset($res['day']);

            if (DB::table('coupon_code')->insert($res)) {
                $request->session()->flash('message', 'Coupon Code created successfully');
            }
        }
        
        return redirect('CouponCodeList');
    }
    public function warehouseNepalCreate(Request $request)
    {
        $id = $request->input('id');
        // $res = new MembershipPlan();
        if($id){

            $res = $request->input();

            // echo $request->input('is_extend');exit;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images/employee'), $filename);
                $res['image'] = $filename;
            }


            unset($res['_token']);
            unset($res['id']);
            unset($res['passwd']);
            unset($res['year']);
            unset($res['month']);
            unset($res['day']);
            
            $update = DB::table('warehouse_nepal')
                ->where('id', $id)
                ->update($res);

            if ($update) {
                $request->session()->flash('message', 'Warehouse updated successfully');
            }
        }else{
            // echo '<pre>';
            // print_r($request->input());exit;
            $res = $request->input();
            

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images/employee'), $filename);
                $res['image'] = $filename;
            }


            // $res->img_name = $request->input('plan_image');
            unset($res['_token']);
            unset($res['id']);
            unset($res['year']);
            unset($res['month']);
            unset($res['day']);

            if (DB::table('warehouse_nepal')->insert($res)) {
                $request->session()->flash('message', 'Warehouse created successfully');
            }
        }
        
        return redirect('warehouseNepal');
    }
    public function Addresslist()
    {
        $customers['addresses'] = DB::table('address')
            ->select('address.*','state.name as state_name','customer.email','country.country_name')
            ->join('country', 'address.id_country', '=', 'country.country_id')
            // ->join('country_lang', 'country.id_country', '=', 'country_lang.id_country')
            ->join('state', 'address.id_state', '=', 'state.id_state')
            ->join('customer', 'address.id_customer', '=', 'customer.id_customer')
            ->get();

            // print_r($customers);exit;


        return view('customer.customer_address_list')->with($customers);
    }
    public function updateAddressData(Request $request)
    {
        $id = $request->input();

        $data['countries'] = DB::table('country')
            ->select('*')
            // ->join('country_lang', 'country.id_country', '=', 'country_lang.id_country')
            ->get();

            // echo '<pre>';
            // print_r($data['countries']);exit;

        $data['states'] = DB::table('state')
            ->select('*')
            // ->join('country', 'state.id_state', '=', 'country.contains_states')
            ->get();

        $data['customers'] = DB::table('customer')
            ->select('*')
            // ->join('country', 'state.id_state', '=', 'country.contains_states')
            ->get();

        $data['addresses'] = DB::table('address')
            ->select('address.*','state.name as state_name','customer.email','customer.id_customer')
            ->join('country', 'address.id_country', '=', 'country.country_id')
            // ->join('country_lang', 'country.country_id', '=', 'country_lang.id_country')
            ->join('state', 'address.id_state', '=', 'state.id_state')
            ->join('customer', 'address.id_customer', '=', 'customer.id_customer')
            ->where('address.id_address',$id)
            ->get();

            // print_r($data['addresses']);exit;

        return view('customer.customer_address_form')->with($data);
    }
    public function destroyAddress(Request $request)
    {
        $id = $request->input();
        $deleted = DB::table('address')->where('id_address', '=', $id)->delete();
        if($deleted){
            $request->session()->flash('message', 'Customer Address Deleted successfully');
            return Redirect('/CustomerAddressList');
        }else{
            $request->session()->flash('message', 'Failed');
        }
    }
}
