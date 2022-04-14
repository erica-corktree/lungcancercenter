<p class="mb-4">
  <span>{{ __('By', 'sage') }}</span>
  <a class="underline text-yellow" href="{{ $author->url }}" rel="author" class="fn">{{ $author->name }}</a>
  <span>&#124;</span>
  <time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
</p>
