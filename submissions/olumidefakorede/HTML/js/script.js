// Dom Manipulation for Dufuna Code Camp 2019
// An ArtShopNG Project 
// Written By Olumide Fakorede


var products = document.getElementsByClassName ('.product-box')
console.log(products)


var products = [
    {
        "image" : "",
        "name" : "",
        "price" : "" ,
    },
    {
        "image" : "",
        "name" : "",
        "price" : "",
    },
    {
        "image" : "",
        "name" : "",
        "price" : "",
    },
];

function loadproducts() {
    for (var i=0; i<products.length; i++) {
        let product = `
        <div class="Product-box">
            <div class="product-image">
                ${products[i].image}    
            <div class="product-name">
                ${products[i].name}
            </div>
            <div class="product-price">
                ${Products[i].price}
            </div>
        <div>
        `
        document.write (product);
    }

}