{{-- /
  Title: Hover link
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


<div class="navigation-wrapper">
    <div class="project-preview-wrapper">
        <div class="project-preview"></div>
    </div>
    <ul class="navigation-list">
        @foreach ($links as $key => $item)
            <li class="navigation-item">
                <a href="{{ $item['link']['url'] }}" class="navigation-link navigartion-link-{{ $key }}"
                    data-image="{{ $item['image']['sizes']['large'] }}">
                    <span data-text="{{ $item['link']['title'] }}">{{ $item['link']['title'] }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
