<?php

namespace App\Controllers;
use App\Models\GameModel;

class GameController extends BaseController
{
    private GameModel $model;
    
    public function __construct(){
        $this->model=new GameModel;
        
    }
    public function index(){
        return view('Home/gameindex.php');
    }
    public function showgamedata(){
        
        $game=new GameModel;
        //define 
        $searchData=$this->request->getGet("search")["value"];
        $pageinfo=$this->request->getGet("length");
        $start=$this->request->getGet("start");
        $draw=$this->request->getGet("draw");
        
        //define total records
        $totalRecords=$this->model->select("id")->countAllResults();
        $totalRecordswithFilter=$this->model->select("id")->orLike("name",$searchData)->countAllResults();
       
        $data = $this->model->call_game($searchData, $pageinfo, $start);
      
        
        
        $response=array(
            'draw'=>$draw,
            'totalRecords'=>$totalRecords,
            'iTotalDisplayRecords'=>$totalRecordswithFilter,
            'data'=>$data,
            'token'=>csrf_token()
        );
        //GET last query       
        $lastQuery= $game->getLastQuery()->getQuery();
       
       echo json_encode($response); 
   
       
       
 
    }
  

    public function add_game(){
        $model=new GameModel;
        $data=[
        'name' => $this->request->getPost('name'),
        'genre' => implode(",",$this->request->getPost('genre')),
        'platform' => implode(",",$this->request->getPost('platform')),
        'developer' => $this->request->getPost('developer'),
        'publisher' => $this->request->getPost('publisher'),
        'exclusive' => $this->request->getPost('exclusive'),
        'metascore' => $this->request->getPost('metascore'),
        'userscore' => $this->request->getPost('userscore'),
        'myscore' => $this->request->getPost('myscore'),
        'completionstatus' => $this->request->getPost('completionstatus'),
        'releasedate' => $this->request->getPost('releasedate'),
    ];
   
     /*print_r($data);
    exit();*/
    if($model->insert($data)){
        $response = [
            'success' => true,
            'msg' => "Game created",
        ];
    } else {
            $response = [
                'success' => true,
                'msg' => "Failed to create game",
            ];
        }
        return $this->response->setJSON($response);
    }


   //update
   public function update(){

    $id		         = $this->request->getPost('id');
    $name		= $this->request->getPost('name');
    $genre	= implode(",",$this->request->getPost('genre[]'));
    $platform	= implode(",",$this->request->getPost('platform'));
    $developer	= $this->request->getPost('developer');
    $publisher	= $this->request->getPost('publisher');
    $exclusive	= $this->request->getPost('exclusive');
    $metascore	= $this->request->getPost('metascore');
    $userscore	= $this->request->getPost('userscore');
    $myscore	= $this->request->getPost('myscore');
    $completionstatus	= $this->request->getPost('completionstatus');
    $releasedate	= $this->request->getPost('releasedate');

   

    $data = [
        'id'           =>$id,
         'name'		=> $name,
        'genre'		=> $genre,
        'platform'		=> $platform,
        'developer'	    => $developer,
        'publisher'	    => $publisher,
        'exclusive'	    => $exclusive,
        'metascore'	    => $metascore,
        'userscore'	    => $userscore,
        'myscore'	    => $myscore,
        'completionstatus'	    => $completionstatus,
        'releasedate'	    => $releasedate

    ];
  //  print_r($data);
    $result = $this->model->updateBymodeldata($id, $data);
  
    if($result) {
        echo "Game details are updated successfully.";
    } else {
        echo "Something went wrong";
    }
   
}


  //delete
  public function delete(){
  
        
    $model=new GameModel;
    $id= $this->request->getPost('id');
    // print_r($id);
     //exit();
   
    

    $result = $this->model->deletebyid($id);


    
    if($result) {
        echo "game is deleted successfully.";
    } else {
        echo "Something went wrong";
    }
}
}