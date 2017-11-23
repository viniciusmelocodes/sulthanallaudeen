@extends('admin.layout.index')
@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Edit Config
                    <a type="button" class="btn btn-primary pull-right" href='{{ URL::to('admin/config') }}'>Back to Config</a>
                    <small>Manage Config List</small>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                            {{ $error }} <br>
                            @endforeach
                        </div>
                    @endif
                    @if(isset($errorjk))
                    <div class="alert alert-danger">
                        {{$error}}
                    </div>
                    @endif
                </h2>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Edit Config</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="POST" action="update">
                                {{ csrf_field() }}
                                <input type='hidden' value='{{$config->id}}' name="id">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" id="title" required value="{{ $config->name }}">
                                        <label class="form-label">Config Title</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="desc" cols="30" rows="5" class="form-control no-resize ckeditor" required>@if(old('desc')){{ old('desc') }}@else{{{$config->desc}}}@endif</textarea>
                                    </div>
                                </div>
                                <div class="demo-radio-button">
                                <input name="status" type="radio" id="draft" class="radio-col-red" value="0" 
                                <?php
                                if(old('status')){
                                    if(old('status')==0){
                                        echo 'checked';
                                    }
                                }
                                else{
                                    if ($config->status==0){
                                        echo 'checked';
                                    }
                                }
                                ?>
                                >
                                <label for="draft">Draft</label>
                                <input name="status" type="radio" id="publish" class="radio-col-pink" value="1" 
                                <?php
                                if(old('status')){
                                    if(old('status')==1){
                                        echo 'checked';
                                    }
                                }
                                else{
                                    if ($config->status==1){
                                        echo 'checked';
                                    }
                                }
                                ?>
                                required
                                >
                                <label for="publish">Publish</label>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
        </div>
    </section>

<!-- Jquery Validation Plugin Css -->
<script src="{{ asset('/').('public/admin/plugins/jquery-validation/jquery.validate.js') }}"></script>
<script src="{{ asset('/').('public/admin/js/pages/forms/form-validation.js') }}"></script>
@stop