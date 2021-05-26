import {React, useState} from 'react';
import './Login.css';
import logo from '../logo.svg';
import { Link, useHistory } from 'react-router-dom';
import  { auth } from './firebase';
import userEvent from '@testing-library/user-event';

function Login() {

    const history = useHistory();
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');

    const signIn = e => {
        e.preventDefault();
        
        auth
            .signInWithEmailAndPassword(email, password)
            .then(auth =>{
                history.push('/')
            })
            .catch(error => alert(error.message))


    }

    const register = e => {
        e.preventDefault();

        auth
        .createUserWithEmailAndPassword(email, password)
        .then((auth) => {
            //it sucessfully cerated a new user with email and password
            if (auth){
                history.push('/');
            }
        })
        .catch(error => alert(error.message))
        
    }


  return (
    <div className="login">
    

        <Link to='/'>
            <img className="login__logo" src={logo} />
        </Link>

        <div className="login__container">
            <h1>Sign-in</h1>

            <form>
                <h5>Email</h5>
                <input type="text" value={email} onChange={e => setEmail(e.target.value)}/>

                <h5>Password</h5>
                <input type="password" value={password} onChange={e => setPassword(e.target.value)} />
                 
                <button className="login__signInButton" type="submit" onClick={signIn} >Sign-in</button>

                <p>by signing this you agree to my conditions of
                     use & sale. plus see our privacy notice, our
                      cookies notice and our interest -based 
                      stuff
                </p>

                <button className="login__registerButton" onClick={register} >Create you Ski-site accout</button>


            </form>





        </div>


    </div>
  );
}

export default Login;
