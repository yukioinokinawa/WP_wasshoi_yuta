<?php 
/*
Template Name: contact（カスタムテンプレートの名前）
*/
?>

<?php get_header(); ?>

    <main class="l-main">
        <div class="p-contact">
            <h1 class="c-title--page">CONTACT</h1>
            <section class="c-panel--main">
                <div class="c-panel--main__pc">
                    <p>わっしょいゆ〜たへの<br>
                        お仕事のご依頼について</p>
                </div>

                <div class="c-panel--main__mobile">
                    <p>お仕事の<br>
                        ご依頼について</p>
                </div>
            </section>
        </div>
        <article class="p-application-method ">

            <section>
                <h2 class="c-title--number">1 お問合わせ</h2>
                <div>
                    <p>お仕事のご依頼は随時受け付けております<br>
                        決まっている範囲で結構ですので詳細を下記のフォームよりご連絡ください<br>
                        わっしょいゆ〜たより直接ご返信します</p>
                </div>
                <div>
                    <p class="c-icon--arrow">▼</p>
                </div>
            </section>
            <section>
                <h2 class="c-title--number">2 打ち合わせ</h2>
                <div>
                    <p>ご依頼内容をもとに当日のパフォーマンスについて詳しくご相談させていただきます<br>
                        パフォーマーへのご依頼が初めてという場合もご安心ください<br>
                        ショーの内容をご提案することも可能です</p>
                </div>
                <div>
                    <p class="c-icon--arrow">▼</p>
                </div>
            </section>
            <section>
                <h2 class="c-title--number">3 当日</h2>
                <div>
                    <p>お約束の現場へ わっしょいゆ〜た がうかがいます</p>
                </div>
            </section>
            <img src="/imgs/about-page(sp).jpg" alt="わっしょいゆーた">
        </article>
        <article class="p-form">
            <section class="c-panel--main">
                <div class="c-panel--main__mobile">
                    <p>お問合わせ<br>
                        フォーム</p>
                </div>
            </section>
            <section class="c-contact-form">
                <form action="confirm.php" method="post">
                    <label>お名前<span>※</span></label><br>
                    <input type="text" name="name"><br>
                    <label>ご連絡先<span>※</span></label><br>
                    <input type="text" name="address"><br>
                    <label for="text">ご希望日時</label><br>
                    <input type="text" name="name"><br>
                    <label>ご希望の内容</label><br>
                    <input type="text" name="name"><br>
                    <label>その他<span>※</span></label><br>
                    <textarea name="comment"></textarea><br>
                    <button class="c-button--submit c-shadow" type=“submit>送信</button>
                </form>
            </section>
            <section class="c-panel--sub">
                <h3>プライバシーポリシー</h3>
                <p>一週間以上返信のない場合は送信エラーの可能性があります<br>
                    お手数ですがもう一度お問合せください<br>
                    お預かりした個人情報はお返事をさせていただく以外に
                    使用することはございません</p>
            </section>
        </article>
    </main>

<?php get_footer(); ?>