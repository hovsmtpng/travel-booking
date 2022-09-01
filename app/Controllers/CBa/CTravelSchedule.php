<?php

namespace App\Controllers\CBa;

use App\Controllers\BaseController;

use App\Models\MBa\MTravelSchedule;
use App\Models\MBa\MPoolKeberangkatan;
use App\Models\MBa\MPoolTujuan;

class CTravelSchedule extends BaseController
{
    protected $MTravelSchedule;
    
    public function __construct()
    {
        helper('form');
        $this->MTravelSchedule = new MTravelSchedule();
        $this->MPoolKeMPoolKeberangkatan = new MPoolKeberangkatan();
        $this->MPoolTujuan = new MPoolTujuan();
	}
    public function index()
    {
        $travel_schedule = $this->MTravelSchedule->travel_schedule();
        //
        $data = [
            'title' => 'Data Jadwal Bus',
            'travel_schedule' => $travel_schedule,
            'isi' => 'pages/backend/travelschedule'
        ];
        echo view('templates/layouts/backend/template', $data);
    }

    public function add()
    {
        //
        $pool_keberangkatan = $this->MPoolKeMPoolKeberangkatan->pool_keberangkatan();
        $pool_tujuan = $this->MPoolTujuan->pool_tujuan();
        $data = [
            'title' => 'Tambah Jadwal Bus',
            'pool_keberangkatan' => $pool_keberangkatan,
            'pool_tujuan' => $pool_tujuan,
            'isi' => 'pages/backend/add_travel_schedule'
        ];
        echo view('templates/layouts/backend/template', $data);
    }

    public function actionadd()
    {
        helper(['form', 'url']);
        
        $pool_keberangkatan = $this->request->getPost('pool_keberangkatan');
        $pool_tujuan = $this->request->getPost('pool_tujuan');
        $tanggal = $this->request->getPost('tanggal');
        $newDate = date("Y-m-d", strtotime($tanggal));
        $jam_keberangkatan = $this->request->getPost('jam_keberangkatan');
        $price = $this->request->getPost('price');
        $seat = $this->request->getPost('seatnya');
        $checked="";

        foreach($seat as $chk1)  
        {  
            $checked .= $chk1.",";  
        } 

        $seat_name = implode(',', $_POST['seatnya']);
        // var_dump($id_users);
        $MTravelSchedule = new MTravelSchedule();

        $MTravelSchedule->insert([
            'id_pool_keberangkatan' => $pool_keberangkatan,
            'id_pool_tujuan' => $pool_tujuan,
            'tanggal_keberangkatan' => $newDate,
            'jam_keberangkatan' => $jam_keberangkatan,
            'price' => $price,
            'seat' => $seat_name,
        ]);
        return redirect()->to(base_url('CBa/CTravelSchedule'));
    }

    public function edittravelschedule($id_departure_schedule)
    {
        $tanggal = $this->request->getPost('tanggal');
        $newDate = date("Y-m-d", strtotime($tanggal));
        $jam_keberangkatan = $this->request->getPost('jam_keberangkatan');
        $price = $this->request->getPost('price');
        $seat = $this->request->getPost('seat');
        $seat_name = implode(',', $_POST['seatnya']);

        $this->MTravelSchedule->update($id_departure_schedule, [
            'tanggal_keberangkatan' => $newDate,
            'jam_keberangkatan' => $jam_keberangkatan,
            'price' => $price,
            'seat' => $seat_name,
            
        ]);

        return redirect()->to(base_url('CBa/CTravelSchedule'));
    }

    public function deletetravelschedule($id){
        $this->MTravelSchedule->delete($id);

        return redirect()->to(base_url('CBa/CTravelSchedule'));
    }

    public function ToExcel()
    {
        $travel_schedule = $this->MTravelSchedule->travel_schedule();
        //
        $data = [
            'title' => 'Data Jadwal Bus',
            'travel_schedule' => $travel_schedule,
            // 'isi' => 'pages/backend/travelschedule'
        ];
        echo view('pages/backend/export_excel', $data);
    }

    function ToPdf(){
        $travel_schedule = $this->MTravelSchedule->travel_schedule();
        $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('pages/backend/export_pdf', ["travel_schedule" => $travel_schedule]));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    } 
}