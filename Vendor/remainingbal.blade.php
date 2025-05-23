<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/bal.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Remaining Balances</title>
</head>
<body>

  <!-- NAVIGATION BAR SECTION -->
  <nav class="navbar">
    <div class="left-side-nav">
      <a href="{{ route('dashboard') }}">
        <button class="dashboard inactive" id="dashboard">
          <i class="material-icons nav-icons">dashboard</i> Dashboard
        </button>
      </a>
      <a href="{{ route('amenities') }}">
        <button class="ameneties" id="ameneties">
          <i class="material-icons nav-icons">holiday_village</i> Amenities
        </button>
      </a>
      <a href="{{ route('reservations') }}">
        <button class="reservations active" id="reservation">
          <i class="material-icons nav-icons">date_range</i> Reservations
        </button>
      </a>
    </div>

    <div class="right-side-nav">
      <button class="profile">
        <i class="material-icons" style="font-size:45px; color: white">
          account_circle
        </i>
      </button>
    </div>
  </nav>

  <main class="main">
    <a href="{{ route('calendar') }}" class="back-link">
      <span class="chevron-left"></span> Back to Calendar
    </a>
    <h2 class="head-title">Remaining Balances</h2>

    <div class="reservation-container">
      <div class="header-row">
        <div class="header-cell name-header">Name</div>
        <div class="header-cell calculation-header">Balance Calculation</div>
        <div class="header-cell remaining-header">Remaining Balance</div>
        <div class="header-cell"></div> <!-- Empty header for buttons -->
      </div>
      
      @foreach($reservations as $reservation)
      <div class="reservation-item">
        <div class="name-cell">
          <span class="guest-name">{{ $reservation->guest_name }}</span>
        </div>
        <div class="calculation-cell">
          <span class="total-amount">₱{{ number_format($reservation->total_amount, 2) }}</span>
          <span class="minus"> - </span>
          <span class="downpayment">₱{{ number_format($reservation->downpayment, 2) }}</span>
          <span class="equals"> = </span>
        </div>
        <div class="remaining-cell">
          <span class="balance-amount">₱{{ number_format($reservation->total_amount - $reservation->downpayment, 2) }}</span>
        </div>
        <div class="action-cell">
          <button class="verify-btn">Record Payment</button>
          <button class="decline-btn">Send Reminder</button>
        </div>
      </div>
      @endforeach
    </div>
  </main>

</body>
</html>