
<section id="topbar">
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../assets/img/RR.png" width="50px" /></a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="navbar-collapse collapse w-100" id="navigation">                                                        
                <ul class="nav navbar-nav ms-auto w-100 justify-content-end">             
                </ul>     
                <ul class="nav navbar-nav ms-auto w-100 justify-content-end ">
                    <li class="nav-item active">                    
                        <a class="text" aria-current="page" href="landing"> HOME </a>
                    </li>                  
                    <li class="nav-item active">
                        <a class="text px-0  mx-3 nav-active" href="/gallerys"> GALLERY </a>
                    </li>                   
                    <li class="nav-item active">
                        <a class="text px-0  mx-3 nav-active" href="/daftar-projects"> PROJECT </a>
                    </li>
                    <li class="nav-item">
                        <a class="text px-0  mx-3 nav-active" href="/abouts"> ABOUT ME </a>
                    </li>
                    <li class="nav-item">
                        <a class="text px-0  mx-3 nav-active" href="/contacts"> CONTACT </a>
                    </li>      
                    <li class="nav-item">                                                 
                        <a href="/login" class="text px-0  mx-3 nav-active"> LOG IN </a>
                    </li>
                </ul>
            </div>   
        </div>
    </nav>
</section>

<style>

.text {
    text-decoration: none;
    color: #708090!important; 
    font-size: 15px; 
    padding: 15px;  
}

.text:after{
    position: absolute;
    bottom: 0;
    left: 0;
    margin: auto;    
    color: transparent;
    width: 0%;
    content: '';
    height: 3px;
    transition: all 0.5s;
}

.text:hover{
    color: #DAA520!important;
    border-bottom: 2px solid;
}

.text:hover::after {
    width: 100%;
}

.text.active-link,
.text.active-link::after{
    color: #ec6643!important;
    width: 100%;
}


</style>