$(document).ready(function () {

	$('#one').click(function () {
        $('#default').replaceWith($('#aboutHistory').removeClass('hidden').addClass('aboutContent'));
        $('#aboutWhy, #aboutInvolved').addClass('hidden');
    });

    $('#two').click(function () {
        $('#default').replaceWith($('#aboutWhy').removeClass('hidden').addClass('aboutContent'));
        $('#aboutHistory, #aboutInvolved').addClass('hidden');
    });

    $('#three').click(function () {
        $('#default').replaceWith($('#aboutInvolved').removeClass('hidden').addClass('aboutContent'));
        $('#aboutWhy, #aboutHistory').addClass('hidden');
    });
});