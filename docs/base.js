//title changes
$("#title").click(function() {
    //make it a text field
    var text = $.trim($('#title').text());
    $('#title').empty();
    
    $('#title').html($('<input>', {
        value: text
    }));
    
});

$("#title").keypress(function(event) {
    if ( event.which == 13 ) {
        var text = $.trim($('#title').valueOf());
        $('#title').empty();
    
        $('#title').html($(text ));
    }

});
