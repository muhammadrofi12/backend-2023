<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Menampilkan semua data student
    public function index()
	{
        # menggunakan model Student untuk select data
		$students = Student::all();

		if (!empty($students)) {
			$response = [
				'message' => 'Menampilkan Data Semua Student',
				'data' => $students,
			];
			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data tidak ada'
			];
			return response()->json($response, 404);
		}
	}

    // Menyimpan data student baru
	public function store(Request $request)
    {
        #validate
        $validateData = $request->validate([
            'nama' => 'required',
            'nim' => 'numeric|required',
            'email' => 'email|required',
            'jurusan' => 'required'
        ]);

        $student = Student::create($validateData);

        $data = [
            'message' => 'Student is created successfully',
            'data' => $student,
        ];

        // mengembalikan data (json) dan kode 201
        return response()->json($data, 201);
    }

    // Menampilkan detail student berdasarkan ID
	public function show($id)
	{
		$student = Student::find($id);

		if ($student) {
			$response = [
				'message' => 'Mendapatkan detail student',
				'data' => $student
			];

			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
	}

    // Memperbarui data student berdasarkan ID
	public function update(Request $request, $id)
	{
		$student = Student::find($id);

		if ($student) {
			$response = [
				'message' => 'Student is updated',
				'data' => $student->update($request->all())
			];

			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
	}

    // Menghapus data student berdasarkan ID
	public function destroy($id)
	{
		$student = Student::find($id);

		if ($student) {
			$response = [
				'message' => 'Student is deleted',
				'data' => $student->delete()
			];

			return response()->json($response, 200);
		} else {
			$response = [
				'message' => 'Data not found'
			];

			return response()->json($response, 404);
		}
	}
}
