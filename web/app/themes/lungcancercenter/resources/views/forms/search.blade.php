<form class="flex items-stretch shadow" role="search" method="get"  action="{{ home_url('/') }}">
  <label class="order-1 md:order-2 block w-full">
    <span class="screen-reader-text">{{ _x('Search for:', 'label', 'sage') }}</span>
    <input
      type="search"
      class="bg-white focus:outline-none focus:shadow-outline border rounded-none py-2 px-4 block w-full appearance-none leading-normal"
      placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}"
      value="{{ get_search_query() }}"
      name="s"
    >
  </label>

  <button class="button button--green order-2 md:order-1" type="submit">
    <span class="screen-reader-text">{{ esc_attr_x('Search', 'submit button', 'sage') }}</span>
    @svg('images.search', 'w-6 h-auto')
  </button>
</form>
