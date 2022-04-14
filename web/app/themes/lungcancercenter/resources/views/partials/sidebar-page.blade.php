<aside class="order-first hidden w-full sidebar sidebar--page md:block md:w-1/4" id="sidebar-page">
  @if (is_page() && isset($child_pages))
    <nav class="p-8 pt-16 bg-grey-lighter">
      <h3 class="mb-4 text-xl font-medium">
        <a class="text-blue" href="{{ get_the_permalink($top_level_parent->ID) }}">
          {{ $top_level_parent->post_title }}
        </a>
      </h3>

      <ul class="page-nav">
        @foreach ($child_pages as $page)
          @set($menuId, uniqid('page-nav_'))

          @if (get_the_ID() === $page['id'])
            <li class="page-nav__item page-nav__item--active">
          @elseif (in_array(get_the_ID(), $page['childIds']))
            <li class="page-nav__item" aria-expanded="true">
          @else
            <li class="page-nav__item">
          @endif

            <a class="page-nav__link" href="{{ $page['url'] }}">
              {!! $page['title'] !!}
            </a>

            @if ($page['children'])
              <button
                class="page-nav__expand"
                aria-controls="{{ $menuId }}"
                aria-haspopup="true"
                aria-expanded="{{ (in_array(get_the_ID(), $page['childIds'])) ? 'true' : 'false' }}"
              >
                @svg('images.down', 'w-4 h-auto')
              </button>

              @if (in_array(get_the_ID(), $page['childIds']))
                <ul class="page-nav__sub-menu" id="{{ $menuId }}" aria-hidden="false">
              @else
                <ul class="page-nav__sub-menu" id="{{ $menuId }}" aria-hidden="true">
              @endif

                @foreach ($page['children'] as $child)
                  @set($childMenuId, uniqid('childPagenav_'))

                  @if (get_the_ID() === $child['id'])
                    <li class="page-nav__item page-nav__item--active">
                  @elseif (in_array(get_the_ID(), $child['childIds']))
                    <li class="page-nav__item" aria-expanded="true">
                  @else
                    <li class="page-nav__item">
                  @endif

                  <a class="page-nav__link" href="{{ $child['url'] }}">
                    {!! $child['title'] !!}
                  </a>

                  @if (in_array(get_the_ID(), $child['childIds']))
                    <button class="page-nav__expand" aria-controls="{{ $childMenuId }}" aria-haspopup="true" aria-expanded="false">
                      @svg('images.down', 'w-4 h-auto')
                    </button>
                  @elseif ($child['children'])
                    <button class="page-nav__expand" aria-controls="{{ $childMenuId }}" aria-haspopup="true" aria-expanded="true">
                      @svg('images.up', 'w-4 h-auto')
                    </button>
                  @endif

                    @if ($child['children'])
                      @if (in_array(get_the_ID(), $child['childIds']))
                        <ul class="page-nav__sub-menu" id="{{ $childMenuId }}" aria-hidden="false">
                      @else
                        <ul class="page-nav__sub-menu" id="{{ $childMenuId }}" aria-hidden="true">
                      @endif
                        @foreach ($child['children'] as $sub_child)
                          @if (get_the_ID() === $sub_child['id'])
                            <li class="page-nav__item page-nav__item--active">
                          @else
                            <li class="page-nav__item">
                          @endif

                            <a class="page-nav__expand" href="{{ $sub_child['url'] }}">
                              {!! $sub_child['title'] !!}
                            </a>
                          </li>
                        @endforeach
                      </ul>
                    @endif
                  </li>
                @endforeach
              </ul>
            @endif
          </li>
        @endforeach
      </ul>
    </nav>
  @endif

  @php(dynamic_sidebar('sidebar-page'))
</aside>
