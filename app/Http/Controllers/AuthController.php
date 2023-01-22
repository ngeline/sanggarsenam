<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Anggota;
use Auth, Validator, Alert, File;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    public function postLogin(Request $request){
        if (Auth::attempt($request->only('email', 'password'))){
            $userStatus = Auth::user()->status;
            $userRole = Auth::user()->role;

            if ($userStatus == 'Aktif') {
                if ($userRole != 'Anggota') {
                    return redirect()->route('home');
                } else {
                    // anggota
                    return redirect()->route('home');
                }
            } else {
                Auth::logout();
                return redirect()->back()->withInput()->withErrors(['email' => 'Akun Anda sudah kadaluarsa']);
            }
        }
        else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Akun Anda tidak ditemukan']);
        }
    }

    public function postRegister(Request $request){
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'nik' => ['required', 'numeric', 'digits:16'],
            'pekerjaan' => ['required'],
            'jk' => ['required'],
            'alamat' => ['required'],
            'telepon' => ['required', 'numeric', 'digits_between:10,13'],
            'foto' => ['required', 'file', 'mimes:png,jpg,jpeg'],
        ];

        $messages = [];

        $attributes = [
            'name' => 'Nama',
            'email' => 'Email',
            'password' => 'Password',
            'nik' => 'Nomor Induk Kependudukan',
            'pekerjaan' => 'Pekerjaan',
            'jk' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'telepon' => 'Telepon',
            'foto' => 'Foto',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if(!$validator->passes()){
            return redirect()->back()->withInput()->withErrors($validator->errors()->toArray());
        } else {
            $data = new User;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->save();

            $anggota = new Anggota;
            $anggota->users_id = $data->id;
            $anggota->nama = $data->name;
            $anggota->nik = $request->nik;
            $anggota->pekerjaan = $request->pekerjaan;
            $anggota->jk = $request->jk;
            $anggota->alamat = $request->alamat;
            $anggota->email = $data->email;
            $anggota->telepon = $request->telepon;
            if ($request->hasFile('foto')){
                $file = $request->file('foto');
                $filename = time()."_".$file->getClientOriginalName();
                $file->move(public_path('assets/img/anggota'), $filename);

                $anggota->foto = $filename;
            }
            $anggota->save();

            Alert::success('Berhasil Melakukan Registrasi');

            return redirect()->route('login');
        }
    }

    public function logout(){
    	Auth::logout();
    	return redirect()->route('login');
    }
}
