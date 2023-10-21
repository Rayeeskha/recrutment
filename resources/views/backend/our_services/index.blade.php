<x-admin-layout>
<div class="row">
  <div class="col-12">
     <div class="page-title-box d-sm-flex align-items-center justify-content-between">
        <h4 class="mb-sm-0">Our Services</h4>
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
  <div class="col-lg-12">
     <div class="card">
        <div class="card-header">
        	<div class="row">
        		<div class="col-md-2">
        			<h5 class="card-title mb-0">Our Services</h5>
         		</div>
         		<div class="col-md-7"></div>
         		<div class="col-md-3">
         			<a href="{{ route('admin.our-services.create') }}" class="btn btn-primary btn-animation waves-effect waves-light "> Add Service
         			</a>
         		</div>
        	</div>               
        </div>
        <div class="card-body">
           <div class="table-responsive">
              <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle yajra-datatable" style="width:100%">
                 <thead>
                    <tr>
                       <th data-ordering="false">SR No.</th>
                       <th data-ordering="false">Title</th>
                       <th data-ordering="false">Description</th>
                       <th data-ordering="false">Status</th>
                       <th data-ordering="false">Date & time</th>
                    </tr>
                 </thead>
                 <tbody></tbody>
              </table>
           </div>
        </div>
     </div>
  </div>
  <!--end col-->
</div>

</x-admin-layout>

<script type="text/javascript">
$(function () {
    let table = $('.yajra-datatable').DataTable({
       processing: true,
       serverSide: true,
        ajax: {
          "url": "{{ route('admin.our-services.index') }}",
        },
       columns: [
         {data: 'DT_RowIndex', orderable: false,searchable: false},
         {data: 'title_en', name: 'title_en'},
         {data: 'desc_en', name: 'desc_en'},
         {data: 'status', name: 'status'},
         {data: 'created_at', name: 'created_at'},        
       ],
      createdRow: function( row, data, dataIndex ) {
        $(row).attr('row-id',data.id+'-our_services');
      }
    });
});
</script>
