<?php
$opicifc_categories_lang = array();

$opicifc_lang_list = array(
    'ara' => [
        'title' => 'Arabic',
        'link' => "http://ar.islamforchristians.com"
        ],
    'eng' => [
        'title'=> 'English',
        "link" => "http://www.islamforchristians.com",
        ],
    'es' => [
        'title'=> 'Español',
        "link" => "http://es.islamforchristians.com",
        ],
    'ru' => [
        'title'=> 'русский',
        "link" => "http://ru.islamforchristians.com",
        ],
    'ko' => [
        'title'=> '한국어',
        "link" => "http://ko.islamforchristians.com",
        ],
    /*,'rom'=>'Romanian','rus'=>'Russian','spa'=>'Spanish','hin'=>'Hindi','tag'=>'Tagalog','ben'=>'Bengali','sin'=>'Sinhalese','nep'=>'Nepali','tam'=>'Tamil','tel'=>'Telugu','mal'=>'Malayalm'*/);

// ======================   Titles ==============================
												
$ifccategories["islam_for_christians"] 		= array(
													'title'=>"Islam for Christians",
													'url'=>"http://www.islamforchristians.com",
													'logo'=>"islam_for_christians.png",
												);

// =================== English ===========================
if($opicifc_lang_list)
{
   foreach($opicifc_lang_list as $k => $val)
   {
        $opicifc_categories_lang[$k]['islam_for_christians']['url']  		    =  $val['link'];
        $opicifc_categories_lang[$k]['islam_for_christians']['cat'] 		    =  $val['link'].'/api/get_category_index/';
        $opicifc_categories_lang[$k]['islam_for_christians']['importurl'] 	    =  $val['link'].'/api/get_category_posts/?slug=';  
   }
}



?>