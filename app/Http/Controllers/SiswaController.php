<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use Mail;
use App\Mail\verifyEmail;
use Illuminate\Support\Str;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function getNamaSiswa($user_id)
    {
        $nama_siswa = Siswa::where('id', '=', $user_id)->get('nama');
        return $nama_siswa;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // jika nis yang di inputkan oleh user = nis di
        // dapodik, maka user akan di daftarkan
        // dan mendapatkan verifikasi email
        // jika tidak sama maka user tidak akan didaftarkan
        // 
        $nis = $request->input('nis');

        $siswa = Siswa::where('nisn', '=', $nis)->get()[0];
        $nipd = $siswa['nisn'];

        if ($nis != $nipd) {
            return redirect('/')->with('gagal', 'nis yang anda masukkan tidak terdaftar di Dapodik jika terjadi kesalahan data segera hubungi operator sekolah');
        }else{

            $user = User::where('email', $request->input('email'))->first();
            if ($user) {
                return redirect('/')->with('gagal', 'Email yang anda gunakan Sudah Terdaftar');
            }
            // User ID SISWA
            $user = new \App\User;
            $user->role = 'Siswa';
            $user->name = $siswa['nama'];
            $user->email = $request->email;
            $user->job_title = 'Siswa';
            $user->password = bcrypt($request->password);
            $user->remember_token = Str::random(60);
            $user->verifyToken = Str::random(60);
            $user->save(); 

        //input data User dan registrasi User
            $request->request->add(['user_id' => $user->id]);
            
            Siswa::where('nipd', $nis)
                    ->update(['user_id' => $user->id, 'job_title' => $user->job_title]);

            DB::table('ortu')->insert([
                'siswa_id' => $user->id,
                'nama_ayah' => $siswa['nama_ayah'],
                'nama_ibu_kandung' => $siswa['nama_ibu_kandung'],
                'nama_wali' => $siswa['nama_wali'],
                'nik_ayah' => $siswa['nik_ayah'],
                'nik_ibu' => $siswa['nik_ibu'],
                'nik_wali' => $siswa['nik_wali'],
                'created_at' => now(),
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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_id = Siswa::where('user_id', '=', $request->user_id);

        $user_id->update($request->all());

        return back()->with('sukses', 'Data Berhasil di perbaharui');
        // dd($request->all());
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
