<section class="text-gray-600 body-font" >
    <div class="container px-5 py-24 mx-auto flex flex-wrap">
        <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
            <div class="w-full sm:p-4 px-4 mb-6">
                <h1 class="title-font font-medium text-3xl mb-2 text-gray-900">{{$settings->site_name}}</h1>
                <div class="leading-relaxed">{{$settings->info}}</div>
            </div>

        </div>
        <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">

            @if($settings->teaser_video)
                <video class="object-cover object-center w-full h-full" controls poster="{{Storage::url($settings->teaser_cover)}}" preload="none">
                    <source src="{{Storage::url($settings->teaser_video)}}" type="video/mp4">

                    Your browser does not support the video tag.
                </video>
            @else
            <img class="object-cover object-center w-full h-full" src="{{Storage::url($settings->teaser_cover)}}" alt="{{$settings->site_name}}" lasy/>
            @endif
        </div>
    </div>
</section>
