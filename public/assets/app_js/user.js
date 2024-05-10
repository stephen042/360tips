$(document).ready(function () {
    
    // set loader time out
    setTimeout(() => {
        $('#global-loader').hide();
    }, 3000);

    // active link on side-bar
    $('.slide').on('click', '.side-menu__item', function () {
        $('.side-menu__item').removeClass("active");
        $(this).addClass("active");
    });
});