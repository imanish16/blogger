@extends('admin.layouts.app')
@section('content')
<div class="newcustomer">
         <div id="flFormsGrid" class="layout-px-spacing">
            <div class="layout-spacing">
            <div class="statbox widget box-shadow">
               <div class="widget-header">
                  <div class="row">
                     <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                        <h5 class="mb-3">Customer Detail</h5>
                     </div>
                     <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right pb-4">
                        <a href="{{ url('admin/users')}}" class="btn btn-outline-dark">Back</a>
                     </div>
                  </div>
               </div>
               <div class="widget-content">
                  <input type="hidden" id="currcusid" value="{{ $userDetail->id }}">

                  <div class="row">
                   <div class="col-xl-4 col-lg-4 col-md-6">
                    <fieldset class="form-group">
                     <label class="pull-left">Name: </label>
                        <mark class="ml-2 mt-1">
                           {{ ( $userDetail->name ) ? $userDetail->name : 'N/A' }} {{ ( $userDetail->last_name ) ? $userDetail->last_name : '' }}
                        </mark>
                    </fieldset>
                   </div>
                   <div class="col-xl-4 col-lg-4 col-md-6">
                    <fieldset class="form-group">
                        <label class="pull-left">Email: </label>
                          <mark class="ml-2 mt-1">
                            {{ ($userDetail->email) ? $userDetail->email : 'N/A' }}
                          </mark>
                    </fieldset>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <fieldset class="form-group">
                     <label class="pull-left">Gender</label>
                          <mark class="ml-2 mt-1">
                             {{ ($userDetail->gender) == 'male' ? 'Male' : 'Female' }}
                          </mark>
                    </fieldset>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <fieldset class="form-group">
                     <label class="pull-left">Phone: </label>
                          <mark class="ml-2 mt-1">
                             {{ ($userDetail->phone) ? $userDetail->phone : 'N/A' }}
                          </mark>
                    </fieldset>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <fieldset class="form-group">
                     <label class="pull-left">Country: </label>
                          <mark class="ml-2 mt-1">
                             {{ ($userDetail->country) ? $userDetail->country : 'N/A' }}
                          </mark>
                    </fieldset>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <fieldset class="form-group">
                     <label class="pull-left">City : </label>
                        <mark class="ml-2 mt-1">
                          {{ ($userDetail->city) ? $userDetail->city : 'N/A' }}
                        </mark>
                    </fieldset>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <fieldset class="form-group">
                     <label class="pull-left">Zipcode: </label>
                        <mark class="ml-2 mt-1">
                           {{ ($userDetail->zipcode) ? $userDetail->zipcode : 'N/A' }}
                        </mark>
                    </fieldset>
                  </div>
                  
                  <div class="col-xl-4 col-lg-4 col-md-6">
                    <fieldset class="form-group">
                     <label class="pull-left">Status: </label>
                        <mark class="ml-2 mt-1">
                           {{ ($userDetail->status) == '1'  ? 'Active' : 'Inactive' }}
                        </mark>
                    </fieldset>
                  </div>
                   <div class="col-xl-4 col-lg-4 col-md-6">
                    <fieldset class="form-group">
                     <label class="pull-left">Roles: </label>
                        <mark class="ml-2 mt-1">
                           @if(!empty($userDetail->getRoleNames()))
                                @foreach($userDetail->getRoleNames() as $v)
                                    <label class="badge badge-success">{{ $v }}</label>
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

                  

   </div>
<script>

</script>
@endsection