@inject('about', 'App\models\About')
@extends('visitor-layout.main')
@section('content')


<section id="About">
    <div class="container">
            <img width="200" height="150" src="{{ asset('assets/img/RR.png') }}" class="scale-with-grid wp-post-image" alt="">
        <div class="image_wrapper">
            <div class="about">                          
            </div>             
        </div>
    </div>      

    <div class="container">      
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col-md-4 col-md-offset-4">            
                <h4>Contact Us</h4>
                <p>Have any question or feedback?</p>
                    @if(Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
                    @endif
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" placeholder="you name" />                        
                        <label for="email">Email</label>
                        <input class="form-control" type="email" name="email" placeholder="you email address" />                        
                        <label for="message">Message</label>
                        <textarea class="form-control" name="message" id="" placeholder="your message" cols="30" rows="10"></textarea>
                        <br><br>
                        <button class="btn btn-danger btn-block">Send</button>
                    <form>
                </div>  
                <div></div>
                <div class="okewa-chat">
                    <div class="list-cs_0" href="#cs_0" data-no="">                               
                        <div class="textwidget"><div><p style="font-size: 20px; line-height: 40px;"> 
                            <a href="#" class="text  mx-3 nav-active" target="_blank"><i class="fa-brands fa-whatsapp"></i>&nbsp; 085274393948</a> <br>
                            <a href="#" class="text  mx-3 nav-active" target="_blank"><i class="fa-brands fa-instagram"></i> &nbsp; @riskirian__</a> <br>
                            <a href="#" class="text  mx-3 nav-active" target="_blank"><i class="fa-brands fa-google"></i> &nbsp; riskirianputra@gmail.com</a> <br>
                            <a href="#" class="text  mx-3 nav-active" target="_blank"><i class="fa-brands fa-facebook"></i>&nbsp; RISKI RIAN PUTRA</a> <br>                                                                                    
                            <a href="https://github.com/riskirianputra" class="text  mx-3 nav-active" target="_blank"><i class="fa-brands fa-github"></i>&nbsp; riskirianputra</a>                                    
                        </div>
                    </div>  						                        
                </div>            
            </div>
        </div>
    </div>
</section>
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