
    <!-- Sidebar -->
<div id="sidebar">
    <div class="inner">

        <!-- Search -->
            <section id="search" class="alt" style="display: flex;justify-content:space-between;">
                <h2>De Villa Birung <br> Clinic</h2>
                <x-app-layout > 

                </x-app-layout>
            </section>
            

        <!-- Menu -->
        <nav id="menu">
          <header class="major">
              <h2>Menu</h2>
          </header>
          <ul>
              <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="/home"><i class="fas fa-home"></i> Dashboard</a></li>
              <li class="{{ Request::is('showdoctor') || Request::is('staff') ? 'active' : '' }}">
                  <span class="opener"><i class="fas fa-hospital"></i> Healthcare Providers</span>
                  <ul>
                      <li><a href="{{url('showdoctor')}}"><i class="fas fa-user-md"></i> Doctor</a></li>
                      <li><a href="{{url('staff')}}"><i class="fas fa-user-nurse"></i> Staff</a></li>
                  </ul>
              </li>
              <li class="{{ Request::is('intpatient-list') || Request::is('obpatient-list') ? 'active' : '' }}">
                  <span class="opener"><i class="fas fa-users"></i> Patients</span>
                  <ul>
                      <li><a href="{{url('intpatient-list')}}"><i class="fas fa-procedures"></i> Internal Medicine Patients</a></li> 
                      <li><a href="{{url('obpatient-list')}}"><i class="fas fa-female"></i> Ob-Gyne Patients</a></li>
                  </ul>
              </li>
              <li class="{{ Request::is('showappointment') ? 'active' : '' }}"><a href="{{url('showappointment')}}"><i class="far fa-calendar-alt"></i> Appointment</a></li>

              <li>
                <span class="opener"><i class="fas fa-file-alt"></i> Report</span>
                <ul>
                    <li><a href="{{url('int_report')}}"><i class="fas fa-procedures"></i> Internal Medicine Patient</a></li>
                    <li><a href="{{url('ob_report')}}"><i class="fas fa-female"></i> Ob-Gyne Patient</a></li>
                    <li><a href="{{url('app_report')}}"><i class="fas fa-calendar-alt"></i> Appointment</a></li>
                </ul>
            </li>
          </ul>
      </nav>
      

        <!-- Section -->
            

        <!-- Section -->
            

        <!-- Footer -->
            <footer id="footer">
                <p class="copyright" style="font-size:15px;">&copy; De Villa- Birung Clinic. All rights reserved.</p>
            </footer>

    </div>
</div> 