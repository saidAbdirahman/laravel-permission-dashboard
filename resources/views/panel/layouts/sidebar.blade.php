  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
      @php
      $PermissionUser = App\Models\PermissionRoleModel::getPermission('user',Auth::user()->role_id);
      $PermissionRole = App\Models\PermissionRoleModel::getPermission('Role',Auth::user()->role_id);
      $PermissionCategory = App\Models\PermissionRoleModel::getPermission('Category',Auth::user()->role_id);
      $PermissionSubCategory = App\Models\PermissionRoleModel::getPermission('Sub Category',Auth::user()->role_id);
      $PermissionProduct = App\Models\PermissionRoleModel::getPermission('Product',Auth::user()->role_id);
      $PermissionSetting = App\Models\PermissionRoleModel::getPermission('Setting',Auth::user()->role_id);
      @endphp
      <li class="nav-item">
        <a class="nav-link " @if(Request::segment(2)) != 'dashboard' collapsed @endif href="{{url('panel/dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
   
      @if(!empty($PermissionUser))
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2)) != 'User' collapsed @endif " href="{{url('panel/user')}}">
          <i class="bi bi-person"></i>
          <span>User</span>
        </a>
</li>
@endif


@if(!empty($PermissionRole))
<li class="nav-item">
        <a class="nav-link @if(Request::segment(2)) != 'role' collapsed @endif" href="{{url('panel/role')}}">
          <i class="bi bi-person"></i>
          <span>Role</span>
        </a>
</li>
@endif
@if(!empty( $PermissionCategory ))
<li class="nav-item">
        <a class="nav-link @if(Request::segment(2)) != 'category' collapsed @endif" href="{{url('panel/category')}}">
          <i class="bi bi-person"></i>
          <span>Category</span>
        </a>
</li>
@endif

@if(!empty( $PermissionSubCategory))
<li class="nav-item">
        <a class="nav-link @if(Request::segment(2)) != 'subcategory' collapsed @endif" href="{{url('panel/subcategory')}}">
          <i class="bi bi-person"></i>
          <span>Sub Category</span>
        </a>
</li>
@endif

@if(!empty($PermissionProduct))
<li class="nav-item">
        <a class="nav-link @if(Request::segment(2)) != 'product' collapsed @endif" href="{{url('panel/product')}}">
          <i class="bi bi-person"></i>
          <span>Product</span>
        </a>
</li>
@endif
@if(!empty($PermissionSetting))
<li class="nav-item">
        <a class="nav-link @if(Request::segment(2)) != 'setting' collapsed @endif" href="{{url('panel/setting')}}">
          <i class="bi bi-person"></i>
          <span>Setting</span>
        </a>
</li>
@endif
    </ul>

  </aside>