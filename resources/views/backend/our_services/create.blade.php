<x-admin-layout>
<div class="row">
  <div class="col-12">
     <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Services</h4>
        <div class="page-title-right">
           <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
              <li class="breadcrumb-item active">Add Services</li>
           </ol>
        </div>
     </div>
  </div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title mb-0 flex-grow-1">Add Service</h4>
			</div>
			<form class="validateForm" action="{{ route('admin.our-services.store') }}" method="post" enctype="multipart/form-data">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<label for="labelInput" class="form-label">Title En</label>
	                        <input type="text" name="title_en" class="form-control" >
	                        <span class="text-danger Errtitle_en"></span>
						</div>
						<div class="col-md-6">
							<label for="labelInput" class="form-label" >Title Ar</label>
	                        <input type="text" name="title_ar" class="form-control" dir="rtl">
	                        <span class="text-danger Errtitle_ar"></span>
						</div>
						<div class="col-md-12">
							<label for="labelInput" class="form-label">Description</label>

							<textarea class="ckeditor-classic" name="desc_en" ></textarea>
							<span class="text-danger Errdesc_en"></span>
	                    </div>
					</div>
				</div><br>
				<div class="card-footer">
					<div class="hstack gap-2 justify-content-end">
	                <x-backend.preloader />
	                 <button type="submit" class="btn btn-success" id="add-btn"><span class=" las la-plus-circle"></span>&nbsp;Save</button>
	              </div>
				</div>
			</form>			
		</div>
	</div>
</div>


</x-admin-layout>