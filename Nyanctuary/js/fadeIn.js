
$(function(){
  $(window).on('load scroll', function(){
    //現時点のスクロールの高さ取得
    var scrollPosition = $(window).scrollTop();
    //ウィンドウの高さ取得
    var windowHeight = $(window).height();
 
    $('.fadeIn-right').each(function(){
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if(elemPosition < scrollPosition + windowHeight){
        $(this).css({
          opacity: 1,
          transform: 'translateX(0)'
        });
      }
    });
    $('.fadeIn-left').each(function(){
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if(elemPosition < scrollPosition + windowHeight){
        $(this).css({
          opacity: 1,
          transform: 'translateX(0)'
        });
      }
    });
    $('.fadeIn-top').each(function(){
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if(elemPosition < scrollPosition + windowHeight){
        $(this).css({
          opacity: 1,
          transform: 'translateY(0)'
        });
      }
    });
    $('.fadeIn-bottom').each(function(){
      //要素の位置（高さ）を取得
      var elemPosition = $(this).offset().top;
      //スクロールの高さが要素の位置を超えたら以下のスタイルを適用
      if(elemPosition < scrollPosition + windowHeight){
        $(this).css({
          opacity: 1,
          transform: 'translateY(0)'
        });
      }
    });
  });
});
/*スマホサイズの時左右からフェードインさせない*/
$(window).resize(function(){
    //windowの幅をxに代入
    var x = $(window).width();
    //windowの分岐幅をyに代入
    var y = 640;
    if (x <= y) {
        $('#colorBox').addClass('redbox').removeClass('bluebox');
        $('#imageBox').addClass('morning-b').removeClass('morning-a');
    }else{
        $('#colorBox').addClass('bluebox').removeClass('redbox');
        $('#imageBox').addClass('morning-a').removeClass('morning-b');
    }
});