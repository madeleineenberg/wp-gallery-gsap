{{-- /
  Title: Sticky image and text block
  Description: Sticky image with text and color backgrounds
  Category: formatting
  Icon: admin-comments
  Keywords: image, text, color, video
  Mode: auto
  Align: center
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
/ --}}

<div class="c-sticky-image-text-block">
    <div class="c-sticky-image-text-block__text-wrapper {{ $image_position }}" data-scroll
        style='background-color: {{ $color_background }}'>
        <div class="c-sticky-image-text-block__text-wrapper-headline-wrapper">
            <h2 class="c-sticky-image-text-block__text-wrapper-headline" data-scroll data-scroll-repeat>
                {{ $heading }}
            </h2>
        </div>
        <div class="c-sticky-image-text-block__text-wrapper-text">{!! $text !!}</div>
    </div>
    <div class="c-sticky-image-text-block__image-wrapper {{ $image_position }}">
        <img src="{{ $image['sizes']['large'] }}" alt="" data-scroll data-scroll-speed="-2">
    </div>
</div>
