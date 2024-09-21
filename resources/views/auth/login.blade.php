<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Login v3</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN core-css ================== -->
	<link href="/assets/backend/css/vendor.min.css" rel="stylesheet" />
	<link href="/assets/backend/css/default/app.min.css" rel="stylesheet" />
	<!-- ================== END core-css ================== -->
</head>
<body class='pace-top'>
	<!-- BEGIN #loader -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>
	<!-- END #loader -->

	<!-- BEGIN #app -->
	<div id="app" class="app">
		<!-- BEGIN login -->
		<div class="login login-with-news-feed">
			<!-- BEGIN news-feed -->
			<div class="news-feed">
				<div class="news-image" style="background-image: url(/assets/backend/img/login-bg/login-bg-11.jpg)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>Color</b> Admin App</h4>
					<p>
						Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
					</p>
				</div>
			</div>
			<!-- END news-feed -->

			<!-- BEGIN login-container -->
			<div class="login-container">
				<!-- BEGIN login-header -->
				<div class="login-header mb-30px">
					<div class="brand">
						<div class="d-flex align-items-center">
							<span class="logo"></span>


							<b>Color</b> Admin
						</div>
						<small>Bootstrap 5 Responsive Admin Template</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in-alt"></i>
					</div>
				</div>
				<!-- END login-header -->

				<!-- BEGIN login-content -->
				<div class="login-content">
            <form method="POST" action="{{ route('login') }}" class="fs-13px">
                @csrf
						<div class="form-floating mb-15px">
							<!-- <input id="email" type="text" class="form-control h-45px fs-13px @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> -->
              <input id="email" name="email" type="email" placeholder="Email Address" class="form-control h-45px fs-13px @error('email') is-invalid @enderror"  value="{{ old('email') }}" required autocomplete="email" autofocus>

							<label for="emailAddress" class="d-flex align-items-center fs-13px text-gray-600">Email Address</label>

						</div>

						<div class="form-floating mb-15px">
							<!-- <input type="password" class="form-control h-45px fs-13px" placeholder="Password" id="password" /> -->
              <input id="password" name="password" type="password" placeholder="Password" class="form-control h-45px fs-13px @error('password') is-invalid @enderror" required autocomplete="current-password">
              @error('email')
                      {{ $message }}
              @enderror
              @error('password')
                      {{ $message }}
              @enderror
							<label for="password" class="d-flex align-items-center fs-13px text-gray-600">Password</label>
						</div>
						<div class="form-check mb-30px">
							<input class="form-check-input" type="checkbox" value="1" id="rememberMe" />
							<label class="form-check-label" for="rememberMe">
								Remember Me
							</label>
						</div>
						<div class="mb-15px">
							<button type="submit" class="btn btn-theme d-block h-45px w-100 btn-lg fs-14px">Sign me in</button>
						</div>
						<div class="mb-40px pb-40px text-dark">
							Not a member yet? Click <a href="register_v3.html" class="text-primary">here</a> to register.
						</div>
						<hr class="bg-gray-600 opacity-2" />
						<div class="text-gray-600 text-center  mb-0">
							&copy; Color Admin All Right Reserved 2023
						</div>
					</form>
				</div>
				<!-- END login-content -->
			</div>
			<!-- END login-container -->
		</div>
		<!-- END login -->

		<!-- BEGIN theme-panel -->
		<div class="theme-panel">
			<a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
			<div class="theme-panel-content" data-scrollbar="true" data-height="100%">
				<h5>App Settings</h5>

				<!-- BEGIN theme-list -->
				<div class="theme-list">
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
					<div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-teal" data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue" data-theme-class="theme-blue" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
					<div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
				</div>
				<!-- END theme-list -->

				<div class="theme-panel-divider"></div>

				<div class="row mt-10px">
					<div class="col-8 control-label text-body fw-bold">
						<div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
						<div class="lh-14">
							<small class="text-body opacity-50">
								Adjust the appearance to reduce glare and give your eyes a break.
							</small>
						</div>
					</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
							<label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
						</div>
					</div>
				</div>

				<div class="theme-panel-divider"></div>

				<!-- BEGIN theme-switch -->
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-body fw-bold">Header Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
							<label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-body fw-bold">Header Inverse</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
							<label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-body fw-bold">Sidebar Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
							<label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-body fw-bold">Sidebar Grid</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
							<label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
						</div>
					</div>
				</div>
				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-body fw-bold">Gradient Enabled</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
							<label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
						</div>
					</div>
				</div>
				<!-- END theme-switch -->

				<div class="theme-panel-divider"></div>

				<h5>Admin Design (5)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../template_html/index_v2.html" class="theme-version-link active">
							<span style="background-image: url(/assets/backend/img/theme/default.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_transparent/index_v2.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/transparent.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_apple/index_v2.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/apple.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_material/index_v2.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/material.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_facebook/index_v2.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/facebook.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_google/index_v2.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/google.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->

				<div class="theme-panel-divider"></div>

				<h5>Language Version (7)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../template_html/index.html" class="theme-version-link active">
							<span style="background-image: url(/assets/backend/img/version/html.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_ajax/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/version/ajax.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_angularjs/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/version/angular1x.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_angularjs16/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/version/angular10x.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="javascript:alert('Laravel 10 Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/version/laravel.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_vue3/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/version/vuejs.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../template_react/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/version/reactjs.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="javascript:alert('.NET Core 7.0 MVC Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/version/dotnet.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->

				<div class="theme-panel-divider"></div>

				<h5>Frontend Design (5)</h5>
				<!-- BEGIN theme-version -->
				<div class="theme-version">
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_one_page_parallax/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/one-page-parallax.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_e_commerce/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/e-commerce.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_blog/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/blog.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_forum/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/forum.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
					<div class="theme-version-item">
						<a href="../../../frontend/template/template_corporate/index.html" class="theme-version-link">
							<span style="background-image: url(/assets/backend/img/theme/corporate.jpg);" class="theme-version-cover"></span>
						</a>
					</div>
				</div>
				<!-- END theme-version -->

				<div class="theme-panel-divider"></div>

				<a href="https://seantheme.com/color-admin/documentation/" class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
				<a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
			</div>
		</div>
		<!-- END theme-panel -->
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->

	<!-- ================== BEGIN core-js ================== -->
	<script src="/assets/backend/js/vendor.min.js"></script>
	<script src="/assets/backend/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
</body>
</html>
