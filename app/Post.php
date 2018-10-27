<?php
 namespace App;
use Illuminate\Database\Eloquent\Model;
 class Post extends Model {
     protected $fillable = ['title','content'];

     public function likes(){
         return $this->hasMany('App\Like');
     }
     public function tags(){
         return $this->belongsToMany('App\Tag')->withTimestamps();
     }
     public function setTitleAttribute($value)
     {
         $this->attributes['title'] = strtoupper($value);
     }
     public function getTitleAttribute($value){
         return strtolower($value);
     }
     public function user(){
         return $this->belongsTo('App\User');
     }
 }