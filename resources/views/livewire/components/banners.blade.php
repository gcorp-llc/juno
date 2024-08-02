<div class="shadow-3 ">
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
                {{--                    <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">--}}
                {{--                        <a href="#slide-{{$banner->id +1}}" class="btn btn-circle">❮</a>--}}
                {{--                        <a href="#slide-{{$banner->id -1}}" class="btn btn-circle">❯</a>--}}
                {{--                    </div>--}}
            </div>
        @endforeach

    </div>
</div>
