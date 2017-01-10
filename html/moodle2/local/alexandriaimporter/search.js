$(function() {
    $(".details_toggle").click(function(e) {
        e.preventDefault();
        e.stopPropagation();
        toggle_advanced(!$(".advanced").is(":visible"));
    });
});


function alexandria_load_more(wwwroot, courseid, dataid) {
    var url = wwwroot + '/local/alexandriaimporter/ajax.php';
    var params = {
        id: courseid,
        dataid: dataid

    };
    $("#alexloadmore .spinner").show();
    params.from = $("#accordion .accordion-group").length;

    params.search = {};
    $("#search_values input").each(function() {
        if ($(this).attr("name") && $(this).val()) {
            params.search[$(this).attr("name")] = $(this).val();
        }
    });

    $.post(url, params, function(data) {
        $("#alexloadmore .spinner").hide();
        if (!data.moreresults) {
            $('#alexloadmore').hide();
        }

        var container = $('#accordion');
        for (var x in data.results) {
            container.append(data.results[x].formatted);
        }
    });
}
