is_open = "yes";
is_open1 = "yes";
is_open2 = "yes";

$('.dddrop-one').click(function () {
    if (is_open == "yes") {
        $('.dddrop-one-show').toggleClass('show');
        document.getElementsByClassName('first')[0].style.transform = "translateY(-50%) rotate(0deg)";
        is_open = "no";
    } else if (is_open == "no") {
        $('.dddrop-one-show').toggleClass('show');
        document.getElementsByClassName('first')[0].style.transform = "translateY(-50%) rotate(180deg)";
        is_open = "yes";
    }
})
$('.dddrop-two').click(function () {
    if (is_open1 == "yes") {
        $('.dddrop-two-show').toggleClass('show1');
        document.getElementsByClassName('second')[0].style.transform = "translateY(-50%) rotate(0deg)";
        is_open1 = "no";
    } else if (is_open1 == "no") {
        $('.dddrop-two-show').toggleClass('show1');
        document.getElementsByClassName('second')[0].style.transform = "translateY(-50%) rotate(180deg)";
        is_open1 = "yes";
    }
})
$('.dddrop-three').click(function () {
    if (is_open2 == "yes") {
        $('.dddrop-three-show').toggleClass('show2');
        document.getElementsByClassName('third')[0].style.transform = "translateY(-50%) rotate(0deg)";
        is_open2 = "no";
    } else if (is_open2 == "no") {
        $('.dddrop-three-show').toggleClass('show2');
        document.getElementsByClassName('third')[0].style.transform = "translateY(-50%) rotate(180deg)";
        is_open2 = "yes";
    }
})
