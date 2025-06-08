<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="stylecss/global.css">
    <link rel="stylesheet" href="stylecss/produk.css">
    <link rel="stylesheet" href="stylecss/header.css">
    <link rel="stylesheet" href="stylecss/footer.css">
    <link href="https://api.fontshare.com/v2/css?f[]=switzer@400,500,600,700&display=swap" rel="stylesheet">
</head>
<body>
 <?php include 'header.php'; ?>
    <main>
        <section class="product-section">
            <div class="product-image">
                <img src="img-index/pro1.png" alt="Modular Product Display">
                <div class="product-details">
                    <h2>Modular Product Display</h2>
                        <p>
                            Modular product displays are designed to be versatile and customizable. 
                            They allow you to showcase your products in various configurations, making it easy to update and rearrange as needed.
                        </p>
                </div>
            </div>
  
        </section>
        <section class="product-section">
            <div class="product-image">
                <img src="img-index/pro2.png" alt="">
            <div class="product-details">
                <h2>Performance Wash Action</h2>
                     <p>
                        Our detergents are formulated to deliver superior cleaning performance. 
                        Experience effective stain removal and fresh results every wash.
                    </p>
            </div>
        </section>
        <section class="product-section">
            <div class="product-image">
                <img src="img-index/pro3.png" alt="Customer Solutions">
                <div class="product-details">
                    <h2>Customer Solutions</h2>
                        <p>
                            We provide tailored solutions to meet your specific needs. 
                            Whether you're looking for bulk production or custom formulations, we've got you covered.
                        </p>
            </div>
            </div>
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