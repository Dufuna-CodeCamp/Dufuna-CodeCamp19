import React from 'react';

const Cartcount=(props)=>{
return(
    <div className="badge badge-success">
        <button className="btn btn-danger m-5">  item:<span className="badge badge-success">{props.count}</span></button>
        <button className="btn btn-danger m-5">  sumTotal:<span className="badge badge-success">{props.sumTotal}</span></button>
    </div>
)

}
export default Cartcount;
