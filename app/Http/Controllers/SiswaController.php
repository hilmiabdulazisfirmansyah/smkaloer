<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Siswa;
use App\User;
use Mail;
use App\Mail\verifyEmail;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // halaman login untuk siswa
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
        $nis = $request->input('nis');
        $nipd = array_search($nis, array_column(siswa(), 'nis'));
        if (!in_array($nis, siswa()[$nipd])) {
            return redirect('/')->with('gagal', 'nis yang anda masukkan tidak terdaftar di Dapodik jika terjadi kesalahan data segera hubungi operator sekolah');
        }else{

            $user = User::where('email', $request->input('email'))->first();
            if ($user) {
                return redirect('/')->with('gagal', 'Email yang anda gunakan Sudah Terdaftar');
            }
            $username = ds_where($nis,'nama');
            
            // User ID SISWA
            $user = new \App\User;
            $user->role = 'Siswa';
            $user->name = $username;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->remember_token = str_random(60);
            $user->verifyToken = str_random(60);
            $user->save(); 

        //input data User dan registrasi User
            $request->request->add(['user_id' => $user->id]);
            DB::table('siswa')->insert([
                'user_id' => $user->id,
                'nis' => $nis,
                'nik' => ds_where($nis,'nik'),
                'nisn' => ds_where($nis,'nisn'),
                'nama' => $username,
                'no_kip' => ds_where($nis,'no_kip'),
                'no_kks' => ds_where($nis,'no_kks'),
                'nomor_telepon_seluler' => ds_where($nis,'nomor_telepon_seluler'),
                'nik_ayah' => ds_where($nis,'nik_ayah'),
                'nik_ibu' => ds_where($nis,'nik_ibu'),
                'nik_wali' => ds_where($nis,'nik_wali'),
                'jenis_kelamin' => ds_where($nis,'jenis_kelamin'),
                'tempat_lahir' => ds_where($nis,'tempat_lahir'),
                'tanggal_lahir' => ds_where($nis,'tanggal_lahir'),
                'agama' => agama(ds_where($nis,'agama_id')),
                'alamat_jalan' => ds_where($nis,'alamat_jalan'),
                'rt' => ds_where($nis,'rt'),
                'rw' => ds_where($nis,'rw'),
                'no_skhun' => ds_where($nis,'no_skhun'),
                'no_peserta_ujian' => ds_where($nis,'no_peserta_ujian'),
                'no_seri_ijazah' => ds_where($nis,'no_seri_ijazah'),
                'sekolah_asal' => ds_where($nis,'sekolah_asal'),
                'tanggal_masuk_sekolah' => ds_where($nis,'tanggal_masuk_sekolah'),
                'ket_keluar' => ds_where($nis,'ket_keluar'),
                'id_kelas' => ds_where($nis,'tingkat_pendidikan_id'),
                'soft_delete' => ds_where($nis,'soft_delete'),
                'created_at' => now(),
            ]);

            DB::table('ortu')->insert([
                'siswa_id' => $user->id,
                'nama_ayah' => ds_where($nis, 'nama_ayah'),
                'nama_ibu_kandung' => ds_where($nis, 'nama_ibu_kandung'),
                'nama_wali' => ds_where($nis, 'nama_wali'),
                'nik_ayah' => ds_where($nis, 'nik_ayah'),
                'nik_ibu' => ds_where($nis, 'nik_ibu'),
                'nik_wali' => ds_where($nis, 'nik_wali'),
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
        $user_id = Siswa::findOrFail($request->user_id);

        $user_id->update($request->all());

        return back();
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
