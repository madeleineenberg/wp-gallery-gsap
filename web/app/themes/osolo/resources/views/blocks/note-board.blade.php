{{-- /
  Title: Note board
  Description: Leave a note
  Category: formatting
  Icon: admin-comments
  Keywords: comment, form, contact
  Mode: auto
  Align: center
  PostTypes: page post
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
/ --}}

<div class="c-note-board" id="note-board">
    @if ($label)
        <div class="c-note-board__text">
            <p>{{ $label }}</p>
            <div class="underline" data-scroll></div>
        </div>
    @endif
    <h2 class="c-note-board__heading" data-scroll data-scroll-repeat>{{ $heading }}</h2>

    <div class="c-note-board__grid" data-scroll>
    </div>
    <div class="c-note-board__ninjaform">
        @if ($id)
            {!! do_shortcode('[ninja_form id="' . $id . '"]') !!}
        @endif
    </div>
</div>
