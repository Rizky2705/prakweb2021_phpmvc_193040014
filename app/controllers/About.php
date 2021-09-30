<?php
class About {

    public function index($nama = 'Muhamad Rizky Fauzan', $pekerjaan = 'Mahasiswa'){
       echo "halo, nama saya $nama, saya adalah seorang $pekerjaan"; 
    }

    public function page(){
        echo 'About/page';
    }

}