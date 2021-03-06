{{-- /
  Title: Page Hero
  Description: Hero image/video with text
  Category: formatting
  Icon: format-image
  Keywords: Image, video, 
  Mode: auto
  Align: center
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
/ --}}



<div class="c-page-hero">
    <div class="wrapper">
        <div class="c-page-hero_image-wrapper">
            <img src="{{ $image['sizes']['large'] }}" alt="" class="c-page-hero__image" data-scroll
                data-scroll-speed="2">
        </div>
        <h1 class="c-page-hero__title" data-scroll data-scroll-speed="-2">{{ $title }}</h1>
    </div>
</div>
