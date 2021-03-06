<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->      
      <!-- search form -->      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">        
        <li class="active">
          <a href="{{ url('/admin/dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>     
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>          
        </li>
        <li style="display: none">
          <a href="{{ url('/admin/packages') }}">
            <i class="fa fa-files-o"></i>
            <span>Packages</span>            
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li style="display: none">
          <a href="{{ url('/admin/logotypes') }}">
            <i class="fa fa-th"></i> <span>logo Types</span>    
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li style="display: none">
          <a href="{{ url('/admin/logofeel') }}">
            <i class="fa fa-pie-chart"></i>
            <span>Logo Feel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>          
        </li>
        <li style="display: none">
          <a href="{{ url('/admin/coupons') }}">
            <i class="fa fa-laptop"></i>
            <span>Coupon Codes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>          
        </li>
        <li style="display: none">
          <a href="{{ url('/admin/orders') }}">
            <i class="fa fa-edit"></i> <span>Orders</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>          
        </li>
        <li style="display: none">
          <a href="{{ url('/admin/invoices') }}">
            <i class="fa fa-table"></i> <span>Invoices</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>          
        </li>        
        <li style="display: none">
          <a href="{{ url('/admin/payments') }}">
            <i class="fa fa-envelope"></i> <span>Payments</span>        
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
        <li>
          <a href="{{ url('/admin/users') }}">
            <i class="fa fa-envelope"></i> <span>Users</span>        
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
        <li>
          <a href="{{ route('logout') }}">
            <i class="fa fa-sign-out" aria-hidden="true"></i> <span>Logout</span>  
          </a>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>