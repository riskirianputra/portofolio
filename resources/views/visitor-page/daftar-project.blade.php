@inject('project', 'App\models\Project')
@inject('aplikasi', 'App\models\Aplikasi')
@extends('visitor-layout.main')

@section('content')
        
@foreach ($projectall as $all)
    <section id="gallery">
        <div class="container">
            <div class="image_frame post-photo-wrapper scale-with-grid images_only">     
                <div class="image_wrapper">
                    <div class="text-center">                              
                        <div class="shadow-lg p-3 mb-5 bg-body rounded ">                                                                                           
                            <img width="960" height="640" src="{{ asset('assets/img/project/'.$all->img) }}" class="scale-with-grid wp-post-image" >   
                        </div>                                                   
                        <div class="post-title ">                                                                                                                              
                                <li class="cat-4">                                  
                                    <a href="{{ route('project.detail',$all->keterangan) }}" class="bahasa">
                                    <p class="md-1 bahasa"> {{ $all->aplikasi->nama_aplikasi  }}</p></a>                         
                                </li>                                                  
                            <h2 class="entry-title projectil" itemprop="headline">
                                {{ $all->bahasa->bahasa_program}}                           
                            </h2>
                        </div>                                                                      
                    </div>   
                </div>
            </div>
        </div>
    </section>
@endforeach

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
    text-decoration: none;
}


</style>