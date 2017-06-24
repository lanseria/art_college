<?php
namespace Dashboard\Controller;
use Think\Controller;
class AjaxController extends Controller {
	public function index(){
		$formData = I('post.formData');
		var_dump($formData);
	}
}