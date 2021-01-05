<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="gT4-XhKo40qmhMSRKEBJ79lXUYkUkIldUSPbtHdurdc" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@beer_nomitai_y">
    <meta name="twitter:creator" content="@beer_nomitai_y">
    <meta name="twitter:title" content="時代のトレンドに沿ったスキルを提供するVer.0.9(バーナイン)">
    <meta name="twitter:description" content="世の中のきっかけをまだ見ぬ可能性をここに">
    <meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/img/smn.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/webjutaku.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php
      wp_enqueue_script('jquery');
      wp_enqueue_script('web-script',get_template_directory_uri() . '/webjutaku.js');
      wp_head();
    ?>
    <title>
      <?php
       if( !is_home() ){
         wp_title('-', true, 'right');
       }
       bloginfo('name');
       ?>
     </title>
  </head>
  <body>
    <div class="background-image"></div>
    <div class="adsenses">
      <div class="cancel-ad"><p>×</p></div>
      <a class="adsense1"></a>
      <a href="https://ver-nine.com/services/web/web-subsidy/" class="adsense2"></a>
    </div>
    <section class="header">
      <div class="container">
        <a href="https://ver-nine.com" class="top-page"></a>
      </div>
    </section>
    <section class="eyecatch">
      <div class="container eye-container">
        <?php if (!is_home()): ?>
          <div class="breadcrumbs">
            <?php if(function_exists('bcn_display')){
              bcn_display();
            }
            ?>
          </div>
        <?php endif; ?>
        <p class="title-p">知識０でも依頼できる<br><span class="title-st">“寄り添い型”</span><br>のWeb制作会社</p>
        <p class="title-desc">業界初。３つの返金保証。<br>無制限質問サポートで知識０でも安心。<br>初めての依頼でもリニューアルでも。<br>安心のWeb制作依頼。</p>
      </div>
    </section>
    <section class="what">
      <div class="section-top">
        <p class="each-section-title-back what-title">WAHT SORT OF</p>
        <p class="each-section-title-front">どんな制作会社・・？</p>
      </div>
      <div class="what-boxes">
        <div class="container what-box-flex">
          <div class="what-title-box">
            <p class="what-title-p">満足度<span class='s1'>96</span><span>%</span>だからこそできる<span class='s2'>保証の充実</span></p>
          </div>
          <div class="what-title-box">
            <p class="what-title-p">業界初の<span class='s1'>3</span>つの<span class='s2'>返金保証</span></p>
          </div>
          <div class="what-title-box">
            <p class="what-title-p">年間<span class='s1'>70</span>件以上の制作実績</p>
          </div>
          <div class="what-title-box">
            <p class="what-title-p">相談・コンサル料<span class='s1'>0</span>円</p>
          </div>
        </div>
      </div>
    </section>
    <section class="worries">
      <div class="section-top">
        <p class="each-section-title-back worries-title">WORRIES</p>
        <p class="each-section-title-front">こんな悩みはありませんか？</p>
      </div>
      <div class="container">
        <div class="worries-container">
            <div class="wo-circle">
              <div class="wo-box"><p class="wo-check">✔︎</p></div>
              <p class="wo-text">最近、営業の<br><span class='s3'>売上が安定しない</span>し<br><span class='s3'>契約率も落ちている</span></p>
            </div>
            <div class="wo-circle">
              <div class="wo-box"><p class="wo-check">✔︎</p></div>
              <p class="wo-text">今のサイトが<br>競合と比べると<br><span class='s3'>デザインも検索順位<br>もイマイチ</span></p>
            </div>
            <div class="wo-circle">
              <div class="wo-box"><p class="wo-check">✔︎</p></div>
              <p class="wo-text">IT導入したいけど<br><span class='s3'>セキュリティ面は<br>しっかり対策したい</span></p>
            </div>
            <div class="wo-circle wo-ciecle-semilast">
              <div class="wo-box"><p class="wo-check">✔︎</p></div>
              <p class="wo-text">リスクやコストは<br>最小限に抑えたいが<br><span class='s3'>質もしっかり<br>担保したい</span></p>
            </div>
            <div class="wo-circle wo-ciecle-last">
              <div class="wo-box"><p class="wo-check">✔︎</p></div>
              <p class="wo-text">最近パッタリと<br><span class='s3'>お問い合わせが<br>取れなくなった</span></p>
            </div>
        </div>
        <div class="triangle-down"></div>
        <p class="worries-essence">ホームページの制作をお願いしたい<br>けど何もわからないし不安..。</p>
      </div>
    </section>
    <section class="points">
      <div class="point-title">
        <p class="point-title-p">制作会社Ver.0.9だからできる！</p>
      </div>
      <div class="point-reason">
        <p class="point-desc-a"><span class=s5>！</span>だから選ばれる<span class="s5 s5-left">！</span></p>
        <p class="point-desc-b">制作会社Ver.0.9<br><span class="s3 s1">6つ</span><span class="s3">のポイント</span></p>
      </div>
      <div class="container point-container">
        <div class="box2">
          <p class="number">01</p>
          <p class="sentence">オンライン集客で<br><span class="s3">安定した売り上げ獲得<br>＆営業部の契約率up</span></p>
          <div class="point-logo point-logo1"></div>
          <div class="triangle-rightbottom"></div>
        </div>
        <div class="box2">
          <p class="number">02</p>
          <p class="sentence">内部<span class="s3">SEO対策万全</span>＆<br><span class="s3">オリジナルデザイン</span>サイト</p>
          <div class="point-logo point-logo2"></div>
          <div class="triangle-rightbottom"></div>
        </div>
        <div class="box2">
          <p class="number">03</p>
          <p class="sentence"><span class="s3">法律＆ハッキング対策<br>万全</span>のサイトをご提供</p>
          <div class="point-logo point-logo3"></div>
          <div class="triangle-rightbottom"></div>
        </div>
        <div class="box2">
          <p class="number">04</p>
          <p class="sentence">WEB制作会社ならではの<br><span class="s3">クオリティ</span>と<span class="s3">３つの保証</span>で<br>＆低リスク＆ハイリターン</p>
          <div class="point-logo point-logo4"></div>
          <div class="triangle-rightbottom"></div>
        </div>
        <div class="box2">
          <p class="number">05</p>
          <p class="sentence">マーケティング設計にも<br>こだわった<span class="s3">成果の出る<br>サイト</span>をご提供</p>
          <div class="point-logo point-logo5"></div>
          <div class="triangle-rightbottom"></div>
        </div>
        <div class="box2">
          <p class="number">06</p>
          <p class="sentence">親切丁寧なヒアリング＆<br>完全無制限の質問サービスで<br><span class="s3">知識がなくても安心</span></p>
          <div class="point-logo point-logo6"></div>
          <div class="triangle-rightbottom"></div>
        </div>
      </div>
    </section>
    <section class="warrantee">
      <div class="section-top warrantee-top">
        <p class="each-section-title-back warrantee-title">WARRANTEE</p>
        <p class="each-section-title-front">返金保証</p>
      </div>
      <div class="warrantee-green">
        <div class="container">
          <p class="wa-title-p">業界初の<span class='s1 s3'>3</span>つの<span class='s3 s2'>返金保証</span></p>
          <div class="wa-line"></div>
          <p class="wa-desc">弊社では以下の事例の場合に、<br>半額返金保証を設けております。</p>
          <div class="wa-boxes">
            <div class="wa-box">
              <div class="title-box">
                <p>検索順位</p>
              </div>
              <p class="wa-number">01</p>
              <p class="wa-content">納品から半年以内にお客様の社名や商品名が<span class="s3">検索結果の1ページ目にヒットしない場合</span></p>
            </div>
            <div class="wa-box">
              <div class="title-box">
                <p>デザイン</p>
              </div>
              <p class="wa-number">02</p>
              <p class="wa-content">お客様がWebサイトの<span class="s3">デザインに満足されなかった場合</span></p>
            </div>
            <div class="wa-box wa-box-last-child">
              <div class="title-box">
                <p>集客力</p>
              </div>
              <p class="wa-number">03</p>
              <p class="wa-content">納品から半年以内に<span class="s3">セッション数およびコンバージョン率が改修前後で変化しなかった場合</span></p>
            </div>
          </div>
          <p class="wa-attention">※それぞれ半額返金補償には条件がございますので、お手数ですがお問い合わせください。</p>
        </div>
      </div>
    </section>
    <section class="inquiry-green">
      <div class="inquiry-box">
        <p class="p-top">ご相談無料！</p>
        <p class="p-bottom">どうぞお気軽にお問い合わせください。</p>
        <a href="#contact" class="inquiry-btn">
          <p>無料相談はこちら</p>
        </a>
      </div>
    </section>
    <section class="service-black">
      <div class="container">
        <p class="s-top">提供サービス</p>
        <div class="se-line"></div>
        <p class="s-main">安全対策をバッチリした<br><span class="s6">効果の出る</span>HP制作</p>
        <p class="s-bottom">あらゆる<span class="s2">リスクを解消する</span>WEBの導入、見直しをご提案。</p>
      </div>
    </section>
    <section class="lineup">
      <div class="section-top lineup-top">
        <p class="each-section-title-back lineup-title">LINEUP</p>
        <p class="each-section-title-front">価格・ラインナップ</p>
      </div>
      <div class="lineup-each-title">
        <p>名刺代わりのHP制作</p>
      </div>
      <div class="lineup-green">
        <div class="container">
          <div class="lineup-row">
            <div class="section-circle">
              <p>Plan<span class=s8>A</span></p>
            </div>
            <div class="lineup-subtitle">
              <p class="li-each-title">安く即納品！テンプレートを使用したHP制作</p>
              <p class="li-each-desc">Wixで作るホームページ。</p>
            </div>
            </div>
            <div class="lineup-table">
              <div class="lineup-table-inline">
                <div class="lineup-table-left">
                  <div class="lineup-ele lineup-ele-white">
                    <p>企画構成</p>
                  </div>
                  <div class="lineup-ele lineup-ele-green">
                    <p>デザイン・レイアウト</p>
                  </div>
                  <div class="lineup-ele lineup-ele-white">
                    <p>コンテンツ準備</p>
                  </div>
                  <div class="lineup-ele lineup-ele-green">
                    <p>SEO対策</p>
                  </div>
                  <div class="lineup-ele lineup-ele-white">
                    <p>各種機能追加</p>
                  </div>
                </div>
                <div class="lineup-table-right">
                  <p>一式<br><span class="fee-yen">¥</span><span class="fee">50000~</span></p>
                </div>
              </div>
            </div>
            <ul class="lineup-attention">
              <li>価格はサイトの規模・追加するビジネス機能により変動します</li>
              <li>お客様自身でWixの登録が必要です。</li>
            </ul>
        </div>
      </div>
      <div class="lineup-each-title">
        <p>ペライチのLP制作</p>
      </div>
      <div class="lineup-green">
        <div class="container">
          <div class="lineup-row">
            <div class="section-circle">
              <p>Plan<span class=s8>B</span></p>
            </div>
            <div class="lineup-subtitle">
              <p class="li-each-title">名刺代わりに最適!オリジナルデザインのページ一枚LP制作</p>
              <p class="li-each-desc">UI/UXにもこだ割ったオリジナルサイト。</p>
            </div>
          </div>
          <div class="lineup-table">
            <div class="lineup-table-inline">
              <div class="lineup-table-left">
                <div class="lineup-ele lineup-ele-white">
                  <p>企画構成</p>
                </div>
                <div class="lineup-ele lineup-ele-green">
                  <p>デザイン・コーディング</p>
                </div>
                <div class="lineup-ele lineup-ele-white">
                  <p>コンテンツ準備</p>
                </div>
                <div class="lineup-ele lineup-ele-green">
                  <p>CMS導入</p>
                </div>
                <div class="lineup-ele lineup-ele-white">
                  <p>各種機能追加</p>
                </div>
              </div>
              <div class="lineup-table-right">
                <p>一式<br><span class="fee-yen">¥</span><span class="fee">200000~</span></p>
              </div>
            </div>
          </div>
          <ul class="lineup-attention">
            <li>ページ数はメインページのみの1枚となります。</li>
            <li>2枚以上のページ数をお求めの場合はPlanCにご相談ください。</li>
            <li>外部サービスにてサーバー・ドメインの取得が必要です。(代行可)</li>
            <li>CMSにはWordPressを用います。</li>
          </ul>
        </div>
      </div>
      <div class="lineup-each-title">
        <p>パンフレット代わりのHP制作</p>
      </div>
      <div class="lineup-green">
        <div class="container">
          <div class="lineup-row">
            <div class="section-circle">
              <p>Plan<span class=s8>C</span></p>
            </div>
            <div class="lineup-subtitle">
              <p class="li-each-title">パンフレット代わりに最適!信用度向上オリジナルHP制作</p>
              <p class="li-each-desc">UI/UXにもこだわったオリジナルサイト。</p>
            </div>
          </div>
          <div class="lineup-table">
            <div class="lineup-table-inline">
              <div class="lineup-table-left">
                <div class="lineup-ele lineup-ele-white">
                  <p>企画設計</p>
                </div>
                <div class="lineup-ele lineup-ele-green">
                  <p>デザイン・コーディング</p>
                </div>
                <div class="lineup-ele lineup-ele-white">
                  <p>コンテンツ準備</p>
                </div>
                <div class="lineup-ele lineup-ele-green">
                  <p>CMS導入</p>
                </div>
                <div class="lineup-ele lineup-ele-white">
                  <p>各種機能追加</p>
                </div>
              </div>
              <div class="lineup-table-right">
                <p>一式<br><span class="fee-yen">¥</span><span class="fee">300000~</span></p>
              </div>
            </div>
          </div>
          <ul class="lineup-attention">
            <li>ページ数はメインページを含め10ページ以下となります。</li>
            <li>11枚以上のページ数をお求めの場合はPlanDにご相談ください。</li>
            <li>外部サービスにてサーバー・ドメインの取得が必要です。(代行可)</li>
            <li>CMSにはWordPressを用います。</li>
          </ul>
        </div>
      </div>
      <div class="lineup-each-title">
        <p>集客力のあるHP制作</p>
      </div>
      <div class="lineup-green">
        <div class="container">
          <div class="lineup-row">
            <div class="section-circle">
              <p>Plan<span class=s8>D</span></p>
            </div>
            <div class="lineup-subtitle">
              <p class="li-each-title">サイト設計やSEOまで力を入れたオリジナルサイト制作</p>
              <p class="li-each-desc">マーケティング設計まで力を入れて心理効果もバッチリ。</p>
            </div>
          </div>
          <div class="lineup-table">
            <div class="lineup-table-inline">
              <div class="lineup-table-left">
                <div class="lineup-ele lineup-ele-white">
                  <p>企画設計</p>
                </div>
                <div class="lineup-ele lineup-ele-green">
                  <p>制作工数</p>
                </div>
                <div class="lineup-ele lineup-ele-white">
                  <p>マーケティング</p>
                </div>
                <div class="lineup-ele lineup-ele-green">
                  <p>CMS導入</p>
                </div>
                <div class="lineup-ele lineup-ele-white">
                  <p>各種機能追加</p>
                </div>
              </div>
              <div class="lineup-table-right">
                <p>一式<br><span class="fee-yen">¥</span><span class="fee">800000~</span></p>
              </div>
            </div>
          </div>
          <ul class="lineup-attention">
            <li>ページ数はメインページを含め20ページ以下となります。</li>
            <li>外部サービスにてサーバー・ドメインの取得が必要です。(代行可)</li>
            <li>CMSにはWordPressを用います。</li>
            <li>マーケティング設計は集客の向上を保証するものではございません</li>
          </ul>
        </div>
      </div>
      <div class="lineup-each-title">
        <p>Webアプリケーション制作</p>
      </div>
      <div class="lineup-green">
        <div class="container">
          <div class="lineup-row">
            <div class="section-circle">
              <p>Plan<span class=s8>E</span></p>
            </div>
            <div class="lineup-subtitle">
              <p class="li-each-title">コロナ禍で必須の注文・予約・ECシステムを持つサイト制作</p>
              <p class="li-each-desc">機能の組み合わせ・デザイン自由<br>クラウドで安定したWebシステムを提供</p>
            </div>
          </div>
          <div class="lineup-table">
            <div class="lineup-table-inline">
              <div class="lineup-table-left">
                <div class="lineup-ele lineup-ele-white">
                  <p>企画設計</p>
                </div>
                <div class="lineup-ele lineup-ele-green">
                  <p>制作工数</p>
                </div>
                <div class="lineup-ele lineup-ele-white">
                  <p>システム構築</p>
                </div>
                <div class="lineup-ele lineup-ele-green">
                  <p>サーバー構築</p>
                </div>
                <div class="lineup-ele lineup-ele-white">
                  <p>マーケティング</p>
                </div>
              </div>
              <div class="lineup-table-right">
                <p>一式<br><span class="fee-yen">¥</span><span class="fee">600000~</span></p>
              </div>
            </div>
          </div>
          <ul class="lineup-attention">
            <li>価格は構築するシステムの内容・サイト規模により変動します。</li>
            <li>お客様自身でAmazon Web Serviceの登録が必要です。</li>
            <li>別途サイト規模に応じたサイト維持費(AWS利用料)がかかります。</li>
            <li>マーケティング設計の組み込みも可能です。</li>
          </ul>
        </div>
      </div>
      <div class="option">
        <div class="container">
          <p class="option-title">オプション</p>
          <table border="1" width="100%" class="option-table">
            <tr align="center">
              <td>下層ページ追加</td>
              <td>¥5,000/ページ</td>
            </tr>
            <tr align="center">
              <td>アニメーション追加</td>
              <td>¥5,000~/工数</td>
            </tr>
            <tr align="center">
              <td>素材代行（ライティング・画像）</td>
              <td>¥1,000~</td>
            </tr>
            <tr align="center">
              <td>サーバー・ドメイン取得代行</td>
              <td>¥3,000</td>
            </tr>
            <tr align="center">
              <td>記事コンテンツ作成（自社ブログ）</td>
              <td>¥5/文字</td>
            </tr>
            <tr align="center">
              <td>映像制作</td>
              <td>¥10,000~</td>
            </tr>
            <tr align="center">
              <td>ロゴ・アイコン作成</td>
              <td>¥10,000~</td>
            </tr>
            <tr align="center">
              <td>CMS導入</td>
              <td>¥50,000</td>
            </tr>
            <tr align="center">
              <td>各種システム・機能導入</td>
              <td>要相談</td>
            </tr>
          </table>
        </div>
      </div>
    </section>
    <section class="support">
      <div class="section-top support-top">
        <p class="each-section-title-back support-title">SUPPORT</p>
        <p class="each-section-title-front">サポート</p>
      </div>
      <div class="support-green">
        <div class="container">
          <div class="support-container">
              <div class="su-circle">
                <p class="su-text">納期保証アリ</p>
              </div>
              <div class="su-circle">
                <p class="su-text">サイトの品質に関わる<br>3つの保証サービス</p>
              </div>
              <div class="su-circle su-ciecle-last">
                <p class="su-text">無制限かつ無期限の<br>質問対応サービス</p>
              </div>
          </div>
        </div>
      </div>
    </section>
    <section class="inquiry-green">
      <div class="inquiry-box">
        <p class="p-top">ご相談無料！</p>
        <p class="p-bottom">どうぞお気軽にお問い合わせください。</p>
        <a href="#contact" class="inquiry-btn">
          <p>無料相談はこちら</p>
        </a>
      </div>
    </section>
    <section class="portfolio">
      <div class="section-top portfolio-top">
        <p class="each-section-title-back portfolio-title">PORTFOLIO</p>
        <p class="each-section-title-front">実例紹介</p>
      </div>
      <div class="portfolio-desc">
        <p>月間PV数500→10000！予約でいっぱいの名店になったケース</p>
      </div>
      <div class="container portfolio-container">
        <a href="#" class="portfolio-link">リンク: https://www.eastone.co.jp/erectric-sheep-bar/</a>
        <p class="portfolio-price">制作費:110 万円</p>
        <div class="portfolio-img"></div>
        <div class="portfolio-text-wrapper">
          <div class="container portfolio-text-container">
            <p>　すすきのの中心交差点沿いのビルにあるバー。当時のサイトは簡易的なものでお知らせ情報の掲載がメインであった。セッション数は500~600pv/月で、その立地の良さやロゴの雰囲気から高級店というイメージを持たれ、客不足に悩んでいた。</p>
            <p>　そこでオンライン集客の対策を選択した当クライアントであるが、リニューアルすることにより人々のお店に対する印象をガラリと変えることに成功したのである。<br>　前述のような負のイメージはサイトにより払拭され、サイトの閲覧数はリニューアル半年後には約10000pv/月にのぼった。</p>
            <p>　この実例の成功の鍵は、プロデュースの方法と非常にこだわった店舗そのものにあると考察できる。その凝った雰囲気のお店に準じたデザインは、実際にお店に来たときの感覚を想像しやすく、お店選びの失敗に対する心配もない。こういったUser Experienceは一般の人が投稿する写真が載せられている情報だけを掲載した食べログのようなサービス、デザインに独自性を持たせられない Wix 等のサービスでは表現できない。</p>
            <p>　こだわった店舗がこだわったデザイン・写真による刺激的な User Experience を生み出し、結果的に強力な集客効果を実現したのである。</p>
          </div>
        </div>
      </div>
      <div class="portfolio-desc">
        <p>ホームページにおける新しい価値観で成功したケース</p>
      </div>
      <div class="container portfolio-container">
        <a class="portfolio-link">リンク: https://www.miyachinokogiri.com</a>
        <p class="portfolio-price">制作費:140 万円</p>
        <div class="portfolio-img portfolio-img2"></div>
        <div class="portfolio-text-wrapper">
          <div class="container portfolio-text-container">
            <p>　ノコギリ専門販売・製作・職人育成店舗。閲覧数が伸び悩み、弊社に相談を持ちかけそのまま契約し2度目のリニューアル。</p>
            <p>　マーケティングを考慮したヒアリングシートをもとにその問題点を洗い出し、解決策を導いた。<br>　複雑でUser Interfaceを考えられていないデザインも全て一掃し、根全リニューアルとした。<br>　その結果100pv/月だったものが、リニューアル4ヶ月後で1150pv/月となり、伸び悩んでいたCV率も約5倍の2.8~3.0%を確保した。</p>
            <p>　この実例の成功の鍵は、単純なマーケティングである。弊社ではマーケティングを考慮したヒアリングシートによって、お客様の目的に最短ルートで直結するような提案をすることができる。<br>　今回のケースでは「従来のホームページがあるだけで差別化できる」「デザインをモダンにすれば大丈夫」という古い思いこみを捨てて、最新のホームページのあり方に沿った制作を実現した。これは、市場の技術が駆け出しのクラウドソーシングでは難しいし、実は、一般的なウェブ制作会社ですらもマーケティングに疎い制作を行うケースが散見される。</p>
            <p>　当クライアントは、「インターネットとそのユーザーは、常に変化をしている。その状況をしっかり把握して、戦略的にホームページ制作をできる会社を選び抜くことがとても大事だ」と話していた。</p>
          </div>
        </div>
      </div>
    </section>
    <section class="review">
      <div class="container">
        <p class="review-title">お客様の声</p>
        <div class="review-line"></div>
        <div class="each-review">
          <div class="re-flex">
            <p class="re-number">#1</p>
            <p class="re-desc">売上をとるためのウェブサイトを手に入れることができました。</p>
          </div>
          <p class="re-showmore">(一部抜粋)</p>
          <div class="review-line"></div>
        </div>
        <div class="each-review">
          <div class="re-flex">
            <p class="re-number">#2</p>
            <p class="re-desc">コロナ型補助金のおかげで大変お得に料理注文アプリを発注できました。</p>
          </div>
          <p class="re-showmore">(一部抜粋)</p>
          <div class="review-line"></div>
        </div>
        <div class="each-review">
          <div class="re-flex">
            <p class="re-number">#3</p>
            <p class="re-desc">他社による見積もりで、費用困っていたところ、サブスクリプション形式での作成をしているバーナインさんに興味を持ちました</p>
          </div>
          <p class="re-showmore"></p>
          <div class="review-line"></div>
        </div>
        <div class="each-review">
          <div class="re-flex">
            <p class="re-number">#4</p>
            <p class="re-desc">唯一にこだわるには、やはりプロの力が必要なのだと感じております。</p>
          </div>
          <p class="re-showmore">(一部抜粋)</p>
          <div class="review-line"></div>
        </div>
        <div class="each-review">
          <div class="re-flex">
            <p class="re-number">#5</p>
            <p class="re-desc">納品までとにかく早かったです！短期ビジネスということもあり助かりました。</p>
          </div>
          <p class="re-showmore">(一部抜粋)</p>
          <div class="review-line"></div>
        </div>
      </div>
    </section>
    <section class="inquiry-green">
      <div class="inquiry-box">
        <p class="p-top">ご相談無料！</p>
        <p class="p-bottom">どうぞお気軽にお問い合わせください。</p>
        <a href="#contact" class="inquiry-btn">
          <p>無料相談はこちら</p>
        </a>
      </div>
    </section>
    <section class="ad-flex">
      <a class="subscript"></a>
      <a href="https://ver-nine.com/services/web/web-subsidy/" class="covid-discount"></a>
    </section>
    <section class="orderflow">
      <div class="section-top flow-top">
        <p class="each-section-title-back flow-title">ORDERFLOW</p>
        <p class="each-section-title-front">制作の流れ</p>
      </div>
      <div class="container flow-container">
        <div class="flow-content">
          <div class="container">
              <p class="flow-phase">ご相談・ご契約フェーズ</p>
              <div class="flow-line"></div>
              <div class="each-flow-wrapper should-be-200px">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>01</p>
                    </div>
                  </div>
                  <p class="flow-each-p">お問い合わせ</p>
                </div>
                <p class="flow-each-section-p">本ページのコンタクトフォームおよび無料相談お申し込みフォームよりお問い合わせください。相談やお見積もりのみでも可能です。<br>まずはお気軽にご連絡ください。</p>
                <div class="baymax">
                  <div class="flow-circle"></div>
                  <div class="flow-stick"></div>
                  <div class="flow-circle"></div>
                </div>
              </div>
              <div class="each-flow-wrapper should-be-200px">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>02</p>
                    </div>
                  </div>
                  <p class="flow-each-p">ヒアリング、面談</p>
                </div>
                <p class="flow-each-section-p">集客を考慮したヒアリングシートによって、お客様のご予算に応じた、目的に最短ルートで直結するようなご提案をさせていただきます。</p>
                <div class="baymax">
                  <div class="flow-circle"></div>
                  <div class="flow-stick"></div>
                  <div class="flow-circle"></div>
                </div>
              </div>
              <div class="each-flow-wrapper should-be-200px">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>03</p>
                    </div>
                  </div>
                  <p class="flow-each-p">お見積もり、ご提案</p>
                </div>
                <p class="flow-each-section-p"></p>
                <div class="baymax">
                  <div class="flow-circle"></div>
                  <div class="flow-stick"></div>
                  <div class="flow-circle"></div>
                </div>
              </div>
              <div class="each-flow-wrapper">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>04</p>
                    </div>
                  </div>
                  <p class="flow-each-p">ご契約・お支払い</p>
                </div>
                <p class="flow-each-section-p">ご契約後、料金を返金することは致しかねます。</p>
              </div>
              <p class="flow-phase">制作フェーズ</p>
              <div class="flow-line"></div>
              <div class="each-flow-wrapper should-be-200px">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>05</p>
                    </div>
                  </div>
                  <p class="flow-each-p">ワイヤーフレーム作成</p>
                </div>
                <p class="flow-each-section-p">サイトデザインの前段階である、大まかな構成を決定します。</p>
                <div class="baymax">
                  <div class="flow-circle"></div>
                  <div class="flow-stick"></div>
                  <div class="flow-circle"></div>
                </div>
              </div>
              <div class="each-flow-wrapper should-be-200px">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>06</p>
                    </div>
                  </div>
                  <p class="flow-each-p">デザイン作成</p>
                </div>
                <p class="flow-each-section-p">全てのページにおける、スマホビュー・PCビューのデザインを作成します。参考にしたいサイトなどがございましたらご提示いただけるとスムーズです。</p>
                <div class="baymax">
                  <div class="flow-circle"></div>
                  <div class="flow-stick"></div>
                  <div class="flow-circle"></div>
                </div>
              </div>
              <div class="each-flow-wrapper should-be-200px">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>07</p>
                    </div>
                  </div>
                  <p class="flow-each-p">コーディング作業</p>
                </div>
                <p class="flow-each-section-p"></p>
                <div class="baymax">
                  <div class="flow-circle"></div>
                  <div class="flow-stick"></div>
                  <div class="flow-circle"></div>
                </div>
              </div>
              <div class="each-flow-wrapper">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>08</p>
                    </div>
                  </div>
                  <p class="flow-each-p">CMS・システム構築</p>
                </div>
                <p class="flow-each-section-p"></p>
              </div>
              <p class="flow-phase">チェック・公開フェーズ</p>
              <div class="flow-line"></div>
              <div class="each-flow-wrapper should-be-200px">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>09</p>
                    </div>
                  </div>
                  <p class="flow-each-p">バグ・エラーチェック</p>
                </div>
                <p class="flow-each-section-p">お客様による最終フィードバックも一緒に行います。</p>
                <div class="baymax">
                  <div class="flow-circle"></div>
                  <div class="flow-stick"></div>
                  <div class="flow-circle"></div>
                </div>
              </div>
              <div class="each-flow-wrapper">
                <div class="flow-each-section">
                  <div class="flow-number-obj">
                    <div class="fno-flow">
                      <p>FLOW</p>
                    </div>
                    <div class="fno-num">
                      <p>10</p>
                    </div>
                  </div>
                  <p class="flow-each-p">納品</p>
                </div>
              </div>
            </div>
          </div>
          <div class="flowattention-content">
            <div class="container">
              <p class="flowattention-title">制作に関する注意事項</p>
              <ul class="fa-ul">
                <li class="fa-list">制作作業はご依頼の確約と料金のお支払いの確認ができて以降にのみ開始いたします。</li>
                <li class="fa-list">コーディング作業以降のデザインや仕様の変更は別途料金が発生する場合がございます。</li>
                <li class="fa-list">サーバーやドメインは外部サービスより手配いたします。取得代行に際し、月額使用料引き落としのためのお客様の口座情報等をお伺いする必要がございます。</li>
                <li class="fa-list">制作に関するやりとりは原則メール・zoom・面会(東京都内に限る)とさせていただきます。<br>また、デザインの提案など画面共有が必要な場合、担当エンジニアとのzoom会議、または面会(東京都内に限る)によってやりとりさせていただきます。</li>
                <li class="fa-list">制作期間中、お客様にもチェック作業などの工数が発生します。あらかじめスケジュールの確保をお願いいたします。</li>
              </ul>
              <p class="fa-list-last">その他ご不明な点がございましたらお気軽にご相談ください。</p>
            </div>
          </div>
        </div>
    </section>
    <section class="faq">
      <div class="section-top faq-top">
        <p class="each-section-title-back faq-title">FAQ</p>
        <p class="each-section-title-front">よくある質問</p>
      </div>
      <div class="faq-content">
        <div class="container faq-container">
          <div class="each-faq">
            <p class="faq-number">01</p>
            <div class="container">
              <p class="faq-question">Q.納期について教えてください。</p>
              <p class="faq-ans">A.制作に要する期間は約2週間から数ヶ月間程度です。プランや補助金申請の有無によって納期は大幅に変化しますので、詳しくはお問い合わせください。</p>
            </div>
          </div>
          <div class="each-faq">
            <p class="faq-number">02</p>
            <div class="container">
              <p class="faq-question">Q.どのプランで相談すれば良いかわかりません</p>
              <p class="faq-ans">A.無料相談にてお客様のご予算に応じた目的に最短ルートで直結するようなプランをこちらから提案させていただきます。<br>集客効果を研究し作成した弊社オリジナルのヒアリングシートを用いて面談させていただきますので、ITの知識がない場合でもご安心いただけます。</p>
            </div>
          </div>
          <div class="each-faq">
            <p class="faq-number">03</p>
            <div class="container">
              <p class="faq-question">Q.予約・注文・ECサイト以外のWebアプリの発注を検討しています</p>
              <p class="faq-ans">A.無料相談にてどのような目的でWebアプリを発注するかをお伺いいたします。その解決策として最適なwebアプリの機能や仕様を柔軟に提案させていただきます。</p>
            </div>
          </div>
          <div class="each-faq">
            <p class="faq-number">04</p>
            <div class="container">
              <p class="faq-question">Q.もう少し実績が見たいです</p>
              <p class="faq-ans">A.弊社実績をまとめた電子ファイルを用意しております。どうぞお気軽にお求めください。</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <div class="container">
        <p class="contact-title">CONTACT</p>
        <p class="contact-desc1">お問い合わせは以下のフォームにて<br class="s-br">お気軽にご相談ください。</p>
        <p class="contact-desc2">「お問い合わせ内容」のチェック欄にて、<br class="s-br">お客様のお問い合わせの目的に当てはまる項目をご選択ください。<br class="s-br">1営業日以内にこちらからメールにてご案内いたします。</p>
        <?php echo do_shortcode('[contact-form-7 id="226" title="無題"]'); ?>
      </div>
    </section>
    <?php wp_footer(); ?>
  </body>
</html>
