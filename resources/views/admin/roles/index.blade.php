@extends('admin.layouts.app')
@section('content')
<div class="layout-px-spacing">
   <div class="layout-spacing">
      <div class="statbox widget box-shadow">
         <div class="widget-header">
            <div class="row">
               <div class="col-xl-6 col-md-6 col-sm-6 col-6">
                  <h5 class="mb-3">Role</h5>
               </div>
               <div class="col-xl-6 col-md-6 col-sm-6 col-6 top-buffer"><br>
                  @can('role-create')
                  <a class="btn btn-primary mb-2 ml-auto" href="{{ route('admin.roles.create') }}"> Add Role</a>
                  @endcan
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
         <div class="widget-content">
            <div class="table-responsive">
               <table id="style-3" class="table style-3 table-hover">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th class="text-center">Action</th>
                     </tr>
                  </thead>
                  <tbody>

                    @foreach ($roles as $key => $role)
                     <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $role->name }}</td>
                        <td class="text-center">
                           <div class="icon-group">
                              <a class="btn-icon text-info" href="{{ route('admin.roles.show',$role->id) }}"><i class="far fa-eye"></i></a>
                              @can('role-edit')
                              <a class="btn-icon text-secondary" href="{{ route('admin.roles.edit',$role->id) }}"><i class="far fa-edit"></i></a>
                              @endcan
                              @can('role-delete')
                              <a href="javascript:void(0)" class="btn-icon text-danger" id="deleteRole" onclick="deleteRole(this)" data-id="{{$role->id}}" class="btn-icon text-danger" ><i class="far fa-trash-alt"></i></a>
                              @endcan
                           </div>
                        </td>
                     </tr>
                       @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection