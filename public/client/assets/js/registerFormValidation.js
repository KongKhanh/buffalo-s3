// const submitBtn = $('#registerSubmit');

// const fullname = $('#fullName');
// const dob = $('#dateOfBirth');
// const phone = $('#phoneNumber');
// const mail = $('#email');
// const address = $('#address');

// const inputBox = $('.input-box');

// const nameRegex = /^[a-zA-Z ]+$/;
// const mailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// const phoneRegex = /0\d{9}/gm;

// function toggleErrors(index, isCorrect) {
//     switch (isCorrect) {
//         case 1: {
//                 $(inputBox[index]).addClass('input-box--error');
//                 $(inputBox[index]).children('.fas').css({
//                     display: 'inline',
//                 });
//                 $(inputBox[index]).parent().children('p.input-error').css({
//                     display: 'block',
//                 })
//                 return false;
//                 // break;
//             }
//         case 0: {
//             $(inputBox[index]).removeClass('input-box--error');
//             $(inputBox[index]).children('.fas').css({
//                 display: 'none',
//             });
//             $(inputBox[index]).parent().children('p.input-error').css({
//                 display: 'none',
//             })
//             return true;
//             // break;
//         }    
//     }
// }

// const isNameCorrect = () => {
//     if(fullname.val().length < 3 || !nameRegex.test(fullname.val())) {
//         return toggleErrors(0, 1);
//     } else {
//         return toggleErrors(0, 0);
//     }
// }
// const isDOBCorrect = () => {
//     let today = new Date();
//     let date = new Date(dob.val());
//     if(date > today || isNaN(date.getDate())) {
//         return toggleErrors(1, 1);
//     } else {
//         return toggleErrors(1, 0);
//     }
// }
// const isPhoneCorrect = () => {
//     if(!phoneRegex.test(phone.val())) {
//         return toggleErrors(2, 1);
//     } else return toggleErrors(2, 0);
// }
// const isMailCorrect = () => {
//     if(!mailRegex.test(mail.val())) {
//         return toggleErrors(3, 1);
//     } else return toggleErrors(3, 0);
// }
// const isAddressCorrect = () => {
//     if(address.val().length <= 0) {
//         return toggleErrors(4, 1);
//     } else return toggleErrors(4, 0);
// }
// submitBtn.click(() => {
//     // if(isNameCorrect() && isDOBCorrect() && isPhoneCorrect() && isMailCorrect() && isAddressCorrect()) {
//         // return true;
//     // } else return false;
//     isNameCorrect();
//     isDOBCorrect();
//     isPhoneCorrect();
//     isMailCorrect();
//     isAddressCorrect();
//     return isNameCorrect() && isDOBCorrect() && isPhoneCorrect() && isMailCorrect() && isAddressCorrect();
// });
