<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class News extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';
    protected $fillable = ['id','id_tek','id_sport','id_oto','id_food','id_finance','id_enter',
                            'id_travel','id_health','id_edu','id_properti','id_ekonomi','id_nas',
                            'id_inter','created_at','updated_at'];

    public function teknologi(){
        return $this->belongsTo(Technologys::class, 'id_tek');
    }                         

    
}