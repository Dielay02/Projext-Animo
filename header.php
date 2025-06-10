   <header>
        <div class="header-top">
            <div class="logo"><img src="img-index/animo-logo.png" alt="logo"></div>
                <button class="menu-toggle" aria-label="Toggle Menu">☰</button>
        </div>
        <div class="nav-container">
            <nav>
            <a href="index.php">Beranda</a>
            <a href="product.php">Produk</a>
            <a href="layanan.php">Layanan</a>
            </nav>
        </div>
    </header>
<script>
  const menuToggle = document.querySelector('.menu-toggle');
  const navContainer = document.querySelector('.nav-container');
  menuToggle.addEventListener('click', () => {
    navContainer.classList.toggle('active');
  });
</script>