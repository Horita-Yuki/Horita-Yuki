
/*スマホサイズの時左右からのフェードインを上からにする */
$(window).on('load', function(){
  //windowの幅をxに代入
  var x = $(window).width();
  //windowの分岐幅をyに代入
  var y = 480;
  if (x <= y) {
    $('.fr').addClass('fadeIn-top').removeClass('fadeIn-right');
    $('.fl').addClass('fadeIn-top').removeClass('fadeIn-left');
    $('.ft').addClass('fadeIn-top');
    $('.fb').addClass('fadeIn-bottom');
  }else{
    $('.fr').addClass('fadeIn-right');
    $('.fl').addClass('fadeIn-left');
    $('.ft').addClass('fadeIn-top');
    $('.fb').addClass('fadeIn-bottom');
  }
});
/*フェードインの処理*/
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
  });
 
});