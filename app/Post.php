<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'titre',
    'description',
    'contenu',
    'user_id',
    'image',
    'categorie_id'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
     }
}
