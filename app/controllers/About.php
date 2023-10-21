<?php 

class About {
    public function index($nama = 'imam', $pekerjaaan = 'CEO')
    {
        echo "halo, nama saya $nama, saya adalah seorang $pekerjaaan";
    }

    public function page()
    {
        echo 'About/page';
    }
}
