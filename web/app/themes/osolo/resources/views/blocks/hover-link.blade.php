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
        @foreach ($galleries as $key => $gallery)
            <li class="navigation-item">
                <a href="{{ get_permalink($gallery->ID) }}" class="navigation-link navigation-link-{{ $key }}"
                    data-image="{{ get_the_post_thumbnail_url($gallery->ID) }}">
                    <span data-text="{{ $gallery->post_title }}"
                        data-id="{{ $gallery->ID }}">{{ $gallery->post_title }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>
