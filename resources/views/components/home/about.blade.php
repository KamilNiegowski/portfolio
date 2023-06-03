@php use App\Models\TextWidget; @endphp
        <!-- ====== About Section Start-->
<section id="about-me" class=" pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] ">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:-mx-4">
            <div class="py-3 sm:py-4">
              <img
                      src="{{ url('/img/dodge-demon.webp') }}"
                      alt=""
                      class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                      src="{{ url('/img/ford-mustang.webp') }}"
                      alt=""
                      class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                      src="{{ url('/img/audi-rs6-r.webp') }}"
                      alt=""
                      class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        <blockquote class="text-sm text-[#9ca3af] italic py-2 px-3 border-l-4 border-amber-500">
                            "Wszystko jest osiągalne dzięki ciężkiej pracy"
                        </blockquote>
                    </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            {{TextWidget::getTitle('about-me')}}
          </h2>
          <p class="text-base text-justify dark:text-gray-400 mb-8">
            {!! TextWidget::getContent('about-me') !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End-->
