<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Technologys extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'technologys';
    protected $fillable = ['id','id_categori','judul','isi_portal','penulis','hari','tgl','gambar','created_at', 'updated_at'];

    public function Categori(){
        return $this->belongsTo(Categorie::class, 'id_categori');
    }
    
}