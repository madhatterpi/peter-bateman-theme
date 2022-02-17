<article @php post_class() @endphp>

  <div class="blog-post__outer">

    <div class="blog-left">
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
  
    </div>
  
    <div class="blog-right">
      <aside class="sidebar">
        @include('partials.sidebar')
      </aside>
    </div>

  </div>
  

</article>





