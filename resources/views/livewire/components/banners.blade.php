<div class="shadow-3 ">
    <!-- Swiper -->
    <div class="carousel carousel-start w-full h-[300px]  md:h-[500px]">
        <div id="slide1" class="carousel-item relative w-full glass">

            <img src="{{Storage::url($settings->pc_banner)}}"
                 class="md:flex hidden  w-full glass"
                 alt="{{$settings->site_name}}">
            <img src="{{Storage::url($settings->mb_banner)}}"
                 class="flex md:hidden w-full glass"
                 alt="{{$settings->site_name}}">

        </div>
    </div>
</div>
