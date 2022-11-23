@inject('project', 'App\models\Project')
@inject('bahasa', 'App\models\Bahasa')
@extends('visitor-layout.main')

@section('content')

<Br>
<Br>
<br>
<Br>
<Br>
<br><Br>
<Br>
<br>

<ul class="nav-menu nav navbar-nav">

</ul>

@foreach ($bahasa->all() as $item)
    <li class="cat-4"><a href="{{ route('project.bahasa',$item->slug) }}">{{$item->bahasa_program}}</a></li>
@endforeach

            @foreach ($projectall as $project)
                <div class="row">
                    <div class="col-lg-2 ">                                                    
                        <a href="{{ route('project.detail',$project->nama_project) }}">                      
                            <img src="{{asset('assets/img/project/'.$project->img)}}" width="600px" height="150px" class="rounded float-start">
                            <br>                                                                             
                        </a>
                    </div>  
                    <div class="col-lg-10 col-md-8">
                        <div class="project__daftar__text_center">
                            <a href="{{ route('project.detail',$project->nama_project) }}">
                                <p>  {{$project->nama_project}}</p> 
                            </a>                                               
                                <span><i class="dashicons dashicons-controls-play"></i> <b>Episode</b> <author itemprop="name">4</author></span> ||
                                <span><i class="dashicons dashicons-controls-play"></i> <b>Bahasa</b> <author itemprop="name">{{ $project->bahasa->bahasa_program }}</author></span> ||                                                             
                        </div>
                    </div>  
                </div>
            <hr>
            @endforeach

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
                        
                        <a href="{{ route('project.detail',$project->nama_project) }}" class="entry-title bahasa" >                      
                           {{ $all->nama_project  }}
                        </a>
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
    font-size: 20px;
}
</style>