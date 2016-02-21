<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $article = M("Article");
        $data = $article -> order('id desc') -> select();
        $this -> assign("data",$data);
        $this -> display();
    }

    public function about(){
        $this -> display();
    }

    public function introduce(){
        $this -> display();
    }

    public function news(){
        $this -> display();
    }

    public function contact(){
        $this -> display();
    }

}