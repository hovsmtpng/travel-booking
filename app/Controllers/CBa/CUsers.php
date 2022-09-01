<?php

namespace App\Controllers\CBa;

use App\Controllers\BaseController;
use \Hermawan\DataTables\DataTable;

use App\Models\MBa\MUsers;

class CUsers extends BaseController
{

    public function index()
    {
        //
        //
        $data = [
            'title' => 'Data Users',
            'isi' => 'pages/backend/user_list'
        ];
        echo view('templates/layouts/backend/template', $data);
    }

    public function allusers(){
        $db = db_connect();
        $builder = $db->table('users')->select('id_users, fullname, email, password, level');
        
        return DataTable::of($builder)->toJson();
    }

    public function getUsers(){

        $request = service('request');
        $postData = $request->getPost();
        $dtpostData = $postData['data'];
        $response = array();
 
        ## Read value
        $draw = $dtpostData['draw'];
        $start = $dtpostData['start'];
        $rowperpage = $dtpostData['length']; // Rows display per page
        $columnIndex = $dtpostData['order'][0]['column']; // Column index
        $columnName = $dtpostData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $dtpostData['order'][0]['dir']; // asc or desc
        $searchValue = $dtpostData['search']['value']; // Search value
 
        ## Total number of records without filtering
        $users = new MUsers();
        $totalRecords = $users->select('id_users')
                 ->countAllResults();
 
        ## Total number of records with filtering
        $totalRecordwithFilter = $users->select('id_users')
                 ->orLike('fullname', $searchValue)
                 ->orLike('email', $searchValue)
                 ->orLike('password', $searchValue)
                 ->orLike('level', $searchValue)
                 ->countAllResults();
  
        ## Fetch records
        $records = $users->select('*')
                 ->orLike('fullname', $searchValue)
                 ->orLike('email', $searchValue)
                 ->orLike('password', $searchValue)
                 ->orLike('level', $searchValue)
                 ->orderBy($columnName,$columnSortOrder)
                 ->findAll($rowperpage, $start);
 
        $data = array();
 
        foreach($records as $record ){
 
           $data[] = array( 
              "id_users"=>$record['id_users'],
              "fullname"=>$record['fullname'],
              "email"=>$record['email'],
              "password"=>$record['password'],
              "level"=>$record['level']
           ); 
        }
        
        ## Response
        $response = array(
           "draw" => intval($draw),
           "iTotalRecords" => $totalRecords,
           "iTotalDisplayRecords" => $totalRecordwithFilter,
           "aaData" => $data,
           "token" => csrf_hash() // New token hash
        );
        return $this->response->setJSON($response);
    }
}