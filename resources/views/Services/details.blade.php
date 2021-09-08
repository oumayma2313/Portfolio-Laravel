@extends('Layout.master')
@section('title')
    Services
@endsection
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
                        <img src="{{asset('assets/images/undraw/undraw_services_5tv9.svg')}}" class="img-fluid" alt="svg image">
                    </div>
                </div>

                <div class="col-lg-7 col-md-12 col-12">
                <div class="about-text" style="margin:100px">
               <h3> Voila <span class="mobile-block">mon service :  {{$service->titre}}</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor.</p>
                        
                    </div>
                    
                </div>

            </div>
        </div>
    </section>



<section class="resume py-5 d-lg-flex justify-content-center align-items-center" style="margin-top:30px">
<div class="container" >
    

      
  <div class="card">  
    
  <div class="row no-gutters">
            <div class="col-auto">
                <img src="{{ asset('storage/'. $service->image)}}" class="img-fluid" alt="" style="height:100%">
            </div>
            <div class="col">

               <div class="card-block px-2" style="padding:20px ">
      <h3>{{$service->titre}}</h3>
      <p class="card-text">{{$service->sujet}}</p>
      <p class="card-text">{{$service->contenu}}</p>
    </div>
</div>
    <div class="card-footer">
        <a href="#"><small class="text-muted">Prix : {{$service->prix}} MAD</small></a>
    </div>
  </div>
  </div>


</section>
 <!-- message -->
 <div class="card" style="margin:60px;background-color:#f5f5f5;border-color:#ffc200 ">
        <div class="card-body">
            <p style="text-align:center;color:gray">The future belongs to those who believe in the beauty of their dreams. -Eleanor Roosevelt</p>
        </div>
      </div>
@endsection