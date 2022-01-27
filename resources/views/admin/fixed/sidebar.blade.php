
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('admin.dashboard')}}">
                {{-- <span data-feather="home"></span>--}} Dashboard 
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.category.list')}}">
                {{-- <span data-feather="layers"></span>  --}}
          Test Category
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.test')}}">
            {{-- <span data-feather="menu" class="mb-1"></span> --}}
            Test
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.patient.registerlist')}}">
               {{-- <span data-feather="bar-chart-2"></span>  --}}
               Patients
              </a>
            </li> 
              <li class="nav-item">
              <a class="nav-link" href="{{route('admin.appointment.request')}}">
              
             Request Appointment
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.patient.appointment')}}">
                {{-- <span data-feather="layers"></span> --}}
               Appoinment
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.appointment.cancel')}}">
              
             Cancel Request
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="{{route('appointment_details')}}">
              
           Appointment Details
              </a>
            </li> --}}
           

            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.slotlist')}}">
              
             Slot Setup
              </a>
            </li>
           
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('paid.payment.list')}}">
              
             Payment List
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('equipment.list')}}">
              
             Equipments Details
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.stock.list')}}">
              
               Equipement Stock
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('machine.slot')}}">
              
               Machine Slot
              </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="#">
              
             Support
              </a>
            </li>
          </ul>
        </div>
      </nav> 