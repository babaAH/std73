<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('admin-home')}}">
            <span data-feather="home"></span>
            Главная <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin-blog')}}">
            <span data-feather="file"></span>
            Блог
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin-blog-add-form')}}">
            <span data-feather="shopping-cart"></span>
            Добавить статью в блог
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('admin-contact')}}">
            <span data-feather="users"></span>
            Сообщения
          </a>
        </li>
        
      </ul>
    </div>
  </nav>