@extends('admin.layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">افزودن دسته بندی</h4>

                <ul class="box-controls pull-right">
                    <li><a class="box-btn-close" href="#"></a></li>
                    <li><a class="box-btn-slide" href="#"></a></li>
                    <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">
                        <form method="post" action="/adminpanel/categories">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <h5>عنوان<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="text" name="title" class="form-control" required data-validation-required-message="This field is required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>دسته والد <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="category_id" id="select" class="form-control">
                                                <option value="" disabled selected>دسته والد را انتخاب کنید</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Submit</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
