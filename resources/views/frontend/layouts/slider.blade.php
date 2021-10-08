 <section>
     <div class="slider">
         <div class="owl-carousel ">
            @foreach ($slider as $s)
            <div class="item slide1">
                <div class="overlay"></div>
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
