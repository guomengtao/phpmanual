<?php
namespace app\controller;

use app\BaseController;
use QL\QueryList;
use think\facade\Request;
use app\model\Manual;

class Catalog extends BaseController
{
    
	public function one(){

		ini_set('max_execution_time','10000');

		$one = "security";

		// $one = "funcref";

		 echo "一级目录：" . $one  ."<br/>";

		 $i = 0;

		 // 根据主键获取多个数据
		// $list = Manual::where('catalog',$first)->select();

		 $one = $this->getcatalog($one);

		  
		// 对数据集进行遍历操作
		foreach($one as $key=>$cata){
			$i++;echo "[".$i."]";
		    echo "+".$key."-id:".$cata->id."----文件名".$cata->file."目录" ."<br/><br/>";

               		 $two = $this->getcatalog(trim($cata->file));

		  				// dump($two);die;
					// 对数据集进行遍历操作
					foreach($two as $key=>$cata){
						$i++;echo "[".$i."]";

					    echo "· · ".$key."-id:".$cata->id."----".$cata->file."目录" ."<br/><br/>";
			               
					    $three = $this->getcatalog(trim($cata->file));
 					   	foreach($three as $key=>$cata){
 					   		$i++;echo "[".$i."]";
						    echo "###".$key."-id:".$cata->id."----".$cata->file."目录" ."<br/><br/>";
						    $four = $this->getcatalog(trim($cata->file));
	 					   	foreach($four as $key=>$cata){
	 					   		$i++;echo "[".$i."]";
							    echo "》》》》".$key."-id:".$cata->id."----".$cata->file."目录" ."<br/><br/>";
							    // $five = $this->getcatalog(trim($cata->file));
							    // dump($five);
		 					//    	foreach($five as $key=>$cata){
								//     echo "@@@@@".$key."-id:".$cata->id."----".$cata->file."目录" ."<br/><br/>";
								// }
							}
						}

					}
		     

		}



	}
	public function getcatalog($cata){
		// 根据主键获取多个数据
		$cata = Manual::where('catalog',$cata)->order('id', 'file')->select();

		
		
		// 对数据集进行遍历操作
		// foreach($cata as $key=>$cata){
		// 	$cata->path = $this->getcatalog($cata->file);

		     

		// }

		return $cata;
	}


     
}
