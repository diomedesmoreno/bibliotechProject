<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-header row">
					<div class="col-md-8 page-header-title">
						<h4>Gastos / Compras</h4>
						<div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Contables</a></li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Gastos</a></li>
								<li class="breadcrumb-item active"><a href="javascript:void(0);">Gastos / Compras</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 text-right">
						<div class="dropdown-primary dropdown open" id="close-document">
							<button class="btn btn-primary dropdown-toggle waves-effect waves-light " type="button" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="ti-more-alt"></i>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdown-2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
								<a class="dropdown-item waves-light waves-effect cancel" href="javascript:void(0);">Cerrar</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<form role="form" id="expenses-form" method="post" action="<?php echo base_url('invoices/update/'.$row->expenseId);?>" class="form" onsubmit="return false;">
										<div class="response"></div>
										<div>
											<input type="hidden" name="expenseId" id="expenseId" value="<?php echo $row->expenseId;?>">
										</div>
										<div class="row">
											<div class="col-md-8">
												<div class="personal-information">
													<div class="row p-b-10">
														<div class="col-md-12 header-section">
															<h5 class="l-h-45"><i class="ti-id-badge"></i> Información Básica</h5>
															<hr>
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-3 text-right">
															<label for="first_name" class="label-style text-right">Nombre(s):</label>
														</div>
														<div class="col-md-8 alpha">
															<!-- <input type="text" class="form-control" data-field="first_name" value="<?php echo $row->first_name;?>" name="first_name" id="first_name"> -->
															<span class="valid-message"></span>
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-3 text-right">
															<label for="last_name" class="label-style text-right">Apellido(s):</label>
														</div>
														<div class="col-md-8 alpha">
															<!-- <input type="text" class="form-control" data-field="last_name" value="<?php echo $row->last_name;?>" name="last_name" id="last_name"> -->
															<span class="valid-message"></span>
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-3 text-right">
															<label for="doc_typeId" class="label-style text-right">Tipo de documento:</label>
														</div>
														<div class="col-md-4 alpha">
															<!-- <?php // echo form_dropdown('doc_typeId', $this->document_type, set_value('doc_typeId', $row->doc_typeId), "id='doc_typeId' class='form-control select2'");?> -->
															<span class="valid-message"></span>
														</div>
														<div class="col-md-4 alpha">
															<!-- <input type="text" class="form-control" data-field="document" value="<?php echo $row->document;?>" data-mask="999-9999999-9" name="document" id="document"> -->
															<span class="valid-message"></span>
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-3 text-right">
															<label for="statusId" class="label-style text-right">Activo:</label>
														</div>
														<div class="col-md-8 alpha">
															<!-- <?php $status_checked = ($row->statusId == 1) ? 'checked' : '';?> -->
															<!-- <input type="checkbox" name="statusId" id="statusId" value="1" class="checkbox" <?php echo $status_checked;?>/> -->
															<label for="is_employee"> Docente esta activo.</label>
														</div>
													</div>
												</div>
												<div class="contact-information">
													<div class="row p-b-10">
														<div class="col-md-12 header-section">
															<h5 class="l-h-45"><i class="ti-agenda"></i> Contactos</h5>
															<hr>
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-3 text-right">
															<label for="email" class="label-style text-right">Email:</label>
														</div>
														<div class="col-md-8 alpha">
															<!-- <input type="email" class="form-control" data-field="email" value="<?php echo $row->email;?>" name="email" id="email"> -->
															<span class="valid-message"></span>
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-3 text-right">
															<label for="phone" class="label-style text-right">Tel&eacute;fono:</label>
														</div>
														<div class="col-md-8 alpha">
															<!-- <input type="text" class="form-control phone-mask" data-field="phone" value="<?php echo $row->phone;?>" data-mask="(999) 999-9999" name="phone" id="phone"> -->
															<span class="valid-message"></span>
														</div>
													</div>
													<div class="row form-group">
														<div class="col-md-3 text-right">
															<label for="cellphone" class="label-style text-right">Celular:</label>
														</div>
														<div class="col-md-8 alpha">
															<!-- <input type="text" class="form-control phone-mask" data-field="cellphone" value="<?php echo $row->cellphone;?>" data-mask="(999) 999-9999" name="cellphone" id="cellphone"> -->
															<span class="valid-message"></span>
														</div>
													</div>
												</div>
												<div class="directions">
													<div class="row p-b-10 p-t-20">
														<div class="col-md-12 header-section">
															<div class="row">
																<div class="col-md-8">
																	<h5 class="l-h-45"><i class="ti-map-alt"></i> Direcciones</h5>
																</div>
																<div class="col-md-4 text-right">
																	<!-- <button class="btn btn-primary btn-outline-primary btn-icon modal_trigger" title="Agregar Dirección" data-target="#modals" data-toggle="modal" data-url="<?php echo base_url('teachers/add_teacher_address/'.$row->teacherId);?>"><i class="ti-plus m-r-0"></i></button> -->
																</div>
															</div>
															<hr>
														</div>
													</div>
													<div class="row users-card" id="address-information">
														<!-- <?php echo $address_info;?> -->
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<hr>
											</div>
											<div class="col-md-12 text-right">
												<button type="submit" class="btn btn-primary ladda-button" id="expenses-button" data-style="expand-left"><span class="ladda-label">Guardar</span><span class="ladda-spinner"></span></button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
