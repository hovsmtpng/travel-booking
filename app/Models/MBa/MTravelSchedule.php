<?php

namespace App\Models\MBa;

use CodeIgniter\Model;

class MTravelSchedule extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'departure_schedule';
    protected $primaryKey       = 'id_departure_schedule';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id_pool_keberangkatan',
        'id_pool_tujuan',
        'tanggal_keberangkatan',
        'jam_keberangkatan',
        'price',
        'seat',
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

    public function travel_schedule(){
        $query = $this->db->query("
        SELECT
        departure_schedule.id_departure_schedule,

        departure_schedule.id_pool_keberangkatan,
        pool_keberangkatan.nama_pool_keberangkatan AS nama_pool_keberangkatan,

        departure_schedule.id_pool_tujuan,
        pool_tujuan.nama_pool_tujuan AS nama_pool_tujuan,

        departure_schedule.tanggal_keberangkatan,
        departure_schedule.jam_keberangkatan,
        departure_schedule.price,
        departure_schedule.seat


        FROM departure_schedule
        INNER JOIN pool_keberangkatan ON departure_schedule.id_pool_keberangkatan = pool_keberangkatan.id_pool_keberangkatan
        INNER JOIN pool_tujuan ON departure_schedule.id_pool_tujuan = pool_tujuan.id_pool_tujuan


        ");
        return $query->getResultArray();
    }
    public function travel_schedule_by_id($id){
        $query = $this->db->query("
        SELECT
        departure_schedule.id_departure_schedule,

        departure_schedule.id_pool_keberangkatan,
        pool_keberangkatan.nama_pool_keberangkatan AS nama_pool_keberangkatan,

        departure_schedule.id_pool_tujuan,
        pool_tujuan.nama_pool_tujuan AS nama_pool_tujuan,

        departure_schedule.tanggal_keberangkatan,
        departure_schedule.jam_keberangkatan,
        departure_schedule.price,
        departure_schedule.seat


        FROM departure_schedule
        INNER JOIN pool_keberangkatan ON departure_schedule.id_pool_keberangkatan = pool_keberangkatan.id_pool_keberangkatan
        INNER JOIN pool_tujuan ON departure_schedule.id_pool_tujuan = pool_tujuan.id_pool_tujuan

        WHERE departure_schedule.id_departure_schedule = '$id';

        ");
        return $query->getResultArray();
    }
}