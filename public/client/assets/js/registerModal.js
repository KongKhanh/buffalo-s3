const registerModal         = $('#registerModal');
const registerModalBtn      = $('#registerModalHidden');

const consultModal          = $('#consultModal');
const consultModalCloser    = $('#consultModalHidden');

registerModalBtn.click(e => {registerModal.hide();});
$(window).click(e => {if(e.target == registerModal[0]) registerModal.hide();});
$('#register-btn').click(e => {registerModal.toggle();});


consultModalCloser.click(e => {consultModal.hide();});
// $(window).click(e => {if(e.target == consultModalCloser[0]) consultModal.hide();});
$('#btn_openform_consult').click(e => {consultModal.toggle();});

