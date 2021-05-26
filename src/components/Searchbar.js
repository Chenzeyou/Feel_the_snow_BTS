import React from 'react';
import SearchIcon from '@material-ui/icons/Search';
import {useState} from 'react';
import './Header.css';
import Home from './Home';


function Searchbar() {

    const [searchTerm, setSearchTerm] = useState ('')

    return (
        <div className="header__search">
            <input 
                className="header__searchInput" 
                type="text" 
                placeholder="Look for a product" 
                onChange= 
                {
                    event => {
                    setSearchTerm(event.target.value)
                    }
                }
            />
                <SearchIcon className="header__searchIcon" />
            

           { /*
            {
                Home.filter((val) => {
                    if (searchTerm == "") {
                        return val
                    } else if (val.title.toLowerCase().includes(searchTerm.toLowerCase())) {
                        return val
                    }
                }).map((val, Key) => {
                    return (
                        <div Key={Key}>
                            <p>{val.title}</p>
                        </div>
                    );
                })}
            */}

    </div>
    )
}

export default Searchbar;