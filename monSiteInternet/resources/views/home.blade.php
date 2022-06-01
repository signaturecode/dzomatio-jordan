@extends('indexe')
@section("content")  
            <section id="sec-home" class="d-flex align-items-center" data-aos="fade-up">
                <div class="ma-photo">
                  
                </div>
                <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <h1 style=" font-size:30px "> Jordan Dzomatio</h1>
                    <h2 style="text-align: center; font-size:18px ">Graphic design et Developpeur web  passionné par les nouvelles technologie</h2>
                    <a href="{{ route("about") }}" class="btn-about">A propos de moi</a>
                  </div>
            </section> 
          
      @endsection



