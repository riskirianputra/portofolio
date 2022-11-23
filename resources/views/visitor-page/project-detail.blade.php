@inject('project', 'App\models\Project')
@inject('aplikasi', 'App\models\Aplikasi')
@extends('visitor-layout.main')
@section('content')

<br>
<Br>
<br>
<br>

        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/index"></i> Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/daftar-projects">Daftar Project</a>
                </li>             
            </ul>
        </nav>


    <section id="gallery">
        <div class="container">
            <div class="image_frame post-photo-wrapper scale-with-grid images_only">     
                <div class="image_wrapper"></div>
                    <div class="text-center">          
                        <h3>{{$project_detail->bahasa->bahasa_program}}</h3>          
                        <div class="shadow-lg p-3 mb-5 bg-body rounded ">                                  
                            <img width="960" height="640" src="{{ asset('assets/img/project/'.$project_detail->img) }}" class="scale-with-grid wp-post-image" >                            
                        </div>      
                        <div class="post-title ">                            
                            <div class="aside-widget">                   
                                <h2 class="entry-title bahasa" itemprop="headline">                 
                                    {{ $project_detail->keterangan  }}
                                </h2>
                            </div>              
                        </div>                                                                        
                    </div>   
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="image_frame post-photo-wrapper scale-with-grid images_only">     
                <div class="image_wrapper"></div>
                    <div class="text-center">          
                        <h3>{{$project_detail->bahasa->bahasa_program}}</h3>          
                        <div class="shadow-lg p-3 mb-5 bg-body rounded ">                                  
                            <img width="960" height="640" src="{{ asset('assets/img/project/'.$project_detail->img2) }}" class="scale-with-grid wp-post-image" >
                        </div>      
                        <div class="post-title ">                            
                            <div class="aside-widget">                   
                                <h2 class="entry-title bahasa" itemprop="headline">                 
                                    {{ $project_detail->keterangan  }}
                                </h2>
                            </div>              
                        </div>                                                                        
                    </div>   
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="image_frame post-photo-wrapper scale-with-grid images_only">     
                <div class="image_wrapper"></div>
                    <div class="text-center">          
                        <h3>{{$project_detail->bahasa->bahasa_program}}</h3>          
                        <div class="shadow-lg p-3 mb-5 bg-body rounded ">                                  
                            <img width="960" height="640" src="{{ asset('assets/img/project/'.$project_detail->img3) }}" class="scale-with-grid wp-post-image" >
                        </div>      
                        <div class="post-title ">                            
                            <div class="aside-widget">                   
                                <h2 class="entry-title bahasa" itemprop="headline">                 
                                    {{ $project_detail->keterangan  }}
                                </h2>
                            </div>              
                        </div>                                                                        
                    </div>   
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="image_frame post-photo-wrapper scale-with-grid images_only">     
                <div class="image_wrapper"></div>
                    <div class="text-center">          
                        <h3>{{$project_detail->bahasa->bahasa_program}}</h3>          
                        <div class="shadow-lg p-3 mb-5 bg-body rounded ">                                  
                            <img width="960" height="640" src="{{ asset('assets/img/project/'.$project_detail->img4) }}" class="scale-with-grid wp-post-image" >
                        </div>      
                        <div class="post-title ">                            
                            <div class="aside-widget">                   
                                <h2 class="entry-title bahasa" itemprop="headline">                 
                                    {{ $project_detail->keterangan  }}
                                </h2>
                            </div>              
                        </div>                                                                        
                    </div>   
                </div>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <div class="image_frame post-photo-wrapper scale-with-grid images_only">     
                <div class="image_wrapper"></div>
                    <div class="text-center">          
                        <h3>{{$project_detail->bahasa->bahasa_program}}</h3>          
                        <div class="shadow-lg p-3 mb-5 bg-body rounded ">                                  
                            <img width="960" height="640" src="{{ asset('assets/img/project/'.$project_detail->img5) }}" class="scale-with-grid wp-post-image" >
                        </div>      
                        <div class="post-title ">                            
                            <div class="aside-widget">                   
                                <h2 class="entry-title bahasa" itemprop="headline">                 
                                    {{ $project_detail->keterangan  }}
                                </h2>
                            </div>              
                        </div>                                                                        
                    </div>   
                </div>
            </div>
        </div>
    </section>   

@endsection

<style>
.tp-bullet {
    width: 15px;
    height: 15px;
    position: absolute;
    background: rgba(255,255,255,.3);
    cursor: pointer;
}

.image_frame, .wp-caption {
    display: block;
    margin: 0;
    border-width: 20px;
    border-style: solid;
    max-width: 100%;
    line-height: 0;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    text-align: center;
    color: white;
}

.image_frame .image_wrapper, .wp-caption img {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.photo .post-desc-wrapper {
    width: 100%;
    float: none;
    text-align: center;
}

.jfaisr {
     width: 100%;

}

.projectil {
     
    font-family:"Duru Sans"; 
    color: #000000;
}

.bahasa {

    font-family: "Lucida Console";   
    color: #DAA520;
    font-size: 30px;
}

.breadcrumb {
   
    padding: 0;
    text-decoration: none;
}

.breadcrumb-item {
    font-weight: bold;
    color: black;
    text-decoration: none;
    
}
</style>
