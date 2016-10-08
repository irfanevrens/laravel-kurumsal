@extends('backend.layout.master');
@section('PAGE-LEVEL-STYLES')
        <!-- BEGIN PAGE LEVEL STYLES -->

<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/icheck/skins/all.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/jquery-multi-select/css/multi-select.css"/>

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
        {!! Form::open(['route' => ['admin.team.store'], 'method' => 'post']) !!}
        <div class="form-body">
            <!--/row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">AD SOYAD</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="adsoyad">
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
                            <input type="text" class="form-control" name="unvan">
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
            <!--/row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label col-md-2">FOTOĞRAF</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="fotograf">
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <div class="form-actions left">
            <button type="submit" class="btn blue rounded-4"><i class="fa fa-check"></i> Kaydet</button>
        </div>
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
