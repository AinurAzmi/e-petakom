<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Authentication;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommitteeRequest;
use App\Http\Requests\UpdateCommitteeRequest;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = session()->get('logged_user');
        $authentication = DB::table('authentications')
            ->Join('committees', 'authentications.username', '=', 'committee.username')
            ->where('authentication.username', '=', $username)
            ->get();
        return View('ManageProfile.profile-committee')->with('committees', $authentication);
        //var_dump($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $committee_first_name = $request->input('committee_first_name');
        $committee_last_name = $request->input('committee_last_name');
        $committee_email = $request->input('committee_email');
        $committee_mobile_no = $request->input('committee_mobile_no'); 
        $committee_address = $request->input('committee_address');
        $committee_city = $request->input('studednt_city');
        $committee_state = $request->input('committee_state');
        $committee_zipcode = $request->input('committee_zipcode');
        $committee_course = $request->input('committee_course');
        $committee_year = $request->input('committee_year');
        $committee_semester = $request->input('committee_semester');
        $committee_picture = $request->input('committee_picture');
        $committee_position = $request->input('committee_position');
        
        //table authentications
        $authentications = Authentication::where('username', '=', session()->get('logged_user'))->get()->first();
        $authentications->username = $username;
        $authentications->password = $password;
        $authentications->save();
        //table students
        $committees = Committee::where('username', '=', session()->get('logged_user'))->get()->first();
        $committees->username = $username;
        $committees->password = $password;
        $committees->student_first_name = $committee_first_name;
        $committees->committee_last_name = $committee_last_name;
        $committees->committee_email = $committee_email;
        $committees->committee_mobile_no = $committee_mobile_no;
        $committees->committee_address = $committee_address;
        $committees->committee_city = $committee_city;
        $committees->committee_state = $committee_state;
        $committees->committee_zipcode = $committee_zipcode;
        $committees->committee_course = $committee_course;
        $committees->committee_year = $committee_year;
        $committees->committee_semester = $committee_semester;
        $committees->committee_picture = $committee_picture;
        $committees->committee_position = $committee_position;
        $committees->save();
        return redirect("profile-committee");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    // public function edit()
    // {
    //     $username = session()->get('logged_user');
    //     $authentications = DB::table('authentications')
    //         ->Join('students', 'authentications.username', '=', 'students.username')
    //         ->where('users.userID', '=', $username)
    //         ->get();
    //     return View('ManageProfile.edit-profile-student')->with('students', $authentications);
    //     // var_dump($students);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
