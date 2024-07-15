 <nav class="navbar navbar-expand-lg bg-white fixed-top">
  <div class="container">
    <a class="navbar-brand logo" href="/">
      <img src="{{ asset('img/logo.png') }}" alt="Logo" style="border-radius: 10px; width:1.6em;">
      <strong>TechTalks</strong> 
    </a>    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('categories') ? 'active' : '' }}" href="/categories">Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('portfolio') ? 'active' : '' }}" href="#">Portofolio</a>
        </li>
      </ul>
      <form class="d-flex">
        <button type="submit" class="login px-3"><b>Login</b></button>
        <button type="submit" class="signin px-4 ms-3"><b>Sign in</b></button>
      </form>
    </div>
  </div>
</nav>