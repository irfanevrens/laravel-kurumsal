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
            <span class="caption-subject font-red-sunglo ">{{ $post->title }}</span>
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
        {!! Form::model($post, array('method' => 'PATCH', 'route' => array('admin.news.update', $post->id))) !!}
            <div class="form-body" ng-app="demo">
                <!--/row-->
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label>Başlık</label>
                            <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label>URL</label>
                            <input type="text" class="form-control" name="slug" value="{{ $post->slug }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea class="ckeditor form-control" name="content" rows="6" > {{ $post->content }} </textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md12">
                        <div class="form-group">
                            <div class="checkbox" style="margin-left:15px">
                                <label><input class="icheck" data-checkbox="icheckbox_square-blue" type="checkbox" name="reslug" value="1"> Tekrar slug oluştur</label>
                            </div>
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
<script src="/backend/assets/global/plugins/angularjs/angular-slugify.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/backend/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/backend/assets/admin/pages/scripts/form-samples.js"></script>
<script>
    angular.module("demo", ["slugifier"]);

    function ServiceDemoCtrl($scope, Slug) {
        $scope.title = "My First Title";
        $scope.update = function(title) {
            $scope.slug = Slug.slugify(title);
        };
    }

    function FilterDemoCtrl($scope) {
        $scope.title = "We the People of the United States";
    }

    function DirectiveDemoCtrl($scope) {
        $scope.title = "When in the Course of Human Events";
    }
</script>
<!-- END PAGE LEVEL SCRIPTS -->
@endsection
@section('DOCUMENT-READY')
FormSamples.init();
@endsection
