$(document).ready(function () {

    $('#one').click(function () {
        $('#default').replaceWith($('#longsword').removeClass('hidden').addClass('styleDescriptions'));
        $('#rapier, #sidesword, #wrestling, #other').addClass('hidden');
        
    });

    $('#two').click(function () {
        $('#default').replaceWith($('#rapier').removeClass('hidden').addClass('styleDescriptions'));
        $('#longsword, #sidesword, #wrestling, #other').addClass('hidden');
        
    });

    $('#three').click(function () {
        $('#default').replaceWith($('#sidesword').removeClass('hidden').addClass('styleDescriptions'));
        $('#longsword, #rapier, #wrestling, #other').addClass('hidden');
    });

    $('#four').click(function () {
        $('#default').replaceWith($('#wrestling').removeClass('hidden').addClass('styleDescriptions'));
        $('#longsword, #rapier, #sidesword, #other').addClass('hidden');
    });

    $('#five').click(function () {
        $('#default').replaceWith($('#other').removeClass('hidden').addClass('styleDescriptions'));
        $('#longsword, #rapier, #sidesword, #wrestling').addClass('hidden');
    });


});