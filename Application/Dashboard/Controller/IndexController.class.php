<?php
namespace Dashboard\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			$this->assign('d1','active');
			$this->display();
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function news(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			if(IS_POST)
			{
				$this->up_article();
			}
			else{
				$this->assign('parentsname','新闻列表');
				$sub = I('get.sub');
				$article = D('article')->where(array('a_type_sub'=>$sub))->select();
				$this->assign('article',$article);
				$this->assign('subname',$sub);
				$this->assign('a_type',0);
				$this->assign('a_type_sub',$sub);
				$this->assign('d2','active');
				$this->display('article');
			}
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function notice(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			if(IS_POST)
			{
				$this->up_article();
			}
			else{
				$this->assign('parentsname','公告列表');
				$sub = I('get.sub');
				$article = D('article')->where(array('a_type_sub'=>$sub))->select();
				$this->assign('article',$article);
				$this->assign('subname',$sub);
				$this->assign('a_type_sub',$sub);
				$this->assign('a_type',1);
				$this->assign('d3','active');
				$this->display('article');
			}
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function dynamic(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			if(IS_POST)
			{
				$this->up_article();
			}
			else{
				$this->assign('parentsname','动态列表');
				$sub = I('get.sub');
				$article = D('article')->where(array('a_type_sub'=>$sub))->select();
				$this->assign('article',$article);
				$this->assign('subname',$sub);
				$this->assign('a_type_sub',$sub);
				$this->assign('a_type',2);
				$this->assign('d4','active');
				$this->display('article');
			}
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function photo(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			$g_type = I('get.sub');
			$gallery = D('gallery')->where(array('g_type'=>$g_type))->order('g_ctime DESC')->select();
			$this->assign('gallery',$gallery);
			$this->assign('parentsname','图片展示');
			$sub = I('get.sub');
			$this->assign('subname',$sub);
			$this->assign('d5','active');
			$this->display();
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function up_photo(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			if(IS_POST)
			{
				$this->up_img();
			}
			$this->assign('d5','active');
			$this->display();
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function video(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			$video = D('video')->order('v_ctime DESC')->select();
			$this->assign('video',$video);
			$this->assign('parentsname','上传视频');
			$sub = I('get.sub');
			$this->assign('subname',$sub);
			$this->assign('d6','active');
			$this->display();
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function up_video(){
		if(session('?logineduserid')&&(session('loginedusertype')==0)){
			if(IS_POST)
			{
				$this->up_vid();
			}
			$this->assign('d6','active');
			$this->display();
		}
		else{
			$this->error('只有管理员才可以进入,请先登录', '/Dashboard/User/login');
		}
	}
	public function del_photo(){
		$g_id = I('get.g_id');
		$gallery = D('gallery');
		$str = $gallery->where(array('g_id'=>$g_id))->getField('g_url');
		$str1 = $gallery->where(array('g_id'=>$g_id))->getField('g_thumb_url');
		$r = $gallery->where(array('g_id'=>$g_id))->delete();
		if($r){
			unlink(iconv('utf-8', 'gbk','./Public/assets/images/gallery/'.$str));
			unlink(iconv('utf-8', 'gbk','./Public/assets/images/gallery/'.$str1));
			$this->success('删除了');
		}
		else{
			$this->error('删除失败');
		}
	}
	public function edt_photo(){
		$g_id = I('get.g_id');
		$g_title = I('get.g_title');
		$gallery = D('gallery');
		$data['g_title'] = $g_title;
		$r = $gallery->where(array('g_id'=>$g_id))->data($data)->save();
		if($r)
			$this->success('修改成功');
		else
			$this->error('修改失败');
	}
	public function del_video(){
		$v_id = I('get.vid');
		$video = D('video');
		$str = $video->where(array('v_id'=>$v_id))->getField('v_url');
		$r = $video->where(array('v_id'=>$v_id))->delete();
		if($r){
			unlink(iconv('utf-8', 'gbk','./Public/assets/'.$str));
			$this->success('删除了');
		}
		else{
			$this->error('删除失败');
		}
	}
	public function edt_video(){
		$v_id = I('get.v_id');
		$v_title = I('get.v_title');
		$v_source = I('get.v_source');
		$video = D('video');
		$data['v_title'] = $v_title;
		$data['v_source'] = $v_source;
		$r = $video->where(array('v_id'=>$v_id))->data($data)->save();
		if($r)
			$this->success('修改成功');
		else
			$this->error('修改失败');
	}
	private function up_article(){
		if(IS_POST){
			$a_title = I('post.a_title');
			$a_type = I('post.a_type');
			$a_type_sub = I('post.a_type_sub');
			$a_content = I('post.a_content');
			$a_uid = session('logineduserid');
			$article = D('article');
			$r = $article -> insertP($a_title, $a_type, $a_type_sub, $a_content, $a_uid);
			if($r)
			{
				$this->success('发布成功');
			}
			else{
				$this->error('发布失败，请检查');
			}
		}
	}
	private function up_img(){
		if(IS_POST){ 
			if (!empty($_FILES)) {
				$upload = new \Think\Upload();
				$upload->maxSize   =     3145728 ;
				$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
				$upload->rootPath  =     './Public/assets/images/gallery/'; 
				$upload->autoSub  =      false;
				$upload->savePath  =     'images/';
				$info   =   $upload->upload();
				
				if($info)
				{
					foreach($info as $file){
						$g_title = $file['savename'];
						$g_url = $file['savepath'].$file['savename'];
						
						$g_uid = session('logineduserid');

						$image = new \Think\Image(); 
						$image->open('./Public/assets/images/gallery/'.$g_url);
						$image->thumb(150, 150,\Think\Image::IMAGE_THUMB_NORTHWEST)->save('./Public/assets/images/gallery/thumbs/'.$file['savename']);
						$g_thumb_url = 'thumbs/'.$file['savename'];

						$gallery = D('gallery');
						$r = $gallery -> insertP($g_thumb_url, $g_url, $g_title, $g_uid);
						if($r)
							$this->success('上传成功');
					}
				}
				else{
					$this->error('上传失败，请检查');
				}
			}
		}
	}
	private function up_vid(){
		if(IS_POST){  
			if (!empty($_FILES)) {
				$upload = new \Think\Upload();
				$upload->maxSize   =     0;
				$upload->exts      =     array('mp4', 'webmv', 'ogv', 'm4v');
				$upload->rootPath  =     './Public/assets/'; 
				$upload->autoSub  =      false;
				$upload->savePath  =     'video_demo/';
				$info   =   $upload->upload();
				
				if($info)
				{
					foreach($info as $file){
						$v_title = $file['savename'];
						$v_url = $file['savepath'].$file['savename'];
						$v_source = $file['savepath'].$file['savename'];
						$v_uid = session('logineduserid');

						// $image = new \Think\Image(); 
						// $image->open('./Public/assets/images/gallery/'.$g_url);
						// $image->thumb(150, 150,\Think\Image::IMAGE_THUMB_NORTHWEST)->save('./Public/assets/images/gallery/thumbs/'.$file['savename']);
						// $g_thumb_url = 'thumbs/'.$file['savename'];

						$video = D('video');
						$r = $video -> insertP($v_url, $v_title, $v_source, $v_uid);
						if($r)
							$this->success('上传成功');
					}
				}
				else{
					$this->error('上传失败，请检查');
				}
			}
		}
	}
}