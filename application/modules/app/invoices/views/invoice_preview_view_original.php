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
									<td>
										<img src="<?php echo base_url();?>assets/template/app/default/assets/images/inventory-img.png" class="m-b-10" alt="">
									</td>
								</tr>
								<tr>
									<td>Bibliotech</td>
								</tr>
								<tr>
									<td>Av. John F. Kennedy #54, Santo Domingo 10510</td>
								</tr>
								<tr>
									<td>
										<!-- <a href="http://flatable.phoenixcoded.net/cdn-cgi/l/email-protection#d4b0b1b9bb94b3b9b5bdb8fab7bbb9" target="_top"><span class="__cf_email__" data-cfemail="c9adaca4a689aea4a8a0a5e7aaa6a4">[email&nbsp;protected]</span></a> -->
										<a href="#" > <span class="__cf_email__" >[info@bibliotech.com]</span>  </a>
									</td>
								</tr>
								<tr>
									<td>+1 (809) 220-1111</td>
								</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row text-center">
						<div class="col-sm-12 invoice-btn-group">
						<?php if ($client->statusId !=1){ ?> 
							<button type="button" class="btn btn-primary btn-print-invoice waves-effect waves-light m-r-20" onclick="window.print()" >Imprimir factura
							</button>
						<?php }?>
							<button type="button" class="btn btn-danger waves-effect waves-light" onclick="window.close()"> Cancelar factura
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="row invoive-info">
					<div class="col-md-4 col-xs-12 invoice-client-info">
						<h6>Información del cliente :</h6>
						<h6 class="m-0"><?php echo $client->parent_name; ?></h6>
						<!-- <p class="m-0 m-t-10">208, Peris Point, Varachha Road, Surat.</p> -->
						<p class="m-0"><?php echo $client->cellphone; ?></p>
						<p>
							<a href="http://flatable.phoenixcoded.net/cdn-cgi/l/email-protection" class="__cf_email__" >[<?php echo $client->email; ?>]</a>
						</p>
					</div>
					<div class="col-md-4 col-sm-6">
						<h6>Order Información :</h6>
						<table class="table table-responsive invoice-table invoice-order table-borderless">
							<tbody>
							<tr>
								<th>Fecha de la factura :</th>
								<td><?php echo $client->date; ?> </td>
							</tr>
							<tr>
								<th>Estatus :</th>
								<td>
									<span class="label label-<?php echo $client->class; ?>"><?php echo $client->status_name; ?></span>
								</td>
							</tr>
							<tr>
								<th>Id :</th>
								<td> #<?php echo $client->invoiceId; ?>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-4 col-sm-6">
						<h6 class="m-b-20">Número de factura <span>#<?php echo $client->number; ?></span></h6>
						<h6 class="text-uppercase text-primary">Total :
							<span>$<?php echo $client->amount_total; ?></span>
						</h6>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="table-responsive">
							<table class="table  invoice-detail-table">
								<thead>
								<tr class="thead-default">
									<th>Descripción</th>
									<th>Producto</th>
									<th>Precio</th>
									<th>Total</th>
								</tr>
								</thead>
								<tbody>
								<?php
									foreach($table as $key => $item){
										$print = '
										<tr >
											<td>'.$item->description.'</td>
											<td>'.$item->product_name.'</td>
											<td>'.$item->amount.'</td>
											<td>'.$item->price.'</td>
										</tr>';
									echo $print;
									}
								?>
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
								<td>$<?php echo $row->sub_amount; ?></td>
							</tr>
							<tr>
								<th>Impuesto %(<?php echo $row->tax_amount; ?>):</th>
								<td>$<?php echo ($row->amount * ($row->tax_amount/100)); ?></td>
							</tr>
							<tr>
								<th>Discount %(<?php echo $row->discount; ?>) :</th>
								<td>$<?php echo ($row->amount * ($row->discount/100)); ?></td>
							</tr>
							<tr class="text-info">
								<td>
									<hr>
									<h5 class="text-primary">Total :</h5>
								</td>
								<td>
									<hr>
									<h5 class="text-primary">$<?php echo ($row->amount + ($row->amount * ($row->discount/100)) + ($row->amount * ($row->tax_amount/100)));?></h5>
								</td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- <div class="row">
					<div class="col-sm-12">
						<h6>Terms And Condition :</h6>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor </p>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
</body>
</html>
