 <section>
     <div class="slider" style="color: black;">
         <div class="owl-carousel ">

             @foreach ($slider as $s)
             <div class="item slide1">
                 <img src="{{ asset('/upload/image/'.$s->image) }}" alt="">
                 <div class="caption">
                     <div class="title">{{ $s->title }}</div>
                     <div class="desc">{{ $s->description }}</div>
                 </div>
             </div>
             @endforeach
         </div>
     </div>
 </section>
 
