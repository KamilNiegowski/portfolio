<li class="menu-item ">
  <a href="{{ $menu->slug }}"
     class="text-xs font-medium text-dark py-2 flex hover:text-primary dark:text-white lg:inline-flex lg:ml-6 xl:ml-12">
    {{ $menu->menu_title }}
  </a>
  @if($menu->children->count() > 0)
    <div class="submenu bg-white dark:bg-slate-900 border border-[gray] p-4 z-9 position-absolute border-2 rounded-lg">
      <ul>
        @foreach($menu->children as $submenu)
          <li>
            <a href="{{ $submenu->slug }}"
               class="text-xs font-medium text-dark py-2 flex hover:text-primary dark:text-white lg:inline-flex submenu-item">
              {{ $submenu->menu_title }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  @endif
</li>