
var courses_data_url = "https://cdn.rawgit.com/dpheitmeyer/a6db252e063cc2c2e781/raw/9d1c398ac8368dff572f37460589b4f7b3b598dd/courses.json";

$(document).ready(function(){
    $.getJSON(courses_data_url,
        function (data) {
            var mysource = $('#courselisttemplate').html();
            var mytemplate = Handlebars.compile(mysource);
            var myresult = mytemplate(data);
            $('#courselist').html(myresult);
        });
});