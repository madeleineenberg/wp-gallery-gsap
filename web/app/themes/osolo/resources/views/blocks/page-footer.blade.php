{{-- /
  Title: Page Footer
  Description: Footer with links and text
  Category: formatting
  Icon: admin-comments
  Keywords: link, text
  Mode: auto
  Align: center
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: false
/ --}}



<div class="c-page-footer__panel" data-scroll data-scroll-speed="5">
</div>
<div class="c-page-footer__inner">
    <div class="c-page-footer__inner-top-section">
        <p>{{ $work }}</p>
        <p>{{ $location }}</p>
    </div>
    <div class="c-page-footer__inner-middle-section">
        <h2 data-scroll data-scroll-repeat>{{ $bold_text }}</h2>
        <p class="c-page-footer__inner-middle-section__sub-text">{{ $sub_text }}<ion-icon name="arrow-down-outline"
                class="c-page-footer__inner-middle-section__sub-text-icon">
            </ion-icon>
        </p>
    </div>
    <div class="c-page-footer__inner-bottom-section">
        <p>{{ $credits }}</p>
        <p>All images &copy; {{ date('Y') }} Madeleine Enberg</p>
    </div>
</div>
