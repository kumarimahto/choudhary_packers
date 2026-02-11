<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Activities extends MX_Controller
{

    function payment_details() {
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "activities";
        $data['view_file'] = "payment_details";
        echo Modules::run('template/layout2', $data);
    }

     function moving_tips() {  
       $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "activities";
        $data['view_file'] = "moving_tips";
        echo Modules::run('template/layout2', $data);
     }
    function detect_fraud() {  
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "activities";
        $data['view_file'] = "detect_fraud";
        echo Modules::run('template/layout2', $data);
    }
      function shipment_gallery() {  
       $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "activities";
        $data['view_file'] = "shipment_gallery";
        echo Modules::run('template/layout2', $data);
    }
      
       function video_gallery() {  
      $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "activities";
        $data['view_file'] = "video_gallery";
        echo Modules::run('template/layout2', $data);
      }

     function reviews() {  
      $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "activities";
        $data['view_file'] = "reviews";
        echo Modules::run('template/layout2', $data);
      }
      function partner() {  
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "activities";
        $data['view_file'] = "partner";
        echo Modules::run('template/layout2', $data);
      }
      function submit() {  
        $data['title'] = "";
        $data['description'] = "";
        $data['module'] = "activities";
        $data['view_file'] = "submit";
        echo Modules::run('template/layout2', $data);
      }
}