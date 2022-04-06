<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Categorie extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Categories';
    protected $fillable = ['id','name_categori', 'created_at', 'updated_at'];

    
}