'use strict';

var flag = 0;	//クラス受け渡しに使用するフラグ
var angle = 45;	//回転するひし形の角度
var SlideTimer = setInterval(slide_next,5000);	//5秒毎に次の画像を表示する
//スライドの画像にそれぞれクラスを付与してスライドショーの準備
$('.slide_img0').addClass('next1');
$('.slide_img1').addClass('current1');
$('.slide_img2').addClass('prev1');
$('.slide_img3').addClass('backside1-1');
$('.slide_img4').addClass('backside1-2');
$('.slide_img5').addClass('backside1-3');
$('.slide_img6').addClass('backside1-4');
$('.slide_img7').addClass('backside1-5');

$('#next-button').click(slide_next);	//次へボタンを押すと次の画像を表示
$('#prev-button').click(slide_prev);	//前へボタンを押すと前の画像を表示
function slide_next(){	//次の画像を表示する関数
	if (flag == 0){	//もしフラグが0なら
		$('.backside1-5').addClass('next2');	//バックサイド5(控えの5枚目)の画像に"次の画像"のクラスを付与
		$('.next2').removeClass('backside1-5');	//↑の画像からバックサイド5のクラスを剥奪
		$('.next1').addClass('current2');		//以下、同じように1枚ずつ位置をずらしていく
		$('.current2').removeClass('next1');
		$('.current1').addClass('prev2');
		$('.prev2').removeClass('current1');
		$('.prev1').addClass('backside2-1');
		$('.backside2-1').removeClass('prev1');
		$('.backside1-1').addClass('backside2-2');
		$('.backside2-2').removeClass('backside1-1');
		$('.backside1-2').addClass('backside2-3');
		$('.backside2-3').removeClass('backside1-2');
		$('.backside1-3').addClass('backside2-4');
		$('.backside2-4').removeClass('backside1-3');
		$('.backside1-4').addClass('backside2-5');
		$('.backside2-5').removeClass('backside1-4');
		angle += 90;	//ひし形を右に90度傾ける
		document.getElementById('square').style.transform = "translate(0, -50%) rotate(" + angle + "deg)";	//ひし形を右に90度傾ける
		flag = 1;	//フラグを1にする
		clearInterval(SlideTimer);	//ボタンが押されたらスライドショーのタイマーをリセットする
		SlideTimer = setInterval(slide_next, 5000);	//スライドショーを再起動する
	} else if (flag == 1){						//以下、同じ処理。クラスを付与・剥奪する際に1セットのクラス(控え×5・次・メイン・前)だと不具合がでるので
		$('.backside2-5').addClass('next1');	//2セット用意し、フラグによって1セット目と2セット目を交互に付与・剥奪する
		$('.next1').removeClass('backside2-5');
		$('.next2').addClass('current1');
		$('.current1').removeClass('next2');
		$('.current2').addClass('prev1');
		$('.prev1').removeClass('current2');
		$('.prev2').addClass('backside1-1');
		$('.backside1-1').removeClass('prev2');
		$('.backside2-1').addClass('backside1-2');
		$('.backside1-2').removeClass('backside2-1');
		$('.backside2-2').addClass('backside1-3');
		$('.backside1-3').removeClass('backside2-2');
		$('.backside2-3').addClass('backside1-4');
		$('.backside1-4').removeClass('backside2-3');
		$('.backside2-4').addClass('backside1-5');
		$('.backside1-5').removeClass('backside2-4');
		angle += 90;
		document.getElementById('square').style.transform = "translate(0, -50%) rotate(" + angle + "deg)";
		flag = 0;
		clearInterval(SlideTimer);	//ボタンが押されたらスライドショーのタイマーをリセットする
		SlideTimer = setInterval(slide_next, 5000);	//スライドショーを再起動する
	}
}
function slide_prev(){	//前の画像を表示する関数。slide_nextと逆回りにクラスを付与・剥奪する。
	if (flag == 0){
		$('.backside1-5').addClass('backside2-4'); 
		$('.backside2-4').removeClass('backside1-5');
		$('.backside1-4').addClass('backside2-3');
		$('.backside2-3').removeClass('backside1-4');
		$('.backside1-3').addClass('backside2-2');
		$('.backside2-2').removeClass('backside1-3');
		$('.backside1-2').addClass('backside2-1');
		$('.backside2-1').removeClass('backside1-2');
		$('.backside1-1').addClass('prev2');
		$('.prev2').removeClass('backside1-1');
		$('.prev1').addClass('current2');
		$('.current2').removeClass('prev1');
		$('.current1').addClass('next2');
		$('.next2').removeClass('current1');
		$('.next1').addClass('backside2-5');
		$('.backside2-5').removeClass('next1');
		angle -= 90;
		document.getElementById('square').style.transform = "translateY(-50%) rotate(" + angle + "deg)";
		flag = 1;
		clearInterval(SlideTimer);	//ボタンが押されたらスライドショーのタイマーをリセットする
		SlideTimer = setInterval(slide_next, 5000);	//スライドショーを再起動する
	} else if (flag == 1){
		$('.backside2-5').addClass('backside1-4');
		$('.backside1-4').removeClass('backside2-5');
		$('.backside2-4').addClass('backside1-3');
		$('.backside1-3').removeClass('backside2-4');
		$('.backside2-3').addClass('backside1-2');
		$('.backside1-2').removeClass('backside2-3');
		$('.backside2-2').addClass('backside1-1');
		$('.backside1-1').removeClass('backside2-2');
		$('.backside2-1').addClass('prev1');
		$('.prev1').removeClass('backside2-1');
		$('.prev2').addClass('current1');
		$('.current1').removeClass('prev2');
		$('.current2').addClass('next1');
		$('.next1').removeClass('current2');
		$('.next2').addClass('backside1-5');
		$('.backside1-5').removeClass('next2');
		angle -= 90;
		document.getElementById('square').style.transform = "translateY(-50%) rotate(" + angle + "deg)";
		flag = 0;
		clearInterval(SlideTimer);	//ボタンが押されたらスライドショーのタイマーをリセットする
		SlideTimer = setInterval(slide_next, 5000);	//スライドショーを再起動する
	}
}