{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loan Market Association - Details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      background : url('assets/img/Moredetails.png') no-repeat center center fixed ;
       background-size: cover;
      font-family: 'Segoe UI', sans-serif;
    }
    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 48px;
    }
    .logo {
      height: 50px;
      border-radius: 10px;
      
    }
    .btn-back {
      width: 200px;
      background: #fff;
      color: #222;
      border-radius: 10px;
      padding: 8px 24px;
      font-weight: 500;
      font-size: 1rem;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
    }
    .details-card {
      background: #fff;
      border-radius: 32px;
      max-width: 960px;
      margin: 24px auto;
      padding: 36px;
      box-shadow: 0 4px 24px rgba(0, 0, 0, 0.08);
    }
    .details-header {
      display: flex;
      align-items: center;
      gap: 18px;
    }
    .details-logo {
      width: 70px;
      height: 70px;
      border-radius: 16px;
      object-fit: cover;
      background: #fff;
      border: 2px solid #eee;
    }
    .star {
      color: #FFD600;
      font-size: 1.3rem;
    }
    .details-meta {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      margin: 24px 0 18px 0;
      border-bottom: 1px solid #eee;
      padding-bottom: 18px;
    }
    .details-meta-item {
      min-width: 120px;
      text-align: center;
      margin-bottom: 10px;
    }
    .details-meta-item span {
      display: block;
      font-weight: 700;
      font-size: 1.1rem;
      color: #222;
    }
    .details-meta-item small {
      color: #444;
      font-size: 0.95rem;
    }
    .pros-cons-row {
      display: flex;
      justify-content: space-between;
      gap: 24px;
      margin-bottom: 18px;
    }
    .pros-cons-col {
      flex: 1;
    }
    .pros-cons-col h6 {
      font-weight: 700;
      margin-bottom: 8px;
    }
    .pros-cons-col ul {
      padding-left: 0;
      list-style: none;
    }
    .pros-cons-col li {
      margin-bottom: 8px;
      font-size: 1rem;
    }
    .bi-check-circle {
      color: #2ecc71;
      margin-right: 6px;
    }
    .bi-x-circle {
      color: #e74c3c;
      margin-right: 6px;
    }
    .who-box {
      background: #205781;
      color: #fff;
      border-radius: 24px;
      padding: 18px 24px;
      margin-top: 18px;
    }
    .who-box h6 {
      font-weight: bold;
      font-size: 1.1rem;
      margin-bottom: 6px;
    }
    @media (max-width: 768px) {
      .top-bar {
        padding: 12px 24px;
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
      }
      .details-header {
        flex-direction: column;
        text-align: center;
        align-items: center;
      }
      .pros-cons-row {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <!-- Top bar with logo & back button -->
  <div class="top-bar">
    <img src="assets/img/logo.png" alt="Loan.ly Logo" class="logo">
     <a href="/calculate" target="_blank" class="btn-back px-4 py-2" style="border-radius:10px;">Back</a>
  </div>

  <!-- Card Content -->
  <div class="details-card">
    <div class="details-header mb-3">
      <img src="assets/img/bank.png" alt="Loan Inc Association" class="details-logo">
      <div>
        <div class="fw-bold" style="font-size:1.4rem;">Loan Inc Association</div>
        <div class="d-flex align-items-center mb-1">
          <div class="star">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star"></i>
          </div>
          <span class="ms-2 fw-semibold" style="color:#222;">4.7</span>
        </div>
        <div style="color:#666;">1,234 Reviews</div>
      </div>
    </div>

    <div class="details-meta">
      <div class="details-meta-item">
        <small>Est.APR</small>
        <span>9% - 35%</span>
      </div>
      <div class="details-meta-item">
        <small>Loan Amount</small>
        <span>$2k - $35k</span>
      </div>
      <div class="details-meta-item">
        <small>Min Credit Score</small>
        <span>550</span>
      </div>
      <div class="details-meta-item">
        <small>Loan Term</small>
        <span>1 - 24 Months</span>
      </div>
      <div class="details-meta-item">
        <small>Origination Fee</small>
        <span>2% - 85%</span>
      </div>
    </div>

    <div class="pros-cons-row">
      <div class="pros-cons-col">
        <h6>Pros</h6>
        <ul>
          <li><i class="bi bi-check-circle"></i>Option to add a co-borrower</li>
          <li><i class="bi bi-check-circle"></i>Perks like credit monitoring and seven-day-a-week customer service</li>
          <li><i class="bi bi-check-circle"></i>Low credit score minimum and flexible repayment terms</li>
        </ul>
      </div>
      <div class="pros-cons-col">
        <h6>Cons</h6>
        <ul>
          <li><i class="bi bi-x-circle"></i>Fees up to almost 10 percent</li>
          <li><i class="bi bi-x-circle"></i>Qualifying requirements not disclosed on website</li>
          <li><i class="bi bi-x-circle"></i>High APR maximum</li>
        </ul>
      </div>
    </div>

    <div class="who-box mt-3">
      <h6>Who’s it for</h6>
      <p>
        Avant offers an extensive list of ways personal loans can be used besides the standard emergency, debt consolidation and home improvement scenarios. The site states an Avant personal loan can be used to fund adoption or infertility procedures, cover the cost of a wedding or vacation, or provide next-day funds for a business expense. </p>
    </div>
  </div>
</body>
</html> --}}
