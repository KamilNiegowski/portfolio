@php use App\Models\TextWidget; @endphp
        <!-- ====== Hero Section Start-->
<div id="hero-text" class="relative pt-[60px] lg:pt-[80px] pb-[110px] ">
  <div class="container">
    <div class="flex flex-wrap -mx-4">
      <div class="w-full lg:w-5/12 px-4">
        <div class="hero-content">
          <h1 class="text-dark dark:text-white font-bold text-4xl sm:text-[42px] lg:text-[40px] xl:text-[42px] max-w-[350px] leading-snug mb-6">
            {{TextWidget::getTitle('hero-text')}}
          </h1>
          <p class="text-base mb-8 max-w-[520px]">
            {!! TextWidget::getContent('hero-text') !!}</p>
          <ul class="flex flex-wrap items-center">
            <li>
              <x-button-link href="#portfolio" variant="primary" class="rounded-lg">
                Moje projekty
              </x-button-link>
            </li>
          </ul>
          <div class="clients pt-16">
            <h6 class="font-normal text-normal flex items-center text-body-color  mb-4">
              Obserwuj mnie w mediach społecznościowych
              <span class="w-8 h-[-1px] bg-body-color lg:inline-blockml-2"></span>
            </h6>
            <x-social-icons></x-social-icons>
          </div>
        </div>
      </div>
      <div class="hidden lg:block lg:w-1/12 px-4"></div>
      <div class="w-full lg:w-6/12 px-4">
        <div class="lg:text-right lg:ml-auto">
          <div class="relative lg:inline-block z-10 pt-11 lg:pt-0">
            <img
                    src="storage/{{ TextWidget::getImage('hero-text')}}"
                    alt="hero"
                    class="max-w-full lg:ml-auto rounded-br-[30px] rounded-tl-[30px]"
            />
            <span class="absolute -left-8 -bottom-8 z-[-1]">
                          <svg
                                  width="93"
                                  height="93"
                                  viewBox="0 0 93 93"
                                  fill="none"
                                  xmlns="http://www.w3.org/2000/svg"
                          >
                            <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"/>
                            <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"/>
                          </svg>
                        </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ====== Hero Section End-->
