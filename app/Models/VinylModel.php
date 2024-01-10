<?php
namespace App\Models;
use CodeIgniter\Model;
class VinylModel extends Model
{
 protected $table ="vinyl";
 /*Specifies the database table that this model primarily works with.
 This only applies to the built-in CRUD methods. 
 You are not restricted to using only this table in your own queries.*/
protected $primarykey ="id";


protected $allowedFields=[ "vinyl_album_name","vinyl_artist","vinyl_type","vinyl_release_date","comment"];

protected $useAutoIncrement     = true;

protected $validationRules      = [];
protected $validationMessages   = [];
protected $skipValidation       = false;
protected $cleanValidationRules = true;
/*
public function getVinyl($id = false) {
    if($id === false) {
      return $this->findAll();
    } else {
        return $this->getWhere(['id' => $id]);
    }
  }*/
public function call_vinyl(/*$searchval,$pageNumber,$offset*/)
{
  $db = \Config\Database::connect();
 // $query = $db->query("SELECT * FROM vinyl"  );
 $builder=$this->db->table("vinyl");
 $builder->select('vinyl.*,vinyllink.linkyoutube,vinyllink.linkspotify');
 $builder->join("vinyllink","vinyl.id=vinyllink.vinyl_id","left");
 /////////////////////
 /*if (!empty($searchval)) {
  $builder->like('name', $searchval)
         ->orLike('genre',$searchval)
         ->groupEnd();
  }
  $builder->limit($pageNumber,$offset);
  $results = $builder->get()->getResult();

  return $results;

///////////////////////*/
 $results = $builder->get()->getResult();
  /*echo "<pre>";
        print_r($results);*/
   return $results;
} 

public function deletebyid($id){
    return $this->db->table('vinyl')
    
    ->where("id", [$id])
    ->delete();
}


public function updateBymodeldata($id,$data){ 

    return $this->db->table('vinyl')
    
    ->where('id', [$id])
    ->update($data);
 

}
}