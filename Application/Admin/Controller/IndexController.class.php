<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this -> display();    
    }

    public function computer(){
        $this -> display();    
    }

    public function tacit(){
        $this -> display();    
    }

    public function error(){
        $this -> display();    
    }

    public function filelist(){
        $this -> display();    
    }

    public function form(){
        $note = M("Note");
        $data = $note -> create();
        $note->date = date("Y-m-d");
        $res = $note -> add();
        $this -> display();    
    }

    public function imglist(){
        $this -> display();    
    }

    public function imglist1(){
        $this -> display();    
    }

    public function imgtable(){
        $this -> display();    
    }

    public function left(){
        $this -> display();    
    }

    public function login(){
        $this -> display();    
    }

    public function right(){
        $this -> display();    
    }

    public function tab(){
        $this -> display();    
    }

    public function tools(){
        $this -> display();    
    }

    public function top(){
        $this -> display();    
    }

    public function main(){
        $this -> display();    
    }

}