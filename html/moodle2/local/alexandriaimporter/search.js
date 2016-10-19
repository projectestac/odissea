$(function() {
    $(".details_toggle").click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        toggle_advanced(!$(".advanced").is(":visible"));
    });
});


function alexandria_load_more(wwwroot, courseid, dataid, datatype) {
    var url = wwwroot + '/local/alexandriaimporter/ajax.php';
    var params = {
        id: courseid,
        dataid: dataid

    };
    $("#alexloadmore .spinner").show();
    params.from = $("#accordion .accordion-group").length + 1;
    var search = {};
    $("#search_values input").each(function() {
        search[$(this).attr("name")] = $(this).val();
    });
    params.search = search;

    $.post(url, params, function(data) {
        $("#alexloadmore .spinner").hide();
        if (!data.moreresults) {
            $('#alexloadmore').hide();
        }

        var container = $('#accordion');
        for (x in data.results) {
            container.append(data.results[x].formatted);
        }
    });
}
