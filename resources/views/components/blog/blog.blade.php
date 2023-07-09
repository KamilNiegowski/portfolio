{{--@php use App\Models\TextWidget; @endphp--}}
<x-app-layout>
  <!-- ====== Blog Section Start-->
  <section
          id="blog"
          x-data="
                      {
                        selectedTab:'all',
                        activeClasses: 'bg-primary text-white',
                        inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
                  }"
          class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] flex flex-col flex-1">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div class="text-center mx-auto mb-[60px] max-w-[600px]">
            <h2 class="font-bold text-3xl sm:text-4xl md:text-[50px] text-dark dark:text-white mb-4">
              Blog </h2>
            <p class="text-base md:text-[20px] text-body-color">
          </div>
        </div>
      </div>
      <div class="flex flex-wrap justify-center -mx-4">
        <div class="w-full px-4">
          <ul class="flex flex-wrap justify-center mb-12 space-x-1">
            <li class="mb-1">
              <button
                      @click="selectedTab = 'all' "
                      :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
                      class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition"
              >
                Wszystkie posty
              </button>
            </li>
            {{--            @foreach($tabs as $tab)--}}
            {{--              <li class="mb-1">--}}
            {{--                <button--}}
            {{--                        @click="selectedTab = '{{$tab}}' "--}}
            {{--                        :class="selectedTab === '{{$tab}}' ? activeClasses : inactiveClasses "--}}
            {{--                        class="inline-block py-2 md:py-3 px-5 lg:px-8 rounded-lg text-base font-semibold text-center transition"--}}
            {{--                >{{$tab}}--}}
            {{--                </button>--}}
            {{--              </li>--}}
            {{--            @endforeach--}}
          </ul>
        </div>
      </div>
      <div class="flex flex-wrap -mx-4">
        @foreach($posts as $post)
          <x-post-item :post="$post"></x-post-item>
        @endforeach
      </div>
      {{$posts->links()}}
    </div>
  </section>
  <!-- ====== Blog Section End-->
</x-app-layout>