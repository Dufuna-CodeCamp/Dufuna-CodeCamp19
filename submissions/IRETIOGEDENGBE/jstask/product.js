
var products =  [
    {
        name: "Accessories",
        image: "image/fashion6.jpg",
        price: "$1100"
    },
    {
        name: "Jumpsuit",
        image: "image/fashion3.jpg",
        price: "$50"
    },
    {
        name: "Shirts",
        image: "image/fashion4.jpg",
        price: "$100"
    },
];

function loadProducts() {
    for (var i=0; i<products.length; i++){
        let product = `
            <div class="product-box">
                <div class="product-img">
                    <img src="${products[i].image}"/>
                </div>
                <br><br>
                <div class="product-name">
                    ${products[i].name}
                </div>
                <div class="product-price">
                    ${products[i].price}

                </div>
            </div>

            `  
            document.write(product);
    }
}

loadProducts();


