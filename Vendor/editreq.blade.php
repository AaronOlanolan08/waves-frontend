<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/editreq.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <title>Edit Reservation Requests</title>
</head>
<body>

  <!-- NAVIGATION BAR SECTION -->
  <nav class="navbar">
    <div class="left-side-nav">
      <a href="{{ url('dashboard.html') }}">
        <button class="dashboard inactive" id="dashboard">
          <i class="material-icons nav-icons">dashboard</i> Dashboard
        </button>
      </a>
      <a href="{{ url('ameneties.html') }}">
        <button class="ameneties" id="ameneties">
          <i class="material-icons nav-icons">holiday_village</i> Ameneties
        </button>
      </a>
      <a href="{{ url('reservations.html') }}">
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
    <a href="{{ url('calendar.html') }}" class="back-link">
      <span class="chevron-left"></span> Back to Calendar
    </a>
    <h2 class="head-title">Edit Reservation Requests</h2>

    <div class="reservation-container">
      <div class="header-row">
        <div class="header-cell name-header">Name</div>
        <div class="header-cell changes-header">Changes</div>
      </div>
      
      <div class="reservation-item">
        <div class="name-section">
          <span class="guest-name">Sayang Aq Huhu</span>
          <button class="view-details-btn">View Reservation Details</button>
        </div>
        <div class="changes-section">
          <span class="change-old">Full Cottage</span>
          <span class="arrow">>></span>
          <span class="change-new">Left Side</span>
        </div>
        <div class="action-buttons">
          <button class="verify-btn">Verify</button>
          <button class="decline-btn">Decline</button>
        </div>
      </div>
    </div>
  </main>

</body>
</html>