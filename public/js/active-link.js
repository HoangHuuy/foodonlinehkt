// const currentLocation = location.href;
// const menuItem = document.getElementsByClassName('active-link');
// const menuLength = menuItem.length;
// for (let i = 0; i < menuLength; i++) {
//     if (menuItem[i].href === currentLocation){
//         menuItem[i].className = "aaactive";
//     }
// }

// const status = [...document.querySelectorAll('.status')];
// const formId = document.querySelectorAll('.changeStatusForm')[0];

// status.forEach(item => {
//     item.addEventListener('change', (e) => {
//         formId.submit();
//     })
// })


// $(document).ready(function() {
//     $('.status').on('change', function() {
//         console.log('change');
//        //document.forms[statusChangeForm].submit();
//     });
// });

$(".status").each(function(index) {
    $(this).on("change", function(){
        $.ajax({
            url: 'change-status/' + $(this).data("id") + '/' + $(this).find(":selected").val(),
            type: 'GET',
            complete: function () {
                // alert('THanh cong');
                alertify.success('Cập Nhập Thành Công');
            }
        });
            



        // // For the boolean value
        // var boolKey = $(this).data('selected');
        // // For the mammal value
        // var mammalKey = $(this).attr('id'); 
    });
});

// function RenderCart(response) {
//     $("#change-item-cart").empty();
//     $("#change-item-cart").html(response);
//     $("#total-quanty-show").text($("#total-quanty-cart").val());
// }