<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/webhojo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <header>
      <div class="header-container">
        <a href="https://ver-nine.com" class="top-page"></a>
      </div>
    </header>
    <section class="subsidy">
      <div class="subsidy-container">
        <p class="title first-p">補助金を使ったサイト制作について</p>
        <p class="content-p">弊社では小規模事業者補助金という「販売促進」の目的に対して降りる補助金を用いた制作が可能です。<a href="https://r2corona.jizokukahojokin.info/corona/" target="_blank">[詳しくはこちら]</a></p>
        <p class="content-p">販売促進の経費としてかかった額の3分の2が補助されます。その金額は最大50万円と定められておりますが、コロナ禍の現在では最大100万円まで増額されています。</p>
        <p class="example-p">例:120万円(150万円未満)のWebサイトを発注の場合</p>
        <div class="example-image1"></div>
        <p class="example-p">例:200万円(150万円以上)のWebサイトを発注の場合</p>
        <div class="example-image2"></div>
        <p class="title">弊社を通して補助金を利用するメリット</p>
        <p class="content-p">弊社では小企業診断士との連携により、審査通過率100%を実現しております。個人での申請の場合、審査通過率は約40%程度です。補助金制度のご利用の際は、ぜひ弊社にご相談ください。</p>
        <p class="title">ご注意</p>
        <p class="content-p last-p">・補助金支給の対象者が従業員5名以下に限ります。<br>・その他、お客様が補助金支給の対象の是非を<a href="https://r2corona.jizokukahojokin.info/corona/" target="_blank">公式サイト</a>を参照しご確認ください。</p>
      </div>
    </section>
  </body>
</html>
