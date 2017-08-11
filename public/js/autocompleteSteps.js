/**
 * Created by george on 8/9/17.
 */
$(function()
{
    $( "#q" ).autocomplete({
        source: "search/autocomplete",
        minLength: 3,
        select: function(event, ui) {
            $('#q').val(ui.item.value);
        }
    });
});