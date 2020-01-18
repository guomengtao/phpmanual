<?php
namespace app\controller;

use app\BaseController;
use QL\QueryList;
use think\facade\Request;
use app\model\Manual;
// use app\controller\Catalog;
class Index extends BaseController
{
    public function index()
    {
        $this->one();
    	// echo 123;

    	// $a = new Catalog();
    	// echo $a->one();

    	// for ($i=0; $i < 1 ; $i++) { 
    	// 	# code...
    	// 	echo "". $i . "\n";
    	// 	sleep(2);
    	// }

    	die();
    }
    public function one(){

		// echo 333;die();

		// ini_set('max_execution_time','10000');

		$one = "security";

		$one = "funcref";

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
							    $five = $this->getcatalog(trim($cata->file));
							    // dump($five);
		 					   	foreach($five as $key=>$cata){
								    echo "<<<<<".$key."-id:".$cata->id."----".$cata->file."目录" ."<br/><br/>";
								    $six = $this->getcatalog(trim($cata->file));
								    // dump($five);
			 					   	foreach($six as $key=>$cata){
									    echo "<><><><><><>".$key."-id:".$cata->id."----".$cata->file."目录" ."<br/><br/>";
									}
								}
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
    public function add(){
    	
		for ($i=0; $i <0 ; $i++) { 
			# code...
			$user           = new Manual;
			$user->catalog     = 'thinkphp';
			$user->save();
			// 获取自增ID
			echo $user->id;
			if ($user->id>=15040) {
				# code...
				break;
			}
		}
    }
    public function readfiles(){
    	 
    	$file = fopen($_SERVER["DOCUMENT_ROOT"] . "/static/files.txt", "r");
		$user=array();
		$i=0;
		//输出文本中所有的行，直到文件结束为止。
		while(! feof($file))
		{
		 $user[$i]= fgets($file);//fgets()函数从文件指针中读取一行
 
		 $i++;
		}
		fclose($file);
		$user=array_filter($user);

		// 写在上方的读取操作里报错
		foreach ($user as $key => $value) {
			# code...
			$id = $key+1;
			Manual::update(['file' =>  $value], ['id' => $id]);
		}
		print_r($user);


    }
    public function httpcode($url){

		  $ch = curl_init();

		  $timeout = 1;

		  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);

		  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

		  curl_setopt($ch, CURLOPT_HEADER, 1);

		  curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

		  curl_setopt($ch,CURLOPT_URL,$url);

		  curl_exec($ch);

		  return $httpcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);

		  curl_close($ch);

	}

    public function qlfast(){

    	 
 	ini_set('max_execution_time','10000');

 


 
 		// 准备一个数组存储所有html页面
 		// 重构了querylist的加载逻辑，重复循环内存溢出

    	$urls = [];

    	$files = Manual::column('file');
     
		foreach ($files as $key => $value) {

			
			

		    // 待采集的链接集合
		    // 排除某些含有.php的字符串导致当做php页面打不开
		    if(strpos($value,'.php.') !==false){

			   $urls[$key] = Request::root(true) . "/static/php-chunked-xhtml/"."about666".".html";

			}else{


				 


				


				//变量：
				$str = trim($value);
				$str2 = ".php";


				//php判断字符串结尾：过滤掉.php结尾的

				if (strrchr($str,$str2)==$str2) {
					$urls[$key] = Request::root(true) . "/static/php-chunked-xhtml/"."about666".".html";
					// return "字符串结尾.php".$url;
				}else{

					// 判断某些页面不可以访问，返回检查！
					// 进一步进行可访问性验证
				    $url = Request::root(true) . "/static/php-chunked-xhtml/".trim($value).".html";
					if($this->httpcode($url)<>"200") {
									# code...
								return "不可访问".$url;
					}

					$urls[$key] = Request::root(true) . "/static/php-chunked-xhtml/".trim($value).".html";
				}
			    

			}
			

		}




		// 设置采集规则
		//采集规则
		$rules = array(
		   'catalog' => array('.breadcrumbs-container>li:nth-child(2)>a','href'),
		);
		$ql = QueryList::rules($rules);
 

		foreach($urls as $key=>$url){

			// dump($key);
 
		    // 每条链接都会应用上面设置好的采集规则
		    $data = $ql->get($url)->query()->getData();
		    
		  if(!empty($data[0]['catalog'])){
			     // 过滤掉末尾的.html后缀
				 $catalog  =  substr($data[0]['catalog'],0,-5);
				 // dump($data);
			} 
		    	
		    	// 通过模型修改的入库操作
			$id = $key +1;
		 Manual::update(['catalog' =>  $catalog], ['id' => $id]);

		 
		   // 释放Document内存占用
		    $ql->destruct();
		    // ...
		}

		echo "ok";

    }
    public function bigdata(){

	    echo $this->qldate("about");

	    Manual::chunk(10, function($manual) {
	    foreach ($manual as $value) {
	        //
	        // echo  json_decode($value,true);
	        // echo $value->file;
	        $this->qldate($value->file);
		    }
		});

	 

    }

    //封装一个querylist采集php文件的核心的功能
    public function qldate($file){

    	
		 
		
		$filepath = "/static/php-chunked-xhtml/".trim($file).".html";

		$url = Request::root(true) . $filepath;
		$ql = QueryList::get($url);
		  
 
 		
		$rt  = $ql->find('.breadcrumbs-container>li:nth-child(2)>a')->attr("href");
		// 过滤掉末尾的.html后缀
		$rt  =  substr($rt,0,-5);
		$ql->destruct();


		return $rt;
		 
		 	
    }
    public function cli(){
    	echo 228;
    }
    public function indexold()
    {
        
    	echo 123;

    	$a = new Catalog();
    	echo $a->one();

    	for ($i=0; $i < 1 ; $i++) { 
    		# code...
    		echo "". $i . "\n";
    		sleep(2);
    	}

    	die();

        // 根据主键获取多个数据
		$list = Manual::select(["598","597","599"]);

		// dump($list);
		// 对数据集进行遍历操作
		foreach($list as $key=>$value){
		     echo $key."<br>";
		$file = $value->file;
		// echo $file;
        //获取1.html文档的内容（包括html代码）
		// $ql  = file_get_contents('./static/php-chunked-xhtml/about.html');
 		 // echo $file;die();
		
		$filepath = "/static/php-chunked-xhtml/".trim($file).".html";
		// echo $filepath;die();

		$url = Request::root(true) . $filepath;
		$ql = QueryList::get($url);
		  

		 $rt = [];
		// 采集文章标题
		// $rt['title'] = $ql->find('title')->text();
		// 第二个li里面的a链接的href属性值
		 $rt['content'] = $ql->find('.breadcrumbs-container>li:nth-child(2)>a')->attr("href");
		 // 过滤掉末尾的.html后缀
		 $rt['content'] =  substr($rt['content'],0,-5);
		 
		 // 通过模型修改的入库操作
		 Manual::update(['catalog' =>  $rt['content']], ['id' => $value->id]);
		print_r($rt);	

		}
        // return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V6<br/><span style="font-size:30px">13载初心不改 - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }

    //截取指定两个字符之间的字符串
	public function cut($begin,$end,$str){
	    $b = mb_strpos($str,$begin) + mb_strlen($begin);
	    $e = mb_strpos($str,$end) - $b;
	    return mb_substr($str,$b,$e);
	}
	public function readjson(){
		 
		 // 从文件中读取数据到PHP变量 
		 $json_string = file_get_contents('./static/search-description.json'); 
		 // $ql  = file_get_contents('./static/search-index.json');
		 //   dump($ql);
		 // 用参数true把JSON字符串强制转成PHP数组 
		 $data = json_decode($json_string, true); 
		   
		 // 显示出来看看 
		 // var_dump($json_string); 
		 dump ($data); 
		 // print_r($data); 
		 
	}
}
