@extends('Layout.master')

@section('content')

<style>
  .hide-navigation-item {

display: none !important;

}
  </style>
    <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about" style="background-color:#e0e0e0;height:420px">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-5 col-md-12 col-12 d-flex align-items-center" >
                <div class="about-image svg">
                        <img src="{{asset('assets/images/undraw/undraw_summer_jx06.svg')}}" class="img-fluid" alt="svg image">
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 col-12">
                <div class="about-text" style="margin:60px">
               <h3> Bienvenue <span class="mobile-block">à mon profil !</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                        
                    </div>
                    
                </div>

            </div>
        </div>
    </section>






<section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-7 col-md-12 col-12 d-flex align-items-center">
                    <div class="about-text">
                        <h1 class="animated animated-text">
                            <span class="mr-2">Bonjour, je suis</span>
                                <div class="animated-info">
                                <span class="animated-item">Oumayma</span>
                                    <span class="animated-item">Designer</span>
                                    <span class="animated-item">Developer</span>
                                </div>
                        </h1>
                        @if (count($aboutus)>0)

@foreach($aboutus as $abItem)
                        <p>{{ $abItem->sujet }}</p>
                        <p>{!! $abItem->contenu !!}</p>                       
        <div class="custom-btn-group mt-4">
                          <a href="#" class="btn mr-lg-2 custom-btn" download><i class='uil uil-file-alt'></i>Télécharger mon CV</a>
                        </div>
                    </div>
                </div>
                @endforeach
        @else
        <p>k</p>
        @endif

                <div class="col-lg-5 col-md-12 col-12">
                    <div class="about-image svg">
                        <img src="{{asset('assets/images/undraw/undraw_software_engineer_lvl5.svg')}}" class="img-fluid" alt="svg image">
                    </div>
                </div>

            </div>
        </div>
    </section>
<!-- message -->
<div class="card" style="margin:0px 40px 40px;background-color:#f5f5f5;border-color:#ffc200 ">
        <div class="card-body">
            <p style="text-align:center;color:gray">The future belongs to those who believe in the beauty of their dreams. -Eleanor Roosevelt</p>
        </div>
      </div>
@endsection