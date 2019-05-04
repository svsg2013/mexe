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
                    <div class="col-md-12">
                        <div class="p-20">
                            {!! Form::open(['route' => ['system.update',$dataSystem->id],'class'=>'form-horizontal','method'=>'put','role'=>'form','enctype'=>'multipart/form-data']) !!}
                            <div class="form-group">
                                {!! Form::label('title','Địa chỉ',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('txtAddress',old('txtAdress',isset($dataSystem->address)?$dataSystem->address:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Meta Title','Điện thoại / Hotline',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('txtPhone',old('txtPhone',isset($dataSystem->phone)?$dataSystem->phone:null),['placeholder'=>'To type here if any','class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Meta Description','Thông tin chân trang',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('txtFooter',old('txtFooter',isset($dataSystem->info)?$dataSystem->info:null),['placeholder'=>'To type here if any','class'=>'form-control','rows'=>5]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Meta Description','E-mail',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::text('txtEmail',old('txtEmail',isset($dataSystem->email)?$dataSystem->email:null),['placeholder'=>'To type here if any','class'=>'form-control','rows'=>5]) !!}
                                </div>
                            </div>
                            <!-- google -->
                            <div class="form-group">
                                {!! Form::label('Meta Description','Google Analytics',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::textarea('txtAna',old('txtAna',isset($dataSystem->analytic)?$dataSystem->analytic:null),['placeholder'=>'To type here if any','class'=>'form-control','rows'=>5]) !!}
                                </div>
                            </div>
                            <!-- facebooke -->
                            <div class="form-group">
                                {!! Form::label('Meta Description','Facebook iframe',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::textarea('txtFacebook',old('txtAna',isset($dataSystem->facebook)?$dataSystem->facebook:null),['placeholder'=>'Input but iframe here','class'=>'form-control','rows'=>5]) !!}
                                </div>
                            </div>
                            <!-- youtube -->
                            <div class="form-group">
                                {!! Form::label('Meta Description','Youtube iframe',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::textarea('txtYoutube',old('txtAna',isset($dataSystem->youtube)?$dataSystem->youtube:null),['placeholder'=>'Input but iframe here','class'=>'form-control','rows'=>5]) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Thumbnail','Logo',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::file('fileImg',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Image','Image',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <img src="{{asset('upload/thumbnail/'.$dataSystem->logo)}}" class="img-rounded" width="300">
                                </div>
                            </div>
                            <!-- banner left -->
                            <div class="form-group">
                                {!! Form::label('Thumbnail','Banner Left',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::file('fileBannerLeft',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Image','Image',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <img src="{{asset('upload/thumbnail/'.$dataSystem->banner)}}" class="img-rounded" width="300">
                                </div>
                            </div>
                            <!-- Bg contact -->
                            <div class="form-group">
                                {!! Form::label('Thumbnail','Background Contact',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::file('fileBgContact',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Image','Contact',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <img src="{{asset('upload/thumbnail/'.$dataSystem->bgContact)}}" class="img-rounded" width="300">
                                </div>
                            </div>
                            <!-- banner Prod -->
                            <div class="form-group">
                                {!! Form::label('Thumbnail','Banner Prods',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::file('fileBanner',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Image','Image Banner Prods',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <img src="{{asset('upload/thumbnail/'.$dataSystem->metaName)}}" class="img-rounded" width="300">
                                </div>
                            </div>
                            <!-- banner contact -->
                            <div class="form-group">
                                {!! Form::label('Thumbnail','Banner Liên Hệ',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::file('fileBannerContact',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Image','Img Banner Liên Hệ',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <img src="{{asset('upload/thumbnail/'.$dataSystem->bannerContact)}}" class="img-rounded" width="300">
                                </div>
                            </div>
                            <!-- banner Tuyen dung -->
                            <div class="form-group">
                                {!! Form::label('Thumbnail','Banner Tuyển Dụng',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::file('fileBannerTuyenDung',['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('Image','Img Banner Tuyển Dụng',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    <img src="{{asset('upload/thumbnail/'.$dataSystem->bannerTuyenDung)}}" class="img-rounded" width="300">
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Danh mục ngoài trang chủ</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        {!! Form::label('title','Danh mục 1',['class'=>'col-md-2 control-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('txtDM1',old('txtDM1',isset($dataSystem->danhmuc1)?$dataSystem->danhmuc1:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title','Danh mục 2',['class'=>'col-md-2 control-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('txtDM2',old('txtDM2',isset($dataSystem->danhmuc2)?$dataSystem->danhmuc2:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title','Danh mục 3',['class'=>'col-md-2 control-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('txtDM3',old('txtDM3',isset($dataSystem->danhmuc3)?$dataSystem->danhmuc3:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title','Danh mục 4',['class'=>'col-md-2 control-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('txtDM4',old('txtDM4',isset($dataSystem->danhmuc4)?$dataSystem->danhmuc4:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title','Danh mục 5',['class'=>'col-md-2 control-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('txtDM5',old('txtDM5',isset($dataSystem->danhmuc5)?$dataSystem->danhmuc5:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title','Danh mục 6',['class'=>'col-md-2 control-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('txtDM6',old('txtDM6',isset($dataSystem->danhmuc6)?$dataSystem->danhmuc6:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title','Danh mục 7',['class'=>'col-md-2 control-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('txtDM7',old('txtDM7',isset($dataSystem->danhmuc7)?$dataSystem->danhmuc7:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title','Danh mục 8',['class'=>'col-md-2 control-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('txtDM8',old('txtDM8',isset($dataSystem->danhmuc8)?$dataSystem->danhmuc8:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('title','Số liên hệ',['class'=>'col-md-2 control-label']) !!}
                                        <div class="col-md-10">
                                            {!! Form::text('txtDM9',old('txtDM9',isset($dataSystem->danhmuc9)?$dataSystem->danhmuc9:null),['placeholder'=>'To type here','class'=>'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label(' ',' ',['class'=>'col-md-2 control-label']) !!}
                                <div class="col-md-10">
                                    {!! Form::button('Click me, Please!',['class'=>'btn btn-custom waves-effect waves-light btn-md','type'=>'submit']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- end row -->
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
@endsection