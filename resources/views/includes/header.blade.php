<header>
  <div class="navbar bg-base-100 shadow-md">
      <!-- Navbar sinistra -->
      <div class="navbar-start">
          <!-- Menu mobile (dropdown) -->
          <div class="dropdown lg:hidden">
              <button tabindex="0" class="btn btn-ghost">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/>
                  </svg>
              </button>
              <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 w-52 rounded-box bg-base-100 shadow">
                  @foreach ($recipes as $id => $recipe)
                      <li><a href="{{ url('/recipes/' . $id) }}">{{ $recipe['name'] }}</a></li>
                  @endforeach
              </ul>
          </div>

          <!-- Logo -->
          <a href="{{ url('/') }}" class="btn btn-ghost text-xl font-bold">Ricette Online</a>
      </div>

      <!-- Navbar centro (solo su schermi grandi) -->
      <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal space-x-4 px-1">
              @foreach ($recipes as $id => $recipe)
                  <li><a href="{{ url('/recipes/' . $id) }}">{{ $recipe['name'] }}</a></li>
              @endforeach
          </ul>
      </div>

      <!-- Navbar destra -->
      <div class="navbar-end">
          <a class="btn bg-sky-700 text-white">Accedi</a>
      </div>
  </div>
</header>
