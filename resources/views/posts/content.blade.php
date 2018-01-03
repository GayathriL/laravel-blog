<div class="container">
        <!-- Example row of columns -->
          <div class="row">
            <div class="col-md-4">
              <h2>
                <a href="/posts/{{ $post->id }}">
                {{ $post->title }}
              </a>
              </h2>

              {{ $post->body }}<br>
              {{ $post->created_at->toFormattedDateString() }}
            
            </div>
            
            <div class="col-md-4">
              <h2>Heading</h2>
              <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>
          </div>

          <hr>

</div> <!-- /container -->