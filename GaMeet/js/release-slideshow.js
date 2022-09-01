'use strict';

$('.slider2').slick({
    autoplay: false,//自動的に動き出すか。初期値はfalse。
    infinite: false,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 3,//スライドを画面に3枚見せる
    slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
    arrows: false,
    dots: false,//下部ドットナビゲーションの表示
    waitForAnimate: false,
//     responsive: [
//       {
//       breakpoint: 769,//モニターの横幅が769px以下の見せ方
//       settings: {
//         slidesToShow: 2,//スライドを画面に2枚見せる
//         slidesToScroll: 2,//1回のスクロールで2枚の写真を移動して見せる
//       }
//     },
//     {
//       breakpoint: 426,//モニターの横幅が426px以下の見せ方
//       settings: {
//         slidesToShow: 1,//スライドを画面に1枚見せる
//         slidesToScroll: 1,//1回のスクロールで1枚の写真を移動して見せる
//       }
//     }
//   ]
});

//スライドバー
var is_drag = false;
var input = $('input'); //input に<input>タグを代入
var SlideValue = 0;
var CommonValue = 0;
input.on('mousedown', function() {  //下のmouseupと合わせてドラッグ中のみ処理をするようにする
    is_drag = true;
});
input.on('mouseup mouseleave', function() { //上のmousedownと合わせてドラッグ中のみ処理をするようにする
    is_drag = false;
});
input.on('mousemove', function(){     //input要素内でマウスが動いていたら(スライダーを動かしたら)
    if (is_drag === true) {
        var SlideValue = document.getElementById('slidebar').value; //SlideValue に #slidebar の value値を取得して代入(スライダーの値を入れる)
        $('.slick-track').css('transform',`translate3d(-${SlideValue}%, 0px, 0px)`);    //.slick-track(jQeryで作られたスライド)の表示をスライダーのつまみ分左にずらす
        console.log(SlideValue);
    }
});
var ReleaseSlider = $('.slick-track');
ReleaseSlider.on('mousedown', function() {  //下のmouseupと合わせてドラッグ中のみ処理をするようにする
    is_drag = true;
});
ReleaseSlider.on('mouseup mouseleave', function() { //上のmousedownと合わせてドラッグ中のみ処理をするようにする
    is_drag = false;
});
ReleaseSlider.on('mousemove',function(){
    if (is_drag === true) {
        var SlidePosition = ReleaseSlider.css('transform');
        var values = SlidePosition.split(',');  //split で文字列を指定の文字(',')で区切り、配列にする。
        //console.log(values);
        //console.log(values[4]);   //配列の4番目(x軸の値を取り、出力)
        SlideValue = values[4];
        console.log(parseInt((SlideValue / -2196) * 100),10);
        $('#slidebar').val(parseInt((SlideValue / -2196) * 100),10);  //pxで出てきたx軸の数字を%になおし、スライドバーの値に代入
    }
});
