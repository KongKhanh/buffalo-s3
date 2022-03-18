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
    } 
    else {

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

$(document).ready(function(){

    var disabledOption = '<option value="" disabled selected>Chọn ngành đào tạo</option>';

    $("#course").html(disabledOption).prop('disabled', 'disabled');

    $("#level_of_training").change(function(){

        var idLot = $(this).val();

        if(idLot){

            $.ajax({
                method: "GET",
                url: `/api/majors-by-id/${idLot}`,
                headers: {
                    'Content-Type':'application/json'
                },
            })
            .done(function(res) {

                var getMajor = disabledOption;

                for (let i = 0; i < res.majorsById.length; i++) { 

                    getMajor += `<option value="${res.majorsById[i].mjr_id}">${res.majorsById[i].mjr_name}</option>`
                };

                $("#course").removeAttr("disabled");

                $("#course").html(getMajor);
            });
        }
    });
});