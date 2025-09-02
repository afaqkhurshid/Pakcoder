<aside
  :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
  class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 lg:static lg:translate-x-0"
>
  <!-- SIDEBAR HEADER -->
  <div :class="sidebarToggle ? 'justify-center' : 'justify-between'" class="flex items-center gap-2 pt-8 sidebar-header pb-7" >
    <a href="{{ route('admin.dashboard') }}">
      <span class="logo" :class="sidebarToggle ? 'hidden' : ''">
        <img src="{{ asset('images/logo/logo.svg') }}" alt="Logo" />
      </span>
    </a>
  </div>
  <!-- SIDEBAR HEADER -->

  <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar" >
    <!-- Sidebar Menu -->
    <nav x-data="">

      <div class="mt-10">
        <ul class="flex flex-col gap-4 mb-6">
          <!-- Menu Item Dashboard -->
          <li  :class="sidebarToggle ? 'hidden' : ''">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-[10px]">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V8.99998C3.25 10.2426 4.25736 11.25 5.5 11.25H9C10.2426 11.25 11.25 10.2426 11.25 8.99998V5.5C11.25 4.25736 10.2426 3.25 9 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H9C9.41421 4.75 9.75 5.08579 9.75 5.5V8.99998C9.75 9.41419 9.41421 9.74998 9 9.74998H5.5C5.08579 9.74998 4.75 9.41419 4.75 8.99998V5.5ZM5.5 12.75C4.25736 12.75 3.25 13.7574 3.25 15V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H9C10.2426 20.75 11.25 19.7427 11.25 18.5V15C11.25 13.7574 10.2426 12.75 9 12.75H5.5ZM4.75 15C4.75 14.5858 5.08579 14.25 5.5 14.25H9C9.41421 14.25 9.75 14.5858 9.75 15V18.5C9.75 18.9142 9.41421 19.25 9 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V15ZM12.75 5.5C12.75 4.25736 13.7574 3.25 15 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V8.99998C20.75 10.2426 19.7426 11.25 18.5 11.25H15C13.7574 11.25 12.75 10.2426 12.75 8.99998V5.5ZM15 4.75C14.5858 4.75 14.25 5.08579 14.25 5.5V8.99998C14.25 9.41419 14.5858 9.74998 15 9.74998H18.5C18.9142 9.74998 19.25 9.41419 19.25 8.99998V5.5C19.25 5.08579 18.9142 4.75 18.5 4.75H15ZM15 12.75C13.7574 12.75 12.75 13.7574 12.75 15V18.5C12.75 19.7426 13.7574 20.75 15 20.75H18.5C19.7426 20.75 20.75 19.7427 20.75 18.5V15C20.75 13.7574 19.7426 12.75 18.5 12.75H15ZM14.25 15C14.25 14.5858 14.5858 14.25 15 14.25H18.5C18.9142 14.25 19.25 14.5858 19.25 15V18.5C19.25 18.9142 18.9142 19.25 18.5 19.25H15C14.5858 19.25 14.25 18.9142 14.25 18.5V15Z"
                  fill="#4c5669" />
              </svg>

              <span class="menu-item-text text-[#4c5669]">
                Dashboard
              </span>
            </a>
          </li>
          <!-- Menu Item Dashboard -->

          <!-- Portfolio Menu Item -->
          <li  :class="sidebarToggle ? 'hidden' : ''">
            <a href="#" class="flex items-center gap-[10px] group" onclick="togglePortfolioDropdown(event)">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H18.5001C19.7427 20.75 20.7501 19.7426 20.7501 18.5V5.5C20.7501 4.25736 19.7427 3.25 18.5001 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H18.5001C18.9143 4.75 19.2501 5.08579 19.2501 5.5V18.5C19.2501 18.9142 18.9143 19.25 18.5001 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V5.5ZM6.25005 9.7143C6.25005 9.30008 6.58583 8.9643 7.00005 8.9643L17 8.96429C17.4143 8.96429 17.75 9.30008 17.75 9.71429C17.75 10.1285 17.4143 10.4643 17 10.4643L7.00005 10.4643C6.58583 10.4643 6.25005 10.1285 6.25005 9.7143ZM6.25005 14.2857C6.25005 13.8715 6.58583 13.5357 7.00005 13.5357H17C17.4143 13.5357 17.75 13.8715 17.75 14.2857C17.75 14.6999 17.4143 15.0357 17 15.0357H7.00005C6.58583 15.0357 6.25005 14.6999 6.25005 14.2857Z" fill="#4c5669"/>
              </svg>

              <span class="menu-item-text text-[#4c5669]">
                Portfolio
              </span>

              <svg id="arrowd" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.79175 7.39584L10.0001 12.6042L15.2084 7.39585" stroke="#4c5669" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div class="overflow-hidden max-h-0 transition-all duration-300" id="portfolioDropdown">
              <ul class="flex flex-col gap-1 mt-2 pl-6">
                <li>
                  <a href="{{ route('admin.create') }}" class="py-2 px-4 rounded-lg text-gray-600 text-center hover:text-blue-600 hover:bg-blue-50 transition-colors flex justify-center">
                    Add New Project
                  </a>
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Portfolio Menu Item -->
        </ul>
      </div>
</aside>
<script>
        function togglePortfolioDropdown(event) {
            event.preventDefault();
            const dropdown = document.getElementById('portfolioDropdown');
            const arrow = document.getElementById('arrowd');
            
            if (dropdown.classList.contains('max-h-0')) {
                dropdown.classList.remove('max-h-0');
                dropdown.classList.add('max-h-96');
                arrow.classList.add('rotate-180');
            } else {
                dropdown.classList.remove('max-h-96');
                dropdown.classList.add('max-h-0');
                arrow.classList.remove('rotate-180');
            }
        }
  </script>