<?php
defined('BASEPATH') OR exit('No direct script access allowed');


		function __construct()
	{
		parent::__construct();
		$this->load->model('mdata', '', TRUE);
		$this->load->helper(array('form', 'url','file'));	        
	}


 function save_routes()
{

/*

        foreach( $routes as $value )
        {
            $data[] = '$route["' . $value['mask'] . '"] = "' . $value['real_url'] .'";';
        }

        $output = implode("\n", $data);
        */

        $output = $route['bencana'] = 'kampanye/idkamp';
        
        write_file(APPPATH . "cache/permalink.php", $output);
}



