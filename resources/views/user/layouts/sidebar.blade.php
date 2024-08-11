<div class="side-bar">
    <span class="back-side d-lg-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
    </span>
    <div class="profile-box">
        <div class="img-box">
            @if (Auth::user()->image)
                <img class="img-fluid" src="{{ asset('storage/' . Auth::user()->image) }}"
                    alt="{{ Auth::user()->name }}">
            @else
                <div class="symbol-label" style="background-color: #d3d3d3;">
                    <span class="text-gray-800 text-hover-primary mb-1">
                        {{ strtoupper(substr(Auth::user()->first_name, 0, 1)) }}{{ strtoupper(substr(Auth::user()->last_name, 0, 1)) }}
                    </span>
                </div>
            @endif

            <div class="edit-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-edit">
                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                </svg>
                <!-- File input for updating the profile image -->
                <input class="updateimg" type="file" name="img" id="profileImageUpload">
            </div>
        </div>
        <div class="user-name">
            <h5>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
            <h6>{{ Auth::user()->email }}</h6>
        </div>
    </div>

    <ul class="nav nav-tabs nav-tabs2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a href="{{ route('dashboard') }}" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }}">
                Dashboard
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('user.order.history') }}"
                class="nav-link {{ Route::is('user.order.history') ? 'active' : '' }}">
                My Order History
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('user.account.details') }}"
                class="nav-link {{ Route::is('user.account.details') ? 'active' : '' }}">
                My Account Details
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('user.quick.order') }}"
                class="nav-link {{ Route::is('user.quick.order') ? 'active' : '' }}">
                Quick Order
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('user.stock.history') }}"
                class="nav-link {{ Route::is('user.stock.history') ? 'active' : '' }}">
                Stock Availability
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link ">
                Product Data Download
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#" class="nav-link">
                View Catalogue
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="{{ route('user.wishlist') }}"
                class="nav-link {{ Route::is('user.wishlist') ? 'active' : '' }}">
                My Shopping List
            </a>
        </li>
    </ul>
</div>
