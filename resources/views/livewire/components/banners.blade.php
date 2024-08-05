<div class="shadow-3 ">
    <!-- Swiper -->
    <div class="carousel carousel-start w-full h-[300px]  md:h-[500px]">
            <div id="slide1" class="carousel-item relative w-full glass">
                @switch(app()->getLocale())

                    @case("ar")
                        <img src="{{Storage::url($settings->pc_banner_ar?$settings->pc_banner_ar:$settings->pc_banner)}}"
                             class="md:flex hidden  w-full glass"
                             alt="{{$settings->title}}">
                        <img src="{{Storage::url($settings->mb_banner_ar?$settings->mb_banner_ar:$settings->mb_banner)}}"
                             class="flex md:hidden w-full glass"
                             alt="{{$settings->site_name}}">

                        @break
                    @case("en")
                        <img src="{{Storage::url($settings->pc_banner_en?$settings->pc_banner_en:$settings->pc_banner)}}"
                             class="md:flex hidden  w-full glass"
                             alt="{{$settings->site_name}}">
                        <img src="{{Storage::url($settings->mb_banner_en?$settings->mb_banner_en:$settings->mb_banner)}}"
                             class="flex md:hidden w-full glass"
                             alt="{{$settings->site_name}}">
                        @break
                    @default

                        <img src="{{Storage::url($settings->pc_banner)}}"
                             class="md:flex hidden  w-full glass"
                             alt="{{$settings->site_name}}">
                        <img src="{{Storage::url($settings->mb_banner)}}"
                             class="flex md:hidden w-full glass"
                             alt="{{$settings->site_name}}">
                        @break

                @endswitch
            </div>
    </div>
</div>
