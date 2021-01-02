<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="<?= base_url() ?>/assets/img/logo/logo.png" rel="icon">
	<title><?= $title . ' - ' . $complement ?></title>
	<link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>/assets/css/app.css?v=<?= CSS_VERSION ?>" rel="stylesheet">
</head>

<body class="bg-purple" style="overflow-x: hidden;">
	<!-- Login Content -->
	<div class="container-login">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="card shadow-sm my-5">
					<div class="card-body p-5">
						<div class="login-form">
							<div class="text-center form-group">
								<!--<img class="mb-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRrGrdKw6jGaIdNJ1ZmpVHQlYjuKbqiMRnDBA&usqp=CAU" alt="logo" title="logo" width="100" height="auto">-->
								<h1 class="h6 text-gray-900 mb-4">Hello there! Welcome back!</h1>
							</div>
							<form class="user" method="post" id="form" action="<?= base_url('login') ?>">
								<?php if (isset($validation)) : ?>
									<div class="form-group">
										<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">×</button>

											<?php if (method_exists($validation, 'listErrors')) : ?>
												<?= $validation->listErrors() ?>
											<?php endif; ?>

											<?php if (is_string($validation)) : ?>
												<?= $validation ?>
											<?php endif; ?>
										</div>
									</div>
								<?php endif; ?>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-purple" id="basic-addon"><i class="fa fa-user text-white"></i></span>
										</div>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter your login" aria-label="login" aria-describedby="basic-addon" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-purple" id="basic-addon1"><i class="fa fa-lock text-white"></i></span>
										</div>
										<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" aria-label="password" aria-describedby="basic-addon1" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
										<input type="checkbox" class="custom-control-input" id="customCheck">
										<label class="custom-control-label" for="customCheck">Remember me</label>
									</div>
								</div>
								<div class="form-group">
									<button class="btn btn-purple btn-primary btn-block" type="submit"> Login </button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Login Content -->
	<script src="<?= base_url() ?>/assets/js/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url() ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>