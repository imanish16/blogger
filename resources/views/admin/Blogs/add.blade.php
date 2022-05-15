@extends('admin.layouts.app')
@section('content')
<div class="newcustomer">
    <div class="layout-px-spacing">
        <div id="flFormsGrid" class="layout-spacing general-info">
            <div class="statbox widget box-shadow info">
                <div class="widget-header">
                    <h5 class="mb-3">Add New Blog </h5>
                </div>
                <div class="widget-content">
                    <form id="addproductsForm" action="{{ url('admin/store-blogs') }}" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-4 pr-3 mt-4">
                                <div id="fuMultipleFile" class="col-lg-12 layout-spacing">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Product Photo</h4>
                                                </div>      
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">
                                            <div class="custom-file-container"  data-upload-id="addproductForm">
                                                <label>Upload <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                <label class="custom-file-container__custom-file" >
                                                    <input type="file"  name="image" class="custom-file-container__custom-file__custom-file-input"  data-height="100"   accept="image/*" multiple>
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                    <span class="custom-file-container__custom-file__custom-file-control "></span>
                                                </label>
                                                <div class="custom-file-container__image-preview " ></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class="upload mt-4 pr-md-4 info-user-pic form-group">
                                    <input type="file" name="product_image" id="input-file-max-fs" class="dropify"
                                        data-default-file="{{asset('storage/img/200x200.jpg')}}" data-max-file-size="2M"
                                        accept="image/*" multiple/>
                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Product Image</p>
                                </div> --}}
                            </div>
                            <div class="col-md-8">
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName4"> Title<span>*</span></label>
                                    <input class="form-control" type="text" name="title" value="" id="ProductTitle" />
                                    <span id="error_catName"></span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputState">Status</label>
                                    <select id="status" class="form-control placeholder js-states form-control"
                                        name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="inputEmail4">Products Description</label>
                                            <textarea class="form-control textarea ckeditor" id="ckeditor" maxlength="2000" name="body"
                                                aria-label="With textarea"></textarea>
                                        </div>
                                    </div>
                                    
                                    {{-- <div class="form-group col-md-6">
                                        <label for="inputState">Choose Category</label>
                                        <select id="product_category" class="form-control placeholder js-states form-control"
                                            name="product_category">
                                            {{-- @foreach($categories as $key => $data)
                                            <option value="{{$data->id}}">{{$data->cat_name}}</option>
                                            @endforeach --}}
                                        {{-- </select>
                                    </div> --}} 
                                  
                                  
                                    
                                
                                  
                                </div>
                             
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="{{ url('admin/productmanagement/products')}}"
                                class="btn btn-outline-dark mt-2">Back</a>
                            <button type="submit"  class="btn btn-primary mt-2 ml-2">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection