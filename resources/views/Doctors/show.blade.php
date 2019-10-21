@extends('layouts.app')
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="./assets/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->

@section('content')
   

    <div style="padding-top:200px;" class="col-lg-15 col-md-15 ml-auto mr-auto">
        <div class="card card-coin card-plain">
            <div style="text-align:center" class="card-header">
                <div id="imgimport"></div>
                <div id="nameimport"></div>
                <h2 class="btn-link btn-info" id="val"></h2>
            </div>
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary justify-content-center">
                <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#linka">
                    Main info
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#linkb">
                    Chart
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#linkc">
                    Rates and Reviews
                </a>
                </li>
            </ul>
            <div class="tab-content tab-subcategories">
                <div class="tab-pane active" id="linka">
                    <div class="table-responsive">
                        
                        <div id="tbody1">
                        
                        </div>
                        
                    </div>
                </div>
                <div class="tab-pane" id="linkb">
                    <div class="row">
                        <canvas id="pie-chart" width="500" height="150"></canvas>

                    </div>
                </div>
                <div class="tab-pane" id="linkc">
                    <div class="table-responsive">

                        <table class="table tablesorter " id ="table" >
                            <thead>
                                <tr>
                                   <th>User</th>
                                   <th>Review</th>
                                   <th>Rate</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
        </div>


        
        </div>

  
<hr>







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
        var url = window.location.pathname;
        var fd = url.substring(url.lastIndexOf('/') + 1);
        var lastIndex = fd ;
        firebase.database().ref('com/phds').child(lastIndex).once('value').then(function(snapshot) {
                var value = snapshot.val();
            var htmls = [];
                if(value) {
                    htmls.push('<div class="div3">\
                    <h1>'+ value.Title +'</h1>\
                    <h2>'+ value.Email +'</h2>\
                    <h3>'+ value.Department +'</h3>\
                    <div/></div>');
                };  	
            var imgs =[];
                if (value){
                    imgs.push('<img height="150px" class="rounded-circle" src="'+value.image+'">');
                }
            var name =[];
            if (value){
                name.push('<h2 class="btn-link btn-primary ">'+ value.fullname +'</h2>');
            }   
            $('#nameimport').html(name);
            $('#imgimport').html(imgs);
            $('#tbody1').html(htmls);
            $("#submitUser").removeClass('desabled');
        });

        // ********* Get Reviews Data **********

        firebase.database().ref().child('/Reviews/'+ lastIndex).once('value').then(function(snapshot) {
            
            var value = snapshot.val();
            var htmls = [];
            $.each(value, function(index, value){
                if(value) {
                    htmls.push('<tr>\
                        <td><h5 class="btn-link btn-primary">'+ value.name +'</h5></td>\
                        <td><h5 class="btn-link btn-success">'+ value.content +'</h5></td>\
                        <td>'+ value.rate +'</td>\
                        </tr>');
                }
                var rate2=value.rate;   
                lastIndex = index;
            $('#tbody').html(htmls);
            $("#submitUser").removeClass('desabled');
        });
            //********** Get The Average ***********

            var table  = document.getElementById("table"), avgVal , sumVal=0,rowCout = table.rows.length-1;
                  for (var i =1 ; i < table.rows.length; i++)
                     {
                     sumVal = sumVal + parseFloat( table.rows[i].cells[2].innerHTML);
                    }
                    var Average = parseFloat (sumVal/(rowCout)).toFixed(1)
                document.getElementById("val").innerHTML =Average ;

                // ************ The Charts ***********
                var Positive =Average;
                var Nega = 5-Average;
                var Negative = parseFloat(Nega).toFixed(1);
                new Chart(document.getElementById("pie-chart"), {
                    
                type: 'pie',
                data: {
                    labels: ["Positive","Negative"],
                    datasets: [{
                        label: "Population (tens)",
                        backgroundColor: ["#3e95cd","#c45850"],
                        data: [Positive,Negative]
                    }]
                },
                options: {
                title: {
                    display: true,
                    text: 'Rates'
                }
                }
                });
            
            
        });

         















                
    
    </script>

                
@endsection