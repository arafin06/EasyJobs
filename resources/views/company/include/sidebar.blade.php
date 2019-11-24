<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('/')}}views/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold"></span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Dhaka, Bangladesh
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="{{route('dashboard')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li><a href="{{route('post-job')}}"><i class="icon-home4"></i> <span>Post Jobs</span></a></li>
                    <li><a href="#"
                           onclick="event.preventDefault()
                           document.getElementById('logoutForm').submit();"
                        ><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        <form id="logoutForm" action="{{route('company_logout')}}" method="post">
                            @csrf
                        </form>
                    </li>


                </ul>

            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>