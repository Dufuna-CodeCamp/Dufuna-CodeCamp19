function nextChange() {
    document.getElementById("adPromo").src= "deals/delivery.jpg";
}
function prevChange() {
    document.getElementById("adPromo").src= "deals/christmas.jpg";
}

var products =[
    {
        name :"shirt",
        image: "deals/dealfashionearring.jpg",
        price: "$12"
    },
    {
        name :"Baseball Cap",
        image: "deals/dealbaseballcap.jpg",
        price: "$10"
    },
    {
        name :"Crochet",
        image: "deals/dealcrochet.jpg",
        price: "$14"
    },
    {
        name :"Wrist watch",
        image: "deals/dealluxurywatch.jpg",
        price: "$19"
    },
    {
        name :"Lucia Dress",
        image: "deals/dealluciamididress.jpg",
        price: "$21"
    }
];

function loadProducts() {
    for (var i=0; i<products.length; i++){
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
        `
        document.write(product);
    }
}
loadProducts();

