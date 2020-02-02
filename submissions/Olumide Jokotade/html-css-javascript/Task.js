let products = [
    {
        name: 'Blazers',
        image_url: 'Img/Image1.jpg',
        price: 'N 120,000',
    },
    {
        name: 'Turtlenecks',
        image_url: 'Img/Image10.jpg',
        price: 'N 8 000',
    },
    {
        name: 'Bespoke Ties',
        image_url: 'Img/Image2.jpg',
        price: 'N 5,000',
    },
    {
        name: 'Jeans',
        image_url: 'Img/Image2.jpg',
        price: 'N 5,000',
    },
    {
        name: 'Underwears',
        image_url: 'Img/Image2.jpg',
        price: 'N 5,000',
    },
    {
        name: 'Shorts and Tees',
        image_url: 'Img/Image2.jpg',
        price: 'N 5,000',
    },
];

function loadProducts() {
    for (var i=0; i<products.length; i++) {
        let product = `
            <div class="product-box">
                <div class="product-img">
                    <img src="${products[i].image}"/>
                </div>
                <div class="product-name">
                    ${products[i].name}
                </div>
                <div class="product-price">
                    ${products[i].price}
                </div>
            </div>
        `;
        document.write(product);
    }
}

loadProducts();

function loadProducts2() {
    products.forEach(element => {
        let product = `
            <div class="product-box">
                <div class="product-img">
                    <img src="${element.image}"/>
                </div>
                <div class="product-name">
                    ${element.name}
                </div>
                <div class="product-price">
                    ${element.price}
                </div>
            </div>
        `;
        document.body.innerHTML += product;
    });
}

var btn = document.getElementById("#btn")
btn.addEventListener("click", function() => {
    loadProducts2();
});