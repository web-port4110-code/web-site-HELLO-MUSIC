$(function() {

    //heaader-navのアニメーション
    $('.headerBox__button--close a').on('click', function(){
        $('.navigation').toggleClass('open');
        $('.headerBox__button--open').toggleClass('hide');
    });

    $('.headerBox__button--open a').on('click', function(){
        $('.navigation').toggleClass('open');
        $('.headerBox__button--open').toggleClass('hide');
    });

    //concertInfoの切り替え機能
    $('select').on('change', function(){
        const selectElement = $(this).get(0);
        const selectValue = selectElement.value;
        const options = $('.card').get();

        $('.active').removeClass('active');
        options[selectValue - 1].classList.add('active');

    });

    //スライドショーの設定
    $('.slide_box').slick({
	    arrows: true,
        autoplay:true,
        autoplaySpeed:3000,
        dots:true
    });
})