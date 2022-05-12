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

    <div class="c-social-links__box" data-scroll data-scroll-speed="2">
        <ion-icon name="magnet-outline"></ion-icon>
    </div>
    <ul data-scroll>
        @foreach ($links as $link)
            <li>
                <a href="{{ $link['link']['url'] }}"
                    target="{{ $link['link']['target'] }}">{{ $link['link']['title'] }}</a>
            </li>
        @endforeach
    </ul>
</div>
