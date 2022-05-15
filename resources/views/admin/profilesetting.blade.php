@extends('admin.layouts.app')
@section('content')
<div class="layout-px-spacing">
   <div class="account-settings-container">
      @if ($message = Session::get('success'))
      <div class="alert alert-light-warning mb-4" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <svg> ... </svg>
         </button>
         <strong>Done!! </strong> {{ $message }}
      </div>
      @endif
      {!! Form::model($adminProfile, ['method' => 'POST','url' => ['admin/edit-profile'],'id'=>'form13','enctype'=>'multipart/form-data']) !!}
      {{csrf_field()}}
      <input type="hidden" name="userId" value="{{$adminProfile->id}}">
      <div class="account-content">
         <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                  <div id="general-info" class="section general-info">
                     <div class="info">
                        <div class="widget-header">
                           <h5 class="mb-3">General Information</h5>
                        </div>
                        <div class="row">
                           <div class="col-md-4 pr-3">
                              <div class="upload mt-4 pr-md-4 info-user-pic">
                                 <input type="file" name="profile_img"  id="profileUpdate input-file-max-fs" class="dropify" data-default-file="{{ asset('storage/profile_image/profile-pic_1636354968.png') }}" data-max-file-size="2M" accept="image/*"/>
                                 <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                              </div>
                           </div>
                           <div class="col-md-8">
                              <div class="row">
                                 @if($adminProfile->id == 1)
                                 @else
                                 @endif
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="fullName"> Name<span>*</span></label>
                                       {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>
                                 </div>
                                 
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="Email">Email<span>*</span></label>
                                       {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control','readonly')) !!}
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="gender">Choose Gender<span>*</span></label>
                                       <div class="form-row">
                                          <div class="col-6">
                                             <div class="custom-control custom-radio classic-radio-info">
                                                <input type="radio" id="hRadio1" name="gender" value="male" class="custom-control-input" {{ ($adminProfile->gender) == 'male' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="hRadio1">Male</label>
                                             </div>
                                          </div>
                                          <div class="col-6">
                                             <div class="custom-control custom-radio classic-radio-info">
                                                <input type="radio" id="hRadio2" name="gender" value="female" class="custom-control-input" {{ ($adminProfile->gender) == 'female' ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="hRadio2">Female</label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-12">
                              <div class="form-group">
                                 <label for="Email">Phone<span>*</span></label>
                                 {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
                              </div>
                           </div>
                              </div>
                           </div>
                        </div>
                        <div class="form-row">
                           
                           
                           <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="form-group">
                                 <label for="inputState">Country<span>*</span></label>
                                 <select name="country"  id="country-dd" class="form-control placeholder">
                                    <option value="" >Select Country </option>
                                    @foreach ($countries as $data)
                                    <option value="{{$data->name}}" {{($adminProfile->country) == $data->name ? 'selected' : '' }} data-id="{{$data->id}}">
                                    {{$data->name}}
                                    </option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-6 col-sm-12">
                              <div class="form-group">
                                 <label for="State">State<span>*</span></label>
                                 <select class="form-control" id="state-dd" name="state">
                                 @foreach ($state as $state)
                                 <option value="{{$state->name}}" {{($adminProfile->state) == $state->country_id ? 'selected' : '' }} data-id="{{$state->id}}">
                                 {{$state->name}}
                                 </option>
                                 @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-3 col-sm-6">
                              <div class="form-group">
                                 <label for="City">City<span>*</span></label>
                                 <input class="form-control" name="city" type="text" value="{{ @$adminProfile['city'] }}" />
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-3 col-sm-6">
                              <div class="form-group">
                                 <label for="Zip">Zip<span>*</span></label>
                                 <input class="form-control" name="zipcode" type="text" value="{{ @$adminProfile['zipcode'] }}" />
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="account-settings-footer">
      <div class="as-footer-container">
         <a href="{{ url('admin/profile')}}" id="multiple-reset" class="btn btn-outline-danger">Back</a>
         <div class="blockui-growl-message">
         </div>
         <button id="multiple-messages" type="submit" class="btn btn-primary">Save Changes</button>
      </div>
   </div>
   {!! Form::close() !!}
</div>

@endsection