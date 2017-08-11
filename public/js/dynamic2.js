/**
 * Created by george on 8/8/17.
 */
$(document).ready(function(){

    $( "#form" ).keypress(function(e) {
        if ( e.which == 13 ) {
            e.preventDefault();
        }
    });

    var next = 1;
    $(".add-more-steps").click(function(e){
        e.preventDefault();
        var addto = "#p" +next;
        var newIn = '<p id="p' + next + '">'+$("#step1").val()+'<\/p>';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next) + '" class="btn btn-danger remove-me inline" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#step" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);

        $('.remove-me').click(function(e){
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length-1);
            var fieldID = "#p" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
        });
    });



});

/**
 * Created by george on 8/9/17.
 */
