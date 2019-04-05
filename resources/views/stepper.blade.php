<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Material Bootstrap Wizard by Creative Tim | Free Boostrap Wizard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

    <meta name="keywords" content="wizard, bootstrap wizard, creative tim, long forms, 3 step wizard, sign up wizard, beautiful wizard, long forms wizard, wizard with validation, paper design, paper wizard bootstrap, bootstrap paper wizard">
    <meta name="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Paper Bootstrap Wizard by Creative Tim">
    <meta itemprop="description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Paper Bootstrap Wizard by Creative Tim">
    <meta name="twitter:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="Paper Bootstrap Wizard by Creative Tim | Free Boostrap Wizard" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://demos.creative-tim.com/paper-bootstrap-wizard/wizard-list-place.html" />
    <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/49/opt_pbw_thumbnail.jpg" />
    <meta property="og:description" content="Paper Bootstrap Wizard is a fully responsive wizard that is inspired by our famous Paper Kit  and comes with 3 useful examples and 5 colors." />
    <meta property="og:site_name" content="Creative Tim" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
	<!-- End Google Tag Manager -->
	</head>

	<body>
		<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" style="background-image: url('assets/img/bg.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="https://creative-tim.com">
	         <div class="logo-container">

					<img src="{{asset('images/logo1.png')}}" alt="img" style="width:200px; height:50px;">


	        </div>
	    </a>

		<!--  Made With Paper Kit  -->
		{{--<a href="https://demos.creative-tim.com/paper-kit" class="made-with-pk">--}}
			{{--<div class="brand">PK</div>--}}
			{{--<div class="made-with">Made with <strong>Paper Kit</strong></div>--}}
		{{--</a>--}}

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container">

		                <div class="card wizard-card" data-color="orange" id="wizardProfile">
		                    <form action="" method="">
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Welcome To KBZ Home Loan Page</h3>
									<p class="category">This information will let us know more about you.</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>

											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-check"></i>
												</div>
                                                ကိုယ္ေရးအခ်က္အလက္
											</a>
										</li>
			                            <li>
											<a href="#account" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-check"></i>
												</div>
                                                အဆင့္(၁)
											</a>
										</li>
			                            <li>
											<a href="#address" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-check"></i>
												</div>
                                                အဆင့္(၂)
											</a>
										</li>
										<li>
											<a href="#answer" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-check"></i>
												</div>
                                                အေျဖ
											</a>
										</li>
			                        </ul>
								</div>

		                        <div class="tab-content">
									<!-- 1 step1 -->
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text" style="color:darkblue;"> <b>ကိုယ္ေရးအခ်က္အလက္မ်ား ျဖည့္ သ ြင္းပါ </b></h5>
											{{--<div class="col-sm-4 col-sm-offset-1">--}}
												{{--<div class="picture-container">--}}
													{{--<div class="picture">--}}
														{{--<img src="assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />--}}
														{{--<input type="file" id="wizard-picture">--}}
													{{--</div>--}}
													{{--<h6>Choose Picture</h6>--}}
												{{--</div>--}}
											{{--</div>--}}
											<div class="col-sm-6">
												<div class="form-group">
													<label>ကိုယ္ေရးကိုယ္တာ အခ်က္အလက္မ်ား <small>(required)</small></label>
													<input name="firstname" type="text" class="form-control" placeholder="အမည္ အျပည့္အစံု.">
												</div>
												<div class="form-group">
													<label>မိုဘုိင္း ဖုန္းနံပါတ္ <small>(required)</small></label>
													<input name="lastname" type="text" class="form-control" placeholder="ဖုန္းနံပါတ္ကိုျဖည့္သ ြင္းပါ">
												</div>
												<div class="form-group">
													{{--<input name="lastname" type="text" class="form-control" placeholder="Smith...">--}}
													<label>  သြားေရာက္ေလွ်ာက္ထားလိုေသာဘဏ္ခြဲ <small>(required)</small></label>
												</div>


												<select name="country" class="form-control">
													<option > Choose Divisions or Townships</option>
													<option value="Bago"> Bago </option>
													<option value="Naypyitaw"> Naypyitaw</option>
													<option value="...">...</option>
												</select>

												<div class="form-group">
													{{--<input name="lastname" type="text" class="form-control" placeholder="Smith...">--}}
													{{--<label>  က ေမၻာဇ ဘဏ္ခဲြ ကိုေ ရြးခ်ယ္ပါ။ <small>(required)</small></label>--}}
												</div>


												<select name="country" class="form-control">
													<option> Choose KBZ branches</option>
													<option value="Bago"> Bago </option>
													<option value="Naypyitaw"> Naypyitaw</option>
													<option value="...">...</option>
												</select>



											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													{{--<label>မိုဘုိင္း ဖုန္းနံပါတ္ <small>(required)</small></label>--}}
													{{--<input name="lastname" type="text" class="form-control" placeholder="Smith...">--}}
													{{--<label>Email <small>(required)</small></label>--}}
													{{--<input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">--}}
												</div>
											</div>
										</div>
		                            </div>
									<!-- 1 end step1 -->
									<!-- 2 step2-->
		                            <div class="tab-pane" id="account">
		                                <h5 class="info-text" style="color:darkblue;"> အဆင့္(၁)-အိမ္ရာေခ်းေငြ ပမာဏကို တြက္ခ်က္ရန္ </h5>
                                        အိမ်ခြံမြေအမျိုးအစား
										<div class="col-sm-8 col-sm-offset-2">
										<ul class="nav nav-pills nav-pills-icons" role="tablist">
											<!--
                                                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                            -->


											<li class="nav-item">
												<div class="card card-checkboxes card-hover-effect">
													<i class="material-icons"></i>
													<a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
														တိုက္ခန္း
												</a>
												</div>
											</li>



											<li>
												<div class="card card-checkboxes card-hover-effect">

												<a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
													<i class="material-icons"></i>
													မီနီကြန္ဒို
												</a>
												</div>
											</li>

											<li class="nav-item">
												<div class="card card-checkboxes card-hover-effect">

												<a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
													<i class="material-icons"></i>
													ကြန္ဒို
												</a>
												</div>
											</li>
											<li class="nav-item">
												<div class="card card-checkboxes card-hover-effect">
													<i class="material-icons"></i>
													<a class="nav-link" href="#d-1" role="tab" data-toggle="tab">
														လံုးခ်င္း
													</a>
												</div>
											</li>
										</ul>
										<div class="tab-content tab-space">
											<div class="tab-pane active" id="dashboard-1">
												<br>
												<div class="form-group">
													<label> အဆောက်အဦးတန်ဖိုး (ျမန္မာက်ပ္ျဖင့္) <small></small></label>
													<input name="firstname" type="text" class="form-control" placeholder="">
												</div>
												<br>
												<div class="form-group">
													<label>ကနဦးေငြေပးေခ် <small></small></label>
													<input name="firstname" type="text" class="form-control" placeholder="">
                                                    &nbsp; &nbsp;
                                                    <label>ရာခိုင္ႏွဴန္း<small></small></label>
                                                    <select name="country" class="form-control">
                                                        <option > ၃%</option>
                                                        <option value="Bago"> Bago</option>
                                                        <option value="Naypyitaw"> Naypyitaw</option>
                                                        <option value="...">...</option>
                                                    </select>
												</div>
												<br>
												<div class="form-group">
													{{--<input name="lastname" type="text" class="form-control" placeholder="Smith...">--}}
													<label>ေခ်းေငြသက္တမ္း <small>(required)</small></label>
												</div>
												<br>
												<select name="country" class="form-control">
													<option > ၃ ႏွစ္</option>
													<option value="Bago"> Bago</option>
													<option value="Naypyitaw"> Naypyitaw</option>
													<option value="...">...</option>
												</select>
											</div>
											<div class="tab-pane" id="schedule-1">
												<br>
												<div class="form-group">
													<label>အေဆာက္အဦးတန္ဖိုး (ျမန္မာက်ပ္ျဖင့္) <small></small></label>
													<input name="firstname" type="text" class="form-control" placeholder="">
												</div>
												<br>
												<div class="form-group">
													<label>ကနဦးေငြေပးေခ် <small></small></label>
													<input name="firstname" type="text" class="form-control" placeholder="">
												</div>
												<br>
												<div class="form-group">
													{{--<input name="lastname" type="text" class="form-control" placeholder="Smith...">--}}
													<label>ေခ်းေငြသက္တမ္း <small>(required)</small></label>
												</div>
												<br>
												<select name="country" class="form-control">
													<option > ၃ ႏွစ္</option>
													<option value="Bago"> Bago</option>
													<option value="Naypyitaw"> Naypyitaw</option>
													<option value="...">...</option>
												</select>

											</div>
											<div class="tab-pane" id="tasks-1">
                                                <br>
                                                <div class="form-group">
                                                    <label> အဆောက်အဦးတန်ဖိုး (ျမန္မာက်ပ္ျဖင့္) <small></small></label>
                                                    <input name="firstname" type="text" class="form-control" placeholder="">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label>ကနဦးေငြေပးေခ် <small></small></label>
                                                    <input name="firstname" type="text" class="form-control" placeholder="">
                                                    &nbsp; &nbsp;
                                                    <label>ရာခိုင္ႏွဴန္း<small></small></label>
                                                    <select name="country" class="form-control">
                                                        <option > ၃%</option>
                                                        <option value="Bago"> Bago</option>
                                                        <option value="Naypyitaw"> Naypyitaw</option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    {{--<input name="lastname" type="text" class="form-control" placeholder="Smith...">--}}
                                                    <label>ေခ်းေငြသက္တမ္း <small>(required)</small></label>
                                                </div>
                                                <br>
                                                <select name="country" class="form-control">
                                                    <option > ၃ ႏွစ္</option>
                                                    <option value="Bago"> Bago</option>
                                                    <option value="Naypyitaw"> Naypyitaw</option>
                                                    <option value="...">...</option>
                                                </select>
											</div>
											<div class="tab-pane active" id="d-1">
                                                <br>
                                                <div class="form-group">
                                                    <label> အဆောက်အဦးတန်ဖိုး (ျမန္မာက်ပ္ျဖင့္) <small></small></label>
                                                    <input name="firstname" type="text" class="form-control" placeholder="">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label>ကနဦးေငြေပးေခ် <small></small></label>
                                                    <input name="firstname" type="text" class="form-control" placeholder="">
                                                    &nbsp; &nbsp;
                                                    <label>ရာခိုင္ႏွဴန္း<small></small></label>
                                                    <select name="country" class="form-control">
                                                        <option > ၃%</option>
                                                        <option value="Bago"> Bago</option>
                                                        <option value="Naypyitaw"> Naypyitaw</option>
                                                        <option value="...">...</option>
                                                    </select>
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    {{--<input name="lastname" type="text" class="form-control" placeholder="Smith...">--}}
                                                    <label>ေခ်းေငြသက္တမ္း <small>(required)</small></label>
                                                </div>
                                                <br>
                                                <select name="country" class="form-control">
                                                    <option > ၃ ႏွစ္</option>
                                                    <option value="Bago"> Bago</option>
                                                    <option value="Naypyitaw"> Naypyitaw</option>
                                                    <option value="...">...</option>
                                                </select>
											</div>
										</div>
										</div>
									</div>

									<!-- 3 step3-->

		                            <div class="tab-pane" id="address">
										<h5 class="info-text"> အဆင့်(၂)- ဘဏ ရေးအခြေအနေ </h5>
										<p>အလုပ္အကိုင္အမ်ိဳးအစား</p>
                                        <div class="row">


                                            <div class="col-sm-8 col-sm-offset-2">
                                                <ul class="nav nav-pills nav-pills-icons" role="tablist">
                                                    <!--
                                                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                                    -->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#dashboard-1" role="tab" data-toggle="tab">
                                                            <i class="material-icons">dashboard</i>
                                                            Dashboard
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#schedule-1" role="tab" data-toggle="tab">
                                                            <i class="material-icons">schedule</i>
                                                            Schedule
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                                                            <i class="material-icons">list</i>
                                                            Tasks
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content tab-space">
                                                    <div class="tab-pane active" id="dashboard-1">
                                                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                                                        <br><br>
                                                        Dramatically visualize customer directed convergence without revolutionary ROI.
                                                    </div>
                                                    <div class="tab-pane" id="schedule-1">
                                                        Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                                        <br><br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                                    </div>
                                                    <div class="tab-pane" id="tasks-1">
                                                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                                                        <br><br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                                                    </div>
                                                </div>

                                                {{--<div class="col-sm-4">--}}
                                                    {{--<div class="choice" data-toggle="wizard-checkbox">--}}
                                                        {{--<input type="checkbox" name="jobb" value="Design">--}}
                                                        {{--<div class="card card-checkboxes card-hover-effect">--}}
                                                            {{--<i class="ti-paint-roller"></i>--}}
                                                            {{--<p>Design</p>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<div class="choice" data-toggle="wizard-checkbox">--}}
                                                        {{--<input type="checkbox" name="jobb" value="Code">--}}
                                                        {{--<div class="card card-checkboxes card-hover-effect">--}}
                                                            {{--<i class="ti-pencil-alt"></i>--}}
                                                            {{--<p>Code</p>--}}

                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-4">--}}
                                                    {{--<div class="choice" data-toggle="wizard-checkbox">--}}
                                                        {{--<input type="checkbox" name="jobb" value="Develop">--}}
                                                        {{--<div class="card card-checkboxes card-hover-effect">--}}
                                                            {{--<i class="ti-star"></i>--}}
                                                            {{--<p>Develop</p>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            </div>
                                        </div>
                                    </div>


									<!--အေျဖ ***---->
									<div class="tab-pane" id="answer">
										<h5 class="info-text"> ဂုဏ္ယူပါတယ္ </h5>
										 သင့္အေနျဖင့္ အိမ္ရာေခ်းေငြ ေလွ်ာက္ထားမွဳအတြက္ အရည္အခ်င္းျပည့္မီပါသည္။
										<div class="row">


											<div class="col-sm-8 col-sm-offset-2">


												<div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
														<input type="checkbox" name="jobb" value="Design">
														<div class="card card-checkboxes card-hover-effect">
															<i class="ti-paint-roller"></i>
															<p>Design</p>
														</div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
														<input type="checkbox" name="jobb" value="Code">
														<div class="card card-checkboxes card-hover-effect">
															<i class="ti-pencil-alt"></i>
															<p>Code</p>
														</div>
													</div>
												</div>
												<div class="col-sm-4">
													<div class="choice" data-toggle="wizard-checkbox">
														<input type="checkbox" name="jobb" value="Develop">
														<div class="card card-checkboxes card-hover-effect">
															<i class="ti-star"></i>
															<p>Develop</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										လစဥ္ကုန္က်စရိတ္ ႏွင့္ အျခားကုန္က်စရိတ္မ်ား (ျမန္မာက်ပ္ျဖင့္)
									</div>


											<!--end of အေျဖ ***---->

		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next'  />
		                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center" style="font-size: medium;">
	          <i class="fa fa-heart heart"></i>  <a href="https://www.creative-tim.com">Terms & Conditions </a> <a href="https://www.creative-tim.com/product/paper-bootstrap-wizard"></a>
	        </div>
	    </div>
		<div class="fixed-plugin">
			<div class="dropdown open">
				<a href="#" data-toggle="dropdown">
					<i class="fa fa-cog fa-2x">Language </i>

				</a>
				<ul class="dropdown-menu">
					{{--<li class="header-title">Examples</li>--}}
					<li class="active">
						<a href="wizard-create-profile.html">
							<img src="https://img.icons8.com/color/48/000000/myanmar.png">
						   Myamar
						</a>
					</li>
					<li>
						<a href="wizard-find-desk.html">
							<img src="https://img.icons8.com/color/48/000000/great-britain.png">
						  English
						</a>
					</li>
					{{--<li>--}}
						{{--<a href="wizard-list-place.html">--}}
						   {{--<img src="assets/img/wizard-list-place.png">--}}
						   {{--List Your Place--}}
						{{--</a>--}}
					{{--</li>--}}
					{{--<li class="header-title">Colors</li>--}}
					{{--<li class="adjustments-line">--}}
						{{--<a href="javascript:void(0)" class="switch-trigger">--}}
							{{--<div class="text-center">--}}
								{{--<span class="badge filter badge-blue" data-color="blue"></span>--}}
								{{--<span class="badge filter badge-azure" data-color="azure"></span>--}}
								{{--<span class="badge filter badge-green" data-color="green"></span>--}}
								{{--<span class="badge filter badge-orange active" data-color="orange"></span>--}}
								{{--<span class="badge filter badge-red" data-color="red"></span>--}}
							{{--</div>--}}
							{{--<div class="clearfix"></div>--}}
						{{--</a>--}}
					{{--</li>--}}
				   {{--<li class="tutorial">--}}
						{{--<div class="text-center">--}}
							{{--<a href="documentation/elements.html" target="_blank" class="btn btn-default btn-fill btn-block">Documentation</a>--}}
						{{--</div>--}}
					{{--</li>--}}
					{{--<li class="license">--}}
						{{--Personal License--}}
						{{--<div class="text-center">--}}
							{{--<a href="https://www.creative-tim.com/product/paper-bootstrap-wizard" target="_blank" class="btn btn-info btn-fill btn-block">Download, it's free!</a>--}}
						{{--</div>--}}
					{{--</li>--}}
				</ul>
			</div>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
