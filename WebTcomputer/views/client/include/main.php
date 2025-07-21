<div class="main-container">
  <!-- Tin tức & Sự kiện -->
  <section class="section news-events">
    <h2 class="section-title">Tin tức & Sự kiện</h2>
    <div class="news-grid">
      <div class="news-item">
        <img src="./images/Tintuc1.webp" alt="Tác dụng trà Shan Tuyết" />
        <a href="#">7+ Tác dụng của trà shan tuyết không phải ai cũng biết</a>
      </div>
      <div class="news-item">
        <img src="./images/Tintuc2.webp" alt="Ướp trà hoa nhài" />
        <a href="#">Cách Ướp Trà Hoa Nhài & Làm Trà Khô</a>
      </div>
      <div class="news-item">
        <img src="./images/Tintuc3.webp" alt="Pha trà Shan Tuyết" />
        <a href="#">Cách pha trà shan tuyết cổ thụ chuẩn vị</a>
      </div>
      <div class="news-item">
        <img src="./images/Tintuc4.webp" alt="Trà sen" />
        <a href="#">12 Tác Dụng Của Trà Sen Nên Biết</a>
      </div>
      <div class="news-item">
        <img src="./images/Tintuc5.png" alt="Ướp trà với hoa cúc" />
        <a href="#">Cách ướp trà với hoa cúc</a>
      </div>
    </div>
  </section>

  <!-- Sản phẩm nổi bật -->
  <section class="section featured-products">
    <h2 class="section-title">Sản phẩm nổi bật</h2>
    <div class="product-grid">
      <?php foreach ($products as $pr): ?>
        <div class="product-card">
          <a href="#">
            <img src="<?= $pr['image'] ?>" alt="<?= $pr['name'] ?>" />
            <h3 class="product-name"><?= $pr['name'] ?></h3>
          </a>
          <p class="product-price"><?= number_format($pr['price']) ?><sup>đ</sup></p>
          <button class="btn-order">Đặt hàng</button>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Bài viết nổi bật -->
  <section class="section hot-articles">
    <h2 class="section-title">Bài viết nổi bật</h2>
    <div class="article-grid">
      <div class="article-card">
        <img src="./images/new1.webp" alt="Trà Thái Nguyên TPHCM" />
        <p>Nơi Mua Trà Thái Nguyên Tại TPHCM Chính Gốc 100%</p>
      </div>
      <div class="article-card">
        <img src="./images/new2.webp" alt="Lịch sử cây chè" />
        <p>Cây chè Thái Nguyên: Lịch sử, cách trồng & tác dụng</p>
      </div>
      <div class="article-card">
        <img src="./images/new3.webp" alt="Thơ chè" />
        <p>TOP Những Bài Thơ Về Chè Thái Nguyên Hay Nhất</p>
      </div>
    </div>
  </section>
</div>
