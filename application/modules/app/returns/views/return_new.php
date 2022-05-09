<div class="modal-dialog modal-lg" id="loans" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="myModalLabel"><i class="ti-package p-r-7"></i>Devolución de prestamo <span class="loans-title"></span></h5>
			<a href="javascript:void(0);" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-close"></i></a>
		</div>
		<div class="modal-body">
			<form role="form" id="loans-form" method="post" action="<?php echo base_url();?>returns/insert" class="form" enctype="multipart/form-data" onsubmit="return false;">
				<div class="response"></div>
				<div>
					<input type="hidden" name="person_typeId" id="person_typeId" value="0">
				</div>
				<div class="col-md-12 p-t-10">
					<div class="row form-group">
						<div class="col-md-3 text-right">
							<label for="loanId" class="label-style l-h-40">Beneficiario:</label>
						</div>
						<div class="col-md-7 alpha">
							<?php echo form_dropdown('loanId', $this->loans, set_value('loanId', 0), "id='loanId' class='form-control select2'");?>
							<span class="valid-message"></span>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-3 text-right">
							<label for="return_date" class="label-style l-h-40">Fecha de retorno:</label>
						</div>
						<div class="col-md-5 alpha">
							<input type="text" class="form-control date" value="<?php echo date('Y-m-d');?>" name="return_date" id="return_date" readonly>
							<span class="valid-message"></span>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-3 text-right">
							<label for="personId" class="label-style l-h-40">Estado:</label>
						</div>
						<div class="col-md-5 alpha">
							<?php echo form_dropdown('statusId', $this->status, set_value('statusId', 0), "id='statusId' class='form-control select2'");?>
							<span class="valid-message"></span>
						</div>
					</div>

				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary ladda-button" data-style="expand-left" id="loans-button"><span class="ladda-label">Guardar</span><span class="ladda-spinner"></span></button>
		</div>
	</div>
</div>

<script>
	$(document).ready(function () {
		let loansForm = $('#loans-form').formValid({
			fields: {
				"return_date": {
					"required": true,
					"tests": [
						{
							"type"		: "null",
							"message"	: "Este campo es requerido"
						}
					]
				},
			}
		});

		loansForm.keypress(300);

		$(document).on("click", '#loans-button', function(e) {
			loansForm.test();
			e.preventDefault();

			if (loansForm.errors() > 0){
				Ladda.stopAll();
			} else {
				let data = {type: 'post', form: '#loans-form', modal: '#modals', doAfter: 'datatable', selector: '#loans', btn: $(this), messageError: '.response', showAlert: true, titleResponse: "Exito!", textResponse: "Prestamo registrado correctamente."};
				DOM.submitData(data);
			}
		});

		$(document).on('change', "#personId", function () {
			let selector 		= $('option:selected', this),
				selectorData 	= selector.data();
			$("#person_typeId").val(selectorData.type);
		});

		$(document).on('click', '#add-row', function () {
			let row       = $('.table-book-hidden tbody tr').clone();

			$('#library table tbody').append(row).promise().done(function () {
				$(".select2-clone", row).select2({
					language: "es",
					dropdownCssClass: 'custom-dropdown'
				});

				$('select').on('select2:open', function(e){
					$('.custom-dropdown').parent().css('z-index', 11111111111);
				});
				$('.numeric').numeric();
				$('.numeric-with-point').numeric({allow: '.'});
			});
		});

		$(document).on('click', '.remove-item', function () {
			let id       = parseInt($(this).data('itemid')),
				parent   = $(this).closest('#library .table tbody'),
				selector = $(this).closest('tr'),
				count    = parent.find('tr').length,
				data     = {type: 'get', url: URL.baseUrl + 'invoices/remove_item/' + id, doAfter: 'remove', selector: selector};

			if(parseInt(count) > 1) {
				if(typeof id === 'undefined' || id == 0) {
					selector.remove();
				} else {
					// swal({title: share.shareLangAll.attention, text: share.shareLangAll.delete_items_prompt, type: "warning", showCancelButton: true, confirmButtonText: share.shareLangAll.delete, showLoaderOnConfirm : true, cancelButtonText: share.shareLangAll.cancel}, function () {
					// 	DOM.submit(data, totalCalculate);
					// });
				}
			} else {
				DOM.setSingleAlert({type: 'warning', title: 'Atención', text: 'No puedes eliminar todos los elementos'});
				$('.swal2-container').addClass('swal2-z-indez');
			}
		});

		$(document).on('change', ".bookId", function () {
			let selector 		= $('option:selected', this),
				selectorData 	= selector.data(),
				parent 			= selector.closest('tr'),
				quantity 		= selectorData.quantity;

			if(Number(quantity) == 0) {
				DOM.setSingleAlert({type: 'warning', title: 'Atención', text: 'Este libro no tiene cantidad disponible.'});
				$('.swal2-container').addClass('swal2-z-indez');
			} else {
				parent.find('.quantity_hidden').val(quantity);
			}
		});

		$(document).on('change', '.quantity', function () {
			let parent	= (this).closest('tr');

			if(this.val() > parent.find('.quantity_hidden').val()) {
				DOM.setSingleAlert({type: 'warning', title: 'Atención', text: 'Esta intentando sacar mas cantidad de lo que tiene disponible.'});
				$('.swal2-container').addClass('swal2-z-indez');
				this.val(0);
			}
		});
	});
</script>
