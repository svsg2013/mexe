@extends('template')
@section('title')
    Create news - @parent
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        @include('admin.partial.errors')
                    </div>
                </div>
                <div class="row">
                    {!! Form::open(['route' => 'fengshui.store','class'=>'form-horizontal','role'=>'form','enctype'=>'multipart/form-data']) !!}
                    <div class="col-md-8">
                        <div class="p-20">
                            <div class="form-group">
                                {!! Form::label('title','Tiêu đề *',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('txtName',old('txtName'),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('title','Tiêu đề SEO',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('txtMetatitle',old('txtMetitle'),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('input select','Chọn danh mục',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <select class="form-control" name="slMenu">
                                        <option value="">Select one</option>
                                        {{getMenu($getDataMenu)}}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Summary','Mô tả *',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::textarea('txtSummary',old('txtSummary'),['placeholder'=>'To type here','class'=>'form-control','rows'=>5]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Summary','Tóm tắt SEO',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::textarea('txtDescription',old('txtDescription'),['placeholder'=>'To type here','class'=>'form-control','rows'=>5]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Content','Nội dung *',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::textarea('txtContent',old('txtContent'),['class'=>'form-control','id'=>'editor1']) !!}
                                    <script>
                                        ckeditor('txtContent');
                                    </script>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Thumbnail','Hình (650 x 406)',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::file('fileImg',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label(' ',' ',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::button('Gửi',['class'=>'btn btn-custom waves-effect waves-light btn-md','type'=>'submit']) !!}
                                </div>
                            </div>
                        </div><!-----s----------->
                    </div><!--mid 8-->
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                            {!! Form::label('Hot News') !!}
                            <!-- Slide THREE -->
                                <div class="slideThree">
                                    <input type="checkbox" value="1" id="slideThree" name="checkHot" />
                                    <label for="slideThree"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                            {!! Form::label('Feature News') !!}
                            <!-- Slide THREE -->
                                <div class="slideThree1">
                                    <input type="checkbox" value="1" id="slideThree1" name="checkFeature" />
                                    <label for="slideThree1"></label>
                                </div>
                            </div>
                            <div class="col-md-4">
                            {!! Form::label('Active') !!}
                            <!-- Slide THREE -->
                                <div class="slideThree2">
                                    <input type="checkbox"  checked value="1" id="slideThree2" name="checkActive" />
                                    <label for="slideThree2"></label>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="cusWeight">
                                    {!! Form::label('Số thứ tự','Số Thứ Tự',['class'=>'col-md-6']) !!}
                                    {!! Form::text('txtWeight','1',['class'=>'col-md-6','style'=>'width:50%']) !!}
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="form-group cusSelect" style="margin-top: 5px;">
                                    <h5>Chọn tin tức liên quan</h5>
                                    <select multiple class="form-control" name="slPost[]">
                                        @foreach($getPosts as $getPost)
                                            <option value={{$getPost->id}}>{{$getPost->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group cusSelect" style="margin-top: 5px;">
                                    <h5>Sản phẩm liên quan tới bài viết</h5>
                                    <select multiple class="form-control" name="slProd[]">
                                        @foreach($getTags as $getProduct)
                                            <option value={{$getProduct->id}}>{{$getProduct->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div><!--row-sigbar-right-->
                    </div>
                    {!! Form::close() !!}
                </div><!-- end row -->
            </div>
        </div> <!-- end card-box -->
    </div><!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('jsfiles')
    <!-- Jquery filer js -->
    <script src="{{asset('backend/plugins/jquery.filer/js/jquery.filer.min.js')}}"></script>
    <!-- Bootstrap fileupload js -->
    <script src="{{asset('backend/plugins/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
    <!-- page specific js -->
    <script src="{{asset('backend/pages/jquery.fileuploads.init.js')}}"></script>
    <script>
        $( document ).ready(function(){
//   Hide the border by commenting out the variable below
            var $on = 'section';
            $($on).css({
                'background':'none',
                'border':'none',
                'box-shadow':'none'
            });
        });
    </script>
@endsection