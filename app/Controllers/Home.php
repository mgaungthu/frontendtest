<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    	 $result = json_decode(file_get_contents(WRITEPATH."data.json"), true);
    	 $data['sub_title'] = $result['sub_title'];
    	 $data['title'] = $result['title'];
       	 return view('main',$data);
    }
}
