SlideValue = 0;

'use strict';

//表示部分の設定

$('.slider2').slick({
    autoplay: false,//自動的に動き出すか。初期値はfalse。
    infinite: false,//スライドをループさせるかどうか。初期値はtrue。
    slidesToShow: 3,//スライドを画面に3枚見せる
    slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
    arrows: false,
    dots: false,//下部ドットナビゲーションの表示
    waitForAnimate: false,
});



//スライドバー
var is_drag = false;
var input = $('input'); //input に<input>タグを代入

input.on('mousedown', function() {  //下のmouseupと合わせてドラッグ中のみ処理をするようにする
    is_drag = true;
});
input.on('mouseup mouseleave', function() { //上のmousedownと合わせてドラッグ中のみ処理をするようにする
    is_drag = false;
});
input.on('mousemove', function(){     //input要素内でマウスが動いていたら(スライダーを動かしたら)
    SliderSlide();
    ImageSlide();
});
function SliderSlide() {
    if (is_drag === true) {
        SlideValue = document.getElementById('slidebar').value; //SlideValue に #slidebar の value値を取得して代入(スライダーの値を入れる)
        $('.slick-track').css('transform',`translate3d(-${SlideValue}%, 0px, 0px)`);    //.slick-track(jQeryで作られたスライド)の表示をスライダーのつまみ分左にずらす
        console.log('スライダー　' + SlideValue);
    }
}


//画像に合わせてスライドバーが動く
var ReleaseSlider = $('.slick-track');
ReleaseSlider.on('mousedown', function() {  //下のmouseupと合わせてドラッグ中のみ処理をするようにする
    is_drag = true;
});
ReleaseSlider.on('mouseup mouseleave', function() { //上のmousedownと合わせてドラッグ中のみ処理をするようにする
    is_drag = false;
});
ReleaseSlider.on('mousemove',function() {
    ImageSlide();
    SliderSlide();
});
function ImageSlide() {
    if (is_drag === true) {
        var SlidePosition = ReleaseSlider.css('transform');
        var values = SlidePosition.split(',');  //split で文字列を指定の文字(',')で区切り、配列にする。
        const Slide = document.getElementsByClassName('slick-track');//スライダーの要素を取得
        const SlideWidth = Slide[0].clientWidth;//スライダーの全体幅を取得（前行でクラスで取得したので配列で！）
        //console.log(SlideWidth);
        //console.log(values);
        //console.log(values[4]);   //配列の4番目(x軸の値を取り、出力)
        SlideValue = parseInt(((values[4] / SlideWidth) * -100),10);
        console.log('画像　' + SlideValue);
        $('#slidebar').val(SlideValue);  //pxで出てきたx軸の数字を%になおし、スライドバーの値に代入
    }
}