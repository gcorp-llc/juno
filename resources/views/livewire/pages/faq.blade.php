<div class=" p-8 mx-auto" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1000">
    <!-- ====== FAQ Section Start -->
    <section
        x-data="
   {
   openFaq1: false,
   openFaq2: false,
   openFaq3: false,
   openFaq4: false,
   openFaq5: false,
   openFaq6: false
   }
   "
        class="relative z-20 overflow-hidden bg-white dark:bg-dark pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
    >
        <div class="container mx-auto">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[520px] text-center lg:mb-20">
               <span class="block mb-2 text-lg font-semibold text-primary">
               FAQ
               </span>
                        <h2
                            class="text-dark dark:text-white mb-4 text-3xl font-bold sm:text-[40px]/[48px]"
                        >
                            Any Questions? Look Here
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            There are many variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq1 = !openFaq1"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq1 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    How long we deliver your first blog post?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq1" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq2 = !openFaq2"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq2 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    How long we deliver your first blog post?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq2" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq3 = !openFaq3"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq3 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    How long we deliver your first blog post?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq3" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq4 = !openFaq4"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq4 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    How long we deliver your first blog post?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq4" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq5 = !openFaq5"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq5 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    How long we deliver your first blog post?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq5" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full p-4 mb-8 bg-white rounded-lg shadow-[0px_20px_95px_0px_rgba(201,203,204,0.30)] dark:shadow-[0px_20px_95px_0px_rgba(0,0,0,0.30)] dark:bg-dark-2 sm:p-8 lg:px-6 xl:px-8"
                    >
                        <button
                            class="flex w-full text-left faq-btn"
                            @click="openFaq6 = !openFaq6"
                        >
                            <div
                                class="bg-primary/5 dark:bg-white/5 text-primary mr-5 flex h-10 w-full max-w-[40px] items-center justify-center rounded-lg"
                            >
                                <svg
                                    :class="openFaq6 && 'rotate-180'"
                                    width="22"
                                    height="22"
                                    viewBox="0 0 22 22"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M11 15.675C10.7937 15.675 10.6219 15.6062 10.45 15.4687L2.54374 7.69998C2.23436 7.3906 2.23436 6.90935 2.54374 6.59998C2.85311 6.2906 3.33436 6.2906 3.64374 6.59998L11 13.7844L18.3562 6.53123C18.6656 6.22185 19.1469 6.22185 19.4562 6.53123C19.7656 6.8406 19.7656 7.32185 19.4562 7.63123L11.55 15.4C11.3781 15.5719 11.2062 15.675 11 15.675Z"
                                        fill="currentColor"
                                    />
                                </svg>
                            </div>
                            <div class="w-full">
                                <h4
                                    class="mt-1 text-lg font-semibold text-dark dark:text-white"
                                >
                                    How long we deliver your first blog post?
                                </h4>
                            </div>
                        </button>
                        <div x-show="openFaq6" class="faq-content pl-[62px]">
                            <p
                                class="py-3 text-base leading-relaxed text-body-color dark:text-dark-6"
                            >
                                It takes 2-3 weeks to get your first blog post ready. That
                                includes the in-depth research & creation of your monthly
                                content marketing strategy that we do before writing your
                                first blog post, Ipsum available .
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 z-[-1]">
            <svg
                width="1440"
                height="886"
                viewBox="0 0 1440 886"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    opacity="0.5"
                    d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z"
                    fill="url(#paint0_linear)"
                />
                <defs>
                    <linearGradient
                        id="paint0_linear"
                        x1="1308.65"
                        y1="1142.58"
                        x2="602.827"
                        y2="-418.681"
                        gradientUnits="userSpaceOnUse"
                    >
                        <stop stop-color="#3056D3" stop-opacity="0.36" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
                        <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- ====== FAQ Section End -->

    <section class="px-4 pt-20 pb-24 mx-auto max-w-7xl md:px-2">
        <h1 class="mb-12 text-xl font-bold text-left md:text-3xl md:text-center">Frequently Asked Questions</h1>
        <div class="flex items-start justify-start mb-12">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
            </svg>
            <div>
                <p class="mt-0 mb-3 font-semibold text-gray-900">What is accessibility?</p>
                <p class="text-gray-600">
                    This article starts off the module with a good look at what accessibility is — this includes what groups of people we need to consider and why, what tools different people use to interact with
                    the web, and how we can make accessibility part of our web development workflow.
                </p>
            </div>
        </div>
        <div class="flex items-start justify-start mb-12">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
            </svg>
            <div>
                <p class="mt-0 mb-3 font-semibold text-gray-900">CSS and JavaScript accessibility best practices?</p>
                <p class="text-gray-600">
                    CSS and JavaScript, when used properly, also have the potential to allow for accessible web experiences, but if misused they can significantly harm accessibility. This article outlines some
                    CSS and JavaScript best practices that should be considered to ensure that even complex content is as accessible as possible.
                </p>
            </div>
        </div>
        <div class="flex items-start justify-start mb-12">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="flex-none w-6 h-6 mr-4 text-gray-700" aria-hidden="true">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                ></path>
            </svg>
            <div>
                <p class="mt-0 mb-3 font-semibold text-gray-900">WAI-ARIA basics, WAI-ARIA basics, WAI-ARIA basics, WAI-ARIA basics?</p>
                <p class="text-gray-600">
                    Following on from the previous article, sometimes making complex UI controls that involve unsemantic HTML and dynamic JavaScript-updated content can be difficult. WAI-ARIA is a technology that
                    can help with such problems by adding in further semantics that browsers and assistive technologies can recognize and use to let users know what is going on. Here we'll show how to use it at a
                    basic level to improve accessibility.
                </p>
            </div>
        </div>
        <div class="text-center">
            <a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Howto/CSS_FAQ" target="_blank" class="btn btn-light btn-lg btn-icon">
                <span>Learn more on the MDN docs</span>
                <svg viewBox="0 0 20 20" fill="currentColor" class="ml-3">
                    <path
                        fill-rule="evenodd"
                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </a>
        </div>
    </section>


    <div class="rounded-md shadow-md sm:w-96 dark:bg-gray-50 dark:text-gray-800">
        <div class="flex items-center justify-between p-3">
            <div class="flex items-center space-x-2">
                <img src="https://source.unsplash.com/50x50/?portrait" alt="" class="object-cover object-center w-8 h-8 rounded-full shadow-sm dark:bg-gray-500 dark:border-gray-300">
                <div class="-space-y-1">
                    <h2 class="text-sm font-semibold leading-none">leroy_jenkins72</h2>
                    <span class="inline-block text-xs leading-none dark:text-gray-600">Somewhere</span>
                </div>
            </div>
            <button title="Open options" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
                    <path d="M256,144a64,64,0,1,0-64-64A64.072,64.072,0,0,0,256,144Zm0-96a32,32,0,1,1-32,32A32.036,32.036,0,0,1,256,48Z"></path>
                    <path d="M256,368a64,64,0,1,0,64,64A64.072,64.072,0,0,0,256,368Zm0,96a32,32,0,1,1,32-32A32.036,32.036,0,0,1,256,464Z"></path>
                    <path d="M256,192a64,64,0,1,0,64,64A64.072,64.072,0,0,0,256,192Zm0,96a32,32,0,1,1,32-32A32.036,32.036,0,0,1,256,288Z"></path>
                </svg>
            </button>
        </div>
        <img src="https://source.unsplash.com/301x301/?random" alt="" class="object-cover object-center w-full h-72 dark:bg-gray-500">
        <div class="p-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-3">
                    <button type="button" title="Like post" class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
                            <path d="M453.122,79.012a128,128,0,0,0-181.087.068l-15.511,15.7L241.142,79.114l-.1-.1a128,128,0,0,0-181.02,0l-6.91,6.91a128,128,0,0,0,0,181.019L235.485,449.314l20.595,21.578.491-.492.533.533L276.4,450.574,460.032,266.94a128.147,128.147,0,0,0,0-181.019ZM437.4,244.313,256.571,425.146,75.738,244.313a96,96,0,0,1,0-135.764l6.911-6.91a96,96,0,0,1,135.713-.051l38.093,38.787,38.274-38.736a96,96,0,0,1,135.765,0l6.91,6.909A96.11,96.11,0,0,1,437.4,244.313Z"></path>
                        </svg>
                    </button>
                    <button type="button" title="Add a comment" class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
                            <path d="M496,496H480a273.39,273.39,0,0,1-179.025-66.782l-16.827-14.584C274.814,415.542,265.376,416,256,416c-63.527,0-123.385-20.431-168.548-57.529C41.375,320.623,16,270.025,16,216S41.375,111.377,87.452,73.529C132.615,36.431,192.473,16,256,16S379.385,36.431,424.548,73.529C470.625,111.377,496,161.975,496,216a171.161,171.161,0,0,1-21.077,82.151,201.505,201.505,0,0,1-47.065,57.537,285.22,285.22,0,0,0,63.455,97L496,457.373ZM294.456,381.222l27.477,23.814a241.379,241.379,0,0,0,135,57.86,317.5,317.5,0,0,1-62.617-105.583v0l-4.395-12.463,9.209-7.068C440.963,305.678,464,262.429,464,216c0-92.636-93.309-168-208-168S48,123.364,48,216s93.309,168,208,168a259.114,259.114,0,0,0,31.4-1.913Z"></path>
                        </svg>
                    </button>
                    <button type="button" title="Share post" class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
                            <path d="M474.444,19.857a20.336,20.336,0,0,0-21.592-2.781L33.737,213.8v38.066l176.037,70.414L322.69,496h38.074l120.3-455.4A20.342,20.342,0,0,0,474.444,19.857ZM337.257,459.693,240.2,310.37,389.553,146.788l-23.631-21.576L215.4,290.069,70.257,232.012,443.7,56.72Z"></path>
                        </svg>
                    </button>
                </div>
                <button type="button" title="Bookmark post" class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-5 h-5 fill-current">
                        <path d="M424,496H388.75L256.008,381.19,123.467,496H88V16H424ZM120,48V456.667l135.992-117.8L392,456.5V48Z"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-wrap items-center pt-3 pb-1">
                <div class="flex items-center space-x-2">
                    <div class="flex -space-x-1">
                        <img alt="" class="w-5 h-5 border rounded-full dark:bg-gray-500 dark:border-gray-100" src="https://source.unsplash.com/40x40/?portrait?1">
                        <img alt="" class="w-5 h-5 border rounded-full dark:bg-gray-500 dark:border-gray-100" src="https://source.unsplash.com/40x40/?portrait?2">
                        <img alt="" class="w-5 h-5 border rounded-full dark:bg-gray-500 dark:border-gray-100" src="https://source.unsplash.com/40x40/?portrait?3">
                    </div>
                    <span class="text-sm">Liked by
					<span class="font-semibold">Mamba UI</span>and
					<span class="font-semibold">86 others</span>
				</span>
                </div>
            </div>
            <div class="space-y-3">
                <p class="text-sm">
                    <span class="text-base font-semibold">leroy_jenkins72</span>Nemo ea quasi debitis impedit!
                </p>
                <input type="text" placeholder="Add a comment..." class="w-full py-0.5 dark:bg- border-none rounded text-sm pl-0 dark:text-gray-800" spellcheck="false" data-ms-editor="true">
            </div>
        </div>
    </div>

</div>
