<div class="bg-base-200 py-5 px-3">
    <div class="grid md:grid-cols-2 grid-cols-1 gap-2">

        <div class="hero h-[300px] rounded-2xl shadow-lg" style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h2 class="mb-5 text-5xl font-bold" >{{__("Faq")}}</h2>
                    <p class="mb-5">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.
                    </p>
                    <a href="{{route('faq')}}" wire:navigate class="btn btn-primary">{{__("Information")}}</a>
                </div>
            </div>
        </div>

        <div class="">
            <div class="collapse collapse-arrow bg-base-200">
                <input type="radio" name="my-accordion-2" checked="checked"/>
                <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
                <div class="collapse-content">
                    <p>hello</p>
                </div>
            </div>
            <div class="collapse collapse-arrow bg-base-200">
                <input type="radio" name="my-accordion-2"/>
                <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
                <div class="collapse-content">
                    <p>hello</p>
                </div>
            </div>
            <div class="collapse collapse-arrow bg-base-200">
                <input type="radio" name="my-accordion-2"/>
                <div class="collapse-title text-xl font-medium">Click to open this one and close others</div>
                <div class="collapse-content">
                    <p>hello</p>
                </div>
            </div>
        </div>


    </div>
</div>
