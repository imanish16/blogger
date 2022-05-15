@extends('admin.layouts.app')
@section('content')
<div class="newcustomer">
         <div id="flFormsGrid" class="layout-px-spacing">
            <div class="statbox widget box-shadow">
               <div class="widget-header">
                <div class="row">
                   <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                      <h5 class="mb-3">Roles Detail</h5>
                   </div>
                         <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right">
                      <a href="{{ url('admin/roles')}}" class="btn btn-outline-dark mb-3">Back</a>
                   </div>
                 </div>
             </div>
               
            <div class="widget-content">
                 <div class="row">
                   <div class="col-lg-6">
                      <fieldset class="form-group">
                         <label class="pull-left">Name:</label>
                         <mark class="ml-2 mt-1">
                                    {{ $role['name'] }}
                         </mark>
                       </fieldset>
                   </div>
                   <div class="col-lg-6">
                      <fieldset class="form-group">
                         <label class="pull-left">Permission:</label>
                         <mark class="ml-2 mt-1">
                                    @if(!empty($role))
                                        @foreach($role->permissions as $v)
                                    <span class="badge badge-warning">{{ $v->name }}</span>
                                        @endforeach
                                    @endif
                         </mark>
                      </fieldset>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
@endsection