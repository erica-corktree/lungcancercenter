@if ($navigation)
  <nav class="navigation" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SitenavigationElement">
    <div class="navigation__container container">
      <a
        class="navigation__close flex md:hidden ml-auto py-4 items-center justify-center order-0 text-white"
        href="#primary-nav"
        aria-controls="primary-nav"
      >
        @svg('images.x', 'inline-block w-5 h-auto')
      </a>

      <ul class="navigation__menu" id="primary-nav">
        @foreach ($navigation as $item)
          <li class="navigation__menu-item {{ $item->active ? 'navigation__menu-item--active' : '' }}">
            <a class="navigation__menu-link" href="{{ $item->url }}">
              <span>{{ $item->label }}</span>
            </a>

            @if ($item->children)
              <button class="navigation__toggle-button" aria-haspopup="true" aria-label="Show Submenu">
                @svg('images.chevron-down', 'inline-block w-4 h-auto')
              </button>

              <ul class="navigation__submenu" aria-label="{{ __('Submenu', 'sage') }}" aria-hidden="true">
                @foreach ($item->children as $child)
                  <li class="navigation__submenu-item {{ $child->active ? 'navigation__submenu-item--active' : '' }}">
                    <a class="navigation__submenu-link" href="{{ $child->url }}">
                      {{ $child->label }}
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
        @endforeach
      </ul>

      <div class="order-1 md:order-2 w-full md:w-auto flex items-stretch">
        {!! get_search_form(false) !!}
      </div>
    </div>
  </nav>
@endif
