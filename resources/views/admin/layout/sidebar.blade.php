 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <a href="index3.html" class="brand-link">
         <img src="{{ URL::to('public/website/assets/images/logo/logo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8 ">
         <span class="brand-text font-weight-light">XmakeLove</span>
     </a>
     <div class="sidebar">
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ URL::to('public/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">XmakeLove</a>
             </div>
             <aside class="main-sidebar sidebar-dark-primary elevation-4">
                 <a href="" class="brand-link" style="background: white;height: 57px; padding: 0px;">
                     <img src="{{ url('public/website/assets/images/logo/logo.png') }}" alt="XmakeLove" class=""
                         style="opacity: .8; width: 162px;">
                 </a>
                 <div class="sidebar">
                     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                         <div class="image">
                             <img src="{{ url('public/admin/dist/img/user2-160x160.jpg') }}"
                                 class="img-circle elevation-2" alt="User Image">
                         </div>
                         <div class="info">
                             <a href="" class="d-block">Admin</a>
                         </div>
                     </div>
                     <nav class="mt-2">
                         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                             data-accordion="false">
                             <li class="nav-item">
                                 <a href="{{ url('admincon/dashboard') }}"
                                     class="nav-link {{ $pagename == 'dashboard' ? 'active' : '' }}">
                                     <i class="nav-icon fas fa-tachometer-alt"></i>&nbsp;&nbsp;
                                     <p>Dashboard</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ url('admincon/allusers') }}?dates[]={{date('Y-m-d', time())}}&dates[]={{date('Y-m-d', time())}}"
                                     class="nav-link {{ $pagename == 'all-user-list' ? 'active' : '' }}">
                                     <i class="fas fa-users"></i>&nbsp;&nbsp;
                                     <p>All users
                                        <span class="badge badge-info right">{{ dashboardCount()['allUser'] }}</span>
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ url('admincon/allseller') }}?dates[]={{date('Y-m-d', time())}}&dates[]={{date('Y-m-d', time())}}"
                                     class="nav-link {{ $pagename == 'all-seller-list' ? 'active' : '' }}">
                                     <i class="fas fa-users"></i> &nbsp;
                                     <p>All Seller
                                        <span class="badge badge-info right">{{ dashboardCount()['allSeller'] }}</span>
                                     </p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ url('admincon/pricing-config') }}"
                                     class="nav-link {{ $pagename == 'all-pricing-config-list' ? 'active' : '' }}">
                                     <i class="fas fa-shopping-basket"></i> &nbsp;
                                     <p>Pricing Config</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="{{ url('admincon/pricing-subscription') }}"
                                     class="nav-link {{ $pagename == 'all-pricing-subscription-list' ? 'active' : '' }}">
                                     <i class="fas fa-shopping-basket"></i> &nbsp;
                                     <p>Subscription Request
                                        <span class="badge badge-info right">{{ dashboardCount()['allEarning'] }}</span>
                                     </p>
                                 </a>
                             </li>

                             <li class="nav-item">
                                <a href="{{ url('admincon/banner-list') }}"
                                    class="nav-link {{ $pagename == 'banner-list' ? 'active' : '' }}">
                                    <i class="fas fa-shopping-basket"></i> &nbsp;
                                    <p>Banners</p>
                                </a>
                            </li>
                         </ul>
                     </nav>
                 </div>
             </aside>
         </div>
     </div>
 </aside>
