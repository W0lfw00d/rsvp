$(function() {
    var guests = $('.guest-form').size();

    var $guestFormClone = $('#guestForm').clone().removeAttr('id');

    var removeGuest = function(e) {
        $(this).parent().parent().parent().remove();
        guests--;
        console.log('removing guest...', guests);
        e.preventDefault();
    };
//    $guestFormClone.appendTo($('#removeGuest'));
    $('#removeGuest').remove();


    $('#addGuest').click(function(e) {
        console.log('Adding guest...', guests);
        if (guests < 4) {
            $(this).parent().parent().before($guestFormClone.clone());
            $('.remove-guest').unbind('click').click(removeGuest);
            guests++;
        }
        e.preventDefault();
    });
});
