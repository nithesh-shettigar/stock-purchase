<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jan 2020 08:57:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>


<style>#invoice{
    padding: 40px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 25px
}

.invoice header {
    padding: 20px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}</style>




	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/material-dashboard-pro"/>

    <!--  Social tags      -->
    <meta name="keywords" content="material dashboard, bootstrap material admin, bootstrap material dashboard, material design admin, material design, creative tim, html dashboard, html css dashboard, web dashboard, freebie, free bootstrap dashboard, css3 dashboard, bootstrap admin, bootstrap dashboard, frontend, responsive bootstrap dashboard, premiu material design admin">

    <meta name="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta itemprop="description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image" content="s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template">
    <meta name="twitter:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg">

    <!-- Open Graph data -->
	<meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim | Premium Bootstrap Admin Template" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://www.creative-tim.com/product/material-dashboard-pro" />
    <meta property="og:image" content="s3.amazonaws.com/creativetim_bucket/products/51/opt_mdp_thumbnail.jpg"/>
    <meta property="og:description" content="Material Dashboard PRO is a Premium Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
    <meta property="og:site_name" content="Creative Tim" />

	<!-- Bootstrap core CSS     -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	


	<!--  Material Dashboard CSS    -->
	<link href="assets/css/material-dashboard98f3.css?v=1.3.0" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	
	<!--     Fonts and icons     -->
	<link href="maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
<!-- End Google Tag Manager -->

</head>


<body >
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

	<div class="wrapper">

	    <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->

    <div class="logo">
        <a href="http://www.creative-tim.com/" class="simple-text logo-mini">
          MW
        </a>

        <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
            MOBI-WORLD
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
              <!--  <img src="assets/img/faces/avatar.jpg" /> -->
            </div>
            <div class="info"><h5>USER</h5>
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">

            <li class="active">
                <a href="dashboard">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
			
			
			
    <!-- 
 
            <li>
                <a href="">
                    <i class="material-icons">person</i>
                    <p> SUPPLIER </p>
                </a>
            </li>
            <li>
                <a href="vendor">
                    <i class="material-icons">store</i>
                    <p> VENDOR </p>
                </a>
            </li>-->
			
			
			
		 <li class="active">
                <a data-toggle="collapse" href="#tablesExamples" aria-expanded="true">
                    <i class="material-icons">store</i>
                    <p> VENDOR
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse in" id="tablesExamples">
                    <ul class="nav">
					 <li class="">
                            <a href="create_vendor">
                                <span class="sidebar-mini"> CD </span>
                                <span class="sidebar-normal"> create </span>
                            </a>
                        </li>

                        <li class="">
                            <a href="vendor">
                                <span class="sidebar-mini"> VD </span>
                                <span class="sidebar-normal"> view </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
<li>
                <a data-toggle="collapse" href="#componentsExamples">
                    <i class="material-icons">person</i>
                    <p> CUSTOMER
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="componentsExamples">
                    <ul class="nav">
                        <li>
                            <a href="customer_create">
                                <span class="sidebar-mini"> CD </span>
                                <span class="sidebar-normal"> create </span>
                            </a>
                        </li>
                        <li>
                            <a href="customer">
                                <span class="sidebar-mini"> VD </span>
                                <span class="sidebar-normal"> view </span>
                            </a>
                        </li>
                        
                       
                    </ul>
                </div>
            </li>
<li>
                <a data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">add_shopping_cart</i>
                    <p> PURCHASE
                       <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li>
                            <a href="create_purchase">
                                <span class="sidebar-mini"> CD </span>
                                <span class="sidebar-normal"> CREATE </span>
                            </a>
                        </li>
                        <li>
                            <a href="purchase">
                                <span class="sidebar-mini"> VD </span>
                                <span class="sidebar-normal"> VIEW </span>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </li>
			
			
 <li>
                <a href="item">
                    <i class="material-icons">shopping</i>
                    <p> ITEM </p>
                </a>
            </li>
	
           <li>
                <a href="createbilling">
                    <i class="material-icons">content_paste</i>
                    <p> BILLING </p>
                </a>
            </li>
            <li>
                 <a href="/logout" class="btn btn-rose btn-fill" >logout</a>
            </li>
			
            
        </ul>
    </div>
</div>


	    <div class="main-panel">

			<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons visible-on-sidebar-mini">view_list</i>
            </button>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" temp-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> Dashboard </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#pablo" class="dropdown-toggle" temp-toggle="dropdown">
                        <i class="material-icons">dashboard</i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" temp-toggle="dropdown">
                        <i class="material-icons">notifications</i>
                        <span class="notification">5</span>
                        <p class="hidden-lg hidden-md">
                            Notifications
                            <b class="caret"></b>
                        </p>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Mike John responded to your email</a></li>
                        <li><a href="#">You have 5 new tasks</a></li>
                        <li><a href="#">You're now friend with Andrew</a></li>
                        <li><a href="#">Another Notification</a></li>
                        <li><a href="#">Another One</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#pablo" class="dropdown-toggle" temp-toggle="dropdown">
                       <i class="material-icons">person</i>
                       <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                </li>

                <li class="separator hidden-lg hidden-md"></li>
            </ul>


            <form class="navbar-form navbar-right" role="search">
                <div class="form-group form-search is-empty">
                    <input type="text" class="form-control" placeholder=" Search ">
                    <span class="material-input"></span>
                </div>
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                    <i class="material-icons">search</i><div class="ripple-container"></div>
                </button>
            </form>
        </div>
    </div>
	
</nav>
<div class="content">
					<div class="container-fluid">
					 	    <div class="row">
<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
            <button id="printInvoice" onclick="myFunction()" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            <script>
function myFunction() {
  window.print();
}
</script>
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col-3">
                      <img src="assets/img/faces/mobiworld1.jpg" />
                    </div>
                    <div class="col company-details">
					<h2 style="font-style:italic;font-weight:bolder;margin-top: -16% ;color: #3989c6;
    ">
  
                        MobiWorld-   The next Phone store
                        </h2>
                        <div>455 Foggy Heights, AZ 85004, US</div>
                        <div>(123) 456-789</div>
                        <div>
                        MobiWorld@gmail.com</div>
						
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts" style="margin-left:2%">
                    <div class="col-4 invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                       
                        <h2 class="name" >
                        {{$temp['bills']->customer_name}}
                 </h2>
                        <div>{{$temp['bills']->customer_email}}</div>
                        <div>{{$temp['bills']->customer_phone}}</div>
                    </div>
					
                    <div class="col invoice-details"style="margin-left:47%">
                        <h1 class="invoice-id" >INVOICE </h1>
                        <div class="date">date:{{$temp['bills']->bill_date}}</div>
                        
                    </div>
                </div>
                <table border="1" cellspacing="0" cellpadding="0" >
                    <thead >
                        <tr style=" text-align: right;
    font-size: 1.2em">
                           
                            <th class="text-right">BILL ID</th>
                            <th class="text-right">ITEM</th>
                            <th class="text-right">QUANTITY</th>
                            <th class="text-right">price</th>
                           
                            <th class="text-right">total</th>
                        </tr>
					
                    </thead>
				<tbody>	
			 @foreach($temp['details'] as $t)
						<tr style="">
            <th style=" color: #fff;
    font-size: 1.6em;
    background: #3989c6">{{$t->bill_id}}</th>
             
 
            <th style="text-align: right;
    font-size: 1.6em">{{$t->item_name}}</th>
			 
            <th style="    background: #ddd;text-align: right;
    font-size: 1.6em">{{$t->quantity}}</th>
           
            <th style="text-align: right;
    font-size: 1.6em">{{$t->item_sell_rate}}</th>
            <th style=" background: #3989c6;
    color: #fff ;text-align: right;
    font-size: 1.6em">{{$t->total}}</th>
		
			</tr>
			  @endforeach
                    </tbody>
                    <tfoot style=" border: none;  border-top: none">
					
                        <tr style=" border: none">
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL </td>
                            <td style="text-align: right;
    font-size: 1.6em">{{$temp['bills']->sub_total}}</td>
                        </tr>
						
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">TAX</td>
                            <td style="text-align: right;
    font-size: 1.6em">{{$temp['bills']->tax}}</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2"style="">GRAND TOTAL</td>
                            <td style="text-align: right;
    font-size: 1.6em">{{$temp['bills']->grand_total}}</td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks" style="margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px">Thank you!</div>
          <!--      <div class="notices" style=" padding-left: 6px;
    border-left: 6px solid #3989c6">
                    <div style="font-size: 1.2em">NOTICE:</div>
                    <div class="notice"></div>
                </div>-->
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div><script> $('#printInvoice').click(function(){
            Popup($('.invoice')[0].outerHTML);
            function Popup(temp) 
            {
                window.print();
                return true;
            }
        });</script></div>
    </div>
</div>
</div>
</div>
</div>
		
			<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                         Home 
                    </a>
                </li>
                <li>
                    <a href="#">
                         Company 
                    </a>
                </li>
                <li>
                    <a href="#">
                          Portofolio 
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog 
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com/"> Creative Tim </a>,  made with love for a better web 
        </p>
    </div>
</footer>

			
		</div>
	</div>
	<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" temp-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="badge-colors text-center">
						<span class="badge filter badge-purple" temp-color="purple"></span>
                        <span class="badge filter badge-blue" temp-color="blue"></span>
                        <span class="badge filter badge-green" temp-color="green"></span>
                        <span class="badge filter badge-orange" temp-color="orange"></span>
                        <span class="badge filter badge-red" temp-color="red"></span>
                        <span class="badge filter badge-rose active" temp-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="text-center">
						<span class="badge filter badge-white" temp-color="white"></span>
                        <span class="badge filter badge-black active" temp-color="black"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <div class="togglebutton switch-sidebar-mini">
                    	<label>
                        	<input type="checkbox" unchecked="">
                    	</label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Image</p>
                    <div class="togglebutton switch-sidebar-image">
                    	<label>
                        	<input type="checkbox" checked="">
                    	</label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>

            <li class="header-title">Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../../assets/img/sidebar-2.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../../assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-rose btn-block">Buy Now</a>
                </div>

                <div class="">
                    <a href="http://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">Get Free Demo</a>
                </div>
            </li>

            <li class="header-title">Thank you for 95 shares!</li>

            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-twitter btn-round"><i class="fa fa-twitter"></i> &middot; 45</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round"><i class="fa fa-facebook-square"> &middot;</i>50</button>
            </li>
        </ul>
    </div>
</div>

</body>
  
	<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/js/material.min.js" type="text/javascript"></script>
<script src="../../assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="../../../../../cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="../../assets/js/arrive.min.js" type="text/javascript"></script>

<!-- Forms Validations Plugin -->
<script src="../../assets/js/jquery.validate.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="../../assets/js/moment.min.js"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../../assets/js/chartist.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../../assets/js/jquery.bootstrap-wizard.js"></script>

<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../../assets/js/bootstrap-notify.js"></script>

<!--   Sharrre Library    -->
<script src="../../assets/js/jquery.sharrre.js"></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../../assets/js/bootstrap-datetimepicker.js"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../../assets/js/jquery-jvectormap.js"></script>

<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="../../assets/js/nouislider.min.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1_8C5Xz9RpEeJSaJ3E_DeBv8i7j_p6Aw"></script>

<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../../assets/js/jquery.select-bootstrap.js"></script>

<!--  tempTables.net Plugin, full documentation here: https://temptables.net/    -->
<script src="assets/js/jquery.temptables.js"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="../../assets/js/sweetalert2.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../assets/js/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../../assets/js/fullcalendar.min.js"></script>

<!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../../assets/js/jquery.tagsinput.js"></script>

<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard98f3.js?v=1.3.0"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script>
// Facebook Pixel Code Don't Delete
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','../../../../../connect.facebook.net/en_US/fbevents.js');

try{
  fbq('init', '111649226022273');
  fbq('track', "PageView");

}catch(err) {
  console.log('Facebook Track Error:', err);
}

</script>
<noscript>
  <img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
  />
</noscript>




	<script type="text/javascript">
	$(document).ready(function() {
		$('#temptables').tempTable({
			"pagingType": "full_numbers",
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			responsive: true,
			language: {
			search: "_INPUT_",
			searchPlaceholder: "Search records",
			}

		});


		var table = $('#temptables').tempTable();

		// Edit record
		table.on( 'click', '.edit', function () {
			$tr = $(this).closest('tr');

			var temp = table.row($tr).temp();
			alert( 'You press on Row: ' + temp[0] + ' ' + temp[1] + ' ' + temp[2] + '\'s row.' );
		} );

		// Delete a record
		table.on( 'click', '.remove', function (e) {
			$tr = $(this).closest('tr');
			table.row($tr).remove().draw();
			e.preventDefault();
		} );

		//Like record
		table.on( 'click', '.like', function () {
			alert('You clicked on Like button');
		});

		$('.card .material-temptables label').addClass('form-group');
	});

	</script>





<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/tables/temptables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jan 2020 08:57:58 GMT -->
</html>

</html>