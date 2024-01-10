<?php

namespace App\Controllers;
use App\Models\VinylModel;
use App\Models\LinkModel;
class VinylController extends BaseController
{
    private VinylModel $model;
    private LinkModel $linkModel;
    public function __construct(){
        $this->model=new VinylModel;
        $this->linkModel=new LinkModel;
    }
    public function index(){
        return view('Home/vinylindex.php');
    }
     public function showdata(){
        $data= $this->model->call_vinyl();
        echo json_encode($data);
        /////////////////
       /* $vinyl=new VinylModel;
        //define 
        $searchData=$this->request->getGet("search")["value"];
        $pageinfo=$this->request->getGet("length");
        $draw=$this->request->getGet("draw");
        $page_size = 10;

        //define total records
        $totalRecords=$this->model->select("id")->countAllResults();
        $totalRecordswithFilter=$vinyl->select("id")->orLike("vinyl_album_name",$searchData)->countAllResults();
        $total_pages = ceil($totalRecords / $page_size);
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        if ($page < 1 || $page > $total_pages) {
            $page = 1;
          }
         //set offset
         // $offset = ($page -1) * $page_size;
         $offset=10;
        $limit=$page_size;
        $data = $this->model->call_vinyl($searchData, $limit, $offset);
       
        
        $response=array(
            'draw'=>$draw,
            'totalRecords'=>$totalRecords,
            'iTotalDisplayRecords'=>$totalRecordswithFilter,
            'data'=>$data,
            'token'=>csrf_token()
        );       
        $lastQuery= $vinyl->getLastQuery()->getQuery();
       echo json_encode($response);*/
    }
    public function add_vinyl(){
        $model=new VinylModel;
        $data=[
        'vinyl_album_name' => $this->request->getPost('vinyl_album_name'),
        'vinyl_artist' => $this->request->getPost('vinyl_artist'),
        'vinyl_type' => $this->request->getPost('vinyl_type'),
        'vinyl_release_date' => $this->request->getPost('vinyl_release_date'),
        'comment' => $this->request->getPost('comment'),
    ];
    /* print_r($data);
    exit();*/
    if($model->insert($data)){
        $response = [
            'success' => true,
            'msg' => "Vinyl created",
        ];
    } else {
            $response = [
                'success' => true,
                'msg' => "Failed to create vİNYL",
            ];
        }
        return $this->response->setJSON($response);
    }

         //delete
         public function delete(){
  
        
            $model=new VinylModel;
            $id= $this->request->getPost('id');
            // print_r($id);
            // exit();
           
            
    
            $result = $this->model->deletebyid($id);
    
    
            
            if($result) {
                echo "vinyl is deleted successfully.";
            } else {
                echo "Something went wrong";
            }
        }

        public function update(){
            $id		         = $this->request->getPost('id');
            $vinyl_album_name		= $this->request->getPost('vinyl_album_name');
            $vinyl_artist	= $this->request->getPost('vinyl_artist');
            $vinyl_type	= $this->request->getPost('vinyl_type');
            $vinyl_release_date	= $this->request->getPost('vinyl_release_date');
            $comment	= $this->request->getPost('comment');

           
    
            $data = [
                'id'           =>$id,
                 'vinyl_album_name'		=> $vinyl_album_name,
                'vinyl_artist'		=> $vinyl_artist,
                'vinyl_type'	    => $vinyl_type,
                'vinyl_release_date'	    => $vinyl_release_date,
                'comment'	    => $comment

            ];
           
            $result = $this->model->updateBymodeldata($id, $data);
            //print_r($data);
            if($result) {
                echo "Vinyl details are updated successfully.";
            } else {
                echo "Something went wrong";
            }
           
        }

        //Add link
        public function addlink(){
            $linkModel=new LinkModel;
            $data=[
            'vinyl_id' => $this->request->getPost('vinyl_id'),
            'linkyoutube' => $this->request->getPost('linkyoutube'),
            'linkspotify' => $this->request->getPost('linkspotify'),
            ];
            /*print_r($data);
            exit();*/
            if($linkModel->insert($data)){
                $response = [
                'success' => true,
                'msg' => "Link created",
                ];
                } else {
                    $response = [
                    'success' => true,
                    'msg' => "Failed to create vİNYL",
                    ];
                    }
                    return $this->response->setJSON($response);
                    }
    


        }


        
   // }
    
