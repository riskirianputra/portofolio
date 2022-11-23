@inject('about', 'App\models\About')
@extends('visitor-layout.main')

@section('content')
@foreach ($about->all() as $abouts)
    <br>
    <Br>
    <br>      
<section>
    <div class="container">        
        <img width="700" height="900" src="../assets/img/CV2.png" class="scale-with-grid wp-post-image" > 
        <div class="image_wrapper">
            <div class="about">
                <p style="font-size: 30px">  </p> 
                <p style="font-size: 50px"> </p>                        
            </div>             
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <p> </p>                        
            </div>             
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8">
                   
            </div>             
        </div>
    </div>
</section>
@endforeach

@endsection

<style type="text/css">
.about {
     font-family: Arial; 
     font-family: Courier, monospace; 
    font-family: Duru Sans, Verdana, sans-serif; 
    color: #800000	;    
}

body {
    background-image: url("assets/img/motif3.webp");
    background-repeat: no-repeat;
    background-size:cover;    
   }

</style>