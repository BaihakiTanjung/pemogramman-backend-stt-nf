<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::getAllStudents();

        return response()->json([
            'success' => true,
            'message' => 'List Semua Mahasiswa',
            'data' => $students
        ], 200);
    }

    public function FunctionName(Request $request)
    {
        $input = [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ];


        $student = Student::create($input);

        $data = [
            'success' => true,
            'message' => 'Mahasiswa Berhasil Ditambahkan',
            'data' => $student
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $student->nama = $request->nama;
        $student->nim = $request->nim;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;

        $student->save();

        $data = [
            'success' => true,
            'message' => 'Mahasiswa Berhasil Diupdate',
            'data' => $student
        ];

        return response()->json($data, 200);
    }

    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();

        $data = [
            'success' => true,
            'message' => 'Mahasiswa Berhasil Dihapus',
            'data' => $student
        ];

        return response()->json($data, 200);
    }
}
