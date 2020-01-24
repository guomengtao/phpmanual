<?php
namespace app\controller;

use app\BaseController;
use QL\QueryList;
use think\facade\Request;
use app\model\Manual;
// use app\controller\Catalog;
class Index extends BaseController
{
    // 全局变量 用于递归传值
    public $catalog = '';
    public $i = 0;

    public function index()
    {
 
		
     	// $this->getchildcata('internals2');
     	// die();
     	
        	// $status = Manual::find(1);
			// dump($status->toArray());
			// dump($status->path);
			// die();
        // $s = Manual::where('level',0)->count();
        // $s= Manual::where('status',8)->where('level','>',1)->select();
        
        // Manual::update(['catalog' =>  "funcref" ], ['file' => "refs.basic.php"]);
        // $s= Manual::where('path','like','/%')->select();
        // dump($s->toArray());
        // die();
        for ($i=0; $i < 8; $i++) { 
        	

        	$list = [];

        	$status = Manual::where('level','=',$i)->field('id,file')->select();

        	echo count($status)."+";
        }
        	// foreach ($status as $key => $value) {
        	// 	# code...
        	// 	// echo $value->id;
        	// 	$id = $value->id;
        	// 	$p = ['id'=>$id, 'status'=>8];
        	// 	array_push($list,$p);
        		
        	// }

   //      	$user = new Manual;
			// $user->saveAll($list);
        	

        	// $status = Manual::where('catalog','=',"faq")->select();
        	// dump($status->toArray());
        
       //  echo $this->checkchild("faq");
       die();

  //   	$path  = $this->getfilecata(7);
  //   	dump($path);
		// // Manual::update(['path' =>  $path ], ['id' => $value->id]);

		// die();
		// echo 123;
		$s = Manual::where('id','>=','8699')->select();

		// dump($s->toArray());
		// dump(count($s));

		// die();

		foreach ($s as $key => $value) {
			# code...
			// echo $value->id;
			// echo $this->getfilecata($value->id);
			$this->catalog = "";
			$this->i = 0;
			 
			$getfilecata = $this->getfilecata($value->id);

			// dump($path);
			// echo $value->id . "\n";

			$status = Manual::find($value->id);
			$path = $status->path;
			$level = $status->level;

			if ($path == $getfilecata[0] and $level == $getfilecata[1]) {
				echo $value->id ."\n";
			} else {
				echo "发现一个问题";
				dump($status->toArray());
				dump($getfilecata);
				Manual::update(['path' =>  $getfilecata[0] ,'level' =>  $getfilecata[1]], ['id' => $value->id]);
				// die();
				sleep(9);
			}
			
			
			// die();
		}

		// 提柜单个排除测试程序
		// 递归前先初始化默认值
		// $this->catalog = "";
		// $this->i = 0;
  //       $this->getfilecata(1466);

        // echo $this->catalog;
        // echo "ok";
    }
    public function getchildcata($file,$level = 1,$mark = ''){
    	// 获取一个目录的直属子目录
    	$getchildcata = Manual::where('catalog',$file)->select();
    	$this->i = $this->i++;
    	if ($this->i > 4) {
    		echo ">6 stop ";
    		die();
    	}
    	// 遍历直属子目录

    	// 查询属于几级目录
    	$mark = "-";
 
    	switch ($level) {
    		case '1':
    			# code...
    		$mark = "+";
    			break;
    		case '2':
    			# code...
    		$mark = "&nbsp;&nbsp;--";
    			break;
    		case '3':
    			# code...
    		$mark = "&nbsp;&nbsp;&nbsp;&nbsp;===";
    			break;
    		case '4':
    			# code...
    		$mark = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[[[[]]]]";
    			break;
    		default:
    			# code...
    		$mark = "&nbsp;&nbsp;&nbsp;&nbsp;<><><><><><>";
    			break;
    	}
    	foreach ($getchildcata as $key => $value) {
    		//输出或存储结果
    		echo $mark ;
    		echo $value->title.$value->file . "&nbsp;&nbsp;";
    		// 	如果子目录里有目录 递归获取其子目录
    		$checkchild = Manual::where('catalog',$value->file)->select();
    		 
    		if (count($checkchild)) {
    			echo count($checkchild) ;
    		}
    		echo "<br>\n";
    		if (count($checkchild) > 0 ){
    			
    			// dump($checkchild ->toArray());

    			$this->getchildcata($value->file,$value->level);
    		}

    	}
    	
    }
    public function getfilecata($id){

		// $getfilecata = [$this->catalog,$this->i];
		// dump($getfilecata);
    	 
    	// 查询上级目录
    	$getcata = Manual::find($id);

    	// dump($getcata->toArray());
    	$cata = $getcata->catalog;
    	$file = $getcata->file;
     
    	// dump($cata);die();
    	
    	$this->i = $this->i + 1;

    	// 判断路径是否为空，不为空则是第二次循环
    	// 递归调用前需要先重置路径为空
    	if ($this->catalog) {
    		$this->catalog = $file."/". $this->catalog;
    		// echo "第二次".$this->catalog."\n";
    	} else {

    		// 如果第一次循环进入此程序
    		$this->catalog = $file  ;
    		// 附带，查询直属下级子目录总数
    		$son = Manual::where("catalog",$file)->count();
    		// // 保存直属下级子目录总数
    		Manual::update([ 'son' =>  $son   ], ['file' => $file]);
			// echo "第一次" .$this->catalog."\n";
    		 
    	}
    	
 		// 判断目录级别控制死循环
		if ($this->i >7) {
			echo $file ."循环大于6级了";
    		$getfilecata = [$this->catalog,$this->i];
			dump($getfilecata);
			die;
		}

    	// 查询上级目录
    	$upnext = Manual::where("file",$cata)->field('id','catalog')->find();

    	// dump($upnext->toArray());
    	// dump($upnext->catalog);
    	
 

    	if ($upnext and $upnext->id > 1) {
    		//不为空继续查询。
    		// echo "开始递归";
    		// die();
    		$this->getfilecata($upnext->id);
    		

    	}
 
    	$getfilecata = [$this->catalog,$this->i];
    	return $getfilecata ;
    	
 
 
    }

    public function checkchild($file){
    	// 思路：
    	// 遍历每一个文件的path字段
    	// 查询字段中是否含有此文件名
    	// 文件名前后增加斜杠/
    	$file = $file ."/";


    	$list = [];

    	$status = Manual::where('path','like',$file.'%')->field('id,file')->select();


    	echo count($status)."+";
    	foreach ($status as $key => $value) {
    		# code...
    		// echo $value->id;
    		$id = $value->id;
    		$p = ['id'=>$id, 'status'=>9];
    		array_push($list,$p);
    		
    	}

    	$user = new Manual;
		$user->saveAll($list);


    	$status = Manual::where('path','like',$file.'%')->count();
    	return $status;
    }

    // 采集功能入口
    public function runqlfast(){
    	
    	// 根据主键获取多个数据
		$cata = Manual::order('id', 'file')->select();

		// 对数据集进行遍历操作

		echo "采集目标就绪"."\n";
		 
			$this->qlfast($cata);

		 
    }
    
    // 页面数量统计入口
    public function levelone(){

 
		$levelone =[
			1  => ["sort" =>1,  "level"=>"1","file"=>"copyright","title"=>"版权信息"],
			2  => ["sort" =>2,  "level"=>"1","file"=>"manual",   "title"=>"PHP 手册"],
			3  => ["sort" =>3,  "level"=>"1","file"=>"getting-started","title"=>"入门指引"],
			4  => ["sort" =>4,  "level"=>"1","file"=>"install","title"=>"安装与配置"],
			5  => ["sort" =>5,  "level"=>"1","file"=>"langref","title"=>"语言参考"],
			6  => ["sort" =>6,  "level"=>"1","file"=>"security","title"=>"安全"],
			7  => ["sort" =>7,  "level"=>"1","file"=>"features","title"=>"特点"],
			8  => ["sort" =>8,  "level"=>"1","file"=>"funcref","title"=>"函数参考"],
			9  => ["sort" =>9,  "level"=>"1","file"=>"internals2","title"=>"PHP 核心：骇客指南"],
			10 => ["sort" =>10, "level"=>"1","file"=>"faq","title"=>"FAQ"],
			11 => ["sort" =>11, "level"=>"1","file"=>"appendices","title"=>"附录"],
		];

		


		foreach ($levelone as $key => $value) {
			 	# code...
				$file  = $value["file"];
				$sort  = $value["sort"];
				$title = $value["title"];

				// 查询所有的子目录总数
				$child = $this->checkchild($file);
				echo "+" . $child;

				// 从一级目录循环遍历
				// $this->one($file);

				// 直接执行
				// $cata = Manual::where('file',$file)->select();
			    //  dump($cata->toArray());
				// Manual::update(['level' =>  '1','sort' =>  $sort , 'title' => $title ], ['file' => $file]);


		}	 

		// var_dump($levelone);
    }
    public function one($file){



		 $i   = 0;
		 $level = 1;

		 // 设置访问锁密码，等于该值表示已锁
		 $lock = 5;
		
		 // 根据主键获取多个数据
		// $list = Manual::where('catalog',$first)->select();

		 $catalog = $this->getcatalog($file);


		 //获取直接子页面/栏目数量
		 $son  = count($catalog);

		 	echo $file . "-" .$son . "\n"; 
		 //获取当期目录层级
		 $path = $file;

		  
		 
		 // Manual::update(['son' =>  $son,'path' =>  $path,'level' =>  $level  ], ['file' => $file]);

		  //判断是否已锁，只允许访问一次！若锁了，汇报
		 $status = Manual::where('file',$file)->value('status');


		 if ($lock == $status) {
		 	// echo "此文件已经统计,当前新统计路径". $path;
		 }
		//增加访问锁 ,避免比重复采集
		 Manual::update(['status' =>  $lock ], ['file' => $file]);



		  


		  
		 $firstfile = $file;
		// 对数据集进行遍历操作
		foreach($catalog as $key=>$cata){


			
			$i++;
 			$ii  = 0;
 			$level = 2;
 			$two = $this->getcatalog(trim($cata->file));

 			 
 			//获取直接子页面/栏目数量
			$son  = count($two);
			//获取当期目录层级
			$file = $cata->file;
			$path = $firstfile."/".$file;
			

			Manual::update(['son' =>  $son,'path' =>  $path ,'level' =>  $level  ], ['file' => $file]);


			//判断是否已锁，只允许访问一次！若锁了，汇报
			$status = Manual::where('file',$file)->value('status');


			if ($lock == $status) {
			 	// echo "此文件已经统计,当前新统计路径". $path."<br>";
			 }
			//增加访问锁 ,避免比重复采集
			Manual::update(['status' =>  $lock ], ['file' => $file]);

		 
            
            

		  			 $twofile = $file;
					// 对数据集进行遍历操作
					foreach($two as $key=>$cata){

						$i++;
						$ii++;
						$iii  = 0;
					    $level = 3;
					    $three = $this->getcatalog(trim($cata->file));

					    //获取直接子页面/栏目数量
						$son  = count($three);
						//获取当期目录层级
						$file = $cata->file;
						$path = $firstfile."/".$twofile."/".$file;
						

						Manual::update(['son' =>  $son,'path' =>  $path ,'level' =>  $level  ], ['file' => $file]);

						//判断是否已锁，只允许访问一次！若锁了，汇报
						$status = Manual::where('file',$file)->value('status');


						if ($lock == $status) {
						 	echo "此文件已经统计,当前新统计路径". $path."<br>";
						 }
						//增加访问锁 ,避免比重复采集
						Manual::update(['status' =>  $lock ], ['file' => $file]);

						$threefile = $file;
 					   	foreach($three as $key=>$cata){
 					   		$i++;
 					   		$ii++;
 					   		$iii++;
 					   		$level = 4;
 
						    $four = $this->getcatalog(trim($cata->file));

						    //获取直接子页面/栏目数量
							$son  = count($four);
							//获取当期目录层级
							$file = $cata->file;
							$path = $firstfile."/".$twofile."/".$threefile."/".$file;
							

							Manual::update(['son' =>  $son,'path' =>  $path ,'level' =>  $level  ], ['file' => $file]);

							//判断是否已锁，只允许访问一次！若锁了，汇报
							$status = Manual::where('file',$file)->value('status');


							if ($lock == $status) {
							 	echo "此文件已经统计,当前新统计路径". $path."<br>";
							 }
							//增加访问锁 ,避免比重复采集
							Manual::update(['status' =>  $lock ], ['file' => $file]);


							$fourfile = $file;
	 					   	foreach($four as $key=>$cata){

	 					   		$i++;
	 					   		$ii++;
	 					   		$level = 5;
							    $five = $this->getcatalog(trim($cata->file));
							     
								//获取直接子页面/栏目数量
								$son  = count($five);
								//获取当期目录层级
								$file = $cata->file;
								$path = $firstfile."/".$twofile."/".$threefile."/".$fourfile ."/". $file;
								

								Manual::update(['son' =>  $son,'path' =>  $path ,'level' =>  $level  ], ['file' => $file]);

								//判断是否已锁，只允许访问一次！若锁了，汇报
								$status = Manual::where('file',$file)->value('status');


								if ($lock == $status) {
								 	echo "此文件已经统计,当前新统计路径". $path."<br>";
								 }
								//增加访问锁 ,避免比重复采集
								Manual::update(['status' =>  $lock ], ['file' => $file]); 


								$fivefile = $file;
		 					   	foreach($five as $key=>$cata){
		 					   		$i++;
		 					   		$ii++;
		 					   		$level = 6;
								     
								    $six = $this->getcatalog(trim($cata->file));

								    
									//获取直接子页面/栏目数量
									$son  = count($six);
									//获取当期目录层级
									$file = $cata->file;
									$path = $firstfile."/".$twofile."/".$threefile."/".$fourfile ."/". $fivefile ."/". $file;
									

									Manual::update(['son' =>  $son,'path' =>  $path ,'level' =>  $level  ], ['file' => $file]);

									//判断是否已锁，只允许访问一次！若锁了，汇报
									$status = Manual::where('file',$file)->value('status');


									if ($lock == $status) {
									 	echo "此文件已经统计,当前新统计路径". $path."<br>";
									 }

									 echo "一个6的". $path."<br>";
									//增加访问锁 ,避免比重复采集
									Manual::update(['status' =>  $lock ], ['file' => $file]); 

									


			 					   	foreach($six as $key=>$cata){
			 					   	   $i++;
									    // echo "<><><><><><>".$key."-id:".$cata->id."----".$cata->file."目录" ."<br/><br/>";
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

    public function qlfast($files){

    	 
 	// ini_set('max_execution_time','10000');

 


 
 		// 准备一个数组存储所有html页面
 		// 重构了querylist的加载逻辑，重复循环内存溢出

    	$urls = [];

    	
     	// 组合地址和数组
		foreach ($files as $key => $value) {

			
					 // 判断某些页面不可以访问，返回检查！
					// 进一步进行可访问性验证
				    $url =  "http://www.php.com/static/php-chunked-xhtml/".trim($value->file).".html";

					if($this->httpcode($url)<>"200") {

						echo "不可访问页面，注意排查，已跳过".$url."\n";
						sleep(6);
						 
					}else{
						// echo "组合到采集地址".trim($value->file);
					$urls[$key] = "http://www.php.com/static/php-chunked-xhtml/".trim($value->file).".html";
					}
					

		  
			

		}




		// 设置采集规则
		//采集规则
		$rules = array(
		   'catalog' => array('.breadcrumbs-container>li:nth-child(2)>a','href'),
		   'title' => array('title','text'),
		);

		$ql = QueryList::rules($rules);
 

		foreach($urls as $key=>$url){

			echo "开始采集".$url."\n";
 
		    // 每条链接都会应用上面设置好的采集规则
		    $data = $ql->get($url)->query()->getData();
		    
		  	if(!empty($data[0]['catalog'])){


			     // 过滤掉末尾的.html后缀
				 $catalog  =  substr($data[0]['catalog'],0,-5);
				 $title    =  $data[0]['title'];
				 // dump($data);
			
		    	echo "采集成功 开始入库".$url ;
		    	echo $catalog . $title."\n";
		    	// 重新通过url获取文件名
		    	$file = substr($url,0,-5);
		    	$file = strrchr($file,"/");
		    	$file = substr($file,1);

		    	echo "入库文件为".$file."\n";
			 // 通过模型修改的入库操作
			 Manual::update(['catalog' =>  $catalog,'title' => $title], ['file' => $file]);

			 } 

			   // 释放Document内存占用
			    $ql->destruct();

			    

		}

		echo "执行完成"."\n";

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
    public function qlworking($file){

    	
		 sleep(3);
		
		$filepath = "/static/php-chunked-xhtml/".trim($file).".html";

		$url = Request::root(true) . $filepath;
		$ql = QueryList::get($url);
		  
 
 		
		$rt  = $ql->find('.breadcrumbs-container>li:nth-child(2)>a')->attr("href");
		// 过滤掉末尾的.html后缀
		$rt  =  substr($rt,0,-5);
		$ql->destruct();

		 $rt = [];
		// 采集文章标题
		$rt['title'] = $ql->find('title')->text();
		// 第二个li里面的a链接的href属性值
		$rt['content'] = $ql->find('.breadcrumbs-container>li:nth-child(2)>a')->attr("href");
		 // 过滤掉末尾的.html后缀
		$rt['content'] =  substr($rt['content'],0,-5);
		 
		 echo "采集完成".$rt['title'].$rt['content'];
		 sleep(3);
		// 通过模型修改的入库操作
		Manual::update(['catalog' =>  $rt['content'],'title' =>  $rt['title']], ['file' => $file]);
		print_r($rt);
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
