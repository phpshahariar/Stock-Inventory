@extends('dashboard.master');
@section('content')
    <br/>
    <form id="editProductForm" class="form-horizontal" action="{{ url('/update-product') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="well">
            <div class="form-group">
                <label  class="col-sm-5 control-label">Category</label>
                <div class="col-sm-5">
                    <select class="form-control" name="category_id">
                        <option>---Select Category---</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Brand</label>
                <div class="col-sm-5">
                    <select class="form-control" name="brand_id">
                        <option>---Select Brand---</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Code</label>
                <div class="col-sm-5">
                    <input name="code" value="{!! $products->code !!}" type="text" class="form-control">
                    <input name="code_id" value="{!! $products->id !!}" type="hidden" class="form-control">
                    <span style="color: red"> {{ $errors->has('code') ? $errors->first('code') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Name</label>
                <div class="col-sm-5">
                    <input name="name" value="{!! $products->name !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('name') ? $errors->first('name') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Slug</label>
                <div class="col-sm-5">
                    <input name="slug" value="{!! $products->slug !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('slug') ? $errors->first('slug') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Image One</label>
                <div class="col-sm-5">
                    <input name="img_one" type="file" accept="image/*">
                    <img src="{!! asset('image-ones/'.$products->img_one) !!}" height="90" width="90" alt="'image One">
                    <span style="color: red"> {{ $errors->has('img_one') ? $errors->first('img_one') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Image Two</label>
                <div class="col-sm-5">
                    <input name="img_two" type="file" accept="image/*">
                    <img src="{!! asset('image-twos/'.$products->img_two) !!}" height="90" width="90" alt="'image Two">
                    <span style="color: red"> {{ $errors->has('img_two') ? $errors->first('img_two') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Color</label>
                <div class="col-sm-5">
                    <select class="form-control" name="color">
                        <option>---Select Color---</option>
                        <option value="red">Red</option>
                        <option value="yellow">Yellow</option>
                        <option value="blue">Blue</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Size</label>
                <div class="col-sm-5">
                    <select class="form-control" name="size">
                        <option>---Select Size---</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                        <option value="xxl">XXL</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label  class="col-sm-5 control-label">Stock</label>
                <div class="col-sm-5">
                    <input name="stock" value="{!! $products->stock !!}" type="text" class="form-control">
                    <span style="color: red"> {{ $errors->has('stock') ? $errors->first('stock') : ' ' }}</span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-5">
                    <button type="submit" name="btn" class="btn btn-block btn-primary">Update Product</button>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.forms['editProductForm'].elements['category_id'].value="{{ $products->category_id }}";
        document.forms['editProductForm'].elements['brand_id'].value="{{ $products->brand_id }}";
        document.forms['editProductForm'].elements['color'].value="{{ $products->color }}";
        document.forms['editProductForm'].elements['size'].value="{{ $products->size }}";
    </script>
@endsection