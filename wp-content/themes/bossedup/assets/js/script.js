document.addEventListener("DOMContentLoaded", function () {
    var header = document.getElementById('side-bar');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 0) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});


$('.skill').waypoint(function () {
    $('.progress .progress-bar').each(function () {
        var progressValue = parseFloat($(this).attr("aria-valuenow"));
        var color;
        // Set color based on progress value
        if (progressValue == 85) {
            color = '2c94a4';
        } else if (progressValue == 90) {
            color = 'f6b376';
        } else if (progressValue == 95) {
            color = 'e05945';
        } else {
            color = 'green';
        }
        
        console.log($(this));
        $(this).css({
            "width": progressValue + '%',
            "background-color": "#" + color
        });
    });
}, {offset: '80%'});


$('.custom-counter').counterUp({
    delay: 10,
    time: 2000
});



// faq

document.querySelectorAll('.accordion-header').forEach(button => {
    button.addEventListener('click', () => {
        const accordionContent = button.nextElementSibling;

        button.classList.toggle('active');

        if (button.classList.contains('active')) {
            accordionContent.style.maxHeight = accordionContent.scrollHeight + 'px';
        } else {
            accordionContent.style.maxHeight = 0;
        }

        // Close other open accordion items
        document.querySelectorAll('.accordion-header').forEach(otherButton => {
            if (otherButton !== button) {
                otherButton.classList.remove('active');
                otherButton.nextElementSibling.style.maxHeight = 0;
            }
        });
    });
});

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });

 