
let products = [
  {
      name: "Red-Snapper",
      imageUrl:"css/Images/red-snapper.jpg",
      price:"$50 / kg"

  },

  {
      name: "Shinynose",
      imageUrl: "css/Images/shinynose.jpg",
      price: "$50 / kg"
  },

  {
    name: "Croaker fish",
    imageUrl: "css/Images/Croaker fish.jpg",
    price: "$50 / kg"
},

  {
      name: "Mackrel Fish",
      imageUrl: "css/Images/Fresh-Fish-on-Ice.jpg",
      price: "$50 / kg"

  }

];

let button = document.getElementById("btn");
let content = document.getElementById("product-box");

button.addEventListener("click", function(){
    displayProducts();
});

function displayProducts(){
    
    
      products.forEach(element => {
          let products = `
      <ul class="product-showcase">
          <li class="product-box" id="product-box">
              <figure class="product">
                  <img src="${element.imageUrl}"/><figcaption class="caption"> ${element.name} </figcaption>
                  <figcaption class="caption2">${element.price}</figcaption>
              </figure>
          </li>
      </ul>
         
         `;
            
         content.innerHTML += products;   
      });

      button.disabled =true;
        

    }
    
        
    
    

