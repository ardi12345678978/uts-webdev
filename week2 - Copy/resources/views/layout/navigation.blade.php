<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav nav-pills">
              <a class="nav-link {{ ($active_home === "active") ? 'active' : '' }}" href="/">Home</a>
              <a class="nav-link {{ ($active_projects === "active") ? 'active' : '' }}" href="{{ route('projects.index') }}">Warnet</a>
              <a class="nav-link {{ ($active_contact === "active") ? 'active' : '' }}" href="/contact">Contact</a>
              <a class="nav-link {{ ($active_courses === "active") ? 'active' : '' }}" href="{{ route('courses.index') }}">Operator</a>
            </div>
        </div>
    </div>
</nav>
