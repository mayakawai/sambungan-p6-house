<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    // Menampilkan form input
    public function index()
    {
        return view('pegawai_form');
    }

    // Proses data dari user
    public function show(Request $request)
    {
        $name = $request->input('name');
        $birth_date = Carbon::parse($request->input('birth_date'));
        $tgl_harus_wisuda = Carbon::parse($request->input('tgl_harus_wisuda'));
        $hobbies = explode(',', $request->input('hobbies'));
        $current_semester = (int)$request->input('current_semester');
        $future_goal = $request->input('future_goal');

        $my_age = $birth_date->age;
        $time_to_study_left = now()->diffInDays($tgl_harus_wisuda, false);

        if ($current_semester < 3) {
            $info = "Masih Awal, Kejar TAK!";
        } else {
            $info = "Jangan main-main, kurang-kurangi main game!";
        }

        return view('pegawai_result', [
            'name' => $name,
            'my_age' => $my_age,
            'hobbies' => $hobbies,
            'tgl_harus_wisuda' => $tgl_harus_wisuda->toDateString(),
            'time_to_study_left' => $time_to_study_left,
            'current_semester' => $current_semester,
            'info' => $info,
            'future_goal' => $future_goal
        ]);
    }
}
