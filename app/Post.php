<?php
 namespace App;
use Illuminate\Database\Eloquent\Model;
 class Post extends Model {
     protected $fillable = ['title','content'];

     public function getposts($session){
         if(!$session->has('posts')){
             $this->sampleData($session);
         }
         return $session->get('posts');
     }

     private function sampleData($session){

         $post = [[
             'title'=>'it is title with id 1',
             'content'=>'it is content with id 1'
         ],
             [
                 'title'=>'it is title with id 2',
                 'content'=>'it is content with id 2'
             ]
             ];

         $session->put('posts',$post);

     }
     public function getpost($session,$id){
         if(!$session->has('posts')){
             $this->sampleData($session);
         }
        return $session->get('posts')[$id];
     }
     public function addpost($session,$title,$content){
         if(!$session->has('posts')){
             $this->sampleData($session);
         }
         $posts = $session->get('posts');
         array_push($posts,['title'=>$title,'content'=>$content]);
        $session->put('posts',$posts);
     }
     public function editpost($session,$id,$title,$content){

        $posts = $session->get('posts');
         $posts[$id] = ['title'=>$title,'content'=>$content];
         $session->put('posts',$posts);


     }

 }