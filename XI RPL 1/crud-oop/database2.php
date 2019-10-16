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
    class Biodata extends Database{
        // menampilkan semua data
        public function index(){
            $biodata = mysqli_query($this->koneksi, "select * from biodata");
            return $biodata;
        }
        // menambah data
        public function create($nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur){
            mysqli_query($this->koneksi,"insert into biodata values
            ('','$nama','$alamat','$tgl_lahir','$jenis_kelamin','$agama','$umur')");
        }
        // menampilkan data berdasarkan ID
        public function show($id){
            $biodata = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
            return $biodata;
        }
        // menampilkan data berdasarkan ID
        public function edit($id){
            $biodata = mysqli_query($this->koneksi,"select * from biodata where id='$id'");
            return $biodata;
        }
        // mengupdate data berdasarkan ID
        public function update($id, $nama, $alamat, $tgl_lahir, $jenis_kelamin, $agama, $umur){
            mysqli_query($this->koneksi,
            "update biodata set nama='$nama',alamat='$alamat', tgl_lahir='$tgl_lahir',
            jenis_kelamin='$jenis_kelamin', agama='$agama', umur='$umur' where id='$id'");
        }
        // menghapus data berdasarkan Id
        public function delete($id){
            mysqli_query($this->koneksi, "delete from biodata where id='$id'");
        }
    }

    $db = new Database();
?>