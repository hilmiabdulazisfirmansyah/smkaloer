<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alumni;
use App\User;
use Mail;
use App\Mail\verifyEmail;

class AlumniController extends Controller
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
    public function create(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        if ($user) {
            return redirect('/')->with('gagal', 'Email yang anda gunakan Sudah Terdaftar');
        }

        $user = new \App\User;
        $user->role = 'Alumni';
        $user->name = $request->nama_lengkap;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->verifyToken = str_random(60);
        $user->save();
        //input data User dan registrasi User
        $request->request->add(['user_id' => $user->id]);
        $role = Alumni::create(request()->all());
        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);
        return redirect(route('verifyEmail'));
    }

    public function sendEmail($thisUser)
    {
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
