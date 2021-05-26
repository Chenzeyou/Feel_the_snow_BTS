import React from 'react';
import "./Subtotal.css";
import CurrencyFormat from 'react-currency-format';
import { ShoppingBasket } from '@material-ui/icons';
import {useStateValue} from '../StateProvider';
import { getBasketTotal } from '../Reducer';
import { Link } from 'react-router-dom';



function Subtotal() {
    const [{basket}, dispatch] = useStateValue();


    return (
        <div className="subtotal">
            <CurrencyFormat
                renderText={(value) => (
                    <>
                        <p>
                            Subtotal ({basket.length} items): <strong>{value}</strong>
                        </p>
                        <small className="subtotal__gift">
                            <input type="checkbox" />
                             This order contains a gift
                        </small>
                    </>
                )}
                decimalScale={2}
                value={getBasketTotal(basket)}
                displayType={"text"}
                thousandSeparator={true}
                prefix={"£"}
            />
            
            <Link to="/Pay">
                <button>Proceed to Checkout</button>
            </Link>
        </div>
    )
}

export default Subtotal;