<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        // When the user clicks on the button, scroll to the top of the document
        $('#back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 100); // You can adjust the animation speed if needed
            return false;
        });
        var header = $('.bg-header-child');
        var menuHeader = $(".bg-header-child .menu-header");

        $(window).scroll(function () {
            var scrollPosition = $(this).scrollTop();

            // Thay đổi màu sắc khi cuộn
            if (scrollPosition > 0) {
                header.addClass('bg-scroll').removeClass('bg-header');
                menuHeader.css('padding-top','10px');
            } else {
                menuHeader.css('padding-top','20px');
                header.removeClass('bg-scroll').addClass('bg-header');
            }
        });
        // var hours = 0;
        // var minutes = 0;
        // var seconds = 0;

        // // Update the timer every second
        // var timerInterval = setInterval(function() {
        //     // Decrease seconds
        //     // console.log(seconds);
        //     seconds--;

        //     // Check if minutes and hours need to be adjusted
        //     if (seconds < 0) {
        //         seconds = 59;
        //         minutes--;

        //         if (minutes < 0) {
        //             minutes = 59;
        //             hours--;

        //             if (hours < 0) {
        //                 // Timer has reached 0, you can handle this case as needed
        //                 clearInterval(timerInterval);
        //                 alert('Time is up!');
        //             }
        //         }
        //     }

        //     // Update the HTML elements with new values
        //     $('#hours').text(hours.toString().padStart(2, '0'));
        //     $('#minutes').text(minutes.toString().padStart(2, '0'));
        //     $('#seconds').text(seconds.toString().padStart(2, '0'));
        // }, 1000); // Update every 1000 milliseconds (1 second)
    })
</script>