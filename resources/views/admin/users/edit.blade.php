@extends('admin.layouts.app')
@section('content')
<div class="layout-px-spacing">
<div class="form-grid">
<div id="flFormsGrid">
<div class="layout-spacing">
   <div class="statbox widget box-shadow">
      <div class="widget-header">
         <h5 class="mb-3">User Detail</h5>
      </div>
      <div class="widget-content conta">
         <form id="cusEditForm" role="form" action="{{url('admin/usersmanagement/update')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="userId" value="{{ $userDetail['id'] }}">
            {{csrf_field()}}
            <div class="form-row">
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                     <label for="inputName4">First Name<span>*</span></label>
                     <input class="form-control" type="text" name="name" value="{{@$userDetail->name}}" placeholder="Name" />
                  </div>
                  <div class="invalid-feedback">
                     Please fill the name
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                     <label for="inputEmail4">Last Name<span>*</span></label>
                     <input placeholder="Last Name" class="form-control" type="text" name="last_name" value="{{@$userDetail->last_name}}" />
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                     <label class="col-form-label">Choose Gender<span>*</span></label>
                     <div class="form-row">
                        <div class="col-6">
                           <div class="custom-control custom-radio classic-radio-info">
                              <input type="radio" id="hRadio1" name="gender" value="male" class="custom-control-input" {{ ($userDetail->gender) == 'male' ? 'checked'   : ''}}>
                              <label class="custom-control-label" for="hRadio1">Male</label>
                           </div>
                        </div>
                        <div class="col-6">
                           <div class="custom-control custom-radio classic-radio-info">
                              <input type="radio" id="hRadio2" name="gender" value="female" class="custom-control-input" {{ ($userDetail->gender) == 'female' ? 'checked'  : ''}}>
                              <label class="custom-control-label" for="hRadio2">Female</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                     <label for="inputEmail4">Email<span>*</span></label>
                     <input placeholder="Email" class="form-control" type="email" name="email" value="{{$userDetail->email}}" />
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="form-group">
                     <label for="inputEmail4">Password<span>*</span></label>
                     <input placeholder="Password" class="form-control" type="password" name="password" value="{{ old('password') }}" />
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="form-group">
                     <label for="inputEmail4">Phone<span>*</span></label>
                     <input class="form-control" placeholder="Phone" type="phone" name="phone" value="{{$userDetail->phone}}" />
                  </div>
               </div>
               <div class="col-lg-12 col-md-12">
                  <div class="form-group">
                     <label for="inputAddress">Address<span>*</span></label>
                     <textarea class="form-control" id="address" name="address"  aria-label="With textarea" value="{{ @$userDetail['address'] }}" placeholder="1234 Main St">{{ @$userDetail['address'] }}</textarea>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="form-group">
                     <label for="inputState">Country<span>*</span></label>
                     <select name="country"  id="country-dd" class="form-control placeholder">
                        <option value="" >Select Country </option>
                        @foreach ($countries as $data)
                        <option value="{{$data->name}}" {{($userDetail->country) == $data->name ? 'selected' : '' }} data-id="{{$data->id}}">
                        {{$data->name}}
                        </option>
                        @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6">
                  <div class="form-group">
                     <label for="inputState">State<span>*</span></label>
                     <select class="form-control" id="state-dd" name="state">
                     @foreach ($state as $state)
                     <option value="{{$state->name}}" {{($userDetail->state) == $state->country_id ? 'selected' : '' }} data-id="{{$state->id}}">
                     {{$state->name}}
                     </option>
                     @endforeach
                     </select>
                  </div>
               </div>
               <div class="col-lg-2 col-md-3">
                  <div class="form-group">
                     <label for="inputCity">City<span>*</span></label>
                     <input class="form-control" name="city" type="text" value="{{ @$userDetail['city'] }}" />
                  </div>
               </div>
               <div class="col-lg-2 col-md-3">
                  <div class="form-group">
                     <label for="inputZip">Zip<span>*</span></label>
                     <input class="form-control" name="zipcode" type="text" value="{{ @$userDetail['zipcode'] }}" />
                  </div>
               </div>
               <div class="col-lg-6 col-md-6">
               <div class="form-group">
               <label for="inputState">Role<span>*</span></label>
               {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control')) !!}
               </div>
               </div>
               <div class="col-lg-6  col-md-6">
               <div class="form-group">
               <label for="inputState">Status<span>*</span></label>
               <select id="status" class="form-control" name="status">
               <option value="1" {{($userDetail->status) == 1 ? 'selected' : '' }}>Active</option>
               <option value="0" {{($userDetail->status) == 0 ? 'selected' : '' }}>Inactive</option>
               </select>
               </div> 
               </div> 
            </div>
      </div>
      
      <div class="text-right">
      <a href="{{ url('admin/users')}}" class="btn btn-outline-dark">Back</a>
      <button type="submit" class="btn btn-primary ml-2">Submit</button>
      </div>
      </form>
      </div>
   </div>
</div>
<style>
   table {
   font-family: arial, sans-serif;
   border-collapse: collapse;
   width: 100%;
   }
   td, th {
   border: 1px solid #dddddd;
   text-align: left;
   padding: 8px;
   }
   tr:nth-child(even) {
   background-color: #dddddd;
   }
</style>
@endsection