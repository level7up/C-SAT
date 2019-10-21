@extends('layouts.app')

@section('content')

<h2>STUDENT PROFILE</h2>












<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        var config = {
            apiKey: "AIzaSyB3n9RSuF0FWCOoEtPeRvoh0l6idayhf2E",
            authDomain: "c-sat-17577.firebaseapp.com",
            databaseURL: "https://c-sat-17577.firebaseio.com",
            projectId: "c-sat-17577",
            storageBucket: "c-sat-17577.appspot.com",
            messagingSenderId: "918338881553"
            };
            firebase.initializeApp(config);

        var database = firebase.database();
        var lastIndex = 0;

        firebase.database().ref('students').on('value', function(snapshot) {
            
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                        <td><h5 class="btn-link btn-success">'+ value.id +'</h5></td>\
                        <td><img style="width:50px" class="rounded-circle" src="'+value.imageurl+'">\
                        <a class="btn-link btn-primary">'+ value.fullname +'</a></td>\
                        <td>'+ value.email +'</td>\
                        </tr>');
                }
                lastIndex = index;
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');
        });
     });
</script>

@endsection
