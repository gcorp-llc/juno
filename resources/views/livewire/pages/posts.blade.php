<div>
    <section class="bg-white mt-3 py-8 antialiased md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900  sm:text-2xl">{{__("Posts")}}</h2>
            <div class="max-w-md mx-auto">
                <form wire:submit="search">
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" wire:model="query"
                               class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                               placeholder="جستجو"/>
                        <button wire:key.enter="search" wire:loading.attr="disabled" type="submit"
                                class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <span wire:loading.remove wire:target="search">

                        {{__("Search")}}
                        </span>
                            <div role="status" wire:loading wire:target="search">
                                <svg aria-hidden="true"
                                     class="inline w-4 h-4 text-gray-200 animate-spin dark:text-gray-600 fill-purple-600"
                                     viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="currentColor"/>
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentFill"/>
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">

                <div class="mx-auto w-full flex-none  ">

                    <div class="text-center" wire:loading wire:target="search">
                        <div role="status">
                            <svg aria-hidden="true"
                                 class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                 viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor"/>
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill"/>
                            </svg>
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>

                    <div class="" wire:loading.remove wire:target="search">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach($posts as $item)

                                <div
                                    class="p-4 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100  dark:hover:bg-gray-700 hover:shadow-lg">
{{--                                    <a href="{{route('article.show',str_replace(' ', '_', $item->title))}}">--}}
{{--                                        @if($item->cover_photo_path)--}}
{{--                                            <a href="{{route('article.show',str_replace(' ', '_', $item->title))}}">--}}
{{--                                                <img class="rounded-t-lg"--}}
{{--                                                     src="{{Storage::url($item->cover_photo_path)}}"--}}
{{--                                                     alt="{{$item->title}}"/>--}}

{{--                                            </a>--}}
{{--                                        @endif--}}
{{--                                            <a href="{{route('article.show',str_replace(' ', '_', $item->title))}}">--}}
{{--                                            <div class="">--}}
{{--                                                <h5 class="mb-2  font-bold tracking-tight text-gray-900 dark:text-white">{{$item->title}}</h5>--}}
{{--                                                <p class="my-3 text-justify font-normal text-gray-700 dark:text-gray-400">{{Str::limit($item->sub_title,190)}}</p>--}}
{{--                                            </div>--}}
{{--                                            </a>--}}



{{--                                    </a>--}}

                                    <ul class="flex flex-wrap mt-3  items-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                                                <li>
                                                    <a href="{{'/fa/article/'.str_replace(' ','_',$item->getTranslation('title','fa'))}}" class="hover:underline me-4 md:me-6">
                                                        فارسی
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{'/en/article/'.str_replace(' ','_',$item->getTranslation('title','en'))}}" class="hover:underline me-4 md:me-6">English</a>
                                                </li>
                                                <li>
                                                    <a href="{{'/ar/article/'.str_replace(' ','_',$item->getTranslation('title','ar'))}}" class="hover:underline me-4 md:me-6">
                                                        العربی
                                                    </a>
                                                </li>

                                            </ul>

                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="mt-10">
                        {{$posts->links()}}</div>
                </div>
            </div>

            <section class="text-gray-600 body-font" >
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col">
                        <div class="h-1 bg-gray-200 rounded overflow-hidden">
                            <div class="w-24 h-full bg-purple-500"></div>
                        </div>
                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">Space The Final Frontier</h1>
                            <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">Street art subway tile salvia four dollar toast bitters selfies quinoa yuccie synth meditation iPhone intelligentsia prism tofu. Viral gochujang bitters dreamcatcher.</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4" >
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6"  data-aos="fade-down"
                             data-aos-easing="linear"
                             data-aos-duration="1000">
                            <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover_photo_path object-center h-full w-full" src="https://dummyimage.com/1203x503">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Shooting Stars</h2>
                            <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                            <a class="text-purple-500 inline-flex items-center mt-3">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6"  data-aos="fade-down"
                             data-aos-easing="linear"
                             data-aos-duration="1000">
                            <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover_photo_path object-center h-full w-full" src="https://dummyimage.com/1204x504">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">The Catalyzer</h2>
                            <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                            <a class="text-purple-500 inline-flex items-center mt-3">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6"  data-aos="fade-down"
                             data-aos-easing="linear"
                             data-aos-duration="1000">
                            <div class="rounded-lg h-64 overflow-hidden">
                                <img alt="content" class="object-cover_photo_path object-center h-full w-full" src="https://dummyimage.com/1205x505">
                            </div>
                            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">The 400 Blows</h2>
                            <p class="text-base leading-relaxed mt-2">Swag shoivdigoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>
                            <a class="text-purple-500 inline-flex items-center mt-3">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
