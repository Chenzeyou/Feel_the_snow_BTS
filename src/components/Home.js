import React from 'react';
import ski from '../ski.jpeg';
import Product from './Product';
import snowboard from '../snowboard.jpeg';
import './Home.css';


function Home() {
    return(

        <div className="home">
            <div className="home__container">
                <img className="home__image" src={ski}/>

                <div className="home__row">
                    <Product
                        id="1111"
                        title='Ski' 
                        price={20} 
                        image={snowboard}
                        rating={2}
                    />
                    <Product
                        id="112"
                        title='Ski du futur' 
                        price={20} 
                        image={snowboard}
                        rating={2}                    
                    />
                </div>

                <div className="home__row">
                    <Product
                        id="1133"
                        title='ski pour pro' 
                        price={20} 
                        image={snowboard}
                        rating={2}                    
                    />
                    <Product
                        id="1144"
                        title='ski pour tout le monde' 
                        price={20} 
                        image={snowboard}
                        rating={2}                    
                    />
                    <Product
                        id="11141"
                        title='snowboard' 
                        price={20} 
                        image={snowboard}
                        rating={2}                    
                    />
                </div>

                <div className="home__row">
                    <Product
                        id="11111"
                        title='snowboard' 
                        price={20} 
                        image={snowboard}
                        rating={2}                    
                    />               
                </div>


            </div>

        </div>
    )
}

export default Home;