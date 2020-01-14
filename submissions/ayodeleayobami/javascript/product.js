var products=[
    {
        name:"sneakers",
        image:"images/shoe1.jpg",
        price:"$150"
    },
    {
        name:"derby",
        image:"images/shoe2.jpg",
        price:"$150"
    },
    {
        name:"pumps",
        image:"images/shoe3.jpg",
        price:"$120"
    },
];
function loadProducts() {
    products.forEach(function(item) {
          product =
        <div class ="product-box">
            <div class="product-content">
            <div class="product image">
                <img src="${item.image}"/>
                </div>
                <div class="product-name">
                    ${item.name}
                </div>
                <div class="product-price">
                    ${item.price}
                </div>
                </div>
             </div>
            ;
            document.body.innerHTML +=product;
       });   
    }
