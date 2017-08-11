/**
 * Created by george on 8/8/17.
 */
$(function () {
    $( '#table' ).searchable({
        searchField   : '#search',
        striped: true,
        oddRow: { 'background-color': '#f5f5f5' },
        evenRow: { 'background-color': '#fff' },
        searchType: 'fuzzy'
    });
});