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
        $nikd = array_search($nik, array_column(guru(), 'nik'));
        if (!in_array($nik, guru()[$nikd])) {
            return redirect('/')->with('nik_tidak_terdaftar', 'NIK yang anda masukkan tidak terdaftar di Dapodik jika terjadi kesalahan data segera hubungi operator sekolah');
        }else{

            $user = User::where('email', $request->input('email'))->first();
            if ($user) {
                return redirect('/')->with('email_sudah_terdaftar', 'Email yang anda gunakan Sudah Terdaftar');
            }
            $username = d_where($nik,'nama');

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
                'jenis_kelamin' => d_where($nik,'jenis_kelamin'),
                'tempat_lahir' => d_where($nik,'tempat_lahir'),
                'tanggal_lahir' => d_where($nik,'tanggal_lahir'),
                'agama' => agama(d_where($nik,'agama_id')),
                'status_kepegawaian' => statusKepegawaian(d_where($nik,'status_kepegawaian_id')),
                'alamat_jalan' => d_where($nik,'alamat_jalan'),
                'rt' => d_where($nik,'rt'),
                'rw' => d_where($nik,'rw'),
                'desa_kelurahan' => d_where($nik,'desa_kelurahan'),
                'no_hp' => d_where($nik,'no_hp'),
                'status_perkawinan' => d_where($nik,'status_perkawinan'),
                'nama_suami_istri' => d_where($nik,'nama_suami_istri'),
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
