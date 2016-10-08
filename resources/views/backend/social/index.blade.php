@extends('backend.layout.master')
@section('PAGE-LEVEL-STYLES')
        <!-- BEGIN PAGE LEVEL STYLES -->
<link href="/backend/assets/global/plugins/dropzone/css/dropzone.css" rel="stylesheet"/>
<link href="/backend/assets/global/plugins/dropzone/css/basic.css" rel="stylesheet"/>
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/icheck/skins/all.css"/>
<!-- END PAGE LEVEL STYLES -->
@endsection
@section('PAGE-CONTENT')
{!! Form::open() !!}
{!! Form::close() !!}
<div class="portlet box">
    <div class="portlet-title">
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a href="{{URL::to('admin/social/create')}}" id="sample_editable_1_new" class="btn blue rounded-4">
                             Sosyal Hesap <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!-- BEGIN PHOTO -->
@foreach($social->chunk($count) as $chunk)
        <!-- BEGIN CHUNK -->
<div class="row" id="sortable">
    @foreach($chunk as $social)
    <!-- BEGIN ITEM -->
    <div class="col-md-2 col-sm-2" id="itemContainer" style="margin-bottom: 20px;" data-id="{{$social->id}}">
            <div class="img-responsive thumbnail ui-state-default" id="sortable-item" data-id="{{$social->id}}">
                <input class="icheck" data-checkbox="icheckbox_square-red" type="checkbox" name="icheck" value="1" data-id="{{ $social->id }}">
                {{ $social->icon }}
            </div>
    </div>
    <!-- END ITEM -->
    @endforeach
</div>
<!-- END CHUNK -->
@endforeach

@if($social->count() > 0)
    <div class="row">
        <div class="col-md-2 col-sm-2">
            <button class="btn btn-danger rounded-4 tooltips" id="delete" data-container="body" data-placement="top" data-html="true" data-original-title="İŞARETLENMİŞLERİ SİL">
                <i class="icon-trash"></i>
            </button>
        </div>
    </div>
    @endif
            <!-- END PHOTO -->
    @endsection
    @section('PAGE-LEVEL-PLUGINS-SCRIPTS')
            <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="/backend/assets/global/plugins/dropzone/dropzone.js"></script>
    <script type="text/javascript" src="/backend/assets/global/plugins/select2/select2.min.js"></script>
    <script type="text/javascript" src="/backend/assets/global/plugins/icheck/icheck.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/backend/assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="/backend/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="/backend/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="/backend/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
    <script src="/backend/assets/admin/pages/scripts/form-dropzone.js"></script>
    <script src="/backend/assets/admin/pages/scripts/social-sortable.js"></script>
    @endsection
@section('DOCUMENT-READY')
    Sortable.init();
@endsection