<script type="module">
    // Import the functions you need from the SDKs you need
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js";
    // Include firebase database
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/9.0.0/firebase-database.js";

    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    const firebaseConfig = {
        apiKey: "AIzaSyAgwBvmVhSpYyYEv29DaV_ClBFGvWSKmCk",
        authDomain: "chatt-4e2d5.firebaseapp.com",
        projectId: "chatt-4e2d5",
        storageBucket: "chatt-4e2d5.appspot.com",
        messagingSenderId: "433004389339",
        appId: "1:433004389339:web:bab8a05cad1ca582327dfe"
    };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);

    var myName = prompt("Enter your name");

    function sendMessage() {
        // get message
        var message = document.getElementById("messaage").value;

        // save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });

        // prevent form from submitting
        return false;
    }
</script>

<!-- create a form to send message -->
<form onsubmit="return sendMessage();">
    <input id="messaage" placeholder="Enter message" autocomplete="off">
    <input type="submit">
</form>