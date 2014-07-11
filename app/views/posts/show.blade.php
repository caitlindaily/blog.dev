@extends('layouts.postsmaster')
<link href="/webpage_ext/css/main.css" rel="stylesheet">

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding-bottom: 15px;">
      <h1>{{{ $post->title }}}</h1>
      <hr>
      <h4>{{{ $post->user->email }}}</h4>
      <h4>{{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}</h4>
      <p>{{ $post->purifyParseBody() }}</p>
      @if ($post->img_path)
       <img class="img-responsive" src="{{{ $post->img_path }}}"/>
      @endif
      <br>
      @if (Auth::check()) 
       {{ link_to_action('PostsController@edit', 'Edit this Post', $post->id, array('class'=> 'btn btn-primary')) }}
       <a href="#" class="deletePost btn btn-default btn-sm" data-postid="{{ $post->id }}">Delete</a></td>
      @endif
      <!--Comment Area-->
      <div id="disqus_thread"></div>
      <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'caitlindaily'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    </div>
  </div>
</div>
<!--Hidden delete form-->
{{ Form::open(array('action' => 'PostsController@destroy', 'id' => 'deleteForm', 'method' => 'DELETE')) }}
{{ Form::close() }}

@stop