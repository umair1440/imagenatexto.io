<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/admin/dashboard">
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#blogs-component" data-bs-toggle="collapse" href="#">
            </i><span>Blogs</span></i>
        </a>
        <ul id="blogs-component" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('blog.list') }}">
              <span>Blog List</span>
            </a>
            <a href="{{ route('tool.blogs') }}">
              <span>Add New Blog</span>
            </a>
          </li>
        </ul>
      </li><!-- End Blogs -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tools-components" data-bs-toggle="collapse" href="#">
            </i><span>Tools</span>
        </a>
        <ul id="tools-components" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('tool.toollist') }}">
              <span>Tools List</span>
            </a>
            <a href="{{ route('tool.add') }}">
              <span>Add New Tool</span>
            </a>
          </li>
        </ul>
      </li><!-- Tools -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#contact-components" data-bs-toggle="collapse" href="#">
            </i><span>Contacts</span>
        </a>
        <ul id="contact-components" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('contact.list') }}">
              <span>Contacts List</span>
            </a>
            {{-- <a href="components-alerts.html">
              <span>Contact Trash</span>
            </a> --}}
          </li>
        </ul>
      </li><!-- Contacts -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#admin-components" data-bs-toggle="collapse" href="#">
            </i><span>Admins</span>
        </a>
        <ul id="admin-components" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <span>List</span>
            </a>
            <a href="components-alerts.html">
              <span>Add </span>
            </a>
          </li>
        </ul>
      </li><!-- Admins -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#settings-components" data-bs-toggle="collapse" href="#">
            </i><span>Settings</span>
        </a>
        <ul id="settings-components" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('tool.settings') }}">
              <span>Manage Settings</span>
            </a>
          </li>
        </ul>
      </li><!-- Admins -->
    </ul>
  </aside><!-- End Sidebar-->
