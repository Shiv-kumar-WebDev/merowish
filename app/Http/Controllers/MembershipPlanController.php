<?php

namespace App\Http\Controllers;

use App\Models\MembershipPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembershipPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planlist = MembershipPlan::all();
        return view('membership.plan_list')->with('plans_data', $planlist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('membership.membership-plan-form');
    }
    public function updateData(Request $request)
    {
        $id = $request->input();

        $data['membership_plans'] = DB::table('membership_plans')
            ->select('*')
            ->where('id_membership_plan', $id)
            ->get();
        return view('membership.membership-plan-form-edit')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $id = $request->input('id');
        $res = new MembershipPlan();
        if ($id) {
            if ($request->input('plan_renew') == 'on') {
                $allow_renew = 1;
            } else {
                $allow_renew = 0;
            }
            if ($request->input('plan_extend') == 'on') {
                $allow_extend = 1;
            } else {
                $allow_extend = 0;
            }
            if ($request->input('plan_status') == 'on') {
                $active = 1;
            } else {
                $active = 0;
            }


            // print_r($request);exit;

            if ($request->file('plan_image')) {
                $file = $request->file('plan_image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('public/images/membershipPlan'), $filename);
                $res->img_name = $filename;
                $data['img_name'] = $filename;
            }



            $data = array(
                'name' => $request->input('plan_name'),
                'id_product' => 1,
                'id_customer_group' => 1,
                'features' => $request->input('plan_features'),
                'type' => $request->input('plan_type'),
                'duration' => $request->input('plan_duration'),
                'id_currency' => $request->input('plan_currency'),
                'price' => $request->input('plan_price'),
                'allow_renew' => $allow_renew,
                'allow_extend' => $allow_extend,
                'active' => $active,
                // 'img_name'=>$filename
            );

            $update = DB::table('membership_plans')
                ->where('id_membership_plan', $id)
                ->update($data);

            if ($update) {
                $request->session()->flash('message', 'Plan updated successfully');
            }
        } else {
            $res->name = $request->input('plan_name');
            $res->id_product = 1;
            $res->id_customer_group = 1;
            $res->features = $request->input('plan_features');
            $res->type = $request->input('plan_type');
            $res->duration = $request->input('plan_duration');
            $res->id_currency = $request->input('plan_currency');
            $res->price = $request->input('plan_price');
            if ($request->input('plan_renew') == 'on') {
                $res->allow_renew = 1;
            } else {
                $res->allow_renew = 0;
            }
            if ($request->input('plan_extend') == 'on') {
                $res->allow_extend = 1;
            } else {
                $res->allow_extend = 0;
            }
            // dd($request->input('plan_status'));
            if ($request->input('plan_status') == '1') {
                $res->active = 1;
            } else {
                $res->active = 0;
            }

            if ($request->file('plan_image')) {
                $file = $request->file('plan_image');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('public/images/membershipPlan'), $filename);
                $res->img_name = $filename;
            }

            // $res->img_name = $request->input('plan_image');

            if ($res->save()) {
                $request->session()->flash('message', 'Plan created successfully');
            }
        }

        return redirect('MembershipPlanList');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipPlan $membershipPlan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipPlan $membershipPlan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembershipPlan $membershipPlan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipPlan  $membershipPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input();
        $deleted = DB::table('membership_plans')->where('id_membership_plan', '=', $id)->delete();
        if ($deleted) {
            $request->session()->flash('message', 'Plan Deleted successfully');
            return Redirect('/MembershipPlanList');
        } else {
            echo 'error';
        }
    }
}
