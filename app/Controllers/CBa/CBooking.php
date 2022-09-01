<?php

namespace App\Controllers\CBa;

use App\Controllers\BaseController;

use App\Models\MBa\MBooking;
use App\Models\MBa\MTravelSchedule;

class CBooking extends BaseController
{
    protected $MBooking;
    
    public function __construct()
    {
        helper('form');
        $this->MBooking = new MBooking();
        $this->MTravelSchedule = new MTravelSchedule();
	}
    public function index()
    {
        $bookinglist = $this->MBooking->booking_list();
        $travel_schedule = $this->MTravelSchedule->travel_schedule();
        //
        $data = [
            'title' => 'Data Jadwal Bus',
            'bookinglist' => $bookinglist,
            'travel_schedule' => $travel_schedule,
            'isi' => 'pages/backend/booking_list'
        ];
        echo view('templates/layouts/backend/template', $data);
    }

    public function newbooking()
    {
        //
        $travel_schedule = $this->MTravelSchedule->travel_schedule();
        $data = [
            'title' => 'New Booking',
            'travel_schedule' => $travel_schedule,
            'isi' => 'pages/backend/newbooking'
        ];
        echo view('templates/layouts/backend/template', $data);
    }
    public function get_schedule(){
        $id = $_REQUEST['id'];
        $travel_schedule = $this->MTravelSchedule->travel_schedule_by_id($id);
        echo json_encode($travel_schedule);
    }

    public function insertnewbooking()
    {
        helper(['form', 'url']);
        
        $kodebooking = $this->request->getPost('kodebooking');
        $namapenumpang = $this->request->getPost('namapenumpang');
        $id_users = $this->request->getPost('id_users');
        $id_departure_schedule = $this->request->getPost('jadwalkeberangkatan');
        $status = $this->request->getPost('status');
        $seat = $this->request->getPost('seat');
        $paymentstatus = $this->request->getPost('paymentstatus');
        // var_dump($id_users);
        $MBooking = new MBooking();

        $MBooking->insert([
            'kode_booking' => $kodebooking,
            'nama_penumpang' => $namapenumpang,
            'id_users' => $id_users,
            'tanggal_booking' => date("Y-m-d"),
            'id_departure_schedule' => $id_departure_schedule,
            'status' => $status,
            'seat' => $seat,
            'payment_status' => $paymentstatus,
        ]);
        return redirect()->to(base_url('CBa/CBooking'));
    }

    public function editbooking($id_booking)
    {
        $namapenumpang = $this->request->getPost('namapenumpang');
        $seat = $this->request->getPost('seat');
        $status = $this->request->getPost('status');
        $paymentstatus = $this->request->getPost('paymentstatus');

        $this->MBooking->update($id_booking, [
            'nama_penumpang' => $namapenumpang,
            'seat' => $seat,
            'status' => $status,
            'payment_status' => $paymentstatus,
            
        ]);

        return redirect()->to(base_url('CBa/CBooking'));
    }

    public function deletebooking($id){
        $this->MBooking->delete($id);

        return redirect()->to(base_url('CBa/CBooking'));
    }

    public function ToExcel()
    {
        $bookinglist = $this->MBooking->booking_list();
        //
        $data = [
            'title' => 'Data Booking Bus Damri',
            'bookinglist' => $bookinglist,
            // 'isi' => 'pages/backend/travelschedule'
        ];
        echo view('pages/backend/export_excel_booking', $data);
    }

    function ToPdf(){
        $bookinglist = $this->MBooking->booking_list();
        $dompdf = new \Dompdf\Dompdf(); 
        $dompdf->loadHtml(view('pages/backend/export_pdf_booking', ["bookinglist" => $bookinglist]));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream();
    }
}