@extends('admin.layouts.app')
@section('content')
<div class="layout-px-spacing">
   <div class="layout-spacing">
         <div class="statbox widget box-shadow">
            <div class="widget-header">
               <div class="row">
                  <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                     <h5 class="mb-3">Manage Blogs</h5>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right">
                     <a class="btn btn-primary mb-2" href="{{ url('admin/add-blogs') }}">Add Blog</a>
                  </div>
               </div>
            </div>
            <div class="widget-content">
               <div class="table-responsive">
                  <table id="blog-list-datatable" class="table style-3 table-hover" >
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Title</th>
                           <th>Body</th>
                           {{-- <th>Product Slug</th> --}}
                           {{-- <th>Product Affliate Url</th> --}}
                           <th>Status</th>
                           <th class="text-center">Action</th>
                        </tr>
                     </thead>
                  </table>
               </div>
            </div>
         </div>
   </div>
</div>

<script>
   function changeProductStatus(id) {
	swal({
		title: `Are you sure you want to change status of this record?`,
		icon: "info",
		buttons: true,
		dangerMode: true,
	}).then((willchange) => {
		if(willchange) {
			$.ajax({
				"url": "{{ url('admin/productmanagement/product-change-status') }}",
				"type": "POST",
				"data": {
					id: id,
					_token: '{{csrf_token()}}'
				},
				success: function(result) {
					swal({
						title: "Status Changed Successfully!!",
						icon: "success",
						buttons: true,
						dangerMode: true,
					}).then((value) => {
						if(value) {
                     $('#product-list-datatable').DataTable().ajax.reload();
						} else {}
					});
				}
			});
		}
	});
}
</script>
@endsection