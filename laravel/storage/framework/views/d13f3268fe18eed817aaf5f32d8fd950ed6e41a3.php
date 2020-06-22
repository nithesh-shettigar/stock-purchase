<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jan 2020 08:57:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<style>
@import  url(https://fonts.googleapis.com/css?family=Montserrat);

html, body{
  height: 100%;
  font-weight: 800;
}

body{
  background: #030321;
  font-family: Arial;
}

svg {
    display: block;
    font: 10.5em 'Montserrat';
    width: 960px;
    height: 300px;
    margin: 0 auto;
}

.text-copy {
    fill: none;
    stroke: white;
    stroke-dasharray: 6% 29%;
    stroke-width: 5px;
    stroke-dashoffset: 0%;
    animation: stroke-offset 5.5s infinite linear;
}

.text-copy:nth-child(1){
    stroke: #4D163D;
	animation-delay: -1;
}

.text-copy:nth-child(2){
	stroke: #840037;
	animation-delay: -2s;
}

.text-copy:nth-child(3){
	stroke: #BD0034;
	animation-delay: -3s;
}

.text-copy:nth-child(4){
	stroke: #BD0034;
	animation-delay: -4s;
}

.text-copy:nth-child(5){
	stroke: #FDB731;
	animation-delay: -5s;
}

@keyframes  stroke-offset{
	100% {stroke-dashoffset: -35%;}
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


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
             MOBI WORLD
        </a>
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
              <!--  <img src="assets/img/faces/avatar.jpg" /> -->
            </div>
            <div class="info"><h5></h5>
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        <?php echo e($data['user_name']); ?>

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
                    <p>  Dashboard </p>
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
                                <span class="sidebar-mini"> VD</span>
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
</div><?php /**PATH C:\Users\HP\Desktop\Desktop\testlaravel\resources\views/sidebar.blade.php ENDPATH**/ ?>