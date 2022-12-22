<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{

    public function __construct()
    {
        $this->animals = ['kucing', 'ayam', 'ikan'];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Menampilkan data animals";
        foreach ($this->animals as $animal) {
            echo $animal . "<br>";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "Menambahkan data animals";
        array_push($this->animals, $request);
        echo $this->index();
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
        echo "Mengubah data animals dengan id = $id";
        $this->animals[$id] = $request;
        echo $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "Menghapus data animals dengan id = $id";
        unset($this->animals[$id]);
        echo $this->index();
    }
}
