$(document).ready(function() {
    $("#form").on('click', '.ajax-btn',
        function(){
            var title = $(this).attr('title');
            $("#title").attr('value', title);
            sendAjaxForm('ajax_form');
			return false; 
		}
    );
});

function sendAjaxForm(ajax_form) {
    $.ajax({
        url:     'http://mytask.loc/create',
        type:     "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize()
 	});

}

var url = "http://mytask.loc/home #posts";

function refresh(){
    $('#posts').load(url);
}

refresh();
var interval = 1000;
setInterval('refresh()', interval);