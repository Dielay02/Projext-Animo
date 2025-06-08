<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <link rel="stylesheet" href="stylecss/global.css">
    <link rel="stylesheet" href="stylecss/layanan.css">
    <link rel="stylesheet" href="stylecss/header.css">
    <link rel="stylesheet" href="stylecss/footer.css">
    <link href="https://api.fontshare.com/v2/css?f[]=switzer@400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <!-- Main Content -->
  <main>
    <section class="why-us">
        <h1>Mengapa Memilih Kami?</h1>
        <p>Maklon Deterjen • Fokus pada brand Anda.</p>
    </section>
        <!-- Feature 1 (Left Aligned) -->
        <div class="feature">
            <img src="img-index/layananlm.png" alt="Layanan Maklon Tergabung">
            <div class="feature-details">
                <h3>Layanan Maklon Tergabung</h3>
                <p>Kami menyediakan layanan formulasi, desain kemasan, hingga produksi dan distribusi — semuanya dalam satu platform.</p>
            </div>
        </div>

        <!-- Feature 2 (Right Aligned) -->
        <div class="feature">
                        <img src="img-index/layananpb.png" alt="Produk Berkualitas & Aman">
            <div class="feature-details">
                <h3>Produk Berkualitas & Aman</h3>
                <p>Produk kami diuji secara ketat oleh laboratorium independen untuk memastikan keamanan dan efektivitas.</p>
            </div>
        </div>

        <!-- Feature 3 (Left Aligned) -->
        <div class="feature">
            <img src="img-index/layananfc.png" alt="Fleksibel & Customizable">
            <div class="feature-details">
                <h3>Fleksibel & Customizable</h3>
                <p>Kami siap menyesuaikan formula dan desain kemasan sesuai dengan kebutuhan Anda.</p>
            </div>
        </div>
    

    <!-- Call-to-Action -->
    <section class="cta">
        <h2>Siap Membuat Brand Anda Sendiri?</h2>
        <p>Konsultasi gratis sekarang juga!</p>
        <button class="cta-button">Mulai Sekarang</button>
    </section>
</main>
<script>
  const menuToggle = document.querySelector('.menu-toggle');
  const navContainer = document.querySelector('.nav-container');
  menuToggle.addEventListener('click', () => {
    navContainer.classList.toggle('active');
  });
</script>
    <?php include 'footer.php'; ?>

</body>
</html>