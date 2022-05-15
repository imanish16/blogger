@extends('admin.layouts.app')
@section('content')
<div class="newcustomer">
   <div class="container">
      <div class="row">
         <div id="flFormsGrid" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
               <div class="widget-header">
                  <div class="row">
                     <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Edit Roles Details</h4>
                     </div>
                  </div>
               </div>
               
               <div class="widget-content widget-content-area">
               {!! Form::model($role, ['method' => 'PATCH','route' => ['admin.roles.update', $role->id]]) !!}
                     {{csrf_field()}}
                    <div class="form-row mb-4">
                           <label for="inputName4">Name<span>*</span></label>
                           
                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                     <span id="name-error" class="error invalid-feedback">This field is required.</span>
                    </div>
                    <div class="form-row mb-4">
                        <div class="form-group col-md-6">
                           <label for="inputName4">Permission</label><br/>
                           
                             @foreach($permission as $value)
                                <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                {{ $value->name }}</label>
                            <br/>
                            @endforeach
                            
                        </div>
                    </div>
                        
                        
                     <button type="submit" class="btn btn-primary mt-3">Submit</button>
                     <a href="{{ url('admin/roles')}}" class="btn btn-primary mt-3">Back</a>
                  {!! Form::close() !!}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
  $('#name-error').hide();
  $('#per-error').hide();
  $("#nameroles").on("keyup change", function(e) {
    $('#nameroles').removeClass('is-invalid');
           $('#name-error').hide();
})
  function checkTheBox() {
      var aa = $('#nameroles').val();
      if(aa == ''){
          $('#name-error').show();
          $('#nameroles').addClass('is-invalid');
      }else {
          $('#nameroles').removeClass('is-invalid');
           $('#name-error').hide();
      }
      
    var flag = 0;
    for (var i = 0; i< 5; i++) {
      if(document.myform["permission[]"][i].checked){
        flag ++;
         $('#per-error').hide();
      }
    }
    if (flag != 1) {
     
          $('#per-error').show();
      return false;
    }
    return true;
  }
</script>
@endsection