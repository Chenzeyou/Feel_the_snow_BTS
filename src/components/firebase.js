import  firebase  from "../../node_modules/firebase";

// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDDApqr6lX-29a6M8FYPDb-GWkFoCbBFYw",
  authDomain: "challenge-c16f5.firebaseapp.com",
  databaseURL: "https://challenge-c16f5.firebaseio.com",
  projectId: "challenge-c16f5",
  storageBucket: "challenge-c16f5.appspot.com",
  messagingSenderId: "1086340303767",
  appId: "1:1086340303767:web:8939737bd297b49a8492d2",
  measurementId: "G-45L2D21BX0"
};
  
  const firebaseApp = firebase.initializeApp(firebaseConfig);

  const db = firebaseApp.firestore();
  const auth = firebase.auth();

  export {db, auth}; 