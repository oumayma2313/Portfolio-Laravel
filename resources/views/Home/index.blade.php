
@extends('Layout.master')
@section('title')
    Home
@endsection
@section('content')

  <!-- HEADER MESSAGE -->

  <section class="about full-screen d-lg-flex justify-content-center align-items-center" id="about" style="background-color:#ffc200;height:420px">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-5 col-md-12 col-12 d-flex align-items-center" >
                <div class="about-image svg">
                        <img src="{{asset('assets/images/undraw/undraw_Dev_focus_re_6iwt.svg')}}" class="img-fluid" alt="svg image">
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 col-12">
                <div class="about-text">
               <h3> Bienvenue <span class="mobile-block">à mon portfolio !</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                        <div class="custom-btn-group mt-4">
                          <a href="#contact" class="btn mr-lg-2 custom-btn"><i class='uil uil-file-alt'></i>Contacter moi</a>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
    </section>
  <!-- ABOUT -->
    
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
                        @if (count($service)>0)

        @foreach($aboutus as $abItem)

                        <p>{{$abItem->sujet}}</p>
                       
                        
                        <div class="custom-btn-group mt-4">
                          <a href="#" class="btn mr-lg-2 custom-btn" ><i class='uil uil-file-alt'></i>Télécharger mon CV</a>
                          <a href="{{route('AboutUs.index')}}" class="btn custom-btn custom-btn-bg custom-btn-link">Plus de détails</a>
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
    <!-- SERVICES -->
<section id="services" style="background-color:#f5f5f5; padding:50px">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  <!------ Include the above in your HEAD tag ---------->
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2 style="color:#ffc200;padding-bottom:30px">Mes services</h2>
                      </div>
                  </div>
  <div class="container">
	<div class="row">
		<div class="container">
	<div class="row">
	    
        @if (count($service)>0)

        @foreach($service as $serviceItem)

        <div class="col-md-4">
    		  <div class="card mb">
          <img class="card-img-top" src="{{ asset('storage/'. $serviceItem->image)}}" alt="Card image cap">
              <div class="card-body mb">

                <h5 class="card-title">{{$serviceItem->titre}}</h5>
                <p class="card-text">{{$serviceItem->sujet}}</p>
                <button type="button" class="btn btn-primary mb" ><a href="{{route('Services.details',$serviceItem->id)}}" style="color:white"  >Plus de détails</a></button>
              </div>
            </div>
        </div>
        @endforeach
        @else
        <p>k</p>
        @endif
	</div>
  </div>
	</div>
  </div>
</section>
    <!-- PROJECTS -->
    <section class="project py-5" id="project" >
        <div class="container">
                
                <div class="row">
                  
                  <div class="col-lg-11 text-center mx-auto col-12">

                      <div class="col-lg-8 mx-auto">
                        <h2>Mes projets !</h2>
                      </div>

                      <div class="owl-carousel owl-theme">
                      @if (count($project)>0)

        @foreach($project as $projectItem)
                        <div class="item">
                          <div class="project-info" style="margin-bottom:10px">
                          <h5 class="card-title"> {{$projectItem->titre}}</h5>
                            <p>{{$projectItem->description}}</p>
                            <a href="{{route('Projects.details',$projectItem->id)}}">Plus de détails</a>

                          </div>
                        </div>
                        @endforeach
        @endif
                        

                      </div>

                  </div>
                </div>
        </div>
    </section>

        <!-- message -->
    <div class="card" style="margin:0px 60px 30px;background-color:#ffc200 ">
  
      <div class="card-body">
      <p style="text-align:center;color:white">The future belongs to those who believe in the beauty of their dreams. -Eleanor Roosevelt</p>
      </div>
     </div>

    <!-- FEATURES -->
    <section class="resume py-5 d-lg-flex justify-content-center align-items-center" id="resume" style="background-color:#f5f5f5">
        <div class="container">
            <div class="row">

             <div class="col-lg-11 text-center mx-auto col-12" >

                <div class="col-lg-8 mx-auto">
                   <h2 style="margin:60px">Mes compétences</h2>
                  </div>
              </div>
                                     <div class="col-lg-6 col-12">
                                       <h2 class="mb-4">Expériences</h2>
                                        
                                          <div class="timeline">
                                          @foreach($competence as $cpItem)
                                        @if ($cpItem->type == "ex")
                                              <div class="timeline-wrapper">
                                                  <div class="timeline-yr">
                                                        <span>{{$cpItem->annee}}</span>
                                                  </div>
                                                  
                                                  <div class="timeline-info">
                                                        <h3>{{$cpItem->lieu}}</h3>
                                                        <p>{!! $cpItem->description !!}</p>
                                                  </div>
                                            </div>
                                            @endif
                                     @endforeach
                                          </div>
                                          
                                     </div>
                                    


              
                                <div class="col-lg-6 col-12">
                                   <h2 class="mb-4 ">Educations</h2>
                                   
                                      <div class="timeline">
                                      @foreach($competence as $cpItem)
                                    @if ($cpItem->type == "ed")
                                          <div class="timeline-wrapper">
                                              <div class="timeline-yr">
                                                    <span>{{$cpItem->annee}}</span>
                                              </div>
                                               <div class="timeline-info">
                                                   <h3>{{$cpItem->lieu}}</h3>
                                                    <p>{!! $cpItem->description !!}</p>
                                               </div>
                                         </div>
                                         @endif
                                 @endforeach
                                      </div>
                                     
                
                                 </div>
                                
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-5 mr-lg-5 col-12">
            <div class="google-map w-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12088.558402180099!2d-73.99373482142036!3d40.75895421922642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855b8fb3083%3A0xa0f9aef176042a5c!2sTheater+District%2C+New+York%2C+NY%2C+USA!5e0!3m2!1sen!2smm!4v1549875377188" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="contact-info d-flex justify-content-between align-items-center py-4 px-lg-5">
                <div class="contact-info-item">
                  <h3 class="mb-3 text-white">Say hello</h3>
                  <p class="footer-text mb-0">064141414</p>
                  <p><a href="mailto:hello@company.co">user@gmail.com</a></p>
                </div>

                <ul class="social-links">
                     <li><a href="#" class="uil uil-dribbble" data-toggle="tooltip" data-placement="left" title="Dribbble"></a></li>
                     <li><a href="#" class="uil uil-instagram" data-toggle="tooltip" data-placement="left" title="Instagram"></a></li>
                     <li><a href="#" class="uil uil-youtube" data-toggle="tooltip" data-placement="left" title="Youtube"></a></li>
                </ul>
            </div>
          </div>

          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Interéssé par une collaboration ? Envoyez moi un message</h2>

              <form action="contact-me" method="post">

                <div class="row">
                  <div class="col-lg-6 col-12">
                  @if(Session::has('success'))
                  <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
              @endif
               {{csrf_field()}}
                    <input type="text" class="form-control" name="name" placeholder="Votre nom" id="name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                  </div>

                  <div class="col-lg-6 col-12">
                    <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                    @error('email')
                 <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
                 @enderror 
                  </div>

                  <div class="col-12">
                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message"></textarea>
                    @error('message')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input type="submit" class="form-control submit-btn" value="Envoyer">
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>

    @endsection