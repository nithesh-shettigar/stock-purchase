<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;


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
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> DataTables.net </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">dashboard</i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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
                    <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon col-md-4" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>

                <div class="card-content">
                    <h4 class="card-title">DataTables.net</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="75%" style="width:100%">
                           
                                         <tr>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>PHONE</th>

	<th colspan="2">OPERATIONS</th>
	</tr>
                            </tfoot>
                            <tbody>
                       
	<?php $__currentLoopData = $data['vendor']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
 <td><?php echo e($v->name); ?></td>
 <td><?php echo e($v->email); ?></td>
 <td><?php echo e($v->phone_no); ?></td>
           
  <td class="text-left"><!--<a  class="btn btn-primary btn-sm"href="vendoredit/<?php echo e($v->id); ?>">EDIT</a>
  <td class="text-right"><!--<a  class="btn btn-primary btn-sm"href="vendoredit/<?php echo e($v->id); ?>">EDIT</a>
	<a  class="btn btn-primary btn-sm"href="vendordelete/<?php echo e($v->id); ?>">DELETE</a></td>
	<a href="#" class="btn btn-simple btn-info btn-icon like"><i class="material-icons">favorite</i></a>-->
 

                                        
                                        <a href="#" onclick="vendoredit(<?php echo e($v->id); ?>)" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                        <a href="vendordelete/<?php echo e($v->id); ?>" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                    </td>
									</tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
						<script>
						function vendoredit(vid)
						{
							window.location.assign("vendor_edit?vid="+vid);
						}
						</script>
                    </div>
                </div><!-- end content-->
            </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->

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
        <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="badge-colors text-center">
						<span class="badge filter badge-purple" data-color="purple"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-rose active" data-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="text-center">
						<span class="badge filter badge-white" data-color="white"></span>
                        <span class="badge filter badge-black active" data-color="black"></span>
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

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="assets/js/jquery.datatables.js"></script>

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
		$('#datatables').DataTable({
			"pagingType": "full_numbers",
			"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			responsive: true,
			language: {
			search: "_INPUT_",
			searchPlaceholder: "Search records",
			}

		});


		var table = $('#datatables').DataTable();

		// Edit record
		table.on( 'click', '.edit', function () {
			$tr = $(this).closest('tr');

			var data = table.row($tr).data();
			alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
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

		$('.card .material-datatables label').addClass('form-group');
	});

	</script>





<!-- Mirrored from demos.creative-tim.com/bs3/material-dashboard-pro/examples/tables/datatables.net.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jan 2020 08:57:58 GMT -->
</html>
<?php /**PATH C:\Users\HP\Desktop\Desktop\testlaravel\resources\views/vendor.blade.php ENDPATH**/ ?>