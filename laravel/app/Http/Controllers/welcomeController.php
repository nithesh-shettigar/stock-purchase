<?php

namespace App\Http\Controllers;
use App\Http\model\billingmodel;
use DB;
use Auth;
use Illuminate\Http\Request;
use App\User;
class welcomeController extends Controller

{
	public function __construct()
	{
		$this->Bill=new billingmodel;
	}
    public function index()
	{
		return view("index");
	} 
	public function a()
	{
		return view("a");
	}
	public function create()
	{
		$var=DB::table('contact_form')->get();
		return view("create_post",compact('var'));
	}
	public function postinsert(Request $req)
	{
		$title=$req->input('title');
		$desc=$req->input('description');
		
		DB::table('create_view_post')->insert(['title'=>$title,'thumbnail'=>'','description'=>$desc]);
	}
	public function authenticate(Request $req)
	{
		$user_name=$req->input('user_name');
		$password=$req->input('password');
		$logins=0;
		$auth=user::where('user_name',$user_name)->first();
        if($auth)
		{
			Auth::login($auth);
			$pass=Auth::user()->password;
			if($pass==$password)
			{
				$logins=1;
			}
			
		}
		if($logins==1)
		{
			return redirect("/dashboard");
		}
		else
		{
	return redirect("/");
		}
	}
	public function dashboard(){
		
		$nithu="";
		if(Auth::user())
			$nithu=Auth::user();
		$data['Uid']=$nithu->user_id;
		$data['user_name']=$nithu->user_name;
		return view("dashboard",compact('data'));
	}
	public function vendor(){
		$nithu="";
		if(Auth::user())
			$nithu=Auth::user();
		$data['Uid']=$nithu->user_id;
		$data['user_name']=$nithu->user_name;
		$data['vendor']=DB::table('vendor')->get();
	return view("vendor",compact('data'));
		
	}
	public function vendordelete($id)
    {
        
       
		DB::table('vendor')->where('id',$id)->delete();
        return redirect('/vendor');
    }
	public function create_vendor(Request $req)
    {
        /* $name=$req->input('name');
		$email=$req->input('email');
		$phone=$req->input('phone_no');
		DB::table('vendor')->insert(['name'=>$name,'email'=>$email,'phone_no'=>$phone]);
		
        */
		return view("create_vendor");
    }
	public function vendorinsert(Request $req)
    {
        $name=$req->input('name');
		$email=$req->input('email');
		$phone=$req->input('phone_no');
		DB::table('vendor')->insert(['name'=>$name,'email'=>$email,'phone_no'=>$phone]);
return redirect('/vendor');
    }
	public function vendorupdate(Request $req)
    {
        $id=$req->input('id');
        $name=$req->input('name');
		$email=$req->input('email');
		$phone=$req->input('phone_no');
		DB::table('vendor')->where('id',$id)->update(['name'=>$name,'email'=>$email,'phone_no'=>$phone]);
return redirect('/vendor');
    }

	
	
	public function edit(Request $req)
{
	$vid=$req->input('vid');
   $data['v']=DB::table('vendor')->where('id',$vid)->first();
    return View('vendor_edit',compact('data'));
}

public function customer(){
		$var=DB::table('customer')->get();
	return view("customer",compact('var'));
		
	}
	public function customer_create(Request $req)
    {
       
		return view("customer_create");
    }

public function customerinsert(Request $req)
    {
        $name=$req->input('name');
		$email=$req->input('email');
		$phone=$req->input('phone_no');
		DB::table('customer')->insert(['customer_name'=>$name,'customer_email'=>$email,'customer_phone'=>$phone]);
return redirect('/customer');
    }
	public function customerdelete($id)
    {
        
       
		DB::table('customer')->where('customer_id',$id)->delete();
        return redirect('/customer');
    }
	
		public function customer_edit(Request $req)
{
	$vid=$req->input('vid');
   $data['v']=DB::table('customer')->where('customer_id',$vid)->first();
    return View('customer_edit',compact('data'));
}
public function customerupdate(Request $req)
    {
        $id=$req->input('id');
        $name=$req->input('name');
		$email=$req->input('email');
		$phone=$req->input('phone_no');
		DB::table('customer')->where('customer_id',$id)->update(['customer_name'=>$name,'customer_email'=>$email,'customer_phone'=>$phone]);
return redirect('/customer');
    }
 public function item()
	{
		$var=DB::table('items')->get();
	return view("item",compact('var'));
	} 
	 public function createitem()
	{
		
        return view("createitem");
	} 
	public function iteminsert(Request $req)
    {
        $name=$req->input('name');
		$purchase_rate=$req->input('purchase_rate');
		$sell_rate=$req->input('sell_rate');
		DB::table('items')->insert(['item_name'=>$name,'item_purchase_rate'=>$purchase_rate,'item_sell_rate'=>$sell_rate]);
return redirect('/item');
    }
	public function itemdelete($id)
    {
        
       
		DB::table('items')->where('item_id',$id)->delete();
        return redirect('/item');
    }
	
		public function item_edit(Request $req)
{
	$vid=$req->input('vid');
   $data['v']=DB::table('items')->where('item_id',$vid)->first();
    return View('item_edit',compact('data'));
}
public function itemupdate(Request $req)
    {
        $id=$req->input('id');
        $name=$req->input('name');
		$purchase_rate=$req->input('purchase_rate');
		$sell_rate=$req->input('sell_rate');
		DB::table('items')->where('item_id',$id)->update(['item_name'=>$name,'item_purchase_rate'=>$purchase_rate,'item_sell_rate'=>$sell_rate]);
return redirect('/item');
    }
public function purchase(){
		$var=DB::table('purchase')->get();
	return view("purchase",compact('var'));
		
	}
	  public function create_purchase()
	{
		$data['vendors']=DB::table('vendor')->get();
		$data['item']=DB::table('items')->get();
		
        return view("create_purchase",compact('data'));
	} 
	public function purchaseinsert(Request $req)
    {
        $item=$req->input('item');
        $order_no=$req->input('order_no');
		$date=$req->input('date');
		$quantity=$req->input('quantity');
		$vendor=$req->input('vendor_name');
		
		DB::table('purchase')->insert(['item_id'=>$item,'order_no'=>$order_no,'purchase_date'=>$date,'quantity'=>$quantity,'vendor_id'=>$vendor]);

		
		return redirect('/purchase');
    }
	 public function billing()
	{

	
		//$data['user']=DB::table('user')->first();
		$data['billing']=DB::table('billing')->leftjoin('bill_details','bill_details.bill_id','=','billing.bill_id')->get();
	
		
		//$data['vendors']=DB::table('vendor')->first();
		

	return view("billing",compact('data'));}
	
	
	public function createbilling()
    {
       $data['item']=DB::table('items')->get();
		$data['customer']=DB::table('customer')->get();
        return view("createbilling",compact('data'));
		
		
    }
	public function billinginsert( Request $req)
	{
		$data['item']=$req->input('product');
        $data['bill_no']=$req->input('bill_no');
		$data['date']=$req->input('date');
		
		$data['customer']=$req->input('customer_name');
		
		$data['sub_total']=$req->input('sub_total');
		$data['tax']=$req->input('tax');
		$data['grand_total']=$req->input('total_amount');
		
		for($i=0;$i<count($data['item']);$i++)
		{
		$data['quantity'.$i]=$req->input('qty')[$i];
		$data['price'.$i]=$req->input('price')[$i];
		$data['total'.$i]=$req->input('total')[$i];
		$data['item'.$i]=$req->input('product')[$i];
		
		}
		
		$billid=$this->Bill->billgenerate($data);
		
		$temp['bills']=DB::table('billing')->leftjoin('customer','customer.customer_id','=','billing.customer_id')->where('bill_id',$billid)->first();
		$temp['details']=DB::table('bill_details')->leftjoin('items','items.item_id','=','bill_details.item_id')->where('bill_id',$billid)->get();
		
		return view("billing" ,compact('temp'));
	}
	
	
	public function logout(Request $request) {
  Auth::logout();
  return redirect('/');
}

public function priceenquire(Request $req)
{
	$p=$req->input('product');
	$json=DB::table('items')->where('item_id',$p)->first();
	return json_encode($json);
	
}	

}
