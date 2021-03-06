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
    <h2 class="c-text-block__heading" id="headline" data-scroll data-scroll-repeat>{{ $heading }}</h2>
    <div class="underline" data-scroll></div>
    <div class="c-text-block__text" data-scroll data-scroll-speed="5">
        <p>{{ $text }}
            @if ($icon)
                <ion-icon name="{{ $icon }}"></ion-icon>
            @endif
        </p>
    </div>

</div>
