const productList = [
    {
        name: "iPhone 11",
        price: "N100,000",
        photo: "oppo.jpg"
    },
    {
        name: "Samsung",
        price: "N145,000",
        photo: "note10.png"
    },
    {
        name: "Oppo",
        price: "N100,000",
        photo: "ap.jpg"
    }
];

function products(phone) {
    return `
    <div class="prod">
        <img class="phone-photo" src="${phone.photo}">
        <h2 class="phone-name">${phone.name}<h2>
        <p>${phone.price}</p>
    </div>
    
    `
}

document.getElementById("app").innerHTML = `
${productList.map(products).join('')}

`