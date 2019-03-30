<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneController extends Controller
{
    //
    public function data(Request $request){

        $name= $request->input('name');
        $date= $request->input('date');
        $quan= $request->input('quan');
        $price= $request->input('price');
        $total= $request->input('total');
        
        $data=[];
        $tempArray=[];
        $data['name']=$name;
        $data['price']=$price;
        $data['date']=$price;
        $data['quan']=$quan;
        
        
        //$data_old= array();
        //$data_json= json_encode($data);

        $data[]=json_decode(file_get_contents('data.json'));
       // $data_old=json_decode($data_old);
       
       // $data_final=array_merge($data_old,$data);
        
       // $data_json= json_encode($data_old);
       file_put_contents('data.json', json_encode($data));
       echo var_dump($data);
        //$fp = fopen('data.json', 'a');
        //fwrite($fp, $data_json);
        //fclose($fp);
        
        //echo var_dump($data_json);

       
        
    }
}
