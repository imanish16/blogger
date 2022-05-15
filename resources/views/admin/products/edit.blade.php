@extends('admin.layouts.app')
@section('content')
<div class="newcustomer">
    <div class="layout-px-spacing">
        <div id="flFormsGrid" class="layout-spacing general-info">
            <div class="statbox widget box-shadow info">
                <div class="widget-header">
                    <h5 class="mb-3">Edit Products Details</h5>
                </div>
                <div class="widget-content">
                    <form id="editproductsForm" action="{{url('/admin/update-products/'.$product->id)}}" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-4 pr-3">
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
                                            <div class="custom-file-container" data-upload-id="addproductForm">
                                                <label>Upload <a href="javascript:void(0)"
                                                        class="custom-file-container__image-clear"
                                                        title="Clear Image">x</a></label>
                                                <label class="custom-file-container__custom-file">
                                                    <input type="file" name="product_image[]"
                                                        class="custom-file-container__custom-file__custom-file-input"
                                                        data-height="100"  accept="image/*" multiple>
                                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                    <span
                                                        class="custom-file-container__custom-file__custom-file-control "></span>
                                                </label>
                                                @foreach($product_image as $key => $data)

                                                @if(!empty($data))
                                                <img src="{{ asset('products/images/'.$data) }}" width="50"
                                                    height="50" title="">
                                                @else
                                                <img src="{{ asset('storage/img/noimage.png') }}" width="50"
                                                    height="50" title="">
                                                @endif
                                                @endforeach
                                                <div class="custom-file-container__image-preview ">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="inputName4">Product Title<span>*</span></label>
                                    <input class="form-control"  type="text" name="product_title"
                                        value="{{$product->title ?? ''}}" id="ProductTitle" />
                                    <span id="error_catName"></span>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="inputEmail4">Products Description<span>*</span></label>
                                            <textarea class="form-control description" maxlength="2000" name="product_description"
                                                aria-label="With textarea">{{$product->description ?? 'N/A'}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Status<span>*</span></label>
                                        <select id="status" class="form-control placeholder js-states form-control"
                                            name="status">
                                            @if($product->status=='active')
                                            <option value="active" selected>Active</option>
                                            <option value="inactive">Inactive</option>
                                            @else
                                            <option value="active">Active</option>
                                            <option value="inactive" selected>Inactive</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Choose Category<span>*</span></label>
                                        <select id="product_category"
                                            class="form-control placeholder js-states form-control"
                                            name="product_category">
                                            @foreach($categories as $key => $data)
                                            <option value="{{$data->id}}" <?php if($product_category->id
                                                ==$data->id){echo 'selected';}else{echo '';}?>>{{$data->cat_name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Product Price<span>*</span></label>
                                        <input class="form-control placeholder" type="number" name="product_price"
                                            value="{{$product->price}}" placeholder="Product Price"
                                            id="product_price" />
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Product Slug<span>*</span></label>
                                        <input class="form-control placeholder"  type="text"
                                            value="{{$product->slug}}" name="product_slug"
                                            placeholder="Product Slug" id="ProductSlug"  readonly>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Offer Price<span>*</span></label>
                                        <input class="form-control placeholder" type="number" name="offer_price"
                                             placeholder="Offer Price" value="{{$product->offer_price}}" id="offer_price" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Product Affliate Url<span>*</span>s</label>
                                        <input class="form-control placeholder" type="text"
                                            value="{{$product->affiliate_url}}" name="product_affliate_url"
                                            placeholder="Product Affliate Url" id="product_affliate_url" />
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <h4>More Information</h4><br>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Product Meta title</label>
                                        <input class="form-control placeholder" type="text" name="product_meta_title"
                                            value="{{$product->meta_title}}" placeholder="Product Meta Title"
                                            id="product_meta_title" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputState">Product Meta Keyword</label>
                                        <input class="form-control placeholder" type="text" name="product_meta_keyword"
                                            value="{{$product->meta_keyword}}"
                                            placeholder="Product Meta Keyword" id="product_meta_keyword" />
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="inputEmail4">Products Meta Description</label>
                                            <textarea class="form-control description" maxlength="255" name="product_meta_description "
                                                aria-label="With textarea">{{($product->meta_description)?$product->meta_description:'N/A';}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <a href="{{ url('admin/productmanagement/products')}}"
                                class="btn btn-outline-dark mt-2">Back</a>
                            <button type="submit" class="btn btn-primary mt-2 ml-2">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
   <script>
   var phoneNumber = $('.phoneNumber').maxlength({
      alwaysShow: true,
      placement:"top",
      threshold: 10,
   });
   var zipcode = $('.zipcode').maxlength({
      placement:"top",
      alwaysShow: true,
   });

   var description = $('textarea.description').maxlength({
      placement:"top",
      alwaysShow: true,
   });
   </script>
@endsection