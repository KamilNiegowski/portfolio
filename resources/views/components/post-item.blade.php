<article class="flex bg-white dark:bg-slate-600 transition hover:shadow-xl rounded-lg shadow-lg mb-8 ml-4 mr-4"
         x-data="{categories: {{  json_encode($post->category_blogs->pluck('title')->toArray()) }}}"
         :class="selectedTab === 'all' || categories.includes(selectedTab) ? 'block' : 'hidden'">
  <div class="rotate-180 p-2 [writing-mode:_vertical-lr]">
    <time
            datetime="{{$post->getDateYear()}}"
            class="flex items-center justify-between gap-4 text-xs font-bold uppercase text-gray-900 dark:text-gray-300"
    >
      <span>{{$post->getDateYear()}}</span>
      <span class="w-px flex-1 bg-gray-900/10"></span>
      <span>{{$post->getDateMonthDay()}}</span>
    </time>
  </div>

  <div class="hidden sm:block sm:basis-56">
    <img
            src="{{$post->getThumbnail()}}"
            alt="{{$post->title}}"
            title="{{$post->title}}"
            class="aspect-square h-full w-full object-cover"
    />
  </div>

  <div class="flex flex-1 flex-col justify-between">
    <div class="border-s border-gray-900/10 p-4 sm:border-l-transparent sm:p-6">
      <a href="{{$post->slug}}">
        <h3 class="font-bold uppercase text-xl text-gray-900 dark:text-gray-300">
          {{$post->title}}
        </h3>
      </a>

      <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-900 dark:text-gray-500">
        {{$post->shortBody()}}
      </p>
    </div>
    <div class="sm:flex sm:items-end sm:justify-between">
    <span class="text-sm block text-primary font-semibold block px-5 py-3 dark:text-gray-300 ">
      {{ implode(', ', $post->category_blogs->pluck('title')->toArray()) }}
    </span>
      <a
              href="{{$post->slug}}"
              class="block bg-primary hover:bg-primary/80 px-5 py-3 text-center text-xs font-bold uppercase text-white "
      >
        Czytaj więcej
      </a>
    </div>
  </div>
</article>

