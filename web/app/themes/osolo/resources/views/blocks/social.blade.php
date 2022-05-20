{{-- /
  Title: Social link
  Description: Contact social links
  Category: formatting
  Icon: admin-comments
  Keywords: Hover, link
  Mode: auto
  Align: center
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
/ --}}


<div class="c-social-links">

    <div class="c-social-links__box" data-icon="{{ $default_icon }}" data-scroll data-scroll-speed="2">
        <ion-icon name="{{ $default_icon }}"></ion-icon>
    </div>
    <div class="c-social-links__list" data-scroll>
        @foreach ($links as $link)
            <div>
                <a href="{{ $link['link']['url'] }}" class="c-social-links__link" data-icon="{{ $link['icon'] }}"
                    target="{{ $link['link']['target'] }}"> {{ $link['link']['title'] }} </a>
            </div>
        @endforeach
    </div>
</div>
