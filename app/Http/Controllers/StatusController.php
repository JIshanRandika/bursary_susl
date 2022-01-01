<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
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
        //
        Status::create($request->all());
        return back()->with('success','New Process added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {

        $test = $status->id;


        $value=Status::query()->find((int)$status->id,'level');

//        echo 'a';

        print $test;



        $levelzero= '{"level":"0"}';
        $levelone = '{"level":"1"}';
        $leveltwo = '{"level":"2"}';
        $levelthree = '{"level":"3"}';
        $levelfour = '{"level":"4"}';
        $levelfive = '{"level":"5"}';
        $levelsix = '{"level":"6"}';
        $levelseven = '{"level":"7"}';

//        if($value==$levelone){
//            print $value;
//        }





//        if($value==$levelzero){
//            $status->update(
//                [
//                    'status'=>'Create the List of Bursory Aworded Students by the Student Affirs Division',
//                    'level'=>'1']
//            );
//            return back()->with('success','System updated successfully');
//
//        }
        if($value==$levelone){
            $status->update(
                [
                    'status'=>'Recommended the List by the Student Affairs Division and Moved to the Assistant Registrar of the Faculty',
                    'level'=>'2']
            );
            return back()->with('success','System updated successfully');

        }
        if ($value==$leveltwo) {
            $status->update(
                [
                    'status' => 'Assistant Registrar of the Faculty send the Finalized List to Students Affairs Division For Finalize the List (Check Registration) & Create Vouchers',
                    'level' => '3']
            );
            return back()->with('success','System updated successfully');
        }
        if ($value==$levelthree) {
            $status->update(
                [
                    'status' => 'Finalized the List (Check Registration) & Create Vouchers by the Student Affairs Division And Send To Vice Chancellor And Registrar For Approval',
                    'level' => '4']
            );
            return back()->with('success','System updated successfully');
        }
        if ($value==$levelfour) {
            $status->update(
                [
                    'status' => 'Approve Vouchers by the Vice Chancellor or Registrar of the University And Send To The Student Affairs Division For Finalizing the Process and Create PRM Doc',
                    'level' => '5']
            );
            return back()->with('success','System updated successfully');
        }
        if ($value==$levelfive) {
            $status->update(
                [
                    'status' => 'Finalized the Process and Created PRM Doc. Send To The Finance Division Clerk',
                    'level' => '6']
            );
            return back()->with('success','System updated successfully');
        }
        if ($value==$levelsix) {
            $status->update(
                [
                    'status' => 'Send The Final Vouchers To Bank By Finance Branch',
                    'level' => '7']
            );
            return back()->with('success','System updated successfully');
        }

        if ($value==$levelseven) {
            $status->update(
                [
                    'status' => 'Process Finished',
                    'level' => '0']
            );
            return back()->with('success','System updated successfully');
        }


        return back()->with('success','System updated successfully');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        //
    }
}
