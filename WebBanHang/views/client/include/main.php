<div class="main">
    <div class="main-md">
        <h2 class="title">LAPTOP NỔI BẬT NHẤT</h2>
        <div class="categories">
            <button>Macbook</button><button>Asus</button><button>MSI</button><button>Lenovo</button>
            <button>HP</button><button>Acer</button><button>Dell</button>
            <button>Xem tất cả</button>
        </div>
        <div class="main-md md-01">
            <div class="product-list">
                <div class="product-card">
                    <?php foreach ($products as $pr): ?>
                        <a href=""><img src="<?= $pr['image'] ?>" alt="" width="250px" height="200px" /></a>
                        <span><?= $pr['name'] ?></span>
                        <span class="price"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                        <div class="actions">
                            <button class="buy-btn">Mua ngay</button>
                            <button class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main-md">
        <h2 class="title">PC NỔI BẬT NHẤT</h2>
        <div class="categories">
            <button>Apple</button><button>E-Power</button><button>ASUS</button><button>Lenovo</button>
            <button>HP</button>
        </div>
        <div class="main-md md-01">
            <div class="product-list">
                <div class="product-card">
                    <?php foreach ($products as $pr): ?>
                        <div class="product-sp">
                            <a href=""><img src="<?= $pr['image'] ?>" alt="" width="250px" height="200px" /></a>
                            <span><?= $pr['name'] ?></span>
                            <span class="price"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                            <div class="actions">
                                <button class="buy-btn">Mua ngay</button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="main-md">
        <h2 class="title">CARD ĐỒ HỌA</h2>
        <div class="categories">
            <button>Asus</button><button>Gigabyte</button><button>MSI</button>
            <button>EVGA</button><button>Galax</button>
        </div>
        <div class="main-md md-01">
            <div class="product-list">
                <div class="product-card">
                    <?php foreach ($products as $pr): ?>
                        <a href=""><img src="<?= $pr['image'] ?>" alt="" width="250px" height="200px" /></a>
                        <span><?= $pr['name'] ?></span>
                        <span class="price"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                        <div class="actions">
                            <button class="buy-btn">Mua ngay</button>
                            <button class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="main-md">
            <h2 class="title">RAM</h2>
            <div class="categories">
                <button>Corsair</button><button>G.Skill</button><button>Adata</button><button>Apacer</button>
                <button>Kingston</button><button>Crucial</button><button>Geil</button>
                <button>Gigabyte</button><button>HP</button><button>Kingmax</button>
            </div>
            <div class="main-md md-01">
                <div class="product-list">
                    <div class="product-card">
                        <?php foreach ($products as $pr): ?>
                            <a href=""><img src="<?= $pr['image'] ?>" alt="" width="250px" height="200px" /></a>
                            <span><?= $pr['name'] ?></span>
                            <span class="price"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                            <div class="actions">
                                <button class="buy-btn">Mua ngay</button>
                                <button class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
            <div class="main-md">
                <h2 class="title">MÀN HÌNH</h2>
                <div class="categories">
                    <button>Dell</button><button>LG</button><button>ASUS</button><button>Samsung</button>
                    <button>BenQ</button>
                </div>
                <div class="main-md md-01">
                    <div class="product-list">
                        <div class="product-card">
                            <?php foreach ($products as $pr): ?>
                                <a href=""><img src="<?= $pr['image'] ?>" alt="" width="250px" height="200px" /></a>
                                <span><?= $pr['name'] ?></span>
                                <span class="price"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                                <div class="actions">
                                    <button class="buy-btn">Mua ngay</button>
                                    <button class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-md">
                    <h2 class="title">CPU</h2>
                    <div class="categories">
                        <button>AMD</button><button>Intel</button><button>NVIDIA</button><button>SamSung</button>
                    </div>
                    <div class="main-md md-01">
                        <div class="product-list">
                            <div class="product-card">
                                <?php foreach ($products as $pr): ?>
                                    <a href=""><img src="<?= $pr['image'] ?>" alt="" width="250px" height="200px" /></a>
                                    <span><?= $pr['name'] ?></span>
                                    <span class="price"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                                    <div class="actions">
                                        <button class="buy-btn">Mua ngay</button>
                                        <button class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</button>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="main-md">
                    <h2 class="title">TAI NGHE, LOA</h2>
                    <div class="categories">
                        <button>Logitech</button><button>Corsair</button><button>Rapoo</button><button>JBL</button>
                        <button>MozardX</button><button>LOA</button>
                    </div>
                    <div class="main-md md-01">
                        <div class="product-list">
                            <div class="product-card">
                                <?php foreach ($products as $pr): ?>
                                    <a href=""><img src="<?= $pr['image'] ?>" alt="" width="250px" height="200px" /></a>
                                    <span><?= $pr['name'] ?></span>
                                    <span class="price"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                                    <div class="actions">
                                        <button class="buy-btn">Mua ngay</button>
                                        <button class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ hàng</button>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
            </div>
                <div class="main-md">
                    <h2 class="title">Mainboard máy tính</h2>
                    <div class="categories">
                        <button>Asus</button><button>GIGABYTE</button><button>MSI</button>
                        <button>ARSOCK</button>
                    </div>
                    <div class="main-md md-01">
                        <div class="product-list">
                            <div class="product-card">
                                <?php foreach ($products as $pr): ?>
                                    <a href=""><img src="<?= $pr['image'] ?>" alt="" width="250px" height="200px" /></a>
                                    <span><?= $pr['name'] ?></span>
                                    <span class="price"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                                    <div class="actions">
                                        <button class="buy-btn">Mua ngay</button>
                                        <button class="cart-btn"><i class="fas fa-shopping-cart"></i> Thêm giỏ
                                            hàng</button>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-md md-05">
                    <section class="main-section">
                        <h2 class="section-title">ƯU ĐÃI SINH VIÊN</h2>
                        <div class="section-grid">
                            <img src="https://via.placeholder.com/300x100?text=Mac+Sinh+Viên" alt="">
                            <img src="https://via.placeholder.com/300x100?text=Samsung+Sinh+Viên" alt="">
                            <img src="https://via.placeholder.com/300x100?text=iPad+Sinh+Viên" alt="">
                            <img src="https://via.placeholder.com/300x100?text=Laptop+Sinh+Viên" alt="">
                        </div>

                        <h2 class="section-title">ƯU ĐÃI THANH TOÁN</h2>
                        <div class="section-grid">
                            <img src="https://via.placeholder.com/300x100?text=OCB+500K" alt="">
                            <img src="https://via.placeholder.com/300x100?text=HSBC+500K" alt="">
                            <img src="https://via.placeholder.com/300x100?text=HomeCredit+400K" alt="">
                            <img src="https://via.placeholder.com/300x100?text=Kredivo+500K" alt="">
                        </div>

                        <h2 class="section-title">CHUYÊN TRANG THƯƠNG HIỆU</h2>
                        <div class="section-grid brand-section">
                            <img src="https://via.placeholder.com/300x100?text=Apple" alt="">
                            <img src="https://via.placeholder.com/300x100?text=ASUS" alt="">
                            <img src="https://via.placeholder.com/300x100?text=Samsung" alt="">
                            <img src="https://via.placeholder.com/300x100?text=Xiaomi" alt="">
                        </div>
                    </section>
                </div>
            </div>