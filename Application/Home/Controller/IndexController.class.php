<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        // //查询文章列表，获取最新文章
        // $article = M("Article");
        // $data = $article-> order('id desc') -> select();
        // $this -> assign("data",$data);
        // //查询留言列表，获取最新留言
        // $mes = M("Message");
        // $megs = $mes -> limit(4) -> order('id desc')->field('message,date') ->select();
        // $this -> assign("megs",$megs);
        $this -> display();
    }

    public function about(){
        $this -> display();
    }

    public function introduce(){
        $this -> display();
    }

    public function news(){
        $new = M('News');
        $news = $new ->order('id desc') -> select();
        $this->assign("news",$news);
        $this -> display();
    }

    public function contact(){
        $this -> display();
    }

    //得到多说的留言数据，并写入数据库
    public function getMes(){
        if(isset($_POST['action']) && isset($_POST['signature'])){
            $mess = M("Message"); 
            $result = $mess->order("id desc")->limit(1)->select();
            $since_id = $result[0]['log_id'];
            //获取留言数据的接口
            $url = "http://api.duoshuo.com/log/list.json?short_name=futurelib&secret=4ee3486455456a993f932e7125dc7a02&limit=1&since_id=0".$since_id;
            $ch = curl_init();  //初始化curl
            curl_setopt($ch, CURLOPT_URL, $url);    //设置URL
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);    //设置参数
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            $output = curl_exec($ch);  //执行并返回结果
            // if(curl_errno($ch)){       //检查curl执行是否成功
            //  echo 'Errno'.curl_errno($ch);
            // }   
            curl_close($ch);
            $info = json_decode($output, true);
            // print_r($info);
            // print_r($info['response'][0]['action']);
            // echo "操作类型：".$info['response'][0]['action']."<br/>";
            // echo "留言者：".$info['response'][0]['meta']['author_name']."<br/>";
            // echo "留言内容：".$info['response'][0]['meta']['message']."<br/>";
            // echo "log_id：".$info['response'][0]['log_id']."<br/>";
            // echo "创建时间戳：".$info['response'][0]['date']."<br/>";
            //$mess = M("Message"); 
            if($info['response'][0]['action'] == "create") {
                $data['log_id'] = $info['response'][0]['log_id'];
                $data['author_name'] = $info['response'][0]['meta']['author_name'];
                $data['message'] = $info['response'][0]['meta']['message'];
                $data['date'] = $info['response'][0]['date'];
                $mess->add($data);
                $since_id = $info['response'][0]['log_id'];
            }
        }
    }

    public function leaveMes(){
       $con = M("Contentus"); // 实例化User对象
       $data['name'] =$_POST['name'];
       $data['email'] = $_POST['email'];
       $data['message'] = $_POST['mesCon'];
       $data['date'] = time();
       $result = $con->add($data);
       echo $result;
   }

   public function footer() {
        //查询文章列表，获取最新文章
        $article = M("Article");
        $data = $article-> order('id desc') -> select();
        $this -> assign("data",$data);
        //查询留言列表，获取最新留言
        $mes = M("Message");
        $megs = $mes -> limit(4) -> order('id desc')->field('message,date') ->select();
        $this -> assign("megs",$megs);
        $this->display();
   }
}