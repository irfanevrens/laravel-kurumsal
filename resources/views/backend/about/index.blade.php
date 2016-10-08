@extends('backend.layout.master');
@section('PAGE-LEVEL-STYLES')
        <!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/icheck/skins/all.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
@section('PAGE-CONTENT')
<!-- BEGIN PAGE CONTENT -->
<!-- BEGIN GALLERY FORM -->
<div class="portlet light bg-inverse">
    <div class="portlet-title">
        <div class="caption">
            <span class="caption-subject font-red-sunglo ">HAKKIMIZDA</span>
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
        {!! Form::model($data, array('method' => 'PATCH', 'route' => array('admin.about.update', $data->id))) !!}
        <div class="form-body">
            <!--/row-->
            <div class="row">
                <div class="col-md-12 ">
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="content" rows="6" > {{ $data->content }} </textarea>
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <div class="form-actions left">
            <button type="submit" class="btn blue rounded-4"><i class="fa fa-check"></i> Kaydet</button>
        </div>
        {!! Form::close() !!}
                <!-- END FORM-->
    </div>
</div>
<!-- END GALLERY FORM -->

<!-- END PAGE CONTENT-->
@endsection
@section('PAGE-LEVEL-PLUGINS-SCRIPTS')
        <!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/backend/assets/global/plugins/select2/select2.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/icheck/icheck.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/backend/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/backend/assets/admin/pages/scripts/form-samples.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
@section('DOCUMENT-READY')
    FormSamples.init();
@endsection
