@extends('layouts.app')
<script src="https://cdn.firebase.com/libs/firebaseui/4.1.0/firebaseui.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/4.1.0/firebaseui.css" />
@section('content')

<body class="register-page">





    <script>
        var config = {
            apiKey: "AIzaSyB3n9RSuF0FWCOoEtPeRvoh0l6idayhf2E",
            authDomain: "c-sat-17577.firebaseapp.com",
            databaseURL: "https://c-sat-17577.firebaseio.com",
            projectId: "c-sat-17577",
            storageBucket: "c-sat-17577.appspot.com",
            messagingSenderId: "918338881553"
            };
            firebase.initializeApp(config);



        
    </script>
</body>
@endsection
