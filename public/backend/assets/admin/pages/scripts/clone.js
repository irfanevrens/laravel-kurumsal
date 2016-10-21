// Clone.js for TeamController Create Page
var Clone = function (){
    return {
        init: function () {
            // page start
            var number = 1;
            $('div.tsi').each(function() {
                $(this).attr('data-id', number);
                $('div.minus').attr('data-id', number);
                this.id = number;
                number ++ ;
            });
            // page start

            // begin append to new element
            $('.plus').live('click',function() {
                $('.form-body').append(addDiv).find('div.tsi').slideDown('fast');
                var number = 1;
                $('div.tsi').each(function() {
                    $(this).attr('data-id', number);
                    $('div.minus').attr('data-id', number);
                    this.id = number;
                    number ++ ;
                });
            });
            // end append to new element

            // begin remove element
            $('div.minus').live('click',function() { // trigger ok

                var black = "black"; // ok
                var white = "black"; // ok

                if (black == white){
                    console.log($(this).attr("data-id"));
                    var id = $(this).attr('data-id');
                    $('div#data-'+id).remove().slideDown('slow');
                }


            });
            // end remove element

            var addDiv = 
                '<div class="row tsi" style="display:none">'+
                '<div class="col-lg-6 col-md-6 col-sm-6">'+
                '<div class="form-group">'+
                '<label class="control-label">İkon</label>'+
                '<div class="">'+
                '<select name="social_class[]" class="bs-select form-control">'+
                '<option value="1">Facebook</option>'+
                '<option value="2">Delicious</option>'+
                '<option value="3">Paypal</option>'+
                '<option value="4">Flattr</option>'+
                '<option value="5">Android</option>'+
                '<option value="6">Smashmag</option>'+
                '<option value="7">Google+</option>'+
                '<option value="8">Wikipedia</option>'+
                '<option value="9">Stumbleupon</option>'+
                '<option value="10">Foursquare</option>'+
                '<option value="11">Call</option>'+
                '<option value="12">NinetyNineDesigns</option>'+
                '<option value="13">Forrst</option>'+
                '<option value="14">Digg</option>'+
                '<option value="15">Spotify</option>'+
                '<option value="16">Reddid</option>'+
                '<option value="17">Blogger</option>'+
                '<option value="18">CC</option>'+
                '<option value="19">Dribbble</option>'+
                '<option value="20">Evernote</option>'+
                '<option value="21">Flickr</option>'+
                '<option value="22">Google</option>'+
                '<option value="23">InstaPapper</option>'+
                '<option value="24">Klout</option>'+
                '<option value="25">Linkedin</option>'+
                '<option value="26">VK</option>'+
                '<option value="27">RSS</option>'+
                '<option value="28">Skype</option>'+
                '<option value="29">Twitter</option>'+
                '<option value="30">Youtube</option>'+
                '<option value="31">Vimeo</option>'+
                '<option value="32">Aim</option>'+
                '<option value="33">Yahoo</option>'+
                '<option value="34">Email3</option>'+
                '<option value="35">Macstore</option>'+
                '<option value="36">Myspace</option>'+
                '<option value="37">Podcast</option>'+
                '<option value="38">Cloudapp</option>'+
                '<option value="39">Dropbox</option>'+
                '<option value="40">Ebay</option>'+
                '<option value="41">Github</option>'+
                '<option value="42">Googleplay</option>'+
                '<option value="43">Itunes</option>'+
                '<option value="44">Plurk</option>'+
                '<option value="45">Pinboard</option>'+
                '<option value="46">Soundcloud</option>'+
                '<option value="47">Tumblr</option>'+
                '<option value="48">Wordpress</option>'+
                '<option value="49">Yelp</option>'+
                '<option value="50">Instensedebate</option>'+
                '<option value="51">EventBrite</option>'+
                '<option value="52">Scribd</option>'+
                '<option value="53">Stripe</option>'+
                '<option value="54">Print</option>'+
                '<option value="55">Dwolla</option>'+
                '<option value="56">Statusnet</option>'+
                '<option value="57">Acrobat</option>'+
                '<option value="58">Drupal</option>'+
                '<option value="59">Buffer</option>'+
                '<option value="60">Pocket</option>'+
                '<option value="61">Bitbucket</option>'+
                '<option value="62">Stackoverflow</option>'+
                '<option value="63">Hackernews</option>'+
                '<option value="64">Xing</option>'+
                '<option value="65">Instagram</option>'+
                '<option value="66">Quora</option>'+
                '<option value="67">Openid</option>'+
                '<option value="68">Steam</option>'+
                '<option value="69">Amazon</option>'+
                '<option value="70">Disqus</option>'+
                '<option value="71">Plancast</option>'+
                '<option value="72">Appstore</option>'+
                '<option value="73">Pinterest</option>'+
                '<option value="74">FiveHundredPx</option>'+
            '</select>'+
            '</div>'+
            '</div>'+
            '</div>'+

            '<div class="col-lg-6 col-md-6 col-sm-6">'+
                '<div class="form-group">'+
                    '<label class="control-label">Sosyal Profil Linki</label>'+
                    '<div class="">'+
                        '<input type="text" name="link[]" class="form-control">'+
                    '</div>'+
                '</div>'+
                '<div class="pull-right">'+
                    '<div class="plus btn btn-default rounded-4"><i class="fa fa-plus"></i></div>'+
                    '<div class="minus btn btn-default rounded-4"><i class="fa fa-minus"></i></div>'+
                '</div>'+
            '</div>'+
            '</div>';

        }

    }
}();