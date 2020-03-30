$(function() {

    let rep = $('.rep');
    let question = $('.questions');


    question.on('click', function() {
        if ($(this).children().hasClass('rotate')) {
            $(this).children().removeClass('rotate')
            $(this).children().css({'transition': 'transform 0.3s ease-in-out'});
        } else {
            question.children().removeClass('rotate')
            question.children().css({'transition': 'transform 0.3s ease-in-out'});
            $(this).children().toggleClass('rotate');
            $(this).children().css({'transition': 'transform 0.3s ease-in-out'});
        }

        if ($(this.nextElementSibling).hasClass('hidden')) {
            rep.addClass('hidden');
            rep.slideUp('slow')
            $(this.nextElementSibling).slideDown('slow');
            $(this.nextElementSibling).removeClass("hidden");
        } 
        else { 
            $(this.nextElementSibling).slideUp("slow");
            $(this.nextElementSibling).addClass("hidden");
        }
            
    });

});