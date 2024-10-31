// ハンバーガーメニュー
function toggleMenu() {
    document.body.classList.toggle("menu-open");
}

function closeMenu() {
    document.body.classList.remove("menu-open");
}

// キービジュアル
document.addEventListener("DOMContentLoaded", () => {
    const titleFcq = document.querySelector(".kv_title .title_fcq");
    const titleSpans = document.querySelectorAll(".kv_title h2 span");

    // `First Class Quality`を0.2秒遅らせてアニメーションさせる
    setTimeout(() => {
        if (titleFcq) {
            titleFcq.classList.add("show");
        }
    }, 0); // 初回は遅延なしで動作

    // h2のspanタグには順番に0.2秒ずつ遅延させて`show`クラスを追加
    titleSpans.forEach((span, index) => {
        setTimeout(() => {
            span.classList.add("show");
        }, (index + 1) * 200); // 0.2秒ずつ遅延
    });
});

// スクロールアニメーション
document.addEventListener("DOMContentLoaded", () => {
    const scrollAnimation = document.querySelectorAll(".fadeInRight, .fadeInUp, .fadeInUp-delay, .feature_flex ul .feature_item .navy, .fadeIn, .fadeIn-delay");

    function handleScroll() {
        scrollAnimation.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (elementPosition < windowHeight - 100) {
                element.classList.add("show");
            }
        });
    }

    window.addEventListener("scroll", handleScroll);

    // 初期ロード時にチェックして、すでに表示されている要素に対しても処理を適用
    handleScroll();
});

// jQuery(document).ready(function($){
//     $('.wpcf7 p').contents().unwrap();
//  });