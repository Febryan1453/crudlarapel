<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Home Page";
        $student = Student::all();
        return view('student.index', compact('student', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Form Input";
        return view('student.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $pesan = [
            'nama.required'         => 'Nama lengkap masih kosong !',
            'nama.min'              => 'Nama lengkap minimal 5 huruf !',
            'telp.required'         => 'Nomor telepon masih kosong !',
            'deskripsi.required'    => 'Deskripsi masih kosong !',
        ];

        $request->validate([
            'nama'       => 'required|min:5',
            'telp'       => 'required',
            'deskripsi'  => 'required',
        ], $pesan);


        $student = new Student();

        $student->nama      = $request->nama;
        $student->telp      = $request->telp;
        $student->deskripsi = $request->deskripsi;

        $student->save();

        return redirect()->route('student.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = "Detail Data";
        $student = Student::findOrFail($id);
        return view('student.show', compact('student', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Data";
        $student = Student::findOrFail($id);
        return view('student.edit', compact('title','student'));
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
        // dd($request->all());

        // Cari data yang mau diedit
        $student = Student::findOrFail($id);

        //Proses Ubah datanya
        $student->nama          = $request->nama;
        $student->telp          = $request->telp;
        $student->deskripsi     = $request->desc;

        // Menyimpan data perubahan
        $student->update();

        // Setelah proses perubahan selesai diantar ke halaman index
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }
}
