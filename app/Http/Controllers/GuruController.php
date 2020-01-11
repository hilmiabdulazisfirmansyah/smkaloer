<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Guru;
use App\User;
use Mail;
use App\Mail\verifyEmail;
use DB;
use Str;


class GuruController extends Controller
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
        // jika nik yang di inputkan oleh user = nik di
        // dapodik, maka user akan di daftarkan
        // dan mendapatkan verifikasi email
        // jika tidak sama maka user tidak akan didaftarkan
        // 
        $nik = $request->input('nik');
        $nikd = DB::connection('dapodik')->table('guru')->where('nik', $nik)->get('nik')->first();

        if ($nik != $nikd->nik) {
            return redirect('/')->with('nik_tidak_terdaftar', 'NIK yang anda masukkan tidak terdaftar di Dapodik jika terjadi kesalahan data segera hubungi operator sekolah');
        }else{

            $user = User::where('email', $request->input('email'))->first();
            if ($user) {
                return redirect('/')->with('email_sudah_terdaftar', 'Email yang anda gunakan Sudah Terdaftar');
            }
            $database = DB::connection('mysql3')->table('guru')->where('nik', $nik)->get()->first();
            $username = $database->nama;

            $user = new \App\User;
            $user->role = 'Guru';
            $user->name = $username;
            $user->email = $request->email;
            $user->job_title = 'Guru';
            $user->password = bcrypt($request->password);
            $user->remember_token = Str::random(60);
            $user->verifyToken = Str::random(60);
            $user->save();

        //input data User dan registrasi User
            $request->request->add(['user_id' => $user->id, 'user_role' => $user->role]);
            DB::table('guru')->insert([
                'nik' => $nik,
                'nama' => $username,
                'user_id' => $user->id,
                'job_title' => $user->role,
                'jenis_kelamin' => $database->jenis_kelamin,
                'tempat_lahir' => $database->tempat_lahir,
                'tanggal_lahir' => $database->tanggal_lahir,
                'agama' => agama($database->agama_id),
                'status_kepegawaian' => statusKepegawaian($database->status_kepegawaian_id),
                'alamat_jalan' => $database->alamat_jalan,
                'rt' => $database->rt,
                'rw' => $database->rw,
                'desa_kelurahan' => $database->desa_kelurahan,
                'no_hp' => $database->no_hp,
                'status_perkawinan' => $database->status_perkawinan,
                'nama_suami_istri' => $database->nama_suami_istri,
                'created_at' => now()
            ]);
            
            $thisUser = User::findOrFail($user->id);
            $this->sendEmail($thisUser);
            return redirect(route('verifyEmail'));
        }
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
