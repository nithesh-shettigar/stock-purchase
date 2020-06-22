<?php

namespace App\http\model;
use DB;
use Illuminate\Database\Eloquent\Model;

class billingmodel extends Model
{
    public function billgenerate($id)
	{

	$billid=DB::table('billing')->insertGetId(['bill_date'=>$id['date'],'bill_no'=>$id['bill_no'],'customer_id'=>$id['customer'],'grand_total'=>$id['grand_total'],'tax'=>$id['tax'],'sub_total'=>$id['sub_total']]);
		for($i=0;$i<count($id['item']);$i++)
		{
			$quantity=$id['quantity'.$i];
			$price=$id['price'.$i];
			$total=$id['total'.$i];
			$item=$id['item'.$i];
		DB::table('bill_details')->insert(['bill_id'=>$billid,'cost'=>$price,'item_id'=>$item,'quantity'=>$quantity,'total'=>$total]);
		}
		return $billid;
	}
}
