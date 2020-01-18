<?php
namespace app\controller;

use app\BaseController;
use QL\QueryList;
use think\facade\Request;
use app\model\Manual;

class Catalog extends BaseController
{
    public function index(){


		$html = <<<STR
		<ol class="testww">
   <li><a href="copyright.php">版权信息</a></li>
   <li><a href="manual.php">PHP 手册</a>
     </li>
   <li><a href="getting-started.php">入门指引</a>
     </li>
   <li><a href="install.php">安装与配置</a>
     </li>
   <li><a href="langref.php">语言参考</a>
     </li>
   <li><a href="security.php">安全</a>
     </li>
   <li><a href="features.php">特点</a>
     </li>
   <li><a href="funcref.php">函数参考</a>
    </li>
   <li><a href="internals2.php">PHP 核心：骇客指南</a>
     </li>
   <li><a href="faq.php">FAQ</a> — FAQ：常见问题
    </li>
   <li><a href="appendices.php">附录</a>
     </li>
</ol>    
STR;

	$index =[
		1  => ["sort" =>1,  "level"=>"1","file"=>"copyright","title"=>"版权信息"],
		2  => ["sort" =>2,  "level"=>"1","file"=>"manual",   "title"=>"PHP 手册"],
		3  => ["sort" =>3,  "level"=>"1","file"=>"install","title"=>"安装与配置"],
		4  => ["sort" =>4,  "level"=>"1","file"=>"langref","title"=>"语言参考"],
		5  => ["sort" =>5,  "level"=>"1","file"=>"security","title"=>"安全"],
		6  => ["sort" =>6,  "level"=>"1","file"=>"features","title"=>"特点"],
		7  => ["sort" =>7,  "level"=>"1","file"=>"funcref.","title"=>"函数参考"],
		8  => ["sort" =>8,  "level"=>"1","file"=>"internals2","title"=>"PHP 核心：骇客指南"],
		9  => ["sort" =>9,  "level"=>"1","file"=>"internals2","title"=>"PHP 核心：骇客指南"],
		10 => ["sort" =>10, "level"=>"1","file"=>"faq","title"=>"FAQ"],
		11 => ["sort" =>11, "level"=>"1","file"=>"appendices","title"=>"附录"],
	];	 

		var_dump($index);
    }
	public function one(){

		echo 333;die();

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
		// $cata = Manual::where('catalog',$cata)->order('id', 'file')->select();

		
		
		// 对数据集进行遍历操作
		// foreach($cata as $key=>$cata){
		// 	$cata->path = $this->getcatalog($cata->file);

		     

		// }

		// return $cata;
	}


     
}
