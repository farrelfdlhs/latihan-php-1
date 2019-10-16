<?php
    class Database{
        // host untuk memberitahu kita menggunakan server lokal : localhost
        // user yaitu username dari localhost
        // pass yaitu password dari localhost
        // db untuk memberi akses ke database yg ada di localhost
        public $host = "localhost", $user = "root", $pass = 123, $db = "latihan";
        public $koneksi;

        public function __construct(){
            $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
            if ($this->koneksi) {
                # code...
            } else {
                return "Koneksi Database Gagal";
            }
        }
    }
    class Siswa extends Database{
        // menampilkan semua data
        public function index(){
            $datasiswa = mysqli_query($this->koneksi, "select * from siswa");
            return $datasiswa;
        }
        // menambah data
        public function create($nis, $nama, $alamat){
            mysqli_query($this->koneksi,"insert into siswa values('','$nis','$nama', '$alamat')");
        }
        // menampilkan data berdasarkan ID
        public function show($id){
            $datasiswa = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
            return $datasiswa;
        }
        // menampilkan data berdasarkan ID
        public function edit($id){
            $datasiswa = mysqli_query($this->koneksi,"select * from siswa where id='$id'");
            return $datasiswa;
        }
        // mengupdate data berdasarkan ID
        public function update($id, $nis, $nama, $alamat){
            mysqli_query($this->koneksi,"update siswa set nis='$nis',nama='$nama', alamat='$alamat' where id='$id'");
        }
        // menghapus data berdasarkan Id
        public function delete($id){
            mysqli_query($this->koneksi, "delete from siswa where id='$id'");
        }
    }

    // koneksi DB
    $db = new Database();
?>