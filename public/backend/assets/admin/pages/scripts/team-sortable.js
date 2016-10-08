// 
var Sortable = function (){
    return {
        init: function () {

            // begin update
            $(function() {
                $( "#sortable" ).sortable();
                $( "#sortable" ).disableSelection();
            });

            $( "#sortable" ).sortable({
                update: function() {
                    var data = [];
                    $( '.col-md-2.col-sm-2 > div' ).each(function( index, element ) {
                        data.push($(element).data('id')
                        );
                    });

                    console.log( data );

                    var values = $( '.col-md-2.col-sm-2 > div' ).serialize();
                    var values = {
                        _token: $("input[name=_token]").val(),
                        _method: 'PUT',
                        data: data
                    };

                    $.ajax({
                        url: $(location).attr('href') + '/update', // laravel.app/admin/slider için
                        method: "PUT",
                        data: values,
                        success: function(response){
                            console.log(response);
                        },
                        error: function(response){
                            console.log(response);
                        }
                    });

                }
            });
            // end update

            // begin delete
            $( '#delete').click(function() {

                var data = [];
                $( ':checkbox:checked' ).each(function( index, element ) {
                    data.push($(element).data('id'));
                });

                console.log(data);

                var values = $( ':checkbox:checked' ).serialize();
                var values = {
                    _token: $("input[name=_token]").val(),
                    _method: 'DELETE',
                    data: data
                };

                $.ajax({
                    url: $(location).attr('href') + '/destroy',
                    type: "DELETE",
                    data: values,
                    success: function(response){
                        console.log(data);
                        $('[data-id="' + data.join('"], [data-id="') + '"]').fadeOut( "slow", function() {
                            location.reload();
                        });

                    },
                    error: function(response){
                        console.log(response);
                    }
                });


            });
            // end delete
        }

    }
}();