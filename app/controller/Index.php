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
 		// $num = 122;

 		// $num = round($num/15037*100, 2); 

 		// $num = $num."%";

 		// echo $num; 

 		// die();


		// $str = "中文preg";
		// // $str = preg_replace( '/[\W]/', '', $str);
		//  $str = str_replace('"', '', $str);
		// $str = mb_substr($str, 0, 50);
		// echo $str;
		// die();
 		// $s= Manual::where("child",'>',0)->order("sort")->select();

 		// dump($s->toArray());
 		// foreach ($s as $key => $value) {
 		// 	# code...
 		// 	echo $value->child."+";
 		// }
 		// echo date("Y-m-d h:i:sa");
 		// echo $this->getsoncount(1);

 		// die();



 	// 	for ($i=15037; $i < 15038; $i++) { 
 	// 		# code...
 	// 		echo $i."-";
 	// 		$this->i = 0;
 	// 		$s= Manual::field('file')->find($i);
 	// 		// echo $s->file;
 	// 		$getchildrencount = $this->getchildrencount($s->file);

 	// 		Manual::update(['child' => $getchildrencount], ['id' => $i]);
 	// 		echo $getchildrencount."-";
 	// 		echo date("Y-m-d h:i:sa")."\n";

 	// 	}
		
		// echo $this->getchildrencount("internals2");
		// die();
     	// $tree = $this->getchildcatajson("copyright","1521");
     	// $tree = $this->getchildcatajson("manual","9593");
     	// $tree = $this->getchildcatajson("getting-started","7528");
     	// $tree = $this->getchildcatajson("install","8633");
     	// $tree = $this->getchildcatajson("langref","9372");
     	// $tree = $this->getchildcatajson("security","12514");
     	// $tree = $this->getchildcatajson("features","2413");
     	// $tree = $this->getchildcatajson("internals2","8706");
     	// $tree = $this->getchildcatajson("faq","2373");
     	$tree = $this->getchildcatajson("funcref","2527");
     	// $tree = $this->getchildcatajson("appendices","56");
     	// dump($tree);
     	die();
      // {id: 1, pId: 0, name: "PHP手册 一级目录 11", open: true},
      // {id:1521, pId: 1, name: "版权信息-L1S0C0", file: "../static/php-chunked-xhtml/about"},
      // {id:9593, pId: 1, name: "PHP 手册-L1S1C1", file: "manual"},
      // {id:7528, pId: 1, name: "入门指引-L1S2C10", file: "getting-started"},
      // {id:8633, pId: 1, name: "安装与配置-L1S9C47", file: "install"},
      // {id:9372, pId: 1, name: "语言参考-L1S19C207", file: "langref"},
      // {id:12514, pId: 1, name: "安全-L1S13C27", file: "security"},
      // {id:2413, pId: 1, name: "特点-L1S12C27", file: "features"},
      // {id:2527, pId: 1, name: "函数参考-L1S27C13751", file: "funcref-all"},
      // {id:8706, pId: 1, name: "PHP 核心：骇客指南-L1S16C210", file: "internals2"},
      // {id:2373, pId: 1, name: "FAQ-L1S11C11", file: "faq"},
      // {id:56, pId: 1, name: "附录-L1S29C7188", file: "appendices"},

   //      	$status = Manual::find(9372);
			// dump($status->toArray());
			// dump($status->path);
			// die();
        // $s = Manual::where('level',0)->count();
        // $s= Manual::where('file','internals2.buildsys.configunix')->select();
        // $s= Manual::where('file','install')->select();
        
        // Manual::update(['catalog' =>  "funcref" ], ['file' => "refs.basic.php"]);
        // // $s= Manual::where('path','like','/%')->select();
        // dump($s->toArray());
        // die();
        // for ($i=0; $i < 8; $i++) { 
        	

        // 	$list = [];->order('id', 'asc')

    	// $s= Manual::where('level','=',1)->order('sort', 'asc')->select();


    	// foreach ($s as $key => $value) {
    	// 	# code...
    	// 	// {id: 111, pId: 1, name: "安全", file: "appendicess"},
    	// 	echo "{id:".$value->id.", pId: 1, name: \"".$value->title."-L".$value->level."S".$value->son."C".$value->child."\", file: \"".$value->file."\"}, <br>";
    	// }
    	// // dump($s->toArray());
    	// die();


        // 	echo count($status)."+";
        // }
    	// foreach ($s as $key => $value) {
     //    		# code...
     //    		// echo $value->id;
        		
     //    		$this->getchildcatajson($value->file,$value->id);
        		
    	// }

   //      	$user = new Manual;
			// $user->saveAll($list);
        	

        	// $status = Manual::where('catalog','=',"faq")->select();
        	// dump($status->toArray());
        
       //  echo $this->checkchild("faq");
       // die();

    	// $getfilecata  = $this->getfilecata(8673);
    	// Manual::update(['path' =>  $getfilecata[0] ,'level' =>  $getfilecata[1]], ['id' => 8673]);
    	// dump($getfilecata);
    	// die();
		// // Manual::update(['path' =>  $path ], ['id' => $value->id]);

		// die();
		// echo 123;
		// $s = Manual::where('id','>=','8673')->select();

		// dump($s->toArray());
		// dump(count($s));

		// die();

		// foreach ($s as $key => $value) {
		// 	# code...
		// 	// echo $value->id;
		// 	// echo $this->getfilecata($value->id);
		// 	$this->catalog = "";
		// 	$this->i = 0;
			 
		// 	$getfilecata = $this->getfilecata($value->id);

		// 	// dump($path);
		// 	// echo $value->id . "\n";

		// 	$status = Manual::find($value->id);
		// 	$path = $status->path;
		// 	$level = $status->level;

		// 	if ($path == $getfilecata[0] and $level == $getfilecata[1]) {
		// 		echo $value->id ."\n";
		// 	} else {
		// 		echo "发现一个问题";
		// 		dump($status->toArray());
		// 		dump($getfilecata);
		// 		Manual::update(['path' =>  $getfilecata[0] ,'level' =>  $getfilecata[1]], ['id' => $value->id]);
		// 		// die();
		// 		sleep(9);
		// 	}
			
			
		// 	// die();
		// }

		// 单个排除测试程序
		// 递归前先初始化默认值
		// $this->catalog = "";
		// $this->i = 0;
        // $this->levelone();

        // echo $this->catalog;
        // echo "ok";
    }

    public function getsoncount($id){

    	// 获取一个文件包含直属子目录数量，不包括孙目录

    	$file = Manual::where('id',$id)->column("file");

    	// 获取一个目录的直属子目录
    	$getsoncount = Manual::where('catalog',$file[0])->count();

    	 
    	echo  $id."-".$getsoncount."<br>";

    	Manual::update(['son' => $getsoncount], ['id' => $id]);

 		$id = $id +1;

		// 继续递归查询
		if ($id < 15038){
			
			$this->getsoncount($id);
		}



    	

    	// 如果递归完成返回生成的数组
    	return "ok";
    	
    	 
    }
    public function getchildrencount($file){

    	// 获取一个文件包含的所以子目录数总和

    	// 获取一个目录的直属子目录
    	$getchildcata = Manual::where('catalog',$file)->column('file');

    	$this->i = $this->i + count($getchildcata);
    	 

    	foreach ($getchildcata as $key => $value) {

    		// 	如果子目录里有目录 递归获取其子目录
    		$checkchild = Manual::where('catalog',$value)->column('file');

    		$checkchildcount = count($checkchild);

    		// 如果有子目录继续递归
    		if ($checkchildcount ){
    			
    			// dump($checkchild ->toArray());
    			 
    			$this->getchildrencount($value);
    		}



    	}

    	// 如果递归完成返回生成的数组
    	// echo $this->i ."\n";
    	return $this->i;
    	
    	 
    }

    public function getchildcatajson($file,$pid){

    	// 改为输出数组转json供前端使用
    	// 思路：通过目录level字段定位数组的维度
    	// 尝试用方法里的默认传值存储递归数据

    	// 指定的文件
    	// 仅仅列出文件的子目录

    	// 获取一个目录的直属子目录
    	$getchildcata = Manual::where('catalog',$file)->select();

    	// $this->i = $this->i + 1;

    	// // 防止死循环功能，记录循环次数
    	// if ($this->i > 300) {
    	// 	echo ">6 stop ";
    	// 	$this->i = 0;
    	// 	die();
    	// }
    	// 遍历直属子目录
    	// level字段是记录自己属于第几级目录
    	// 查询属于几级目录
    	
 		
    	$getchildcatacount = count($getchildcata);
    	foreach ($getchildcata as $key => $value) {


    		 // { id:1, pId:0, name:"父节点1 - 展开", open:true},
    		 // { id:自己的id, pId:父id, name:"父节点1 - 展开", open:true},
    		// 获取目录级别
    		// 例如 $tree['一级目录id']['二级目录id']

	     

	    	$mark = "{id:";

    		// 	如果子目录里有目录 递归获取其子目录
    		$checkchild = Manual::where('catalog',$value->file)->select();
    		$checkchildcount = count($checkchild);
	    	$key = $key +1;


			$str = str_replace('"', '', $value->title);
			$str = mb_substr($str, 0, 50);

			$c1 = '';
			if ($value->child) {
				$c1 = round($value->child/15037*100, 2); 
	 			$c1 = "-".$c1."%";
			}

			$child = "";
			if ($value->child) {
				# code...
				$child = "c".$value->child;
			}

			$son = '';
			if ($value->son) {
				# code...
				$son = "s".$value->son;
			}
	

    		echo $mark.$value->id.", pId:".$pid.", name:\"".$str.$son.$child.$c1."\"".", file: \"".$value->file."\"},";
    		 
    		if ($checkchildcount) {
    			// echo ",,,子目录：".$checkchildcount ;
    		}

	   		//输出或存储结果
 
    		echo "<br>\n";

    		// 如果有子目录继续递归
    		if ($checkchildcount ){
    			
    			// dump($checkchild ->toArray());
    			 
    			$this->getchildcatajson($value->file,$value->id);
    		}



    	}

    	// 如果递归完成返回生成的数组
    	 
    }
    public function getchildcata($file,$level = 1){
    	// 指定的文件
    	// 仅仅列出文件的子目录

    	// 获取一个目录的直属子目录
    	$getchildcata = Manual::where('catalog',$file)->select();
    	$this->i = $this->i + 1;

    	// 防止死循环功能，记录循环次数
    	if ($this->i > 300) {
    		echo ">6 stop ";
    		$this->i = 0;
    		die();
    	}
    	// 遍历直属子目录
    	// level字段是记录自己属于第几级目录
    	// 查询属于几级目录
    	$mark = "";
 		
    	$getchildcatacount = count($getchildcata);
    	foreach ($getchildcata as $key => $value) {

    		// 	如果子目录里有目录 递归获取其子目录
    		$checkchild = Manual::where('catalog',$value->file)->select();
    		$checkchildcount = count($checkchild);
    		//输出或存储结果
	    	switch ($value->level) {
	    		case '1':
	    			# code...
	    		$mark = "<h1>+";
	    			break;
	    		case '2':
	    			# code...
	    		$mark = "<h2>&nbsp;&nbsp;--&nbsp;";
	    			break;
	    		case '3':
	    			# code...
	    		$mark = "<h3>&nbsp;&nbsp;&nbsp;&nbsp;===&nbsp;";
	    			break;
	    		case '4':
	    			# code...
	    		$mark = "<h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;####&nbsp;";
	    			break;
	    		default:
	    			# code...
	    		$mark = "&nbsp;&nbsp;&nbsp;&nbsp;<><><><><><>";
	    			break;
	    	}
	    	$key = $key +1;
    		echo $mark . $key;
    		echo $value->title.$value->file . " -level:".$value->level;


    		 
    		if ($checkchildcount) {
    			echo "，子目录：".$checkchildcount ;
    		}

	   		//输出或存储结果
	    	switch ($value->level) {
	    		case '1':
	    			# code...
	    		$mark = "</h1>";
	    			break;
	    		case '2':
	    			# code...
	    		$mark = "</h2>";
	    			break;
	    		case '3':
	    			# code...
	    		$mark = "</h3>;";
	    			break;
	    		case '4':
	    			# code...
	    		$mark = "</h4>";
	    			break;
	    		default:
	    			# code...
	    		$mark = "&nbsp;&nbsp;&nbsp;&nbsp;<><><><><><>";
	    			break;
	    	}
    		echo "<br>\n";

    		// 如果有子目录继续递归
    		if ($checkchildcount){
    			
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
			1  => ["sort" =>1,  "level"=>"1","id"=>"1","file"=>"copyright","title"=>"版权信息"],
			2  => ["sort" =>2,  "level"=>"1","id"=>"1","file"=>"manual",   "title"=>"PHP 手册"],
			3  => ["sort" =>3,  "level"=>"1","id"=>"1","file"=>"getting-started","title"=>"入门指引"],
			4  => ["sort" =>4,  "level"=>"1","id"=>"1","file"=>"install","title"=>"安装与配置"],
			5  => ["sort" =>5,  "level"=>"1","id"=>"1","file"=>"langref","title"=>"语言参考"],
			6  => ["sort" =>6,  "level"=>"1","id"=>"1","file"=>"security","title"=>"安全"],
			7  => ["sort" =>7,  "level"=>"1","id"=>"1","file"=>"features","title"=>"特点"],
			8  => ["sort" =>8,  "level"=>"1","id"=>"1","file"=>"funcref","title"=>"函数参考"],
			9  => ["sort" =>9,  "level"=>"1","id"=>"1","file"=>"internals2","title"=>"PHP 核心：骇客指南"],
			10 => ["sort" =>10, "level"=>"1","id"=>"1","file"=>"faq","title"=>"FAQ"],
			11 => ["sort" =>11, "level"=>"1","id"=>"1","file"=>"appendices","title"=>"附录"],
		];

		


		foreach ($levelone as $key => $value) {
			 	# code...
				$file  = $value["file"];
				$id    = $value["id"];
				$sort  = $value["sort"];
				$title = $value["title"];


				// 查询tree树形目录
				$this->getchildcatajson($file,$id);

				// 查询所有的子目录总数
				// $child = $this->checkchild($file);
				// echo "+" . $child;

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
