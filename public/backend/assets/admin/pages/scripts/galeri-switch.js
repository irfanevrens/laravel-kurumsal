var Switch = function (){
    return {
        init: function () {
            // begin checkbox checked
            $( ":checkbox" ).click(function() {


                var $this = $(this);

                if ($this.is(':checked')) {
                    var status = 1;
                    var id = $(this).data("id");
                    var values = {
                        _token: $("input[name=_token]").val(),
                        _method: 'PUT',
                        id: id,
                        status: status
                    };
                    console.log(values);
                    
                    $.ajax({
                        url: $(location).attr('href') + '/update',
                        method: "PUT",
                        data: values,
                        success: function(response){
                            console.log(response);
                        },
                        error: function(response){
                            console.log(response);
                        }
                    });
                    // end ajax

                }

                else {

                    var status = 0;
                    var id = $(this).data("id");

                    var values = {
                        _token: $("input[name=_token]").val(),
                        _method: 'PUT',
                        id: id,
                        status: status
                    };

                    console.log( values );

                    $.ajax({
                        url: $(location).attr('href') + '/update',
                        method: "PUT",
                        data: values,
                        success: function(response){
                            console.log(response);
                        },
                        error: function(response){
                            console.log(response);
                        }
                    });
                    // end ajax


                }
            });
            // end checkbox handler
        }

    }
}();