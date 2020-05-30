<? 
include "controls/funcao.php";

if(strlen($_POST['nome']))
{
    if(sendMail($_POST['email'],'contact@bitzyon.com', $_POST['mensagem'], 'Contact Form'))
    {
        echo "Your message has been sent successfully!";
    }
    else
    {
        echo "There was an error sending";
    }
    echo "<br><a href='index.php'>Come back</a>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>BITZYON - Official</title>
  <meta charset="iso-8859-1">
  <meta name="description" content="An ERC20 token (Ethereum) that aims to
tokenization of a digital asset">
  <meta name="author" content="BitZyon">
  <meta name='og:image' content='img/logos/padrao.png'>
  <link rel="shortcut icon" type="image/x-icon" href="img/logos/padrao.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Bootstrap CSS-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!-- Font-Awesome -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

  <!-- Icomoon -->
  <link rel="stylesheet" type="text/css" href="css/icomoon.css">

  <!-- Slider -->
  <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
  <link rel="stylesheet" type="text/css" href="css/slider.css">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">

  <!-- Color Switcher -->
  <link rel="stylesheet" type="text/css" href="css/switcher.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.css">

  <!-- Main Styles -->
  <link rel="stylesheet" type="text/css" href="css/default.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css" id="colors">

  <!-- Fonts Google -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

</head>
<body>


<!-- Preloader Start-->
<div id="preloader">
  <div class="row loader">
    <div class="loader-icon"><img src="img/logos/vermelho_chumbo.png" class="main-logo" alt="logo" id="main_logo"></div>
  </div>
</div>
<!-- Preloader End -->


<!-- Top-Bar START -->
<div id="top-bar" class="hidden-sm-down">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-12">
        <div class="top-bar-welcome">
          <ul>
            <li><spam style="color:#d21e2b">Contract:</spam> <a href="https://etherscan.io/token/0x5d9b9f6eeaeebc46fdfa0c1041e929834b15c03a" target="_blank" style="color:#fff">0x5d9b9f6eeaeebc46fdfa0c1041e929834b15c03a</a></li>
          </ul>
        </div>
        <div class="top-bar-info">
          <ul>
            <li><i class="fa fa-envelope"></i><a href="mailto:contact@bitzyon.com" style="color:#fff">contact@bitzyon.com</a>
            <li>
          </ul>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <ul class="social-icons hidden-md-down">
          <li><a href="https://twitter.com/BitZyonOfficial" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://t.me/BitZyon" target="_blank"><i class="fa fa-paper-plane"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- Top-Bar END -->


<!-- Navbar START -->
<header>
  <nav id="navigation4" class="container navigation">
    <div class="nav-header">
      <a class="nav-brand" href="index.php">
            <img src="img/logos/logo_padrao.png" class="main-logo" alt="logo" id="main_logo" style="height:100px">
      </a>
      <div class="nav-toggle"></div>
    </div>
    <div class="nav-menus-wrapper">
      <ul class="nav-menu align-to-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#pre">PRE-SALE</a></li>
        <li><a href="#wallet">WALLETS</a></li>
        <li><a href="#exchange">EXCHANGES</a>
            <div class="megamenu-panel">
            <div class="megamenu-lists">
              <ul class="megamenu-list list-col-4">
                <li class="megamenu-list-title"><a><h4><img src="img/corretoras/crex24.png" class="main-logo" style="width:40px;height:40px"> CREX24</h4></a></li>
                <li><a href="#" target="_blank">COMING SOON</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li><a href="#team">TEAM</a></li>
        <li><a href="#road">ROADMAP</a></li>
        <li><a href="#">WHITEPAPER</a>
          <div class="megamenu-panel">
            <div class="megamenu-lists">
              <ul class="megamenu-list list-col-3">
                <li class="megamenu-list-title"><a href="#"><img src="img/lang/pt-br.png" class="main-logo" style="width:25px;height:25px"> PORTUGUESE</a></li>
                <li><a href="docs/White_Paper_v1.0_PT-BR.pdf" target="_blank">WHITEPAPER-PT-BR</a></li>
              </ul>
              <ul class="megamenu-list list-col-3">
                <li class="megamenu-list-title"><a href="#"><img src="img/lang/en.png" class="main-logo" style="width:25px;height:25px"> ENGLISH</a></li>
                <li><a href="docs/White_Paper_v1.0_EN.pdf" target="_blank">WHITEPAPER-EN</a></li>
              </ul>
              <ul class="megamenu-list list-col-3">
                <li class="megamenu-list-title"><a href="#"><img src="img/lang/es.png" class="main-logo" style="width:25px;height:25px"> Spanish</a></li>
                <li><a href="docs/White_Paper_v1.0_ES.pdf" target="_blank">WHITEPAPER-ES</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li><a href="EN.php"><img src="img/lang/en.png" class="main-logo" style="width:40px;height:40px"> Inglês</a>
            <ul class="nav-dropdown">
            <li><a href="PT-BR.php"><img src="img/lang/pt-br.png" class="main-logo" style="width:40px;height:40px"> Português</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Navbar END -->


<!-- Slider START -->
<div class="swiper-main-slider-fade swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide" style="background-image:url(img/bgs/countdown-bg.jpg);">
        <div class="container">
            <div class="slider-content center-holder">
                <h2 class="animated fadeInDown">
                    WELCOME TO
                </h2>
                <h2 class="animated fadeInDown">
                    <img src="img/logos/logo_padrao.png" class="main-logo" alt="logo" id="main_logo" style="max-width:320px">
                </h2>
            </div>
        </div>
    </div>
    <!-- Slide 1 Start -->
    <div class="swiper-slide" style="background-image:url(img/bgs/bg_1.png);">
      <!-- <div class="medium-overlay"></div> -->
    <div id="particles-js-red"></div>
      <div class="container">
        <div class="slider-content left-holder">
          <h2 class="animated fadeInDown" style="color:#fff">
            An ERC20 token (Ethereum) <br>
            aimed at tokenization <br>
            of a digital asset
          </h2>
          <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
              <p class="animated fadeInDown">
                We seek the tokenization of a digital asset, pre-developed through the sale of the BitZyon token.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 1 End -->

    <!-- Slide 2 Start -->
    <div class="swiper-slide" style="background-image:url(img/bgs/bg_2.png);">
    <div id="particles-js-blue"></div>
      <div class="container">
        <div class="slider-content left-holder">
          <h2 class="animated fadeInDown" style="color:#d21e2b">
            Invest in BitZyon today and <br> guarantee your participation
          </h2>
          <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
              <p class="animated fadeInDown">
                holders of BitZyon tokens will be entitled to a 20% share of the total supply of the BitZyon cryptocurrency, which will be implemented on the blockchain network in the near future. 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 2 End -->

    <!-- Slide 3 Start -->
    <div class="swiper-slide" style="background-image:url(img/bgs/bg_3.png);">
    <div id="particles-js-silver"></div>
      <div class="container">
        <div class="slider-content left-holder">
          <h2 class="animated fadeInDown" style="color:#1e6cd2">
            BitZyon will be a digital asset <br> traded on Blockchain
          </h2>
          <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
              <p class="animated fadeInDown">
                The blockchain allows precise control of who owns the tokens at any given time. Thus, it is possible to issue a large number of tokens at a low average value, increasing the access of the investing public.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 3 End -->

  </div>
  <!-- Add Arrows -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <!-- Add Pagination -->
  <div class="swiper-pagination"></div>
</div>
<!-- Slider END -->

<div class="border-top"></div>

<!-- Number Boxes START -->
<div class="section-block" id="about">
  <div class="container">
    <div class="section-heading center-holder">
      <span>SPECIFICATIONS</span>
      <h4>BitZyon Token</h4>
      <div class="section-heading-line"></div>
      <p>See the general specifications of our token below.</p>
    </div>
    <div class="row mt-50">
      <div class="col-md-4 col-sm-6 col-12">
        <div class="number-box" style="min-height:400px; box-shadow: 4px 4px 10px 2px #d21e2b">
          <div style="text-align:center;"><img src="img/logos/vermelho_chumbo.png" style="height:100px"></div>
          <h4>SPECIFICATIONS</h4>
            <p style="color:#000">Name: BitZyon - Symbol: ZYON</p>
            <p style="color:#000">Plataform: Ethereum (ERC20) - Decimals: 8</p>
            <p style="color:#000">contract: 0x5d9b9f6eeaeebc46fdfa0c1041e929834b15c03a</p>
            <p style="color:#000">Supply: 300.000.000</p>
            <p style="color:#000">Explorer: <a href="https://etherscan.io/token/0x5d9b9f6eeaeebc46fdfa0c1041e929834b15c03a">etherscan.io</a></p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="number-box" style="min-height:400px; box-shadow: 4px 4px 10px 2px #1e6cd2">
          <div style="text-align:center;"><img src="img/logos/azul_chumbo.png" style="height:100px"></div>
          <h4>DISTRIBUTION</h4>
            <p style="color:#000">Pre-Sale: 20% (60.000.000 ZYON)</p>
            <p style="color:#000">Developers: 6,67% (20.000.000 ZYON)</p>
            <p style="color:#000">Marketing actions: 3% ( 9.000.000 ZYON)</p>
            <p style="color:#000">non-current tokens: 70,33% (211.000.000 ZYON)</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="number-box" style="min-height:400px; box-shadow: 4px 4px 10px 2px grey">
          <div style="text-align:center;"><img src="img/logos/branco_chumbo.png" style="height:100px"></div>
          <h4>OBJECTIVE</h4>
          <p style="color:#000">BitZyon is the newest ERC20 token powered by the Ethereum blockchain, which aims to tokenize a digital asset, where BitZyon token holders will be entitled to a 20% share of the total BitZyon cryptocurrency supply, which will be implemented on the blockchain network, after 2 years.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Number Boxes END -->

<div class="border-top"></div>

<!-- Info Section START -->
<div class="section-block-grey" id="pre">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6 col-12">
        <div class="pr-30-md">
          <div class="section-heading">
            <h4>PRE-SALE BitZyon Token</h4>
          </div>
          <div class="section-heading-line-left"></div>
          <div class="text-content-big mt-20">
            <p style="text-align:justify">The pre-sale phase is an opportunity to purchase the token first hand. The initial offer will be made as follows and with the objectives:</p>
          </div>
          <div class="mt-20">
            <ul class="primary-list">
              <li><p style="text-align:justify"><i class="fa fa-caret-right"></i> <spam style="font-size:25px">1st Round: </spam> 40 million tokens will be put on sale for the value of 4 BTC satoshis for 1 BitZyon token. From this first pre-sale round, part of the amount will be allocated to listing on the Exchange Crex24. </p>
                <p style="text-align:justify"><spam style="color:#d21e2b">Obs. </spam> The remaining amount of the balance will be used to boost marketing campaigns, search for future markets for exchange, infrastructure improvements and operating costs. </p>
              </li>
              <li><p style="text-align:justify"><i class="fa fa-caret-right"></i> <spam style="font-size:25px">2nd Round: </spam> 20 million tokens will be put on sale for the value of 5 BTC satoshis for 1 BitZyon token </p>
                <p style="text-align:justify"><spam style="color:#d21e2b">Obs. </spam> The value of this pre-sale round will be destined to boost marketing campaigns, search for future markets for exchange, infrastructure improvements and operational costs. </p>
              </li>
              <li><p style="text-align:justify"><i class="fa fa-caret-right"></i> Altogether, in the initial offer, 60 million BitZyon tokens will be made available to the market.</p></li>
            </ul>
          </div>
          <div class="mt-25">
            <a href="https://t.me/BitZyon" class="primary-button button-sm mb-15-xs" target="_blank"><i class="fa fa-paper-plane"></i> TELEGRAM</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-12">
        <img src="img/bgs/bg_buy_1.png" class="rounded-border shadow-primary" alt="img" style="width:100%">
      </div>
    </div>
  </div>
</div>
<!-- Info Section END -->


<!-- Background Section START -->
<div class="section-block-bg" style="background-image: url(img/bgs/bg_3.png);" id="comunity">
  <div class="container">
      <div class="row">
      <div class="col-md-6 col-sm-6 col-12">
        <div class="section-heading center-holder white-color">
        <span>BUY YOUR ZYON'S NOW</span><br>
        <span style="font-color:#1e6cd2"><strong>Exclusive Sales via Telegrans</strong></span>
        <h5>Talk to one of the Official P2P Agents.</h5>
        <a href="https://t.me/EndryoBit" target="_blank" class="primary-button button-md mt-10"><i class="fa fa-paper-plane"></i> Endryo</a>
        <a href="https://t.me/Marciosperocoin" target="_blank" class="primary-button button-md mt-10"><i class="fa fa-paper-plane"></i> Marcio Correa</a>
        <a href="https://t.me/Flaviogomess" target="_blank" class="primary-button button-md mt-10"><i class="fa fa-paper-plane"></i> Flávio Gomes</a>
        </div>
        </div>
    </div>
  </div>
</div>
<!-- Background Section END -->

<div class="border-top"></div>

<!-- Tabs icon (Hortizonal Left) START -->
<div class="section-block" id="wallet">
  <div class="container">
    <div class="section-heading">
      <h4>Download or Use a Wallet</h4>
      <div class="section-heading-line-left"></div>
      <p>The BitZyon token was developed on the Ethereum platform (ERC20), thus facilitating the use of specialized wallets for the Ethreum network, so we provide several ways to use and trade our token.</p>
    </div>
    <!-- Tabs Start -->
    <div class="big-icon-tabs">
      <div class='tabs tabs_animate mt-50'>
        <ul class="tab-menu left-holder">
          <li><a href="#tab-f-1"><i class="fa fa-mobile" aria-hidden="true"></i> Android</a></li>
          <li><a href="#tab-f-2"><i class="fa fa-desktop" aria-hidden="true"></i> Desktop</a></li>
          <li><a href="#tab-f-3"><i class="fa fa-cogs" aria-hidden="true"></i> Chrome</a></li>
        </ul>

        <!-- Tab 1 Start -->
        <div id='tab-f-1' class="clearfix tab-body">
          <ul class="tab-menu left-holder">
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp" target="_blank" style="width:100%">
                        <img src="img/wallets/trust_wallet.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=io.metamask" target="_blank" style="width:100%">
                        <img src="img/wallets/metamask.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.enjin.mobile.wallet" target="_blank" style="width:100%">
                        <img src="img/wallets/enjin.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.myetherwallet.mewconnect" target="_blank" style="width:100%">
                        <img src="img/wallets/myetherwallet.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
            </ul>
        </div>
        <!-- Tab 1 End -->

        <!-- Tab 2 Start -->
        <div id='tab-f-2' class="clearfix tab-body">
            <ul class="tab-menu left-holder">
                <li>
                    <a href="https://github.com/ethereum/mist/releases/download/v0.11.1/Ethereum-Wallet-win64-0-11-1.zip" target="_blank" style="width:100%">
                        <img src="img/wallets/windows.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
                <li>
                    <a href="https://github.com/ethereum/mist/releases/download/v0.11.1/Ethereum-Wallet-linux64-0-11-1.zip" target="_blank" style="width:100%">
                        <img src="img/wallets/linux.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
                <li>
                    <a href="https://github.com/ethereum/mist/releases/download/v0.11.1/Ethereum-Wallet-macosx-0-11-1.dmg" target="_blank" style="width:100%">
                        <img src="img/wallets/mac.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
                <li>
                    <a href="https://github.com/ethereum/mist/releases/download/v0.11.1/Ethereum-Wallet-installer-0-11-1.exe" target="_blank" style="width:100%">
                        <img src="img/wallets/exe.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
            </ul>
        </div>
        <!-- Tab 2 End -->

        <!-- Tab 3 Start -->
        <div id='tab-f-3' class="clearfix tab-body">
          <ul class="tab-menu left-holder">
                <li>
                    <a href="https://chrome.google.com/webstore/detail/metamask/nkbihfbeogaeaoehlefnkodbefgpgknn" target="_blank" style="width:100%">
                        <img src="img/wallets/metamask.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
                <li>
                    <a href="https://chrome.google.com/webstore/detail/mew-cx/nlbmnnijcnlegkjjpcfjclmcfggfefdm" target="_blank" style="width:100%">
                        <img src="img/wallets/myetherwallet.png" class="rounded-border shadow-primary" alt="img" style="width:200px; heigth:200px">
                    </a>
                </li>
            </ul>
        </div>
        <!-- Tab 3 End -->

      </div>
    </div>
    <!-- Tabs End -->
  </div>
</div>
<!-- Tabs icon (Hortizonal Left) END -->

<div class="border-top"></div>

<!-- Team Members START -->
<div class="section-block-grey" id="exchange">
  <div class="container">
    <div class="section-heading center-holder">
      <span>EXCHANGES</span>
      <h4>Negotiate your ZYON's soon</h4>
      <div class="section-heading-line"></div>
    </div>
    <div class="row mt-50 center-holder">
      <div class="col-lg-2 col-md-6 col-12">
        <div class="team-box-2">
          <div class="team-box-2-image">
            <img src="img/corretoras/crex24.png" alt="Corretora">
          </div>
              <div class="col-md-12">
                <a class="primary-button button-md mt-10" href="#" target="_blank">COMING SOON</a>
              </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Team Members END -->

<div class="border-top"></div>

<!-- Team Members START -->
<div class="section-block-grey" id="team">
  <div class="container">
    <div class="section-heading center-holder">
      <span>OFFICIAL BITZYON TEAM</span>
      <h4>FOUNDATION</h4>
      <h6>Developers</h6>
      <div class="section-heading-line"></div>
    </div>
    <div class="row mt-50 center-holder">
      <div class="col-lg-1 col-md-6 col-12" style="margin-right:50px"></div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="team-box-2">
          <div class="team-box-2-image">
            <img src="img/profiles/vermelho_chumbo.png" alt="member">
            <div class="team-box-2-overlay">
              <div class="team-box-2-name">
                <h4>Idalmir Melo</h4>
                <h5>Developer and Founder</h5>
              </div>
              <div class="team-box-2-content">
                <a href="https://t.me/EndryoBit" target="_blank"><i class="fa fa-paper-plane"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="team-box-2">
          <div class="team-box-2-image">
            <img src="img/profiles/azul_chumbo.png" alt="member">
            <div class="team-box-2-overlay">
              <div class="team-box-2-name">
                <h4>Marcio Correa</h4>
                <h5>Developer and Founder</h5>
              </div>
              <div class="team-box-2-content">
                <a href="https://t.me/Marciosperocoin" target="_blank"><i class="fa fa-paper-plane"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="team-box-2">
          <div class="team-box-2-image">
            <img src="img/profiles/branco_chumbo.png" alt="member">
            <div class="team-box-2-overlay">
              <div class="team-box-2-name">
                <h4>Flávio Gomes</h4>
                <h5>Developer and Founder</h5>
              </div>
              <div class="team-box-2-content">
                <a href="https://t.me/Flaviogomess" target="_blank"><i class="fa fa-paper-plane"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-heading center-holder">
      <h6>TEAM OF EMPLOYEES</h6>
      <div class="section-heading-line"></div>
    </div>
    <div class="row mt-50 center-holder">
      <div class="col-lg-3 col-md-6 col-12"></div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="team-box-2">
          <div class="team-box-2-image">
            <img src="img/profiles/branco_vermelho.png" alt="member">
            <div class="team-box-2-overlay">
              <div class="team-box-2-name">
                <h4>Kilder Oliveira</h4>
                <h5>Legal Collaborator</h5>
              </div>
              <div class="team-box-2-content">
                <a href="https://t.me/kiloliver" target="_blank"><i class="fa fa-paper-plane"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-12">
        <div class="team-box-2">
          <div class="team-box-2-image">
            <img src="img/profiles/azul_branco.png" alt="member">
            <div class="team-box-2-overlay">
              <div class="team-box-2-name">
                <h4>Wellington Carvalho</h4>
                <h5>Legal Collaborator</h5>
              </div>
              <div class="team-box-2-content">
                <a href="https://t.me/jungoinvestidor" target="_blank"><i class="fa fa-paper-plane"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12"></div>
    </div>
  </div>
</div>
<!-- Team Members END -->


<!-- Cases START -->
<div class="section-block-grey border-top" id="road">
  <div class="container">
    <div class="section-heading">
      <h4>RoadMap</h4>
      <div class="section-heading-line-left"></div>
    </div>
    <div class="row mt-40">
      <!-- Project Block Start -->
      <div class="col-md-12 col-sm-12 col-12">
        <div class="case-block">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12 pr-0">
              <img src="img/bgs/prof_1.png" alt="case" style="width:100%">
            </div>
            <div class="col-md-9 col-sm-6 col-12">
              <div class="case-block-inner">
                <h4>2020 - 1st Semester</h4>
                <p style="color:#000" style="color:#000" style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Development of the Bitzyon token on the Ethereum platform</p>
                <p style="color:#000" style="color:#000" style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Development and Creation: White Paper, WebSite & Social Media</p>
                <p style="color:#000" style="color:#000" style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Token pre-sale & Preparation of marketing plans</p>
                <p style="color:#000" style="color:#000" style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Exchange Crex24 launch (after pre-sale)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project Block End -->

      <!-- Project Block Start -->
      <div class="col-md-12 col-sm-12 col-12">
        <div class="case-block">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12 pr-0">
              <img src="img/bgs/prof_2.png" alt="case" style="width:100%">
            </div>
            <div class="col-md-9 col-sm-6 col-12">
              <div class="case-block-inner">
                <h4>2020 - 2nd Semester</h4>
                <p style="color:#000" style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> First marketing plan</p>
                <p style="color:#000" style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Partner search</p>
                <p style="color:#000" style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Inclusion in Coingecko, CoinMarketCap & other indexers</p>
                <p>...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project Block End -->

      <!-- Project Block Start -->
      <div class="col-md-12 col-sm-12 col-12">
        <div class="case-block">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12 pr-0">
              <img src="img/bgs/prof_3.png" alt="case" style="width:100%">
            </div>
            <div class="col-md-9 col-sm-6 col-12">
              <div class="case-block-inner">
                <h4>2021</h4>
                <p style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Listing on new exchanges</p>
                <p style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Secondary marketing plan (aggressive)</p>
                <p style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Bitzyon telegram bot launch</p>
                <p style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Airdrop for the community</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project Block End -->

      <!-- Project Block Start -->
      <div class="col-md-12 col-sm-12 col-12">
        <div class="case-block">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-12 pr-0">
              <img src="img/bgs/prof_1.png" alt="case" style="width:100%">
            </div>
            <div class="col-md-9 col-sm-6 col-12">
              <div class="case-block-inner">
                <h4>2022</h4>
                <p style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Creation and launch of BitZyon cryptocurrency</p>
                    <p style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Launch of the new Roadmap and WhitePaper (surprising)</p>
                    <p style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Creation of official portfolios for Desktop and Mobile</p>
                    <p style="color:#000"><i class="fa fa-caret-right" style="color:#d21e2b"></i> Launch of the new website</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Project Block End -->
    </div>
  </div>
</div>
<!-- Cases END -->

<div class="border-top"></div>

<!-- Contact Section START -->
<div class="section-block">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-7 col-12">
        <div class="section-heading mt-15">
          <h4>Contact with Developers</h4>
          <div class="section-heading-line-left"></div>
        </div>
        <div class="contact-form-box mt-30">
          <!-- Form START -->
          <form method="post" id="formulario_contato" onsubmit="validaForm(); return true;" class="contact-form">
		    <div class="row">
                <div class="col-md-6">
                    <label for="name">NAME</label>
                    <input type="text" name="nome" id="nome" placeholder="Seu Nome" />
        		</div>
		
                <div class="col-md-6">
                    <label for="email">E-MAIL</label>
                    <input type="text" name="email" id="email" placeholder="mail@exemplo.com.br" />
                </div>		
	
		        <div class="col-md-12">
                    <label for="mensagem">MESSAGE</label>
                    <textarea name="mensagem" id="mensagem" placeholder="Escreva sua mensagem" /></textarea>
                </div>
		
                <div class="col-md-12 mb-30">
                    <div class="center-holder">
                        <button type="submit">SUBMIT</button>
                    </div>
                </div>

		    </div>
	      </form>
          <!-- Form END -->
        </div>
      </div>
      <div class="col-md-5 col-sm-5 col-12">
        <img src="img/bgs/bg_contact_1.png" class="rounded-border shadow-primary" alt="img" style="width:100%">
      </div>
    </div>
  </div>
</div>

<div class="border-top"></div>

<!-- Footer START -->
<footer>
  <div class="container">
    <div class="row">
      <!-- Column 1 Start -->
      <div class="col-md-3 col-sm-6 col-12">
        <div class="mt-25">
          <img src="img/logos/logo_footer.png" alt="footer-logo" style="height:100px">
          <p class="mt-25">An ERC20 token (Ethereum) aimed at <br>
            tokenization of a digital asset</p>
        </div>
      </div>
      <!-- Column 1 End -->

      <!-- Column 2 Start -->
      <div class="col-md-2 col-sm-6 col-12">
        <h3>Quick Links</h3>
        <ul class="footer-list">
          <li><a href="https://t.me/BitzyonPT" target="_blank"> Telegram </a> <img src="img/lang/t_br.png" style="width:20px;"> <img src="img/lang/t_pt.png" style="width:20px;"></li>
          <li><a href="https://t.me/Bitzyon" target="_blank"> Telegram </a> <img src="img/lang/t_en.png" style="width:20px;"></li>
          <li><a href="https://t.me/BitzyonES" target="_blank"> Telegram </a> <img src="img/lang/t_es.png" style="width:20px;"></li>
          <li><a href="https://twitter.com/BitZyonOfficial" target="_blank"> Twitter</a> <img src="img/lang/globo.png" style="width:20px;"></li>
          <li><a href="https://github.com/BitZyon-Official" target="_blank"> GitHub</a></li>
          <li><a href="https://etherscan.io/token/0x5d9b9f6eeaeebc46fdfa0c1041e929834b15c03a" target="_blank"> Explorer</a></li>
        </ul>
      </div>
      <!-- Column 2 End -->
      
      <!-- Column 2 Start -->
      <div class="col-md-2 col-sm-6 col-12">
        <h3>Partners</h3>
        <ul class="footer-list">
          <li><a href="https://mchain.network" target="_blank">Mchain (MAR)</a> <img src="img/parceiros/p_mchain.png" style="width:20px;"></li>
          <li><a href="#"> ...</a></li>
          <li><a href="#"> ...</a></li>
          <li><a href="#"> ...</a></li>
        </ul>
      </div>
      <!-- Column 2 End -->      
      
      <!-- Column 2 Start -->
      <div class="col-md-2 col-sm-6 col-12">
        <h3>Indexers</h3>
        <ul class="footer-list">
          <li><a href="#"> ...</a></li>
          <li><a href="#"> ...</a></li>
          <li><a href="#"> ...</a></li>
          <li><a href="#"> ...</a></li>
        </ul>
      </div>
      <!-- Column 2 End -->
      
      <!-- Column 4 Start -->
      <div class="col-md-3 col-sm-6 col-12">
        <h4>Tags</h4>
        <div class="footer-tags mt-25">
          <p><a href="#">Cryptocurrency</a> <a href="#">Token ERC20 Ethereum</a></p>
          <p><a href="#">Tokenization</a> <a href="#">Crypto</a> <a href="#">BitZyon</a></p>
          <p><a href="#">Ethereum</a> <a href="#">Bitcoin</a> <a href="#">Litecoin</a></p>
          <p><a href="#">Investment</a> <a href="#">Crypto Pre-Sale</a></p>
        </div>
      </div>
      <!-- Column 4 End -->
    </div>

    <!-- Footer Bar Start -->
    <div class="footer-bar">
      <p><span class="primary-color">BitZyon</span> © 2020. All Rights Reserved.</p>
    </div>
    <!-- Footer Bar End -->
  </div>
</footer>
<!-- Footer END -->

<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- Scroll to top button End -->

<!-- SEND TO MAIL -->
<script type="text/javascript">
 function validaForm()
 {
    erro = false;
    if($('#nome').val() == ''){
        alert('You need to fill in the Name field');erro = true;
    }
    if($('#email').val() == '' && !erro){
        alert('You need to fill in the E-mail field');erro = true;
    }
    if($('#mensagem').val() == '' && !erro){
        alert('You need to fill in the Message field');erro = true;
    }
    //se nao tiver erros
    if(!erro){
        $('#formulario_contato').submit();
    }
 }
</script>

<!-- Jquery -->
<script src="js/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Particles -->
<script src="particles.js"></script>
<script src="particles.min.js"></script>
<script src="js/app.js"></script>

<!--Popper JS-->
<script src="js/popper.min.js"></script>

<!--Popper JS-->
<script src="js/popper.min.js"></script>

<!-- Bootstrap JS-->
<script src="js/bootstrap.min.js"></script>

<!-- Owl Carousel-->
<script src="js/owl.carousel.js"></script>

<!-- Navbar JS -->
<script src="js/navigation.js"></script>
<script src="js/navigation.fixed.js"></script>

<!-- Wow JS -->
<script src="js/wow.min.js"></script>

<!-- Countup -->
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>

<!-- Tabs -->
<script src="js/tabs.min.js"></script>

<!-- Yotube Video Player -->
<script src="js/jquery.mb.YTPlayer.min.js"></script>

<!-- Swiper Slider -->
<script src="js/swiper.min.js"></script>

<!-- Isotop -->
<script src="js/isotope.pkgd.min.js"></script>

<!-- Switcher JS -->
<script src="js/switcher.js"></script>

<!-- Modernizr -->
<script src="js/modernizr.js"></script>

<!-- Google Map -->
<script src="js/map.js"></script>

<!-- Main JS -->
<script src="js/main.js"></script>

</body>
</html>