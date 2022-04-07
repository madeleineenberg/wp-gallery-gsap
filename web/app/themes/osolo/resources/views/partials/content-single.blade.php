<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">
      {!! $title !!}
    </h1>

    @include('partials/entry-meta')
  </header>

  <div class="entry-content">
    @php the_content() @endphp
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'osolo'), 'after' => '</p></nav>']) !!}
  </footer>

  @php comments_template() @endphp
</article>
