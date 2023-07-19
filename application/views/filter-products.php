<?php foreach ($items as $item) { ?>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="single-product">
            <div class="single-product__thumbnail">
                <div class="single-product__thumbnail--meta-3">
                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip"><i class="lastudioicon-heart-2"></i></a>
                </div>
                <div class="single-product__thumbnail--holder">
                    <a href="<?= 'shop/productDetails/' . $item['id']; ?>">
                        <img src="<?= $item['image']; ?>" alt="Product" />
                    </a>
                </div>
                <div class="single-product__thumbnail--meta-2">
                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip"><i class="lastudioicon-shopping-cart-3"></i></a>
                    <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
                    <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView">
                        <i class="lastudioicon-search-zoom-in"></i>
                    </button>
                </div>
            </div>
            <div class="single-product__info text-center">
                <div class="single-product__info--tags">
                    <a href="#"><?= $item['category']; ?></a>
                </div>
                <h3 class="single-product__info--title">
                    <a href="<?= 'shop/productDetails/' . $item['id']; ?>"><?= $item['title']; ?></a>
                </h3>
                <div class="single-product__info--price">
                    <ins><?= number_format($item['price'], 2); ?></ins>
                </div>
            </div>
        </div>
    </div>
<?php } ?>