$(".openbtn").click(function () {//ボタンがクリックされたら
    $(this).toggleClass('active');//ボタン自身に activeクラスを付与し
    $("#g-navi").toggleClass('panelactive');//ナビゲーションにpanelactiveクラスを付与
    $(".closebtn").toggleClass('active');
    });
  $("#g-navi a").click(function () {//ナビゲーションのリンクがクリックされたら
      $(".openbtn").removeClass('active');//ボタンの activeクラスを除去し
      $("#g-navi").removeClass('panelactive');//ナビゲーションのpanelactiveクラスも除去
  });
$(".closebtn").click(function(){
    $("openbtn").toggleClass('active');
    $("#g-navi").toggleClass('panelactive');
    $(".closebtn").toggleClass('active');
});