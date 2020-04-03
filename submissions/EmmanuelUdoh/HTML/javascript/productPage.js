var products = [
    {
        name: "Nokia phone",
        image: "images/img_14.jpeg",
        price: "N 500"

    },
    {
        name: "Afrione power bank",
        image: "images/img_1.jpg",
        price: "N 130"
    },
    {
        name: "Motorolla phone",
        image: "images/img_7.jpeg",
        price: "N 199"
    },
    {
        name: "Nokia 3310 phone",
        image: "images/img_13.jpeg",
        price: "N 1400"
    },
    {
        name: "Iphone 10",
        image: "images/img_15.jpeg",
        price: "N 1500"
    },
    {
        name: "General headset",
        image: "images/img_4.jpg",
        price: "N 13200"
    },
]; 

function loadProducts() {
    products.forEach(function(item) {
         product = `
          <div class="cards">
                <div class="image">
                    <img src="${item.image}"/>
                </div>
                <div class="product_name">
                    ${item.name}
                </div>
                <div class="price">
                    ${item.price}
                </div>
            </div>
        `;
        document.body.innerHTML += product;
    });
}

