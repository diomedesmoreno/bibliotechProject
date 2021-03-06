<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/template/app/bower_components/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/template/app/default/assets/css/style.css">
</head>
<body>
<div class="container">
	<div>
		<div class="card">
			<div class="row invoice-contact">
				<div class="col-md-8">
					<div class="invoice-box row">
						<div class="col-sm-12">
							<table class="table table-responsive invoice-table table-borderless">
								<tbody>
								<tr>
									<td><img src="<?php echo base_url();?>assets/template/app/default/assets/images/logo-blue.png" class="m-b-10" alt=""></td>
								</tr>
								<tr>
									<td>Phoenixcoded</td>
								</tr>
								<tr>
									<td>208, Paris Point, Varachha Road, Surat. (1234) - 567891</td>
								</tr>
								<tr>
									<td><a href="http://flatable.phoenixcoded.net/cdn-cgi/l/email-protection#d4b0b1b9bb94b3b9b5bdb8fab7bbb9" target="_top"><span class="__cf_email__" data-cfemail="c9adaca4a689aea4a8a0a5e7aaa6a4">[email&nbsp;protected]</span></a>
									</td>
								</tr>
								<tr>
									<td>+91 919-91-91-919</td>
								</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row text-center">
						<div class="col-sm-12 invoice-btn-group">
							<button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20">Print Invoice
							</button>
							<button type="button" class="btn btn-danger waves-effect waves-light">Cancel Invoice
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="row invoive-info">
					<div class="col-md-4 col-xs-12 invoice-client-info">
						<h6>Client Information :</h6>
						<h6 class="m-0">Josephin Villa</h6>
						<p class="m-0 m-t-10">208, Peris Point, Varachha Road, Surat.</p>
						<p class="m-0">(1234) - 567891</p>
						<p><a href="http://flatable.phoenixcoded.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87e3e2eae8c7f7efe8e2e9eeffe4e8e3e2e3a9e4e8ea">[email&nbsp;protected]</a></p>
					</div>
					<div class="col-md-4 col-sm-6">
						<h6>Order Information :</h6>
						<table class="table table-responsive invoice-table invoice-order table-borderless">
							<tbody>
							<tr>
								<th>Date :</th>
								<td>November 14</td>
							</tr>
							<tr>
								<th>Status :</th>
								<td>
									<span class="label label-warning">Pending</span>
								</td>
							</tr>
							<tr>
								<th>Id :</th>
								<td>
									#145698
								</td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-4 col-sm-6">
						<h6 class="m-b-20">Invoice Number <span>#12398521473</span></h6>
						<h6 class="text-uppercase text-primary">Total Due :
							<span>$900.00</span>
						</h6>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="table-responsive">
							<table class="table  invoice-detail-table">
								<thead>
								<tr class="thead-default">
									<th>Description</th>
									<th>Quantity</th>
									<th>Amount</th>
									<th>Total</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										<h6>Logo Design</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
									</td>
									<td>6</td>
									<td>$200.00</td>
									<td>$1200.00</td>
								</tr>
								<tr>
									<td>
										<h6>Logo Design</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
									</td>
									<td>7</td>
									<td>$100.00</td>
									<td>$700.00</td>
								</tr>
								<tr>
									<td>
										<h6>Logo Design</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
									</td>
									<td>5</td>
									<td>$150.00</td>
									<td>$750.00</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<table class="table table-responsive invoice-table invoice-total">
							<tbody>
							<tr>
								<th>Sub Total :</th>
								<td>$4725.00</td>
							</tr>
							<tr>
								<th>Taxes (10%) :</th>
								<td>$57.00</td>
							</tr>
							<tr>
								<th>Discount (5%) :</th>
								<td>$45.00</td>
							</tr>
							<tr class="text-info">
								<td>
									<hr>
									<h5 class="text-primary">Total :</h5>
								</td>
								<td>
									<hr>
									<h5 class="text-primary">$4827.00</h5>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h6>Terms And Condition :</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
