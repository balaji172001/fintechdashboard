@extends('layouts.app')
@section('title', 'Dashboard')
@section('page-title', 'DASHBOARD')
@push('page-specific-styles')
<link rel="stylesheet" href="/assets/css/index.css">
@endpush
@section('content')
<div class="grid-2">
   <div class="card">
      <div class="cards-head">
         <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="28" height="28" rx="4" fill="#29A07F"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.0109 5.00195H13.9927C13.9745 5.00195 13.9546 5.00195 13.9346 5.00559C13.6404 5.03828 13.4206 5.29072 13.4261 5.58493V6.73453C13.4188 7.05055 13.6694 7.31387 13.9872 7.32115C14.3051 7.32841 14.5666 7.07778 14.5738 6.75996V5.58493C14.5793 5.26893 14.3269 5.00741 14.0109 5.00195ZM9.55229 8.36178C9.54501 8.35634 9.53957 8.35089 9.53412 8.34544L8.7205 7.53545C8.61335 7.42467 8.46443 7.35928 8.31005 7.35928C8.29008 7.35928 8.2701 7.35928 8.25013 7.36291C7.93411 7.3956 7.7071 7.67892 7.7398 7.99492C7.75432 8.12751 7.81607 8.251 7.9105 8.34544L8.7205 9.15906C8.94025 9.3879 9.30529 9.39697 9.53412 9.1754C9.76477 8.95566 9.77203 8.59243 9.55229 8.36178ZM20.0949 7.53363C19.9841 7.42103 19.8315 7.35928 19.6735 7.36291C19.5246 7.36655 19.3848 7.43011 19.2795 7.53545L18.4658 8.34544C18.237 8.56519 18.2297 8.93023 18.4495 9.15906C18.6692 9.38971 19.0324 9.39697 19.2631 9.17722C19.2685 9.17178 19.274 9.16451 19.2795 9.15906L20.0894 8.34544C20.3146 8.12387 20.3183 7.76065 20.0949 7.53363ZM7.13684 13.051H5.95999C5.64398 13.0438 5.38064 13.2944 5.37338 13.6122C5.36612 13.93 5.61855 14.1915 5.93457 14.1988H7.1096C7.42742 14.2061 7.69076 13.9554 7.69802 13.6376C7.70529 13.3216 7.45285 13.0583 7.13684 13.051ZM22.0654 13.051H20.8903C20.5743 13.0438 20.311 13.2944 20.3037 13.6122C20.2965 13.93 20.5471 14.1915 20.8649 14.1988H22.04C22.356 14.2061 22.6193 13.9554 22.6266 13.6376C22.6338 13.3216 22.3814 13.0583 22.0654 13.051ZM9.55047 18.0926C9.43787 17.9763 9.2835 17.9128 9.12186 17.9164H9.11459C8.96568 17.9219 8.82402 17.9836 8.7205 18.0908L7.9105 18.9044C7.67078 19.1114 7.64172 19.4728 7.84876 19.7144C8.05398 19.9541 8.41721 19.9832 8.65876 19.7761C8.68055 19.758 8.70234 19.7362 8.7205 19.7144L9.53412 18.9044C9.76295 18.6846 9.77022 18.3214 9.55047 18.0926ZM20.1584 18.9734C20.1367 18.948 20.1148 18.9262 20.0894 18.9044L19.2795 18.0908C19.1723 17.98 19.0234 17.9164 18.869 17.9164C18.5512 17.9146 18.2933 18.1707 18.2915 18.4885C18.2897 18.6447 18.3532 18.7954 18.4658 18.9044L19.2795 19.7144C19.4847 19.9559 19.8479 19.9868 20.0894 19.7834C20.3328 19.5782 20.3637 19.2168 20.1584 18.9734Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1035 22.3205C16.0969 22.7063 15.7772 23.0105 15.3915 23.0017H12.6094C12.2369 23.0127 11.9194 22.7283 11.8929 22.3558C11.8643 21.9722 12.1531 21.6371 12.5367 21.6085C12.5389 21.6085 12.5389 21.6063 12.5389 21.6063C12.5631 21.6063 12.5852 21.6063 12.6094 21.6085H15.4223C15.8081 21.6173 16.1123 21.9347 16.1035 22.3205Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9999 8.45615C11.1523 8.45615 8.83124 10.7771 8.83124 13.6248C8.83124 15.4028 9.75747 16.9483 11.1286 17.8764V19.9123C11.1286 20.2301 11.3865 20.4861 11.7025 20.4861H16.2973C16.6133 20.4861 16.8712 20.2301 16.8712 19.9123V17.8764C18.2424 16.9483 19.1686 15.4028 19.1686 13.6248C19.1686 10.7771 16.8476 8.45615 13.9999 8.45615ZM13.9981 11.9031C13.0392 11.9031 12.2764 12.6696 12.2764 13.6266C12.2764 13.9445 12.0204 14.2024 11.7025 14.2024C11.3847 14.2024 11.1268 13.9445 11.1268 13.6266C11.1268 12.0484 12.4181 10.7535 13.9981 10.7535C14.3159 10.7535 14.572 11.0096 14.572 11.3274C14.572 11.6453 14.3159 11.9031 13.9981 11.9031Z" fill="white"/>
         </svg>
         <h4>Payouts Overview</h4>
      </div>
      <div class="stat-grid">
         <x-stat-card
            title="Total Successful Payouts (21)"
            amount="₹7,81,3500.00"
            icon="wallet"
            class="payout1_cart1_bg"
            />
         <x-stat-card
            title="Payout Wallet Balance"
            amount="₹10,04,84,477.40"
            icon="balance"
            class="payout1_cart2_bg"
            />
      </div>
   </div>
   <div class="card">
      <div class="cards-head">
         <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="28" height="28" rx="4" fill="#29A07F"/>
            <path d="M22 7.30233V8.04651C22 8.76093 21.4121 9.34884 20.6977 9.34884H7.30233C6.58791 9.34884 6 8.76093 6 8.04651V7.30233C6 6.58791 6.58791 6 7.30233 6H20.6977C21.4121 6 22 6.58791 22 7.30233ZM20.5116 10.4651V19.2093C20.5116 20.7498 19.2614 22 17.7209 22H10.2791C8.7386 22 7.48837 20.7498 7.48837 19.2093V10.4651H20.5116ZM16.2549 16.9544C16.0391 16.7386 15.6819 16.7386 15.466 16.9544L14.5581 17.8623V13.2558C14.5581 12.9507 14.3051 12.6977 14 12.6977C13.6949 12.6977 13.4419 12.9507 13.4419 13.2558V17.8623L12.534 16.9544C12.3181 16.7386 11.9609 16.7386 11.7451 16.9544C11.5293 17.1702 11.5293 17.5274 11.7451 17.7433L13.6056 19.6037C13.7172 19.7153 13.8586 19.7674 14 19.7674C14.1414 19.7674 14.2828 19.7153 14.3944 19.6037L16.2549 17.7433C16.4707 17.5274 16.4707 17.1702 16.2549 16.9544Z" fill="white"/>
         </svg>
         <h4>Payout Transaction Summary</h4>
      </div>
      <div class="stat-card payout2_cart1_bg">
         <div class="stat-top">
            <div class="stat-left">
               <img src="/assets/images/dashboard/trans.svg" alt="icon">
               <h4 class="stat-title">
                  Total Transactions (35)
               </h4>
            </div>
         </div>
         <p class="stat-amount">
            ₹1,93,857.12
         </p>
         <p class="stat-change amt-sts-cont">
            <span>
               <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.06049 3.49396C5.06049 3.25233 5.25637 3.05646 5.49799 3.05646L10.5055 3.05646C10.6215 3.05646 10.7328 3.10255 10.8148 3.1846C10.8969 3.26665 10.943 3.37793 10.943 3.49396L10.943 8.50145C10.943 8.74308 10.7471 8.93895 10.5055 8.93895C10.2639 8.93895 10.068 8.74308 10.068 8.50145L10.068 3.93146L5.49799 3.93146C5.25637 3.93146 5.06049 3.73558 5.06049 3.49396Z" fill="#1A932E"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.18393 10.8155C3.01308 10.6446 3.01308 10.3676 3.18393 10.1967L10.126 3.25472C10.2968 3.08387 10.5738 3.08387 10.7447 3.25472C10.9155 3.42558 10.9155 3.70259 10.7447 3.87344L3.80265 10.8155C3.6318 10.9863 3.35479 10.9863 3.18393 10.8155Z" fill="#1A932E"/>
               </svg>
            </span>
            12% than last 30 days
         </p>
      </div>
      <div class="status-summary">
         <!-- SUCCESS -->
         <div class="status-card payout2_cart2_bg">
            <div class="status-top">
               <img src="/assets/images/dashboard/sucess.svg" alt="icon">
               <div class="status-title">
                  Successful (24)
               </div>
            </div>
            <p class="status-amount">
               ₹ 1,99,93.12
            </p>
            <p class="status-change amt-sts-cont">
               <span>
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M5.06049 3.49396C5.06049 3.25233 5.25637 3.05646 5.49799 3.05646L10.5055 3.05646C10.6215 3.05646 10.7328 3.10255 10.8148 3.1846C10.8969 3.26665 10.943 3.37793 10.943 3.49396L10.943 8.50145C10.943 8.74308 10.7471 8.93895 10.5055 8.93895C10.2639 8.93895 10.068 8.74308 10.068 8.50145L10.068 3.93146L5.49799 3.93146C5.25637 3.93146 5.06049 3.73558 5.06049 3.49396Z" fill="#1A932E"/>
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M3.18393 10.8155C3.01308 10.6446 3.01308 10.3676 3.18393 10.1967L10.126 3.25472C10.2968 3.08387 10.5738 3.08387 10.7447 3.25472C10.9155 3.42558 10.9155 3.70259 10.7447 3.87344L3.80265 10.8155C3.6318 10.9863 3.35479 10.9863 3.18393 10.8155Z" fill="#1A932E"/>
                  </svg>
               </span>
               12% than last 30 days
            </p>
         </div>
         <!-- PENDING -->
         <div class="status-card payout2_cart3_bg">
            <div class="status-top">
               <img src="/assets/images/dashboard/pending.svg" alt="icon">
               <div class="status-title">
                  Pending (09)
               </div>
            </div>
            <p class="status-amount">
               ₹ 1,93,85,7
            </p>
            <p class="status-change amt-sts-cont">
               <span>
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M5.06049 3.49396C5.06049 3.25233 5.25637 3.05646 5.49799 3.05646L10.5055 3.05646C10.6215 3.05646 10.7328 3.10255 10.8148 3.1846C10.8969 3.26665 10.943 3.37793 10.943 3.49396L10.943 8.50145C10.943 8.74308 10.7471 8.93895 10.5055 8.93895C10.2639 8.93895 10.068 8.74308 10.068 8.50145L10.068 3.93146L5.49799 3.93146C5.25637 3.93146 5.06049 3.73558 5.06049 3.49396Z" fill="#1A932E"/>
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M3.18393 10.8155C3.01308 10.6446 3.01308 10.3676 3.18393 10.1967L10.126 3.25472C10.2968 3.08387 10.5738 3.08387 10.7447 3.25472C10.9155 3.42558 10.9155 3.70259 10.7447 3.87344L3.80265 10.8155C3.6318 10.9863 3.35479 10.9863 3.18393 10.8155Z" fill="#1A932E"/>
                  </svg>
               </span>
               12% than last 30 days
            </p>
         </div>
         <!-- FAILED -->
         <div class="status-card payout2_cart4_bg">
            <div class="status-top">
               <img src="/assets/images/dashboard/cancelled.svg" alt="icon">
               <div class="status-title">
                  Failed (02)
               </div>
            </div>
            <p class="status-amount">
               ₹ 1,93,85
            </p>
            <p class="status-change amt-sts-cont">
               <span>
                  <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M10.506 5.06043C10.7477 5.06043 10.9435 5.25631 10.9435 5.49793L10.9435 10.5054C10.9435 10.6215 10.8974 10.7327 10.8154 10.8148C10.7334 10.8968 10.6221 10.9429 10.506 10.9429L5.49855 10.9429C5.25692 10.9429 5.06105 10.747 5.06105 10.5054C5.06105 10.2638 5.25692 10.0679 5.49855 10.0679L10.0685 10.0679L10.0685 5.49793C10.0685 5.25631 10.2644 5.06043 10.506 5.06043Z" fill="#E02C2C"/>
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M3.18455 3.18387C3.3554 3.01302 3.63241 3.01302 3.80326 3.18387L10.7453 10.1259C10.9161 10.2967 10.9161 10.5738 10.7453 10.7446C10.5744 10.9155 10.2974 10.9155 10.1266 10.7446L3.18455 3.80259C3.01369 3.63174 3.01369 3.35473 3.18455 3.18387Z" fill="#E02C2C"/>
                  </svg>
               </span>
               12% than last 30 days
            </p>
         </div>
      </div>
   </div>
</div>
<div class="Chart_conntainer">
   <div class="card chart-card">
      <div class="chart-header">
         <div class="cards-head">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect width="28" height="28" rx="4" fill="#29A07F"/>
               <g clip-path="url(#clip0_2_849)">
                  <path d="M6.40002 15.0655H9.33586V21.6001H6.40002V15.0655Z" fill="white"/>
                  <path d="M10.4724 11.5141H13.4082V21.6H10.4724V11.5141Z" fill="white"/>
                  <path d="M14.5445 15.0655H17.4803V21.6001H14.5445V15.0655Z" fill="white"/>
                  <path d="M18.6168 11.5141H21.5527V21.6H18.6168V11.5141Z" fill="white"/>
                  <path d="M8.90968 12.5084C9.33585 12.0823 9.43055 11.4667 9.24115 10.8985L11.2299 9.14644C11.7035 9.43055 12.2243 9.43055 12.6978 9.14644L14.6866 10.8985C14.4499 11.4193 14.5919 12.0823 15.0181 12.5084C15.5863 13.0767 16.5334 13.0767 17.1016 12.5084C17.5278 12.0823 17.6225 11.4667 17.433 10.8985L19.4218 9.14644C19.9901 9.47791 20.7003 9.3832 21.1739 8.90968C21.7421 8.34146 21.7421 7.39442 21.1739 6.82619C20.6056 6.25797 19.6586 6.25797 19.0904 6.82619C18.6642 7.25236 18.5695 7.86794 18.7589 8.43616L16.7228 10.2355C16.2966 9.99878 15.7284 9.99878 15.2549 10.2355L13.2661 8.48351C13.4555 7.96264 13.3608 7.34707 12.9346 6.9209C12.3664 6.35267 11.4193 6.35267 10.8511 6.9209C10.4723 7.29971 10.3776 7.91529 10.567 8.43616L8.57822 10.2355C8.00999 9.90407 7.29971 9.95143 6.82619 10.4249C6.25797 10.9932 6.25797 11.9402 6.82619 12.5084C7.39442 13.0767 8.34146 13.0767 8.90968 12.5084Z" fill="white"/>
               </g>
               <defs>
                  <clipPath id="clip0_2_849">
                     <rect width="16" height="16" fill="white" transform="translate(6 6)"/>
                  </clipPath>
               </defs>
            </svg>
            <h4>Payout Transaction Trends</h4>
         </div>
         <select id="dateFilter" class="date-filter">
            <option value="7">Last 7 Days</option>
            <option value="30" selected>Last 30 Days</option>
         </select>
      </div>
      <div class="chart-wrapper">
         <canvas id="transactionChart"></canvas>
      </div>
   </div>
</div>
<div class="transaction-section">
   <div class="card recent-transactions">
      <div class="card-header">
        <div class="cards-head">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="28" height="28" rx="4" fill="#29A07F"/>
            <path d="M23.2262 11.5405C23.2266 11.6215 23.2111 11.7017 23.1805 11.7766C23.1499 11.8516 23.1048 11.9197 23.0478 11.9772L19.3573 15.6677C19.2999 15.7247 19.2317 15.7698 19.1568 15.8004C19.0818 15.831 19.0016 15.8465 18.9206 15.8461C18.8407 15.847 18.7613 15.8324 18.6869 15.803C18.5736 15.7565 18.4768 15.6772 18.4088 15.5752C18.3409 15.4733 18.3049 15.3535 18.3055 15.231V13.3857H12.7699C12.6067 13.3857 12.4503 13.3209 12.3349 13.2056C12.2196 13.0902 12.1548 12.9338 12.1548 12.7707V10.3104C12.1548 10.1472 12.2196 9.99078 12.3349 9.87543C12.4503 9.76008 12.6067 9.69528 12.7699 9.69528H18.3055V7.85005C18.3061 7.7284 18.3426 7.60964 18.4106 7.50878C18.4786 7.40791 18.575 7.32948 18.6876 7.2834C18.8002 7.23731 18.9239 7.22564 19.0431 7.24987C19.1623 7.27409 19.2717 7.33312 19.3573 7.41949L23.0478 11.11C23.1614 11.2245 23.2255 11.3792 23.2262 11.5405ZM15.2302 14.6159H9.69446V12.7707C9.69386 12.6492 9.65732 12.5307 9.58946 12.43C9.52159 12.3293 9.42544 12.2509 9.31312 12.2048C9.2011 12.1577 9.07765 12.1448 8.95833 12.1678C8.83901 12.1908 8.72918 12.2486 8.64268 12.334L4.95222 16.0244C4.89521 16.0819 4.85011 16.1501 4.8195 16.225C4.78889 16.2999 4.77338 16.3802 4.77384 16.4611C4.77338 16.5421 4.78889 16.6223 4.8195 16.6973C4.85011 16.7722 4.89521 16.8404 4.95222 16.8978L8.64268 20.5883C8.70015 20.6453 8.76832 20.6904 8.84325 20.721C8.91819 20.7516 8.99844 20.7671 9.07939 20.7667C9.16007 20.7688 9.24012 20.7519 9.31312 20.7175C9.42544 20.6713 9.52159 20.593 9.58946 20.4923C9.65732 20.3916 9.69386 20.273 9.69446 20.1516V18.3064H15.2302C15.3933 18.3064 15.5497 18.2416 15.6651 18.1262C15.7804 18.0109 15.8452 17.8544 15.8452 17.6913V15.231C15.8452 15.0678 15.7804 14.9114 15.6651 14.7961C15.5497 14.6807 15.3933 14.6159 15.2302 14.6159Z" fill="white"/>
            </svg>

            <h4>Recent Transactions</h4>
         </div>
         <a href="javascript:void(0)">View all ↗</a>
      </div>
      <table class="transaction-table">
         <thead>
            <tr>
               <th>Merchant Info</th>
               <th>Transaction ID</th>
               <th>Status</th>
               <th>Amount</th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>
                  <span class="info_name">Mamta Lodhi</span>
                  <span class="info_time">May 8, 2025 | 01:25pm</span>
               </td>
               <td><a href="#">TXN2079373788</a></td>
               <td><span class="badge success">Successful</span></td>
               <td>₹4000</td>
            </tr>
            <tr>
               <td>
                 <span class="info_name">Raj Varma</span>
                  <span class="info_time">May 8, 2025 | 12:43pm</span>
               </td>
               <td><a href="#">TXN2079373787</a></td>
               <td><span class="badge success">Successful</span></td>
               <td>₹2500</td>
            </tr>
            <tr>
               <td>
                 <span class="info_name">Anish Bag</span>
                  <span class="info_time">May 8, 2025 | 10:55am</span>
               </td>
               <td><a href="#">TXN2079373786</a></td>
               <td><span class="badge failed">Failed</span></td>
               <td>₹3000</td>
            </tr>
            <tr>
               <td>
                  <span class="info_name">Ahmed</span>
                  <span class="info_time">May 8, 2025 | 10:19am</span>
               </td>
               <td><a href="#">TXN2079373785</a></td>
               <td><span class="badge hold">On-Hold</span></td>
               <td>₹2000</td>
            </tr>
         </tbody>
      </table>
   </div>
   <div class="card merchant-summary">
        <div class="cards-head">
            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="28" height="28" rx="4" fill="#29A07F"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9012 6.09033C10.1268 6.09033 8.68835 7.52877 8.68835 9.30317C8.68835 11.0776 10.1268 12.516 11.9012 12.516C13.6756 12.516 15.114 11.0776 15.114 9.30317C15.114 7.52877 13.6756 6.09033 11.9012 6.09033Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7862 12.0793C14.1823 12.0793 13.6409 12.4515 13.4246 13.0153L12.528 15.3525L12.5255 15.359C12.347 15.8403 12.278 16.3451 12.3988 16.821C12.4905 17.1828 12.6836 17.4934 12.962 17.7382C12.9997 17.7713 13.0226 17.8186 13.0226 17.8688V20.2496C13.0226 21.2851 13.8621 22.1246 14.8976 22.1246H19.6099C20.6454 22.1246 21.4849 21.2851 21.4849 20.2496V17.8671C21.4849 17.8169 21.5078 17.7697 21.5454 17.7365C21.8226 17.4921 22.0151 17.1822 22.1068 16.8212C22.2277 16.3451 22.1586 15.8403 21.9797 15.3588L21.0808 13.0154C20.8645 12.4516 20.323 12.0794 19.7192 12.0794L14.7862 12.0793ZM14.2726 18.4122C14.2726 18.3196 14.3483 18.2455 14.4405 18.2384C14.9022 18.2032 15.3457 18.0073 15.684 17.6742C15.7023 17.6563 15.7322 17.6581 15.748 17.6781C16.0922 18.1119 16.6109 18.3915 17.2526 18.3915C17.8945 18.3915 18.4131 18.1118 18.7573 17.678C18.7731 17.658 18.803 17.6563 18.8212 17.6741C19.16 18.0078 19.6044 18.2038 20.0668 18.2387C20.1591 18.2456 20.2349 18.3198 20.2349 18.4124V20.2496C20.2349 20.5948 19.955 20.8746 19.6099 20.8746H14.8976C14.5525 20.8746 14.2726 20.5948 14.2726 20.2496V18.4122Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.1872 17.1285C11.397 17.9555 11.7727 18.7641 11.7727 19.6173V20.2496C11.7727 20.3593 11.6935 20.4557 11.584 20.4612C11.5354 20.4636 11.4866 20.4648 11.4375 20.4648H9.12916C7.25238 20.4648 5.73096 18.9434 5.73096 17.0666C5.73096 15.1899 7.25238 13.6685 9.12916 13.6685H11.4375C11.636 13.6685 11.7572 13.8721 11.6861 14.0575L11.361 14.9048L11.3561 14.9179L11.3536 14.9245C11.117 15.5626 10.9859 16.3349 11.1872 17.1285Z" fill="white"/>
            </svg>

            <h4>Merchant Transactions</h4>
         </div>
        <div class="main-mercentsumm">
                 <div class="summary-total">
         <span>Total transaction amount</span>
         <h2>₹23,276.63</h2>
      </div>
      <div class="progress-bar">
         <div class="bar success-bar"></div>
         <div class="bar pending-bar"></div>
         <div class="bar failed-bar"></div>
         <div class="bar hold-bar"></div>
      </div>
     <div class="summary-list">
            <div class="summary-item">
                <div class="left">
                    <span class="dot success"></span>
                    <span>Success</span>
                </div>
                <span class="amount">₹16,394.21</span>
            </div>

            <div class="summary-item">
                <div class="left">
                    <span class="dot pending"></span>
                    <span>Pending</span>
                </div>
                <span class="amount">₹6,394.21</span>
            </div>

            <div class="summary-item">
                <div class="left">
                    <span class="dot failed"></span>
                    <span>Failed</span>
                </div>
                <span class="amount">₹394.21</span>
            </div>

            <div class="summary-item">
                <div class="left">
                    <span class="dot hold"></span>
                    <span>On Hold</span>
                </div>
                <span class="amount">₹94</span>
            </div>

        </div>
        </div>
   </div>
</div>
@endsection
@push('scripts')
<script>
   const ctx = document.getElementById('transactionChart');

   let chart;

   const fullLabels = [
   '1','2','3','4','5','6','7','8','9','10',
   '11','12','13','14','15','16','17','18','19','20',
   '21','22','23','24','25','26','27','28','29','30'
   ];

   const fullAmountData = [
   1200,1700,1900,1300,1000,800,600,700,500,400,
   600,300,900,1500,1100,1400,1000,1200,900,800,
   1100,1300,700,900,1500,1200,1400,1000,800,950
   ];

   const fullCountData = [
   8,12,10,9,7,8,6,5,7,6,
   8,4,9,11,10,12,9,8,7,6,
   9,10,6,7,11,8,9,7,6,8
   ];

   function renderChart(days = 30) {

       const labels = fullLabels.slice(-days);
       const amountData = fullAmountData.slice(-days);
       const countData = fullCountData.slice(-days);

       if(chart) chart.destroy();

       chart = new Chart(ctx, {
           type: 'line',
           data: {
               labels: labels,
               datasets: [
                   {
                       label: 'Transactions Amount',
                       data: amountData,
                       borderColor: '#1F7A5C',
                       backgroundColor: 'rgba(31,122,92,0.08)',
                       tension: 0.2,
                       borderWidth: 1,
                       fill: true,
                       yAxisID: 'y'
                   },
                   {
                       label: 'Transactions Count',
                       data: countData,
                       borderColor: '#2563EB',
                       backgroundColor: 'rgba(37,99,235,0.08)',
                       tension: 0.1 ,
                       borderWidth: 1,
                       fill: true,
                       yAxisID: 'y1'
                   }
               ]
           },
           options: {
       responsive: true,
       maintainAspectRatio: false,
       interaction: {
           mode: 'index',
           intersect: false
       },
       plugins: {
           legend: {
               position: 'top',
               align: 'center',
               labels: {
                   usePointStyle: true,
                   pointStyle: 'circle',
                   boxWidth: 8,
                   padding: 10,
                   color: '#374151' 
               }
           }
       },
       scales: {
           y: {
               position: 'left',
               grid: {
                   color: '#F0F0F0'
               },
               ticks: {
                   color: '#6B7280'
               }
           },
           y1: {
               position: 'right',
               grid: {
                   drawOnChartArea: false
               },
               ticks: {
                   color: '#6B7280'
               }
           },
           x: {
               grid: {
                   display: false
               },
               ticks: {
                   color: '#6B7280'
               }
           }
       }
   }

       });
   }

   renderChart(30);

   document.getElementById('dateFilter').addEventListener('change', function() {
       renderChart(parseInt(this.value));
   });

</script>
@endpush
