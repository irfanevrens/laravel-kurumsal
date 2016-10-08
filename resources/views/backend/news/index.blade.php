@extends('backend.layout.master')
@section('PAGE-LEVEL-STYLES')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"/>
<link rel="stylesheet" type="text/css" href="/backend/assets/global/plugins/icheck/skins/all.css"/>

<!-- END PAGE LEVEL STYLES -->
@endsection
@section('PAGE-CONTENT')
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box">
    <div class="portlet-title">
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a href="{{URL::to('admin/news/create')}}" id="sample_editable_1_new" class="btn blue rounded-4">
                            Yeni Haber <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover" id="news-table">
            <thead>
            <tr>
                <th class="table-checkbox">
                    Aktif
                </th>
                <th>
                    Başlık
                </th>
                <th>
                    URL
                </th>
                <th>
                    İşlemler
                </th>
            </tr>
            </thead>
            <tbody>
@foreach($posts as $post)
<tr class="odd gradeX">
    {!! Form::open(['id' => 'myForm', 'method' => 'DELETE', 'route'=>['admin.news.destroy', $post->id]]) !!}
    <td>
        <input type="checkbox" @if($post->status == 1) checked @endif data-id= {{ $post->id }} >
    </td>
    <td>{{ $post->title  }}</td>
    <td><a href="{{url('haberler/'.$post->slug)}}" target="_blank">{{url('haberler/'.$post->slug)}}</a> </td>
    <td class="float-left">

        <a href="{{url('admin/news/'.$post->id.'/edit')}}" class="btn btn-icon-only tooltips" data-container="body" data-placement="top" data-html="true" data-original-title="Düzenle"><i class="fa fa-edit"></i></a>
        <a href="#" onclick="document.getElementById('myForm').submit();" class="btn btn-icon-only tooltips" data-container="body" data-placement="top" data-html="true" data-original-title="Sil"><i class="icon-trash"></i></a>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
@endsection
@section('PAGE-LEVEL-PLUGINS-SCRIPTS')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/backend/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/backend/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/backend/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="/backend/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/backend/assets/global/plugins/icheck/icheck.min.js"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/backend/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="/backend/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/backend/assets/admin/pages/scripts/news-table-managed.js"></script>
<script src="/backend/assets/admin/pages/scripts/switch.js"></script>
@endsection
@section('DOCUMENT-READY')
TableManaged.init();
Switch.init();
@endsection

