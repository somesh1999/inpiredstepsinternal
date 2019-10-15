@extends('landing.layout.index')
@section('title')
<title>About Us - Inspired Steps</title>
@endsection

@section('content')

<style type="text/css">
	.about-content{
		font-size: 18px;

	}

	.circular--landscape {
position: relative;
  width: 100px;
  height: 100px;
  overflow: hidden;
  border-radius: 50%;
  left:0px;
  right:0px;
  margin: 0px auto;
}

.circular--landscape .img-custom {
  width: auto;
  height: 100%;
  position: absolute;
  left: 0px;
  right: 0px;
}
.text-large{
	font-size: 40px;
}
</style>

 <div class="main-content">
       <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="{{asset('assets/images/bg/bg1.jpg')}}">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
           <div class="col-md-12">
           	<h1 style="color: #3366ff; font-size:50px; text-transform: uppercase; text-align: center; margin-top:70px;">inspired steps</h1>
           </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Section About -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
          

            <div class="col-md-12" style="text-align: center;">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Our <span class="text-theme-colored2">Concept</span></h2>
              <p class="about-content">Inspired Steps is a private, non-governmental agency focused on helping people understand various aspects of East Asia
				at a local level in the areas of language,culture and business.Sewn together under MuviK’s experience in Asia for 8 years,
				Inspired Steps provides an expanding platform for people of all ages and nationalities to discover the rich culture of Korea & Japan.</p>
            </div>

              <div class="col-md-12" style="text-align: center; margin-top: 30px;">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Our <span class="text-theme-colored2">Vision</span></h2>
              <p class="about-content">Inspired Steps provides unique traveling and culture experiences customized to the needs of the individual or group.
				Participants can learn the culture directly from local people so they make the most of their stay in these two fascinating countries.</p>
            </div>

          </div>
        </div>
      </div>
    </section>

 <section id="blog">
      <div class="container pb-40" style="margin-top: -50px;">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel-1col owl-nav-top" data-nav="true">
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb circular--landscape"> 
                       <img src="{{asset('assets/images/blog/1.jpg')}}" alt="" class="img-custom"> 
                      </div>                    
                     
                    </div>
                    <div class="entry-content p-15" style="text-align: center;">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content flip">
                            <h4 class="entry-title text-uppercase font-weight-600 m-0 mt-5">HANNAH BAKER</h4>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5" style="font-size: 19px;">My stay in Seoul was a 10 in every way.</p>
                      <p class="mt-5 text-theme-colored2 text-large"><i class="fa fa-quote-right"></i></p>
                    </div>
                  </article>
                </div>
                <div class="item">
                 <article class="post clearfix mb-30">
                    <div class="entry-header">
                     <div class="post-thumb thumb circular--landscape"> 
                       <img src="{{asset('assets/images/blog/1.jpg')}}" alt="" class="img-custom"> 
                      </div>                  
                     
                    </div>
                    <div class="entry-content p-15" style="text-align: center;">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content flip">
                            <h4 class="entry-title text-uppercase font-weight-600 m-0 mt-5">ALEX MAXIT</h4>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5" style="font-size: 19px;">In Inspired Steps lessons i`ve found the best suited lessons for me and ONLINE !</p>
                        <p class="mt-5 text-theme-colored2 text-large"><i class="fa fa-quote-right"></i></p>
                    </div>
                  </article>
                </div>

                  <div class="item">
                 <article class="post clearfix mb-30">
                    <div class="entry-header">
                     <div class="post-thumb thumb circular--landscape"> 
                       <img src="{{asset('assets/images/blog/1.jpg')}}" alt="" class="img-custom"> 
                      </div>                   
                     
                    </div>
                    <div class="entry-content p-15" style="text-align: center;">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content flip">
                            <h4 class="entry-title text-uppercase font-weight-600 m-0 mt-5">NATASHA OKIWA</h4>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5" style="font-size: 19px;">My vocal skills are better thanks to inspired steps vocal lessons ^^</p>
                        <p class="mt-5 text-theme-colored2 text-large"><i class="fa fa-quote-right"></i></p>
                    </div>
                  </article>
                </div>

                  <div class="item">
                 <article class="post clearfix mb-30">
                    <div class="entry-header">
                    <div class="post-thumb thumb circular--landscape"> 
                       <img src="{{asset('assets/images/blog/1.jpg')}}" alt="" class="img-custom"> 
                      </div>                 
                     
                    </div>
                    <div class="entry-content p-15" style="text-align: center;">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content flip">
                            <h4 class="entry-title text-uppercase font-weight-600 m-0 mt-5">AKAYA (JAPAN)</h4>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5" style="font-size: 19px;">I’ve had a great time doing an intensive Korean course in Seoul university.I was very lucky with Inspired Steps; they were always helpful and lovely, and they really wanted me to like their amazing country.</p>
                        <p class="mt-5 text-theme-colored2 text-large"><i class="fa fa-quote-right"></i></p>
                    </div>
                  </article>
                </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Divider: Funfact -->
    <section>
      <div class="container pt-90 pb-90" style="margin-top:-150px;">
        <div class="row mt-30">
          <div class="col-xs-12 col-sm-6 col-md-6 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-building-o mb-20 text-theme-colored2" style="font-size:80px;"></i>
              <h2 data-animation-duration="2000" data-value="2005" class="animate-number font-38 font-weight-400 mt-0 mb-15 remove">0</h2>
              <h4 class="text-uppercase">Established</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-6 mb-md-50">
            <div class="funfact text-center">
              <i class="fa fa-users mb-20 text-theme-colored2" style="font-size: 80px;"></i>
              <h2 data-animation-duration="2000" data-value="3472" class="animate-number font-38 font-weight-400 mt-0 mb-15">0</h2>
              <h4 class="text-uppercase">Total Subscribers</h4>
            </div>
          </div>
         
        </div>
      </div>
    </section>

    
  </div>
  <!-- end main-content -->



@endsection


@section('scripts')
<script type="text/javascript">
	count=0;
	 var interval=setInterval(function () { 

	 		$(".remove").each(function(){
			    $(this).html($(this).html().replace(/,/g , ''));
			});
	 		count++;

	 		if(count ==5000){
	 			clearInterval(interval);
	 		}
	  }, 1);
</script>

@endsection