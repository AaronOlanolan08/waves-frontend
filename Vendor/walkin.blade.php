<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="../css/walkin.css" />   <!-- kani na link, kay wala pa na convert -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <title>Walk-in Reservation</title>
</head>
<body>

  <nav class="navbar">
    <div class="left-side-nav">
      <a href="{{ url('/dashboard') }}">
        <button class="dashboard inactive" id="dashboard">
          <i class="material-icons nav-icons">dashboard</i> Dashboard
        </button>
      </a>
      <a href="{{ url('/ameneties') }}">
        <button class="ameneties" id="ameneties">
          <i class="material-icons nav-icons">holiday_village</i> Ameneties
        </button>
      </a>
      <a href="{{ url('/reservations') }}">
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
    <a href="{{ url('/calendar') }}" class="back-link">
      <span class="chevron-left"></span> Back to Calendar
    </a>
    <h2 class="head-title">Walk-in Reservation</h2>

    <section class="booking">
      <form action="{{ route('reservations.update') }}" method="POST" class="booking-form">
        @csrf
        
        <h2>Customer Reservation</h2>
        <p>7:00 AM - 9:00 PM</p>

        <div class="date-time-container">
          <div class="reservation-date">
            <label>Reservation Date:</label>
            <input type="date" name="reservation_date" id="reservation-date" required>
          </div>

          <div class="start-end-time-container">
            <div>
              <label for="start-time">Start Time:</label>
              <input type="time" name="start_time" id="start-time" required>
            </div>
            <div>
              <label for="end-time">End Time:</label>
              <input type="time" name="end_time" id="end-time" required>
            </div>
          </div>
        </div>

        <div class="cottage-table-container">
          <div>
            <label for="cottage">Cottage:</label>
            <select name="cottage" id="cottage" required>
              <option>Select</option>
            </select>
          </div>
          <div>
            <label for="table">Table:</label>
            <select name="table" id="table" required>
              <option>Select</option>
            </select>
          </div>
        </div>

        <div class="payment-footer">
          <label for="paymentInput" class="payment-label">Enter Payment:</label>
          <input type="number" name="payment" id="paymentInput" class="payment-input" required>
        </div>

        <div class="button-wrapper">
          <button type="submit" class="payment-button">Record</button>
        </div>
      </form>
    </section>
  </main>

</body>
</html>
