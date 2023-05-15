<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .sidebar .nav-item .nav-link span {
  font-size: .90rem;
  display: inline;
}
</style>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-text mx-3">{{ __('cyberdrills') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            

            <li class="nav-item {{ request()->is('admin/categories') || request()->is('admin/categories') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.categories.index') }}">
                    <i class="fa-solid fa-border-all"></i>
                    <span>{{ __('Catégorie') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/questions') || request()->is('admin/questions') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.questions.index') }}">
                    <i class="fa-solid fa-clipboard-question"></i>
                    <span>{{ __('Question') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/options') || request()->is('admin/options') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.options.index') }}">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span>{{ __('Option') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/results') || request()->is('admin/results') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.results.index') }}">
                    <i class="fa-solid fa-square-poll-horizontal"></i>
                    <span>{{ __('Résultat') }}</span></a>
            </li>

            <li class="nav-item {{ request()->is('admin/questions') || request()->is('admin/questions') ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-headset"></i>
                    <span>{{ __('Chat') }}</span></a>
            </li>
       
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-gear"></i>
                    <span>{{ __('Gestion des utilisateurs') }}</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}" href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i> {{ __('Permissions') }}</a>
                        <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}" href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Roles') }}</a>
                        <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Users') }}</a>
                    </div>
                </div>
            </li>


        </ul>