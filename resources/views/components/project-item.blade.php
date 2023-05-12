<div
        x-data="{categories: {{  json_encode($project->categories->pluck('title')->toArray()) }}}"
        :class="selectedTab === 'all' || categories.includes(selectedTab) ? 'block' : 'hidden'"
        class="w-full md:w-1/2 xl:w-1/3 px-4"
>
  <div class="relative mb-12">
    <a href="{{$project->github}}" target="_blank">
      <div class="rounded-lg overflow-hidden ease-in duration-100 hover:scale-105">
        <img src="storage/{{$project->thumbnail}}"
             alt="{{$project->title}}"
             class="w-full h-[260px] object-cover"
        />
      </div>
    </a>
    <div
            class="text-center bg-white dark:bg-slate-800 relative z-10 py-9 px-3 rounded-lg shadow-lg mx-7 -mt-4 h-[260px]">
     <span class="text-sm text-primary font-semibold block mb-2 ">
         {{ implode(', ', $project->categories->pluck('title')->toArray()) }}
    </span>
      <h3 class="font-bold text-lg text-dark dark:text-white mb-4">
        {{$project->title}}
      </h3>
      <x-button-link :href="$project['github']" target="_blank" variant="outline-primary">Zobacz więcej</x-button-link>
      <p class="text-right text-[16px] text-body-color mt-5">Opublikowano: {{$project->getFormattedDate()}}</p>
    </div>
  </div>
</div>


