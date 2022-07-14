<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#student-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Students</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="student-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('admin.students.index') }}">
              <i class="bi bi-circle"></i><span>Students Details</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#student-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Expense</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="student-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('admin.students.index') }}">
              <i class="bi bi-circle"></i><span>Students Details</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Add Students</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="forms-elements.html">
              <i class="bi bi-circle"></i><span>Student Form</span>
            </a>
          </li>
          <li>
            <a href="examfeesform.html">
              <i class="bi bi-circle"></i><span>Exam Fess Form</span>
            </a>
          </li>
          <li>
            <a href="booksalesform.html">
              <i class="bi bi-circle"></i><span>BookSales Form</span>
            </a>
          </li>

          <li>
            <a href="otherexpenses.html">
              <i class="bi bi-circle"></i><span>Expenses Form</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="examtable.html">
              <i class="bi bi-circle"></i><span>Exam Fees Record</span>
            </a>
          </li>
<li>
                <a href="booksaletabl.html" >
                  <i class="bi bi-circle"></i><span>Book Sales Record</span>
                </a>
              </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Courses Fees Record</span>
            </a>
          </li>
          <li>
            <a href="expensestbl.html">
              <i class="bi bi-circle"></i><span>Expenses Record</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->



      <!-- here -->
       <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Bills</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

          <li>
            <a href="examtable.html">
              <i class="bi bi-circle"></i><span>Exam Fees Record</span>
            </a>
          </li>
<li>
                <a href="booksaletabl.html" >
                  <i class="bi bi-circle"></i><span>Book Sales Record</span>
                </a>
              </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Courses Fees Record</span>
            </a>
          </li>
          <li>
            <a href="expensestbl.html">
              <i class="bi bi-circle"></i><span>Expenses Record</span>
            </a>
          </li>
        </ul>
      </li> -->

      <!-- to here -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li> -->
      <!-- End Charts Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Bills</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="bills.html">
              <i class="bi bi-circle"></i><span>Generated Bill</span>
            </a>
          </li>
            <!-- <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li> -->
        </ul>
      </li>
      <!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>



      <!-- End Profile Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li> -->
      <!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li> -->
      <!-- End Register Page Nav -->
<!--
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li> -->
      <!-- End Login Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li> -->
      <!-- End Error 404 Page Nav -->

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li> -->
      <!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
