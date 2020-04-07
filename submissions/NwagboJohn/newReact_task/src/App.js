import React,{Component} from 'react';
import Header from './Header';
import DisplayProduct from './displayproduct';
import ProductList from './productlist';
import Cartdisplay from './cartDisplay';
import styles from './App.css';
import 'bootstrap/dist/css/bootstrap.css';
import Cartcount from './cartCount';

class App extends Component{
  constructor(props){
    super(props);
    this.state={
      counts:0,
      sumTotal:0,
      cart:[]
    }
  };
  createProduct=(item)=>{
  return(
    <DisplayProduct
    key={item.id}
    name={item.name}
    imageUrl={item.imageUrl}
    price={item.price}
    clicks={()=>this.handleclick(item)}
    />
    )
  };
   handleclick =(item)=>{this.setState(function(state) {
  return {
        counts: state.counts+1,
        cart:[...state.cart,item],
        sumTotal:state.sumTotal+item.price
      };
    })
};
  handleDelete=(item)=>{
    let newItem=this.state.cart.filter(cart=>{
      return cart!==item;
    })
    this.setState(function(state){
      return{
        counts:state.counts-1,
        sumTotal:state.sumTotal-item.price,
        cart:[...state,newItem]

      }
    })
  }


  render(){
    return(
            <div>
                  <Header />
                  <Cartcount
                  count={this.state.counts}
                  sumTotal={this.state.sumTotal}
                 />

            <div>
                {this.state.cart.map(item=>{
                  return(
                   <Cartdisplay
                      key={item.id}
                      imageUrl={item.imageUrl}
                      name={item.name}
                      price={item.price}
                      clicked={()=>this.handleDelete(item)}
                  />
        )}
      )
    }
            </div>
                  {ProductList.map(this.createProduct)}
            </div>
  )
  }
  }

export default App;
