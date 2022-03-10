function showCategoryMenu(parent) {
    $(parent).children('ul').slideToggle();
}
// headSearch
let isHidden = false;
$('#headSearchBtn').click(() => {
    if(isHidden === false) {
        $('.menubar__list-item > a').css({
            animation: 'slideLeft 1s forwards',
        })
        $('#headSearch').css({
            animation: 'searchSlideLeft 1s forwards',
        });
        isHidden = true;
    } else {
        $('.menubar__list-item > a').css({
            animation: 'slideRight 1s forwards',
        })
        $('#headSearch').css({
            animation: 'searchSlideRight 1s forwards',
            // display: 'none',
        });
        isHidden = false;
    }
});