@extends('admin.layouts.app')
@section('content')
<div class="layout-px-spacing">
   <div class="layout-spacing">
         <div class="statbox widget box-shadow animated-underline-content">
            <div class="widget-header">
               <div class="row">
                  <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                     
                     <h5 class="mb-3">Pages</h5>
                  </div>
                  <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right">
                     <a href="{{url('/admin/add-page')}}" class="btn btn-primary mb-2 ml-auto">Add Page</a>
                  </div>
               </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-light-warning mb-4" role="alert">
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <svg> ... </svg>
               </button>
               <strong>Done!! </strong> {{ $message }}
            </div>
            @endif
            
            <div class="tab-content" id="animateLineContent-4">
               <div class="tab-pane fade show active" id="new-registration" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="tab-pane" id="exiting-agent">
                     <div class="widget-content">
                        <div class="table-responsive">
                           <table id="pages-list-datatable" class="table style-3 table-hover" >
                              <thead>
                                 <tr>
                                    <th>S.No</th>
                                    <th data-hide="title" >Title</th>
                                    <th data-hide="status" >status</th>
                                    <th data-hide="action">Action</th>
                                 </tr>
                              </thead>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
              
            </div>
         </div>
   </div>
</div>


@endsection