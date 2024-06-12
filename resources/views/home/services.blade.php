<div class="services_section layout_padding">
   <div id="menu">
         <div class="container">
            <h1 class="services_title">Menu </h1>
            <div class="services_section_2">
               <div class="row">

                  @foreach($post as $post)
                  <div class="col-md-4 mb-5">
                     <h1 class="services_taital">{{$post->title}}</h1>
                     <div><img src="/postimage/{{$post->image}}" class="services_img"></div>
                     <h4>{{$post->description}}</h4>
                     <!-- <div class="btn_main"><a href="#">Read More</a></div> -->
                  </div>
                  @endforeach

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>