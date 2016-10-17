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
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Ad Soyad</label>
                        <div class="">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Ünvan</label>
                        <div class="">
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

            <!--/row-->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label class="control-label">İkon</label>
                        <div class="">
                            <select name="social_class[]" class="bs-select form-control">
                                <option value="1">Facebook</option>
                                <option value="2">Delicious</option>
                                <option value="3">Paypal</option>
                                <option value="4">Flattr</option>
                                <option value="5">Android</option>
                                <option value="6">Smashmag</option>
                                <option value="7">Google+</option>
                                <option value="8">Wikipedia</option>
                                <option value="9">Stumbleupon</option>
                                <option value="10">Foursquare</option>
                                <option value="11">Call</option>
                                <option value="12">NinetyNineDesigns</option>
                                <option value="13">Forrst</option>
                                <option value="14">Digg</option>
                                <option value="15">Spotify</option>
                                <option value="16">Reddid</option>
                                <option value="17">Blogger</option>
                                <option value="18">CC</option>
                                <option value="19">Dribbble</option>
                                <option value="20">Evernote</option>
                                <option value="21">Flickr</option>
                                <option value="22">Google</option>
                                <option value="23">InstaPapper</option>
                                <option value="24">Klout</option>
                                <option value="25">Linkedin</option>
                                <option value="26">VK</option>
                                <option value="27">RSS</option>
                                <option value="28">Skype</option>
                                <option value="29">Twitter</option>
                                <option value="30">Youtube</option>
                                <option value="31">Vimeo</option>
                                <option value="32">Aim</option>
                                <option value="33">Yahoo</option>
                                <option value="34">Email3</option>
                                <option value="35">Macstore</option>
                                <option value="36">Myspace</option>
                                <option value="37">Podcast</option>
                                <option value="38">Cloudapp</option>
                                <option value="39">Dropbox</option>
                                <option value="40">Ebay</option>
                                <option value="41">Github</option>
                                <option value="42">Googleplay</option>
                                <option value="43">Itunes</option>
                                <option value="44">Plurk</option>
                                <option value="45">Pinboard</option>
                                <option value="46">Soundcloud</option>
                                <option value="47">Tumblr</option>
                                <option value="48">Wordpress</option>
                                <option value="49">Yelp</option>
                                <option value="50">Instensedebate</option>
                                <option value="51">EventBrite</option>
                                <option value="52">Scribd</option>
                                <option value="53">Stripe</option>
                                <option value="54">Print</option>
                                <option value="55">Dwolla</option>
                                <option value="56">Statusnet</option>
                                <option value="57">Acrobat</option>
                                <option value="58">Drupal</option>
                                <option value="59">Buffer</option>
                                <option value="60">Pocket</option>
                                <option value="61">Bitbucket</option>
                                <option value="62">Stackoverflow</option>
                                <option value="63">Hackernews</option>
                                <option value="64">Xing</option>
                                <option value="65">Instagram</option>
                                <option value="66">Quora</option>
                                <option value="67">Openid</option>
                                <option value="68">Steam</option>
                                <option value="69">Amazon</option>
                                <option value="70">Disqus</option>
                                <option value="71">Plancast</option>
                                <option value="72">Appstore</option>
                                <option value="73">Pinterest</option>
                                <option value="74">FiveHundredPx</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Sosyal Profil Linki</label>
                        <div class="">
                            <input type="text" name="link[]" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

            <!--/clone-->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label class="control-label">İkon</label>
                        <div class="">
                            <select name="social_class[]" class="bs-select form-control">
                                <option value="1">Facebook</option>
                                <option value="2">Delicious</option>
                                <option value="3">Paypal</option>
                                <option value="4">Flattr</option>
                                <option value="5">Android</option>
                                <option value="6">Smashmag</option>
                                <option value="7">Google+</option>
                                <option value="8">Wikipedia</option>
                                <option value="9">Stumbleupon</option>
                                <option value="10">Foursquare</option>
                                <option value="11">Call</option>
                                <option value="12">NinetyNineDesigns</option>
                                <option value="13">Forrst</option>
                                <option value="14">Digg</option>
                                <option value="15">Spotify</option>
                                <option value="16">Reddid</option>
                                <option value="17">Blogger</option>
                                <option value="18">CC</option>
                                <option value="19">Dribbble</option>
                                <option value="20">Evernote</option>
                                <option value="21">Flickr</option>
                                <option value="22">Google</option>
                                <option value="23">InstaPapper</option>
                                <option value="24">Klout</option>
                                <option value="25">Linkedin</option>
                                <option value="26">VK</option>
                                <option value="27">RSS</option>
                                <option value="28">Skype</option>
                                <option value="29">Twitter</option>
                                <option value="30">Youtube</option>
                                <option value="31">Vimeo</option>
                                <option value="32">Aim</option>
                                <option value="33">Yahoo</option>
                                <option value="34">Email3</option>
                                <option value="35">Macstore</option>
                                <option value="36">Myspace</option>
                                <option value="37">Podcast</option>
                                <option value="38">Cloudapp</option>
                                <option value="39">Dropbox</option>
                                <option value="40">Ebay</option>
                                <option value="41">Github</option>
                                <option value="42">Googleplay</option>
                                <option value="43">Itunes</option>
                                <option value="44">Plurk</option>
                                <option value="45">Pinboard</option>
                                <option value="46">Soundcloud</option>
                                <option value="47">Tumblr</option>
                                <option value="48">Wordpress</option>
                                <option value="49">Yelp</option>
                                <option value="50">Instensedebate</option>
                                <option value="51">EventBrite</option>
                                <option value="52">Scribd</option>
                                <option value="53">Stripe</option>
                                <option value="54">Print</option>
                                <option value="55">Dwolla</option>
                                <option value="56">Statusnet</option>
                                <option value="57">Acrobat</option>
                                <option value="58">Drupal</option>
                                <option value="59">Buffer</option>
                                <option value="60">Pocket</option>
                                <option value="61">Bitbucket</option>
                                <option value="62">Stackoverflow</option>
                                <option value="63">Hackernews</option>
                                <option value="64">Xing</option>
                                <option value="65">Instagram</option>
                                <option value="66">Quora</option>
                                <option value="67">Openid</option>
                                <option value="68">Steam</option>
                                <option value="69">Amazon</option>
                                <option value="70">Disqus</option>
                                <option value="71">Plancast</option>
                                <option value="72">Appstore</option>
                                <option value="73">Pinterest</option>
                                <option value="74">FiveHundredPx</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Sosyal Profil Linki</label>
                        <div class="">
                            <input type="text" name="link[]" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <!--/clone-->

            <!--/clone-->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label class="control-label">İkon</label>
                        <div class="">
                            <select name="social_class[]" class="bs-select form-control">
                                <option value="1">Facebook</option>
                                <option value="2">Delicious</option>
                                <option value="3">Paypal</option>
                                <option value="4">Flattr</option>
                                <option value="5">Android</option>
                                <option value="6">Smashmag</option>
                                <option value="7">Google+</option>
                                <option value="8">Wikipedia</option>
                                <option value="9">Stumbleupon</option>
                                <option value="10">Foursquare</option>
                                <option value="11">Call</option>
                                <option value="12">NinetyNineDesigns</option>
                                <option value="13">Forrst</option>
                                <option value="14">Digg</option>
                                <option value="15">Spotify</option>
                                <option value="16">Reddid</option>
                                <option value="17">Blogger</option>
                                <option value="18">CC</option>
                                <option value="19">Dribbble</option>
                                <option value="20">Evernote</option>
                                <option value="21">Flickr</option>
                                <option value="22">Google</option>
                                <option value="23">InstaPapper</option>
                                <option value="24">Klout</option>
                                <option value="25">Linkedin</option>
                                <option value="26">VK</option>
                                <option value="27">RSS</option>
                                <option value="28">Skype</option>
                                <option value="29">Twitter</option>
                                <option value="30">Youtube</option>
                                <option value="31">Vimeo</option>
                                <option value="32">Aim</option>
                                <option value="33">Yahoo</option>
                                <option value="34">Email3</option>
                                <option value="35">Macstore</option>
                                <option value="36">Myspace</option>
                                <option value="37">Podcast</option>
                                <option value="38">Cloudapp</option>
                                <option value="39">Dropbox</option>
                                <option value="40">Ebay</option>
                                <option value="41">Github</option>
                                <option value="42">Googleplay</option>
                                <option value="43">Itunes</option>
                                <option value="44">Plurk</option>
                                <option value="45">Pinboard</option>
                                <option value="46">Soundcloud</option>
                                <option value="47">Tumblr</option>
                                <option value="48">Wordpress</option>
                                <option value="49">Yelp</option>
                                <option value="50">Instensedebate</option>
                                <option value="51">EventBrite</option>
                                <option value="52">Scribd</option>
                                <option value="53">Stripe</option>
                                <option value="54">Print</option>
                                <option value="55">Dwolla</option>
                                <option value="56">Statusnet</option>
                                <option value="57">Acrobat</option>
                                <option value="58">Drupal</option>
                                <option value="59">Buffer</option>
                                <option value="60">Pocket</option>
                                <option value="61">Bitbucket</option>
                                <option value="62">Stackoverflow</option>
                                <option value="63">Hackernews</option>
                                <option value="64">Xing</option>
                                <option value="65">Instagram</option>
                                <option value="66">Quora</option>
                                <option value="67">Openid</option>
                                <option value="68">Steam</option>
                                <option value="69">Amazon</option>
                                <option value="70">Disqus</option>
                                <option value="71">Plancast</option>
                                <option value="72">Appstore</option>
                                <option value="73">Pinterest</option>
                                <option value="74">FiveHundredPx</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Sosyal Profil Linki</label>
                        <div class="">
                            <input type="text" name="link[]" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <!--/clone-->

            <!-- begin social_id dropdown -->
            <div class="row" style="padding-top: 4px">

            </div>
            <!-- end social_id dropdown -->


            <!-- begin file input -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-responsive">
                            <img src="" alt=""/>
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-responsive">
                        </div>
                        <div>
													<span class="btn default btn-file">
													<span class="fileinput-new">
													Fotoğraf seç </span>
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