@extends('admin.layout.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">دسته بندی ها</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table id="example5" class="table table-bordered table-striped" style="width:100%">
                            <thead>
                            <tr>
                                <th>آیدی</th>
                                <th>عنوان</th>
                                <th>دسته والد</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td>{{optional($category->parent)->title}}</td>
                                <td><a href="/adminpanel/categories/{{$category->id}}/edit" class="btn btn-sm btn-warning">ویرایش</a></td>
                                <td>
                                    <form action="/adminpanel/categories/{{$category->id}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-sm btn-danger" value="حذف">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- This is data table -->
    <script src="/admin/assets/vendor_components/datatable/datatables.min.js"></script>

    <!-- Superieur Admin for Data Table -->
    <script src="/admin/js/pages/data-table.js"></script>
@endsection
