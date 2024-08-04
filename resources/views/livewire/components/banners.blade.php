<div class="shadow-3 ">
    <!-- Swiper -->
    <div class="carousel carousel-start w-full h-[330px]  md:h-[500px]">
        @foreach($banners as $banner)
            <div id="slide1-{{$banner->id}}" class="carousel-item relative w-full glass">
                @switch(app()->getLocale())

                    @case("ar")

                        <img src="{{Storage::url($banner->ar_pc_cover?$banner->ar_pc_cover:$banner->fa_pc_cover)}}"
                             class="md:flex hidden  w-full glass"
                             alt="{{$banner->title}}">
                        <img src="{{Storage::url($banner->ar_mb_cover?$banner->ar_mb_cover:$banner->fa_mb_cover)}}"
                             class="flex md:hidden w-full glass"
                             alt="{{$banner->title}}">

                        @break
                    @case("en")
                        <img src="{{Storage::url($banner->en_pc_cover?$banner->en_pc_cover:$banner->fa_pc_cover)}}"
                             class="md:flex hidden  w-full glass"
                             alt="{{$banner->title}}">
                        <img src="{{Storage::url($banner->en_mb_cover?$banner->en_mb_cover:$banner->fa_mb_cover)}}"
                             class="flex md:hidden w-full glass"
                             alt="{{$banner->title}}">
                        @break
                    @default

                        <img src="{{Storage::url($banner->fa_pc_cover)}}"
                             class="md:flex hidden  w-full glass"
                             alt="{{$banner->title}}">
                        <img src="{{Storage::url($banner->fa_mb_cover)}}"
                             class="flex md:hidden w-full glass"
                             alt="{{$banner->title}}">
                        @break

                @endswitch
            </div>
        @endforeach

    </div>
</div>
