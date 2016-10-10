@extends('backend.layout.master');
@section('PAGE-LEVEL-STYLES')
        <!-- BEGIN PAGE LEVEL STYLES -->

<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/icheck/skins/all.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
<!-- this is for  -->
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/typeahead/typeahead.css">

<!-- END PAGE LEVEL SCRIPTS -->
@endsection
@section('PAGE-CONTENT')
<!-- START TEAM.CREATE.BLADE.PHP CONTENT-->
<div class="portlet light bg-inverse">
    <div class="portlet-title">
        <div class="caption">
            <span class="caption-subject font-red-sunglo bold uppercase">YENİ EKİP ÜYESİ</span>
        </div>
        <div class="tools">
            <a href="" class="collapse">
            </a>
            <a href="#portlet-config" data-toggle="modal" class="config">
            </a>
            <a href="" class="reload">
            </a>
            <a href="" class="remove">
            </a>
        </div>
    </div>
    <div class="portlet-body form">
        <!-- BEGIN FORM-->
        {!! Form::open(['route' => ['admin.team.store'], 'method' => 'post','files' => true ]) !!}
        <div class="form-body">
            <!--/row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">AD SOYAD</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
            <!--/row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">ÜNVAN</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
            <!-- begin file input -->
            <div class="row">
                <div class="col-md-9">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail" style="width: 250px; height: 200px;">
                            <img src="" alt=""/>
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 200px;">
                        </div>
                        <div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Select image </span>
													<span class="fileinput-exists">
													Change </span>
													<input type="file" name="file">
													</span>
                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">Remove </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end file input -->
        </div>

        <!-- form submit -->
        <div class="form-actions left">
            <button type="submit" class="btn blue rounded-4"><i class="fa fa-check"></i> Kaydet</button>
        </div>
        <!-- form submit -->
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
            @endif
        {!! Form::close() !!}
         <!-- END FORM-->
    </div>
</div>
<!-- END TEAM.CREATE.BLADE.PHP CONTENT-->
@endsection
@section('PAGE-LEVEL-PLUGINS-SCRIPTS')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/backend/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/backend/assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<script type="text/javascript" src="/backend/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
<!-- add new code for image upload -->
<script src="/backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"  type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/backend/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/backend/assets/admin/pages/scripts/components-dropdowns.js"></script>
<script src="/backend/assets/admin/pages/scripts/form-samples.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
@section('DOCUMENT-READY')
    FormSamples.init();
    ComponentsDropdowns.init();
@endsection