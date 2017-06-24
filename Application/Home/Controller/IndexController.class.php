<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        $videolist = D('video')->limit(5)->select();
        $this->assign('videolist',$videolist);
        $index_img1 = D('edtmsg')->where(array('e_type' => 0))->select();
        $this->assign('index_img1',$index_img1);
        $dynamic_index = D('Article')-> where(array('a_type' => 2))->order('a_ctime DESC')->limit(5)->select();
        $this->assign('dynamic_index',$dynamic_index);
        $news_index = D('Article')-> where(array('a_type' => 0))->order('a_ctime DESC')->limit(14)->select();
        $gallery = D('Gallery')->limit(5)->select();
        $this->assign('gallery',$gallery);
        $this->assign('news_index',$news_index);
        $notice_index = D('Article')-> where(array('a_type' => 1))->order('a_ctime DESC')->limit(6)->select();
        $this->assign('notice_index',$notice_index);
        $this->display();
    }
    public function survey(){
        $this->assign('title','学院概况');
        $this->assign('nav_1','active');
        $this->display();
    }
    public function teaching(){
    	$this->display();
    }
    public function majors(){
        $this->assign('title','人才培养');
        $this->assign('nav_2','active');
        $this->display();
    }
    public function research(){
        $this->assign('title','研究创作');
        $this->assign('nav_3','active');
        $this->display();
    }
    public function campus(){
        $sub = I('get.sub');
        if(empty($sub)){
            $article = D('article')->getarticleByPage(10,0,'');
            $this->assign('c_title','全部新闻');
        }
        else{
            $article = D('article')->getarticleByPage(10,0,$sub);
            $this->assign('c_title',$sub);
        }
        $gallery = D('gallery')->order('g_ctime DESC')->limit(3)->select();
        $this->assign('gallery',$gallery);
        $this->assign('article',$article['lists']);
        $this->assign('pages',$article['pages']);
        $this->assign('title','党团工学');
        $this->assign('nav_4','active');
        $this->display();
    }
    public function newlist(){
        $sub = I('get.sub');
        if(empty($sub)){
            $article = D('article')->getarticleByPage(10,1,'');
            $this->assign('c_title','全部公告');
        }
        else{
            $article = D('article')->getarticleByPage(10,1,$sub);
            $this->assign('c_title',$sub);
        }
        $gallery = D('gallery')->order('g_ctime DESC')->limit(3)->select();
        $this->assign('gallery',$gallery);
        $this->assign('article',$article['lists']);
        $this->assign('pages',$article['pages']);
        $this->assign('title','公告列表');
        $this->display();
    }
    public function dynamic(){
        $sub = I('get.sub');
        if(empty($sub)){
            $article = D('article')->getarticleByPage(10,2,'');
            $this->assign('c_title','全部动态');
        }
        else{
            $article = D('article')->getarticleByPage(10,2,$sub);
            $this->assign('c_title',$sub);
        }
        $gallery = D('gallery')->order('g_ctime DESC')->limit(3)->select();
        $this->assign('gallery',$gallery);
        $this->assign('article',$article['lists']);
        $this->assign('pages',$article['pages']);
        $this->assign('title','动态列表');
        $this->display();
    }
}