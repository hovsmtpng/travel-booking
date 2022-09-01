<?php

namespace App\Models\MBa;

use CodeIgniter\Model;

class MBooking extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'booking_list';
    protected $primaryKey       = 'id_booking';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'kode_booking',
        'nama_penumpang',
        'id_users',
        'tanggal_booking',
        'id_departure_schedule',
        'status',
        'seat',
        'payment_status',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function booking_list(){
        $query = $this->db->query("
        SELECT
        booking_list.id_booking,
booking_list.kode_booking,
booking_list.nama_penumpang,
booking_list.tanggal_booking,
booking_list.status,
booking_list.seat,
booking_list.payment_status,
pool_keberangkatan.nama_pool_keberangkatan,
pool_tujuan.nama_pool_tujuan
FROM
booking_list

LEFT JOIN departure_schedule ON booking_list.id_departure_schedule = departure_schedule.id_departure_schedule
LEFT JOIN pool_keberangkatan ON departure_schedule.id_pool_keberangkatan = pool_keberangkatan.id_pool_keberangkatan
LEFT JOIN pool_tujuan ON departure_schedule.id_pool_tujuan = pool_tujuan.id_pool_tujuan");
        return $query->getResultArray();
    }
}