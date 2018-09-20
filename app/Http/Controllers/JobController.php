<?php
/**
 * Created by PhpStorm.
 * User: afif
 * Date: 20/09/2018
 * Time: 15:36
 */

namespace App\Http\Controllers;


use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function create(Request $request)
    {
        $data = new Job();
        $data->name_job = $request->input('name');
        $data->detail_job = $request->input('detail');

        $data->save();

        $output = [
            'status' => true,
            'message' => 'data job has been created successfully'
        ];

        return response()->json($output);
    }

    public  function update(Request $request,$id)
    {
        $data = Job::find($id);
        $data->name_job = $request->input('name');
        $data->detail_job = $request->input('detail');

        $data->save();

        $output = [
            'status' => true,
            'message' => 'data job has been updated successfully'
        ];

        return response()->json($output);
    }

}