<div class="modal-dialog modal-lg" id="import" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="myModalLabel"><i class="ti-export p-r-7"></i>Importar Estudiantes <span class="student-title"></span></h5>
			<a href="javascript:void(0);" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-close"></i></a>
		</div>
		<div class="modal-body">
			<form role="form" id="student-form" method="post" action="<?php echo base_url();?>students/make_import" class="form" enctype="multipart/form-data" onsubmit="return false;">
				<div class="response"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="row form-group">
							<input type="file" name="file" id="files" data-allowed-file-extensions="csv xls xlsx ods" class="dropify" data-height="150">
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-primary ladda-button" data-style="expand-left" id="students-import-button"><span class="ladda-label">Importar</span><span class="ladda-spinner"></span></button>
		</div>
	</div>
</div>
