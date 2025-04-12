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
          <button class="view-details-btn" onclick="showReservationDetails('verified')">View Reservation Details</button>
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

  <!-- Reservation Details Modal -->
     <!-- as if pd ang mga data ani -->

  <div class="modal-overlay" id="reservationModal">
    <div class="reservation-modal">
      <div class="reservation-header">
        <div class="reservation-title" id="modalTitle">#7 Sayang Aq Huhu</div>
        <div class="reservation-status" id="modalStatus">VERIFIED</div>
      </div>
      <div class="reservation-date" id="modalDate">10-18-2024</div>
      <div class="reservation-time" id="modalTime">1:00 PM</div>
      
      <div class="reservation-items">
        <div class="reservation-item">
          <span>Full Cottage</span>
          <span>Php 1,000</span>
        </div>
        <div class="reservation-item">
          <span>Round Table w/ 3 chairs</span>
          <span>Php 150</span>
        </div>
      </div>
      
      <div class="reservation-total">
        <span>Total:</span>
        <span>Php 1,150</span>
      </div>
      
      <div class="reservation-payment">
        <span>Down Payment:</span>
        <span>Php 575</span>
      </div>
      
      <div class="reservation-payment">
        <span>Remaining Balance:</span>
        <span>Php 575</span>
      </div>
      
      <button class="close-modal" onclick="closeModal()">Close</button>
    </div>
  </div>

  <script>
    function showReservationDetails(status) {
      const modal = document.getElementById('reservationModal');
      const modalStatus = document.getElementById('modalStatus');
      
      // Set different data based on status for demonstration
      if (status === 'verified') {
        document.getElementById('modalTitle').textContent = '#7 Manny Pacquiao';
        document.getElementById('modalDate').textContent = '2024-10-18';
        document.getElementById('modalTime').textContent = '1:00 PM';
        modalStatus.textContent = 'VERIFIED';
        modalStatus.className = 'reservation-status status-verified';
      } else if (status === 'pending') {
        document.getElementById('modalTitle').textContent = '#8 Pending Reservation';
        document.getElementById('modalDate').textContent = '2024-11-15';
        document.getElementById('modalTime').textContent = '2:30 PM';
        modalStatus.textContent = 'PENDING';
        modalStatus.className = 'reservation-status status-pending';
      } else if (status === 'cancelled') {
        document.getElementById('modalTitle').textContent = '#9 Cancelled Reservation';
        document.getElementById('modalDate').textContent = '2024-09-05';
        document.getElementById('modalTime').textContent = '10:00 AM';
        modalStatus.textContent = 'CANCELLED';
        modalStatus.className = 'reservation-status status-cancelled';
      }
      
      modal.style.display = 'flex';
    }
    
    function closeModal() {
      document.getElementById('reservationModal').style.display = 'none';
    }
    
    // Close modal when clicking outside of it
    window.addEventListener('click', function(event) {
      const modal = document.getElementById('reservationModal');
      if (event.target === modal) {
        closeModal();
      }
    });
  </script>

</body>
</html>