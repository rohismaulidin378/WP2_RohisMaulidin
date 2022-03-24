<?php

namespace App\Controllers;

class Coba1 extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Hello World";
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model("Model_coba1");

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_coba1->jumlah($n1, $n2);

        $this->load->view('view-coba1', $data);
    }
}
