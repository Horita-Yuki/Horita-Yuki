CommonValue = 0;
var SlideValue = 0;
var ImageValue = 0;
var is_drag = 0;

//スライドバーに合わせて画像が動く
var input = $('input'); //input に<input>タグを代入
input.on('mousedown', function() {  //下のmouseupと合わせてドラッグ中のみ処理をするようにする
    is_drag = true;
});
input.on('mouseup mouseleave', function() { //上のmousedownと合わせてドラッグ中のみ処理をするようにする
    is_drag = false;
});
input.on('mousemove', function() {     //input要素内でマウスが動いていたら(スライダーを動かしたら)
    SliderSlide();
});

function SliderSlide() {//スライダーを動かしたら画像を追従させる
    if (is_drag === true) {
        SlideValue = document.getElementById('slidebar').value * -1; //SlideValue に #slidebar の value値を取得して代入(スライダーの値を入れる)
        console.log('スライダー　' + SlideValue);
        $('#slider').css('transform',`translateX(${SlideValue}%)`);    //.slick-track(jQeryで作られたスライド)の表示をスライダーのつまみ分左にずらす
        CommonValue = SlideValue;//現在の位置を共有させるためにグローバル変数に格納
        console.log('共有　' + CommonValue);
    }
}

dragger(document.querySelector("#slider"),function(e){//画像がドラッグされたらスライドバーを追従させる
    $('#slider').css('transform',`translateX(${ImageValue}%)`); 
    document.getElementById('slidebar').value = (ImageValue * -1); //SlideValue に #slidebar の value値を取得して代入(スライダーの値を入れる)
});

function dragger(selector,func){
    var flag = 0;
    var point = {};
    var dragX;
    selector.addEventListener("mousedown",function(e){
        e.preventDefault();
        flag = 1;
        point.x = e.x;
        dragTarget = e.target;
        console.log('共有　' + CommonValue);
    });
    document.body.addEventListener("mousemove",function(e){
        if(flag == 1){
            $('.slide-image-box').addClass('ban-click');//ドラッグ終了時ににクリック誤爆を防ぐクラスを追加する。
            ImageValue = CommonValue;//共有の変数から現在の位置を受け取る
            console.log('画像　' + ImageValue);   
            e.dragTarget = dragTarget;
            e.dragX = (e.x - point.x);//ドラッグ量の計算
            e.dragX = (e.dragX * 0.001);//ドラッグ量の調整
            ImageValue = (ImageValue + e.dragX);//現在のX座標値にドラッグ量を足す
            if (ImageValue <= -75) {//最後の画像まで表示させたらストップ
                ImageValue = -75;
            }
            if (ImageValue >= 0) {//最初の画像より前に行かないようにする
                ImageValue = 0;
            }
            func(e);
            CommonValue = ImageValue;//現在の位置を共有させるためにグローバル変数に格納
        }
    });
    //dragcansel
    document.body.addEventListener("mouseup",function(e){
        flag = 0;
        $('.slide-image-box').removeClass('ban-click');//ドラッグ終了時ににクリック誤爆を防ぐクラスを取り除く
    });
    document.body.addEventListener("mouseleave",function(e){
        e.preventDefault();
        flag = 0;
        $('.slide-image-box').removeClass('ban-click');//ドラッグ終了時ににクリック誤爆を防ぐクラスを取り除く
    });
}





// //画像に合わせてスライドバーが動く
// var ReleaseSlider = $('.slick-track');

// ReleaseSlider.on('mousedown', function() {  //下のmouseupと合わせてドラッグ中のみ処理をするようにする
//     is_drag = true;
// });
// ReleaseSlider.on('mouseup mouseleave', function() { //上のmousedownと合わせてドラッグ中のみ処理をするようにする
//     is_drag = false;
// });
// ReleaseSlider.on('mousemove',function() {
//     ImageSlide();
// });

// function ImageSlide() {
//     if (is_drag === true) {
//         var SlidePosition = ReleaseSlider.css('transform');
//         var values = SlidePosition.split(',');  //split で文字列を指定の文字(',')で区切り、配列にする。

//         const Slide = document.getElementsByClassName('slick-track');//スライダーの要素を取得
//         const SlideWidth = Slide[0].clientWidth;//スライダーの全体幅を取得（前行でクラスで取得したので配列で！）

//         SlideValue = parseInt(((values[4] / SlideWidth) * -100),10);//pxで出てきたx軸の数字を%になおす
//         console.log('画像　' + SlideValue);
//         SyncX();
//     }
// }
// function SyncX() {
//     $('#slidebar').val(SlideValue);  //スライドバーにSlideValueを代入
//     $('.slick-track').css('transform',`translate3d(-${SlideValue}%, 0px, 0px)`);    //.slick-track(jQeryで作られたスライド)の表示をスライダーのつまみ分左にずらす
// }