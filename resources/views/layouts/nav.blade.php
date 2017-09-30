<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav">

      <a class="nav-link active" href="/">Home</a>
      <a class="nav-link" href="#">New features</a>
      <a class="nav-link" href="#">Press</a>
      <a class="nav-link" href="#">New hires</a>
      @if(Auth::check())
        <a class="nav-link" href="/posts/create"><small>Create Post</small></a>
      @endif

      <a class="nav-link" href="/login"><small>Login</small></a>

      @if(Auth::check())
      	<a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
        <a class="nav-link" href="/logout"><small>Logout</small></a>
      @endif
    </nav>
  </div>
</div>