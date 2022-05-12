{{-- /
  Title: Text block
  Description: Hover link effect with image
  Category: formatting
  Icon: admin-comments
  Keywords: Hover, link, image
  Mode: auto
  Align: center
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
/ --}}

<div class="c-text-block">
    <h2 class="c-text-block__heading" id="headline" data-scroll>{{ $heading }}</h2>
    <div class="underline" data-scroll></div>
    <p class="c-text-block__text" data-scroll data-scroll-speed="-3.5">{{ $text }}</p>
</div>
