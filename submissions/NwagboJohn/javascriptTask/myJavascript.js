var productList = [
    {
        name: "Hot 7 Pro",
        imageUrl: "https://i.ibb.co/jzMy3JB/Infinix-Hot-7-Pro.png",
        price: 45000
    },
    {
        name: "Techno F6",
        imageUrl: "https://i.ibb.co/jzMy3JB/Infinix-Hot-7-Pro.png",
        price: 38000
    },
    {
        name: "Techno A3 Tablet",
        imageUrl: "https://i.ibb.co/jzMy3JB/Infinix-Hot-7-Pro.png",
        price: 50000
    }
]

var nextButton = document.querySelector('#button');
nextButton.addEventListener('click', e => {
    nextButton.disabled = true;
    var displayItem = document.querySelector(".displayItem");

    productList.forEach(product => {
        var template = document.querySelector("#product");
        var prod = document.importNode(template.content, true);

        var img = prod.querySelector("img");
        img.src = product.imageUrl;

        var name = prod.querySelector(".prodName");
        name.textContent = product.name;

        var price = prod.querySelector(".prodPrice");
        price.textContent = "₦" + product.price.toLocaleString("en-NG");

        displayItem.appendChild(prod);
    });
});
