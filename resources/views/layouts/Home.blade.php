<!DOCTYPE html>
<html lang="en" class="leading-normal text-lg font-body text-gray-900 antialiased" data-react-helmet="lang">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <?php if (url()->current() == url('/country/'.basename(url()->current()))): ?>
          <?php $blogMetaKeys = DB::select('select * from countryblogs where category = "'.basename(url()->current()).'"'); ?>
          <?php $searchengines = DB::select('select * from searchengines where countryId = "'.basename(url()->current()).'"'); ?>
          <?php if ($blogMetaKeys): ?>
            <?php if ($searchengines): ?>
            <title>{{$searchengines[0]->title}}</title>
            <meta name="title" content="{{$searchengines[0]->title}}" />
            <meta name="description" content="{{$searchengines[0]->description}}" />
            <meta name="keywords" content="{{$searchengines[0]->keywords}}" />
            <meta property="og:title" content="{{$searchengines[0]->title}}">
            <meta property="og:site_name" content="{{$blogMetaKeys[0]->title}} - {{$searchengines[0]->title}}" />
            <meta property="og:url" content="{{$searchengines[0]->url}}" />
            <meta property="og:description" content="{{$searchengines[0]->description}}" />
            <meta property="og:image" content="https://greenappletravel.ae/images/gattlogo.png" />
          <?php endif; ?>
        <?php endif; ?>
        <?php else: ?>
          <?php $tourpacksss = DB::select('select * from tourpackages where tourpack = "'.basename(url()->current()).'"'); ?>
          <?php if (url()->current() == url('/tourpacks/info/'.basename(url()->current()))): ?>
            <title>{{$tourpacksss[0]->title}}</title>
         <meta name="title" content="{{$tourpacksss[0]->title}}" />
          <meta name="description" content="{{$tourpacksss[0]->description}}" />
          <meta name="keywords" content="{{$tourpacksss[0]->keywords}}" />
          <meta property="og:title" content="{{$tourpacksss[0]->title}}" />
          <meta property="og:site_name" content="{{$tourpacksss[0]->tourpack}}" />
          <meta property="og:url" content="{{url('tourpacks/info/'.$tourpacksss[0]->tourpack)}}" />
          <meta property="og:description" content="{{$tourpacksss[0]->description}}" />
          <meta property="og:locale" content="en_US" />
          <meta property="fb:admins" content="greenappledxb" />
          <meta property="fb:app_id" content="3117201165174412" />
          <meta property="og:image" content="{{$tourpacksss[0]->tour_img}}" />
            <?php else: ?>
              <?php if (basename(url()->current()) == 'greenappletravel.ae'): ?>
                <title>Dubai Travel Agency, Greenapple Travel & Tourism</title>
                <meta property="og:title" content="Dubai Travel Agency, Quick Service!" />
                <meta name="description" content="Dubai Travel Agency, Hassle free let's make it Easy! No Embassy or Consulate visit. في دبي دون الحاجة لزيارة القنصلية!">
                <meta name="title" content="Dubai Travel Agency, Quickest Service!">
                <meta property="og:site_name" content="GreenApple Travel & Tourism" />
                <?php else: ?>
                  <title>Dubai Travel Agency, Greenapple Travel <?php echo ' - '.basename(url()->current()) ?></title>
                  <meta property="og:title" content="Dubai Travel Agency, Quick Service <?php echo ' - '.basename(url()->current()) ?>!" />
                  <meta name="description" content="Dubai Travel Agency, Hassle free let's make it Easy! No Embassy or Consulate visit. <?php echo ' - '.basename(url()->current()) ?> في دبي دون الحاجة لزيارة القنصلية!">
                  <meta name="title" content="Dubai Travel Agency, Quickest Service <?php echo ' - '.basename(url()->current()) ?>!">
              <?php endif; ?>
        <meta name="keywords" content="dubai travel agency, travel agency, dubai tour, russia visa from dubai">
        <meta property="og:url" content="<?php echo url()->current() ?>" />
        <meta property="og:description" content="Established travel agency in the UAE for 10 plus years. We offer a variety of services for acquiring permits and visas. We are making sure that we exceed your expectations preferably in unexpected way" />
        <link rel="canonical" href="<?php echo url()->current() ?>" />
        <meta property="og:image" content="https://greenappletravel.ae/images/gattlogo.png" />
      <?php endif; ?>
        <?php endif; ?>
        <meta name="robots" content="index, follow" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="English" />
        <meta property="og:type" content="website" />
        <meta name="theme-color" content="#5D9D0E" />
        <meta name="yandex-verification" content="bab3cdcd36c32a9c" />
        <link rel="icon" href="https://yt3.ggpht.com/a/AGF-l795vuA7tvAi6fAzVKuM6ZSreOrHi6blw_L2dw=s900-c-k-c0xffffffff-no-rj-mo" type = "image/x-icon" />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        </head>
    <body>
        <div class="container-fluid">
          @yield('content')
        </div>
        <livewire:layout.whatsapp/>
      @livewireScripts
      <script src="{{ mix('js/app.js') }}" ></script>
      <noscript>You need to enable JavaScript to run this app.</noscript>
      <!-- Go to www.addthis.com/dashboard to customize your tools -->
      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-61629c90adc7b48f" async="async"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77535976-2"></script>
        <!-- Smartsupp Live Chat script -->
<script type="text/javascript">var _smartsupp = _smartsupp || {};_smartsupp.key = '60b1ad709df00811017970061e25bf918828a8dd';window.smartsupp||(function(d) {var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];s=d.getElementsByTagName('script')[0];c=d.createElement('script');c.type='text/javascript';c.charset='utf-8';c.async=true;c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);})(document);</script>
<script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-77535976-2');</script>
  </body>
</html>
