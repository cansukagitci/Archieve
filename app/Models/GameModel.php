<?php
namespace App\Models;
use CodeIgniter\Model;
class GameModel extends Model
{
 protected $table ="game";

 private $_name;
 /*Specifies the database table that this model primarily works with.
 This only applies to the built-in CRUD methods. 
 You are not restricted to using only this table in your own queries.*/
protected $primarykey ="id";


protected $allowedFields=[ "name","genre","platform","developer","publisher","exclusive","metascore","userscore","myscore","completionstatus","releasedate"];

protected $useAutoIncrement     = true;

protected $validationRules      = [];
protected $validationMessages   = [];
protected $skipValidation       = false;
protected $cleanValidationRules = true;
public function call_game($searchval,$limit,$offset)
{
  $db = \Config\Database::connect();
  
  $builder=$this->db->table("game");
  $builder->select('game.*');
  if (!empty($searchval)) {
  $builder->like('name', $searchval)
         ->orLike('genre',$searchval);
         
  }
  $builder->limit($limit,$offset);
  $results = $builder->get()->getResult();

  return $results;
} 


public function updateBymodeldata($id,$data){ 

    return $this->db->table('game')
    
    ->where('id', [$id])
    ->update($data);
 

}
public function deletebyid($id){
  return $this->db->table('game')
  
  ->where("id", [$id])
  ->delete();
}


}