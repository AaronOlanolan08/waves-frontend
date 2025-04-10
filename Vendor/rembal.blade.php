<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bal.css" />   <!-- kani na link, kay wala pa na convert -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <title>Remaining Balances</title>
</head>
<body>

  <!-- NAVIGATION BAR SECTION -->
  <nav class="navbar">
    <div class="left-side-nav">
      <a href="{{ url('dashboard') }}">
        <button class="dashboard inactive" id="dashboard">
          <i class="material-icons nav-icons">dashboard</i> Dashboard
        </button>
      </a>
      <a href="{{ url('ameneties') }}">
        <button class="ameneties" id="ameneties">
          <i class="material-icons nav-icons">holiday_village</i> Ameneties
        </button>
      </a>
      <a href="{{ url('reservations') }}">
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
    <a href="{{ url('calendar') }}" class="back-link">
      <span class="chevron-left"></span> Back to Calendar
    </a>
    <h2 class="head-title">Remaining Balances</h2>

    <div class="reservation-container">
      <div class="header-row">
        <div class="header-cell name-header">Name</div>
        <div class="header-cell calculation-header">Balance Calculation</div>
        <div class="header-cell remaining-header">Remaining Balance</div>
        <div class="header-cell"></div> 
      </div>

      <div class="reservation-item">
        <div class="name-cell">
          <span class="guest-name">Sayang Aq Huhu</span>
        </div>
        <div class="calculation-cell">
          <span class="total-amount">₱2,500</span>
          <span class="minus"> - </span>
          <span class="downpayment">₱1,500</span>
          <span class="equals"> = </span>
        </div>
        <div class="remaining-cell">
          <span class="balance-amount">₱1,000</span>
        </div>
        <div class="action-cell">
          <button class="verify-btn">Record Payment</button>
          <button class="decline-btn">Send Reminder</button>
        </div>
      </div>

      <div class="reservation-item">
        <div class="name-cell">
          <span class="guest-name">John Doe</span>
        </div>
        <div class="calculation-cell">
          <span class="total-amount">₱3,000</span>
          <span class="minus"> - </span>
          <span class="downpayment">₱1,200</span>
          <span class="equals"> = </span>
        </div>
        <div class="remaining-cell">
          <span class="balance-amount">₱1,800</span>
        </div>
        <div class="action-cell">
          <button class="verify-btn">Record Payment</button>
          <button class="decline-btn">Send Reminder</button>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal -->
  <div id="paymentModal" class="modal" style="display: none;">
    <div class="modal-content">
      <span class="close-x" id="modalCloseX">&times;</span>
      <div class="modal-header">Payment Summary</div>
      <div class="payment-details">
        <div class="name-section">
          <div class="guest-name" id="modalGustName">Ey Yo</div>
          <div class="payment-summary">
            Full Cottage<br />
            Round Table w3 chairs
          </div>
        </div>
        <div class="total-section">
          <strong>Total:</strong><span id="modalTotalAmount">₱2,500</span>
        </div>
        <div class="downpayment-section">
          <strong>Down Payment:</strong><span id="modalDownpayment">₱1,500</span>
        </div>
        <div class="balance-section">
          <div class="balance-items">
            <div class="balance-item"><span class="pre">Total: 1,100</span></div>
            <div class ="balance-item"><span class="pre">Down Payment: 575</span></div>
            <div class="balance-item"><span class="pre">Remaining Balance: 575</span></div>
          </div>
        </div>
        <hr />
        <div class="modal-footer">
          <label for="paymentInput" class="payment-label">Enter Payment Received:</label>
          <input type="number" id="paymentInput" class="payment-input" />      
          <button class="record-btn confirm-record-btn">Record</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const modal = document.getElementById('paymentModal');
      const recordButtons = document.querySelectorAll('.verify-btn');
      const confirmButton = document.querySelector('.confirm-record-btn');
      const closeX = document.getElementById('modalCloseX');

      recordButtons.forEach(button => {
        button.addEventListener('click', function () {
          modal.style.display = 'block';
        });
      });

      closeX.addEventListener('click', function () {
        modal.style.display = 'none';
      });

      window.addEventListener('click', function (event) {
        if (event.target === modal) {
          modal.style.display = 'none';
        }
      });

      confirmButton.addEventListener('click', function () {
        const paymentInput = document.getElementById('paymentInput').value;
        if (!paymentInput || isNaN(paymentInput) || Number(paymentInput) <= 0) {
          alert('Please enter a valid payment amount.');
          return;
        }
        alert(`Payment of ₱${paymentInput} recorded successfully!`);
        modal.style.display = 'none';
        document.getElementById('paymentInput').value = '';
      });
    });
  </script>

</body>
</html>
