// PhotoController.
var Sortable = function (){
    return {
        init: function () {
            
            // AJAX UPDATE BEGIN
            $(function() {
                $( "#sortable" ).sortable();
                $( "#sortable" ).disableSelection();
            });
            $( "#sortable" ).sortable({
                update: function() {
                    var data = [];
                    $( '.col-md-2.col-sm-2 > a > img' ).each(function( index, element ) {
                        data.push($(element).data('id')
                        );
                    });
                    console.log( data );
                    // var values = $( '.col-md-2.col-sm-2 > a > img' ).serialize();
                    var values = {
                        _token: $("input[name=_token]").val(),
                        _method: 'PUT',
                        data: data
                    };
                    $.ajax({
                        url: 'update', // laravel.app/admin/galeri/upload/1 içindir
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
            // AJAX  UPDATE END

            // AJAX DELETE BEGIN
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
                    url: 'destroy',
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
            // AJAX DELETE END
        }

    }
}();