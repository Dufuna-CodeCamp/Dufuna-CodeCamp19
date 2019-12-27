let nigerian = [
    {
        name:'Basil/scentleaf',
        image:'images/arabian.jpg',
        price:'49.99/gram'
    },
    {
        name:'Better leaf',
        image:'images/dried-thyme.jpg',
        price:'49.99/gram'
    },
    {
        name:'Bush buck/Utazi',
        image:'images/fresh.jpg',
        price:'49.99/gram'
    },
    { 
        name:'Water Leaf/Cariru',
        image:'images/herbals1.jpg',
        price:'199.99/gram'
    } 
];
function load(){
    for (x=0; x<nigerian.length; x++){
    let herbs = `
    <div class="procat">
    <div class="card">
        <img src="${nigerian[x].image}">
        <h3>${nigerian[x].name}</h3>
        <p class="price"> ${nigerian[x].price}</p>
        <p><button>Add to Cart</button></p>
    </div>
    </div>
    `;   
    document.write(herbs);
   }
}
load();