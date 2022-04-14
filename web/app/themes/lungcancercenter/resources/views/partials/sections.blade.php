@if ($sections)
  @foreach ($sections as $section)
    @if (isset($section->acf_fc_layout))
      @set($layout, str_replace('_', '-', $section->acf_fc_layout))
      @includeIf("partials.section-{$layout}", ['section' => $section])
    @endif
  @endforeach
@endif
