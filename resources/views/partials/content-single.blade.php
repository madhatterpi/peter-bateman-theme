<article @php post_class() @endphp>

  <div class="blog-row">
    <div class="column">
      <header>
        <h1 class="entry-title">{!! get_the_title() !!}</h1>
        @include('partials/entry-meta')
    </header>
    </div>
  </div>


<div class="section page-content">
    <div class="blog-row">
      <div class="column">
      <div class="entry-content">
    @php the_content() @endphp
  </div>
      </div>
    </div>
</div>

  
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>

</article>





