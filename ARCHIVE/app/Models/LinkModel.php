<?php
namespace App\Models;
use CodeIgniter\Model;
class LinkModel extends Model
{
    protected $table = "vinyllink";
    protected $primaryKey = "id";
    protected $returnType = "";
    protected $allowedFields = ["vinyl_id","linkyoutube","linkspotify"];
    public function call_youtubelink()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT linkyoutube FROM vinyllink");
        $results = $query->getResultArray();
        return $results;
    } 

    public function call_spotifylink()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT linkspotify FROM vinyllink");
        $results = $query->getResultArray();
        return $results;
    } 
    

}
