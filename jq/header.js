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
})