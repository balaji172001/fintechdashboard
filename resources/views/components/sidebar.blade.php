<div class="sidebar">

    <!-- LOGO AREA -->
    <div class="sidebar-logo">
        <img src="/assets/images/adminlogo.png" alt="Logo">
    </div>

    <!-- MENU -->
    <ul class="sidebar-menu">

        <li>
            <a href="{{ route('dashboard') }}"
               class="menu-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M7.28814 16.7798H3.35593C2.60708 16.7798 2 16.1727 2 15.4238V4.57639C2 3.82754 2.60708 3.22046 3.35593 3.22046H7.28814C8.03698 3.22046 8.64407 3.82754 8.64407 4.57639V15.4238C8.64407 16.1727 8.03698 16.7798 7.28814 16.7798ZM16.6441 8.64419H12.7119C11.963 8.64419 11.3559 8.0371 11.3559 7.28826V4.57639C11.3559 3.82754 11.963 3.22046 12.7119 3.22046H16.6441C17.3929 3.22046 18 3.82754 18 4.57639V7.28826C18 8.0371 17.3929 8.64419 16.6441 8.64419ZM16.6441 16.7798H12.7119C11.963 16.7798 11.3559 16.1727 11.3559 15.4238V12.712C11.3559 11.9631 11.963 11.3561 12.7119 11.3561H16.6441C17.3929 11.3561 18 11.9631 18 12.712V15.4238C18 16.1727 17.3929 16.7798 16.6441 16.7798Z" stroke="#999999" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                <span>Dashboard</span>
            </a>
        </li>

        <li class="menu-title">OPERATIONS</li>

        <li>
            <a href="javascript:void(0)" class="menu-link">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.26953 7.70001H12.2695" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.46875 14.1H7.06875" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.07031 14.1H12.2703" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.2695 12.124V13.788C18.2695 16.596 17.5575 17.3 14.7175 17.3H5.82153C2.98153 17.3 2.26953 16.596 2.26953 13.788V7.21201C2.26953 4.40401 2.98153 3.70001 5.82153 3.70001H12.2695" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.6704 8.50003L16.6704 3.70003L15.0704 5.30003" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16.67 3.69996L18.27 5.29996" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <span>Payouts</span>
            </a>
        </li>

        <li>
            <a href="javascript:void(0)" class="menu-link">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.93616 9.66665V7.99998C1.93616 5.08331 3.60282 3.83331 6.10282 3.83331H14.4362C16.9362 3.83331 18.6028 5.08331 18.6028 7.99998V13C18.6028 15.9166 16.9362 17.1666 14.4362 17.1666H10.2695" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.2695 12.5834C11.4201 12.5834 12.3528 11.6506 12.3528 10.5C12.3528 9.34943 11.4201 8.41669 10.2695 8.41669C9.1189 8.41669 8.18616 9.34943 8.18616 10.5C8.18616 11.6506 9.1189 12.5834 10.2695 12.5834Z" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.6862 8.41669V12.5834" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1.93616 13.4167H6.38618C6.91951 13.4167 7.35282 13.85 7.35282 14.3833V15.45" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.9528 12.4L1.93616 13.4167L2.9528 14.4333" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.35282 17.8167H2.9028C2.36947 17.8167 1.93616 17.3834 1.93616 16.85V15.7834" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.33716 18.8336L7.3538 17.8169L6.33716 16.8002" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <span>Virtual Transactions</span>
            </a>
        </li>

        <li>
            <a href="javascript:void(0)" class="menu-link">
<svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.35291 11.5333V10.0917C2.35291 8.36665 3.76123 6.95831 5.48623 6.95831H15.0529C16.7779 6.95831 18.1862 8.36665 18.1862 10.0917V11.2917H16.5029C16.0362 11.2917 15.6112 11.475 15.3029 11.7916C14.9529 12.1333 14.7529 12.625 14.8029 13.15C14.8779 14.05 15.7029 14.7083 16.6029 14.7083H18.1862V15.7C18.1862 17.425 16.7779 18.8333 15.0529 18.8333H10.4862" stroke="#9C9C9C" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.35291 10.8417V7.03342C2.35291 6.04175 2.96124 5.15838 3.88624 4.80838L10.5029 2.30838C11.5362 1.91672 12.6446 2.68341 12.6446 3.79174V6.9584" stroke="#9C9C9C" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M19.0686 12.1418V13.8585C19.0686 14.3168 18.7019 14.6918 18.2352 14.7085H16.6019C15.7019 14.7085 14.8769 14.0501 14.8019 13.1501C14.7519 12.6251 14.9519 12.1335 15.3019 11.7918C15.6102 11.4751 16.0352 11.2918 16.5019 11.2918H18.2352C18.7019 11.3085 19.0686 11.6834 19.0686 12.1418Z" stroke="#9C9C9C" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.10291 10.5H11.9362" stroke="#9C9C9C" stroke-width="0.9" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.47835 19.7835C7.3193 19.7835 8.81169 18.2911 8.81169 16.4502C8.81169 14.6092 7.3193 13.1168 5.47835 13.1168C3.6374 13.1168 2.14502 14.6092 2.14502 16.4502C2.14502 18.2911 3.6374 19.7835 5.47835 19.7835Z" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.68669 15.4086V16.1836C5.68669 16.4752 5.53669 16.7502 5.27836 16.9002L4.64502 17.2836" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <span>Wallet History</span>
            </a>
        </li>

        <li>
            <a href="javascript:void(0)" class="menu-link">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18.13 8.68697L17.305 12.206C16.5978 15.2452 15.2003 16.4743 12.5737 16.2217C12.1527 16.1881 11.6981 16.1123 11.2098 15.9944L9.7955 15.6577C6.28488 14.8242 5.19887 13.09 6.0239 9.57094L6.84894 6.04349C7.01731 5.3279 7.21936 4.70491 7.47193 4.19137C8.45692 2.15403 10.1322 1.60682 12.9441 2.2719L14.35 2.60023C17.8775 3.42526 18.9551 5.16794 18.13 8.68697Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12.5731 16.2217C12.0511 16.5753 11.3945 16.87 10.5947 17.1309L9.26451 17.5687C5.92227 18.6463 4.16276 17.7455 3.07674 14.4033L1.99914 11.0779C0.921542 7.73563 1.81393 5.9677 5.15617 4.8901L6.48633 4.45233C6.8315 4.34288 7.15983 4.25028 7.47132 4.19135C7.21876 4.70489 7.01671 5.32788 6.84833 6.04347L6.0233 9.57092C5.19826 13.09 6.28428 14.8242 9.79489 15.6577L11.2092 15.9944C11.6975 16.1123 12.1521 16.188 12.5731 16.2217Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.5352 7.07904L14.6182 8.11455" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.71094 10.337L12.1524 10.96" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <span>Reports</span>
            </a>
        </li>

        <li class="menu-title">ACCOUNTS</li>

        <li>
            <a href="{{ route('merchant.merchant') }}" class="menu-link {{ request()->routeIs('merchant.merchant') ? 'active' : '' }}">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.80298 9.37598V12.968C2.80298 16.56 4.24298 18 7.83498 18H12.147C15.739 18 17.179 16.56 17.179 12.968V9.37598" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.99491 10C11.4589 10 12.5389 8.808 12.3949 7.344L11.8669 2H8.13091L7.59491 7.344C7.45091 8.808 8.53091 10 9.99491 10Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.0439 10C16.6599 10 17.8439 8.688 17.6839 7.08L17.4599 4.88C17.1719 2.8 16.3719 2 14.2759 2H11.8359L12.3959 7.608C12.5319 8.928 13.7239 10 15.0439 10Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.90644 10C6.22644 10 7.41844 8.928 7.54644 7.608L7.72244 5.84L8.10644 2H5.66644C3.57044 2 2.77044 2.8 2.48244 4.88L2.26644 7.08C2.10644 8.688 3.29044 10 4.90644 10Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.99414 14C8.65814 14 7.99414 14.664 7.99414 16V18H11.9941V16C11.9941 14.664 11.3301 14 9.99414 14Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <span>Merchant Accounts</span>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" class="menu-link">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.2696 12.5834C11.4201 12.5834 12.3529 11.6507 12.3529 10.5001C12.3529 9.34949 11.4201 8.41675 10.2696 8.41675C9.11896 8.41675 8.18622 9.34949 8.18622 10.5001C8.18622 11.6507 9.11896 12.5834 10.2696 12.5834Z" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M15.6862 8.41675V12.5834" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.76951 15.5001C7.76951 16.1251 7.59452 16.7167 7.28619 17.2167C6.71119 18.1834 5.65284 18.8334 4.43618 18.8334C3.21951 18.8334 2.16117 18.1834 1.58617 17.2167C1.27783 16.7167 1.10284 16.1251 1.10284 15.5001C1.10284 13.6584 2.59451 12.1667 4.43618 12.1667C6.27784 12.1667 7.76951 13.6584 7.76951 15.5001Z" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M3.13733 15.4998L3.96232 16.3247L5.73732 14.6831" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1.93622 13.2499V7.99992C1.93622 5.08325 3.60288 3.83325 6.10288 3.83325H14.4362C16.9362 3.83325 18.6029 5.08325 18.6029 7.99992V12.9999C18.6029 15.9166 16.9362 17.1666 14.4362 17.1666H7.35288" stroke="#9C9C9C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                <span>Virtual Accounts</span>
            </a>
        </li>

        <li>
            <a href="javascript:void(0)" class="menu-link">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.31641 14.7083C9.31641 14.9816 9.27641 15.2549 9.20307 15.5083C9.12974 15.7749 9.02308 16.0216 8.88308 16.2549C8.72308 16.5216 8.52308 16.7616 8.28974 16.9616C7.76308 17.4283 7.07641 17.7083 6.31641 17.7083C5.97641 17.7083 5.6564 17.6549 5.3564 17.5483C4.6764 17.3216 4.10974 16.8549 3.74974 16.2549C3.4764 15.8016 3.31641 15.2683 3.31641 14.7083C3.31641 13.7616 3.74974 12.9149 4.44307 12.3682C4.95641 11.9549 5.60974 11.7083 6.31641 11.7083C7.97641 11.7083 9.31641 13.0483 9.31641 14.7083Z" stroke="#9C9C9C" stroke-width="0.8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.8363 15.6751L6.80048 14.7082L5.8363 13.7413" stroke="#9C9C9C" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.8348 9.14159V10.8583C18.8348 11.3166 18.4681 11.6916 18.0015 11.7083H16.3681C15.4681 11.7083 14.6432 11.0499 14.5682 10.1499C14.5182 9.62494 14.7181 9.13327 15.0681 8.79161C15.3765 8.47494 15.8015 8.29163 16.2681 8.29163H18.0015C18.4681 8.30829 18.8348 8.68326 18.8348 9.14159Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.16797 10.75V7.08329C2.16797 4.81663 3.53464 3.23329 5.65964 2.96662C5.8763 2.93329 6.1013 2.91663 6.33464 2.91663H13.8346C14.0513 2.91663 14.2596 2.92495 14.4596 2.95828C16.6096 3.20828 18.0013 4.79996 18.0013 7.08329V8.29164H16.268C15.8013 8.29164 15.3763 8.47495 15.068 8.79162C14.718 9.13328 14.518 9.62495 14.568 10.15C14.643 11.05 15.468 11.7083 16.368 11.7083H18.0013V12.9166C18.0013 15.4166 16.3346 17.0833 13.8346 17.0833H11.7513" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <span>Payout Accounts</span>
            </a>
        </li>

        <li class="menu-title">ACCESS CONTROL</li>

        <li>
            <a href="javascript:void(0)" class="menu-link">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17.8362 7.65005V13.35C17.8362 14.2834 17.3362 15.1501 16.5279 15.6251L11.5779 18.4834C10.7696 18.95 9.76958 18.95 8.95291 18.4834L4.00291 15.6251C3.19458 15.1584 2.69458 14.2917 2.69458 13.35V7.65005C2.69458 6.71672 3.19458 5.85001 4.00291 5.37501L8.95291 2.51669C9.76125 2.05002 10.7612 2.05002 11.5779 2.51669L16.5279 5.37501C17.3362 5.85001 17.8362 6.70838 17.8362 7.65005Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.2695 9.66664C11.3419 9.66664 12.2112 8.79731 12.2112 7.72496C12.2112 6.6526 11.3419 5.78333 10.2695 5.78333C9.19719 5.78333 8.32788 6.6526 8.32788 7.72496C8.32788 8.79731 9.19719 9.66664 10.2695 9.66664Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.6028 14.3834C13.6028 12.8834 12.1112 11.6667 10.2695 11.6667C8.42782 11.6667 6.93616 12.8834 6.93616 14.3834" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <span>Roles</span>
            </a>
        </li>

        <li>
            <a href="javascript:void(0)" class="menu-link">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.5779 7.90002H14.9529" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.58618 7.90002L6.21118 8.52502L8.08618 6.65002" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.5779 13.7333H14.9529" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5.58618 13.7333L6.21118 14.3583L8.08618 12.4833" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.76949 18.8334H12.7695C16.9362 18.8334 18.6028 17.1667 18.6028 13V8.00002C18.6028 3.83335 16.9362 2.16669 12.7695 2.16669H7.76949C3.60282 2.16669 1.93616 3.83335 1.93616 8.00002V13C1.93616 17.1667 3.60282 18.8334 7.76949 18.8334Z" stroke="#9C9C9C" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                <span>Permissions</span>
            </a>
        </li>

    </ul>

</div>
