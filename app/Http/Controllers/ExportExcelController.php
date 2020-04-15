<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExportExcelController extends Controller
{
    function index()
    {
    	$customer_data = DB::table('biodata_mahasiswa')->get();
    	return view('export_excel')->with('costomer_data', $customer_data);
    }

    function excel()
    {
    	$customer_data = DB::table('biodata_mahasiswa')->get()->toArray();
    	$customer_array[] = array('ID', 'NAME', 'NIM', 'ACTION');
    	foreach ($customer_data as $customer) 
    	{
    		$customer_array[]= array(
    			'ID' => $customer->id,
    			'NAME' => $customer->Name,
    			'NIM' => $customer->nim,
    			'ACTION' => $customer->ACTION
    		)
    	}
    	Excel::create('Customer Data', function($excel) use ($customer_array){
    		$excel->setTitle('Customer Data');
    		$excel->sheet('Customer Data', function($sheet) use ($customer_array){
    			$sheet->fromArray($customer_array, null, 'A1', false, false);

    		});
    	})->download('xlsx');

    }
}
