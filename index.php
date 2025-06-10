<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animo</title>
    <link rel="stylesheet" href="stylecss/global.css">
    <link rel="stylesheet" href="stylecss/index.css">
    <link rel="stylesheet" href="stylecss/header.css">
    <link rel="stylesheet" href="stylecss/footer.css">
    <link href="https://api.fontshare.com/v2/css?f[]=switzer@400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> 
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> 
</head>
<body>
<?php include 'header.php'; ?>
<section class="banner-slider">
   <div class="slide"><img src="img-index/laundry-parfume.png" alt="Anime-deterjen-pewangi-pakaian"></div>
   <div class="slide"><img src="img-index/baby-deterjen.png"  alt="Animo-deterjen-pakaian-bayi"></div>
   <div class="slide"><img src="img-index/matic-cleaning.png"  alt="Animo-deterjen-matik"></div>
</section>
<section class="products">
  <h3>PRODUCT</h3>
    <div class="product-list center">
      <div class="product-item">
        <img src="img-index/parfum-deterjen.png"  alt="Animo-deterjen-pewangi-pakaian">
      </div>
      <div class="product-item">
        <img src="img-index/bayi-deterjen.png"  alt="Animo-deterjen-pakaian-bayi">
      </div>
      <div class="product-item">
        <img src="img-index/matik-deterjen.png"  alt="Animo-deterjen-matik">
      </div>
    </div>
</section>
  <section class="about">
    <h4>Tentang Kami</h4>
    <p>
      Animo adalah perusahaan jasa maklon detergen yang hadir untuk membantu Anda menciptakan merek produk perawatan rumah sendiri dengan mudah dan terjangkau. 
      Tim yang berkapasitas siap menyediakan layanan segala aspek mulai dari formulasi produk, desain kemasan, hingga proses produksi dan distribusi, sehingga Anda bisa fokus pada pemasaran dan pengembangan merek.
    </p>
  </section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
<script>
  $(document).ready(function(){
    $('.banner-slider').slick({
      autoplay: true,
      autoplaySpeed: 2000,
      dots: true,
      arrows: true,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      slidesToShow: 1,
      slidesToScroll: 1
    });
  });
</script>
<script>
  $(document).ready(function(){
    $('.center').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      dots: false,
      arrows: true,
      infinite: true,
      speed: 500,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ]
    });
  });
</script>
</body>
<?php include 'footer.php'; ?>
</html>