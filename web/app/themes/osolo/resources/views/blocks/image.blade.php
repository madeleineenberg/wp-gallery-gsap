{{-- /
  Title: Image
  Description: Image area, full width
  Category: formatting
  Icon: format-image
  Keywords: Image, video, 
  Mode: auto
  Align: center
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
/ --}}

<div class="c-image-video-block">
    @if ($image)
        <img data-scroll data-scroll-speed="-2" src="{{ $image['sizes']['large'] }}" />
    @endif
    @if ($video)
        <video autoplay loop muted playsinline>
            <source src="{{ $video['url'] }}" type="video/mp4">
            <source src="{{ $video['url'] }}" type="video/webm">
        </video>
    @endif
</div>
