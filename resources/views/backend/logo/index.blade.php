@extends('backend.layout.master');
@section('PAGE-LEVEL-STYLES')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/typeahead/typeahead.css">
<!-- END PAGE LEVEL STYLES -->
@endsection
@section('PAGE-CONTENT')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN PORTLET-->
            <div class="portlet light bg-inverse">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject font-red-sunglo ">SİTE LOGOSU</span>
                    </div>
                    <div class="tools">
                        <a href="" class="collapse">
                        </a>
                        <a href="#portlet-config" data-toggle="modal" class="config">
                        </a>
                        <a href="javascript:;" class="reload">
                        </a>
                        <a href="javascript:;" class="remove">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    {!! Form::model($data, array(
                    'files' => true,
                    'class' => 'form-horizontal form-bordered',
                    'method' => 'PATCH',
                    'route' => array('admin.logo.update', $data->id))) !!}
                        <div class="form-body">
                            <div class="form-group last">
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 250px; height: 200px;">
                                            <img src="{{ URL::to($data->file_path) }}" alt="{{  $data->file_name }}"/>
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
                                            <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                                Remove </a>
                                        </div>
                                    </div>
                                    <div class="clearfix margin-top-10">
												<span class="label label-danger">NOT!</span> 250 x 200 Natural, 125 x 100 adapted.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn blue rounded-4"><i class="fa fa-check"></i> Güncelle</button>
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END PORTLET-->
        </div>
    </div>
@endsection
@section('PAGE-LEVEL-PLUGINS-SCRIPTS')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/backend/assets/global/plugins/fuelux/js/spinner.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"  type="text/javascript"></script>
<script src="/backend/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"  type="text/javascript"></script>
<script src="/backend/assets/global/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
<script src="/backend/assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
<script src="/backend/assets/global/plugins/typeahead/handlebars.min.js" type="text/javascript"></script>
{{--<script src="/backend/assets/global/plugins/typeahead/typeahead.bundle.min.js" type="text/javascript"></script>--}}
<script src="/backend/assets/global/plugins/ckeditor/ckeditor.js"  type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/backend/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/backend/assets/admin/pages/scripts/components-form-tools.js"  type="text/javascript"></script>
<!-- add some code -->
<script src="/backend/assets/admin/pages/scripts/form-samples.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
@section('DOCUMENT-READY')
ComponentsFormTools.init();
@endsection
