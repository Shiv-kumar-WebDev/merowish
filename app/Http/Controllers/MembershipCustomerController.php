<?php

namespace App\Http\Controllers;

use App\Models\MembershipCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MembershipCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['membership_plans'] = DB::table('membership_plans')
            ->select('*')
            ->get();

        $data['customers'] = DB::table('customer')
            ->select('*')
            ->get();
            
        $data['products'] = DB::table('product')
            ->select('*')
            ->get();
            
        $data['coupon_code'] = DB::table('coupon_code')
            ->select('*')
            ->get();

        return view('membership.membership-customer-plan-form')->with($data);
    }
    public function list()
    {
        $membership_customers['membership_customers'] = DB::table('membership_customers')
            ->select('membership_customers.*','membership_plans.name as membership_plans','coupon_code.code')
            ->join('membership_plans', 'membership_customers.id_plan', '=', 'membership_plans.id_membership_plan')
            ->join('coupon_code', 'membership_customers.id_coupon_code', '=', 'coupon_code.id')
            ->get();

        return view('membership.customer_plan_list')->with($membership_customers);
    }
    public function updateData(Request $request)
    {
        $id = $request->input();

        $data['membership_plans'] = DB::table('membership_plans')
            ->select('*')
            ->get();

        $data['customers'] = DB::table('customer')
            ->select('*')
            ->get();
            
        $data['products'] = DB::table('product')
            ->select('*')
            ->get();
            
        $data['coupon_code'] = DB::table('coupon_code')
            ->select('*')
            ->get();

        $data['membership_customers_data'] = DB::table('membership_customers')
            ->select('membership_customers.*','membership_plans.name as membership_plans','coupon_code.code','coupon_code.id as coupon_code_id')
            // ->select('membership_customers.*','membership_plans.name as membership_plans')
            ->join('membership_plans', 'membership_customers.id_plan', '=', 'membership_plans.id_membership_plan')
            ->join('coupon_code', 'membership_customers.id_coupon_code', '=', 'coupon_code.id')
            ->where('membership_customers.id_membership_customer',$id)
            ->get();
        return view('membership.membership-customer-plan-form')->with($data);
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

            if ($request->input('is_renew') == 'on')
            {
                $res['is_renew'] = 1;
            } else {
                $res['is_renew'] = 0;
            }
            if ($request->input('is_extended') == '1')
            {
                $res['is_extended'] = 1;
            } else {
                $res['is_extended'] = 0;
            }if ($request->input('active') == '1')
            {
                $res['active'] = 1;
            } else {
                $res['active'] = 0;
            }


            // $data = array(
            //     'name'=>$request->input('plan_name'),
            //     'id_product'=>1,
            //     'id_customer_group'=>1,
            //     'features'=>$request->input('plan_features'),
            //     'type'=>$request->input('plan_type'),
            //     'duration'=>$request->input('plan_duration'),
            //     'id_currency'=>$request->input('plan_currency'),
            //     'price'=>$request->input('plan_price'),
            //     'allow_renew'=>$allow_renew,
            //     'allow_extend'=>$allow_extend,
            //     'active'=>$active,
            //     'img_name'=>$request->input('plan_image')
            // );
            

            unset($res['_token']);
            unset($res['id_customer']);
            unset($res['id']);

            $update = DB::table('membership_customers')
                ->where('id_membership_customer', $id)
                ->update($res);

            if ($update) {
                $request->session()->flash('message', 'Customer Plan updated successfully');
            }
        }else{
            // echo '<pre>';
            // print_r($request->input());exit;
            $res = $request->input();
            // echo $request->input('is_extended');exit;
            // $res->name = $request->input('plan_name');
            // $res->id_product = 1;
            // $res->id_customer_group = 1;
            // $res->features = $request->input('plan_features');
            // $res->type = $request->input('plan_type');
            // $res->duration = $request->input('plan_duration');
            // $res->id_currency = $request->input('plan_currency');
            // $res->price = $request->input('plan_price');

            

            if ($request->input('is_renew') == 'on')
            {
                $res['is_renew'] = 1;
            } else {
                $res['is_renew'] = 0;
            }
            if ($request->input('is_extended') == '1')
            {
                $res['is_extended'] = 1;
            } else {
                $res['is_extended'] = 0;
            }if ($request->input('active') == '1')
            {
                $res['active'] = 1;
            } else {
                $res['active'] = 0;
            }
            // $res->img_name = $request->input('plan_image');
            unset($res['_token']);
            unset($res['id_customer']);
            unset($res['id']);
            if (DB::table('membership_customers')->insert($res)) {
                $request->session()->flash('message', 'Membership Customer created successfully');
            }
        }
        
        return redirect('MembershipCustomerList');
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
        $deleted = DB::table('membership_customers')->where('id_membership_customer', '=', $id)->delete();
        if($deleted){
            $request->session()->flash('message', 'Customer Plan Deleted successfully');
            return Redirect('/MembershipCustomerList');
        }else{
            echo 'error';
        }
    }
}
