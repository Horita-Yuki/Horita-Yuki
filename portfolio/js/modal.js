
const buttonOpen0 = document.getElementById('ModalOpen0');
const modal0 = document.getElementById('Modal0');
const buttonClose0 = document.getElementById('ModalClose0');
const buttonClose0b = document.getElementById('ModalClose0-b');

const buttonOpen1 = document.getElementById('ModalOpen1');
const modal1 = document.getElementById('Modal1');
const buttonClose1 = document.getElementById('ModalClose1');
const buttonClose1b = document.getElementById('ModalClose1-b');

const buttonOpen2 = document.getElementById('ModalOpen2');
const modal2 = document.getElementById('Modal2');
const buttonClose2 = document.getElementById('ModalClose2');
const buttonClose2b = document.getElementById('ModalClose2-b');



// const myFunc = () => {
//     let elem = document.getElementsByClassName('feature-bg');
//     const pageHeight = document.getElementById('index').scrollHeight;
//     console.log("ページ高さ" + pageHeight);
//     // console.log(pageHeight);
//     elem[0].style.height = pageHeight + "px";
//     elem[1].style.height = pageHeight + "px";
//     elem[2].style.height = pageHeight + "px";
//     console.log("要素高さ" + elem[0].style.height);
// };

const myFunc = () => {
    let elem = document.getElementsByClassName('feature');//解説ページを取得
    let elem_body = document.getElementById('background');//bg用に用意
    const pageHeight = document.getElementById('index').scrollHeight;//ページ全体の高さを取得
    // console.log("ページ高さ" + pageHeight);
    // console.log(pageHeight);
    elem_body.style.height = (pageHeight) + "px";
    elem[0].style.height = pageHeight + "px";//解説ボタンが三つあるうちの一つ
    elem[1].style.height = pageHeight + "px";
    elem[2].style.height = pageHeight + "px";
    // console.log("要素高さ" + elem[0].style.height);
};

window.addEventListener("load", myFunc, false);
window.addEventListener("resize", myFunc, false);

// ボタンがクリックされた時
buttonOpen0.addEventListener('click', ModalOpen0);
    function ModalOpen0() {
    modal0.style.display = 'flex';
    window.scroll({top: 810, behavior: 'smooth'});
}
// バツ印がクリックされた時
buttonClose0.addEventListener('click', ModalClose0);
    function ModalClose0() {
    modal0.style.display = 'none';
}
buttonClose0b.addEventListener('click', ModalClose0b);
    function ModalClose0b() {
    modal0.style.display = 'none';
}

// モーダルコンテンツ以外がクリックされた時
addEventListener('click', outsideClose0);
function outsideClose0(e) {
    if (e.target == modal0) {
        modal0.style.display = 'none';
    }
}



// ボタンがクリックされた時
buttonOpen1.addEventListener('click', ModalOpen1);
    function ModalOpen1() {
    modal1.style.display = 'flex';
    window.scroll({top: 840, behavior: 'smooth'});
}
// バツ印がクリックされた時
buttonClose1.addEventListener('click', ModalClose1);
    function ModalClose1() {
    modal1.style.display = 'none';
}
buttonClose1b.addEventListener('click', ModalClose1b);
    function ModalClose1b() {
    modal1.style.display = 'none';
}

// モーダルコンテンツ以外がクリックされた時
addEventListener('click', outsideClose1);
function outsideClose1(e) {
    if (e.target == modal1) {
        modal1.style.display = 'none';
    }
}


// ボタンがクリックされた時
buttonOpen2.addEventListener('click', ModalOpen2);
    function ModalOpen2() {
    modal2.style.display = 'flex';
    window.scroll({top: 980, behavior: 'smooth'});
}
// バツ印がクリックされた時
buttonClose2.addEventListener('click', ModalClose2);
    function ModalClose2() {
    modal2.style.display = 'none';
}
buttonClose2b.addEventListener('click', ModalClose2b);
    function ModalClose2b() {
    modal2.style.display = 'none';
}

// モーダルコンテンツ以外がクリックされた時
addEventListener('click', outsideClose2);
function outsideClose2(e) {
    if (e.target == modal2) {
        modal2.style.display = 'none';
    }
}