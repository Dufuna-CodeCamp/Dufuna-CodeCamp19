var showProductsButton = document.getElementById('js-show-products');

showProductsButton.onclick = function() {
    var products = [{
            name: 'painting brush',
            image_url: 'images/image_18039.jpg',
            price: 'N 1,400',

        },
        {
            name: '20 litre paint',
            image_url: 'images/20_litre_paint.jpg',
            price: 'N 12,000',
        },
        {
            name: '4 liter paint',
            image_url: 'images/4_litre_paint.jpg',
            price: 'N 1,200',
        },
    ];

    var productList = document.getElementById('js-product-list');

    var product_results = "";

    for (var key in products) {
        if (products.hasOwnProperty(key)) {
            var product_name = products[key].name;
            var product_image = products[key].image_url;
            var product_price = products[key].price;

            var productsContent = `<div class='product'>
                                    <img src='${product_image}' class='product-image' alt=''/>
                                     <div class="product-content">
                                        <span class='product-title'>${product_name}</span>
                                        <span class='product-price'>${product_price}</span>
                                    </div>
                                </div>`;
        }

        product_results += productsContent;
    }

    productList.innerHTML = product_results;

};