var nigerian_herbs = [
    {
        name:'Basil/scentleaf',
        image:'images/arabian.jpg',
        price:'49.99/gram'
    },
    {
        name: 'Better leaf',
        image: 'images/dried-thyme.jpg',
        price: '49.99/gram'
    },
    {
        name: 'Bush buck/Utazi',
        image: 'images/fresh.jpg',
        price: '49.99/gram'
    },
    { 
        name: 'Water Leaf/Cariru',
        image: 'images/herbals1.jpg',
        price: '199.99/gram'
    } 
];
var myContent = document.getElementById ("btn");
myContent.addEventListener ("click", function(){
    load()
});
function load(){
    for (x=0; x<nigerian_herbs.length; x++){
    var herbs = `
    <div class="procat">
    <div class="card">
        <img src="${nigerian_herbs[x].image}">
        <h3>${nigerian_herbs[x].name}</h3>
        <p class="price"> ${nigerian_herbs[x].price}</p>
        <p><button>Add to Cart</button></p>
    </div>
    </div>
    `;   
    document.write(herbs);
   };
}