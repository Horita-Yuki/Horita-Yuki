$(window).on('load', function(){
  //windowの幅をxに代入
  var x = $(window).width();
  //windowの分岐幅をyに代入
  var y = 480;
  if (x <= y) {
    $(document).ready(function() {
      $('.showmore').showMore({
        speedDown: 300,
        speedUp: 300,
        height: '850px',
        showText: '&raquo; もっと見る',
        hideText: '&raquo; 閉じる'
      });     
    });
  }else{
    $(document).ready(function() {
      $('.showmore').showMore({
        speedDown: 300,
        speedUp: 300,
        height: '1400px',
        showText: '&raquo; もっと見る',
        hideText: '&raquo; 閉じる'
      });     
    });
  }
});