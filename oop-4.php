<?php

class Person
{

    private $nama;
    private $alamat;
    private $jurusan;

    function __construct($nama, $alamat, $jurusan)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    function setNama($nama)
    {
        $this->nama = $nama;
    }

    function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    function getNama()
    {
        return $this->nama;
    }

    function getAlamat()
    {
        return $this->alamat;
    }

    function getJurusan()
    {
        return $this->jurusan;
    }
}


$person = new Person("Rizky", "Jl. Kebon Jeruk", "Teknik Informatika");
