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
    <h2 class="c-note-board__heading" data-scroll data-scroll-repeat>{{ $heading }}</h2>

        <div class="c-note-board__grid">
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.praesentium!
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim obcaecati odit odio nobis autem
                praesentium!
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim obcaecati odit odio nobis autem
                praesentium!
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim obcaecati odit odio nobis autem
                praesentium!
            </div>
            <div>Lorem ipsum dolor sit amet
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim obcaecati odit odio nobis autem
                praesentium!
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim obcaecati odit odio nobis autem
                praesentium!
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim obcaecati odit odio nobis autem
                praesentium!
            </div>
            <div>Lorem ipsum dolor
            </div>
       
    </div>
    <div class="c-note-board__ninjaform">
        @if ($id)
            {!! do_shortcode('[ninja_form id="' . $id . '"]') !!}
        @endif
    </div>
</div>
