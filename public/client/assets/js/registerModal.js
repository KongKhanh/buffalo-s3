const registerModal = $('#registerModal');
const registerModalBtn = $('#registerModalHidden');

registerModalBtn.click(e => {
    
    registerModal.hide();
});

$(window).click(e => {

    if(e.target == registerModal[0]) registerModal.hide();
});

$('#register-btn').click(e => {

    registerModal.toggle();
});
