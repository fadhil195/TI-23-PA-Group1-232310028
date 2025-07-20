<!-- filepath: c:\laragon\www\Loan.ly\resources\views\main\home.blade.php -->
@php
use Illuminate\Support\Str;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Home - Loan.ly</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"/>
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('assets/img/Home.png') no-repeat center center fixed;
      background-size: cover;
      color: white;
    }
    .logo {
      height: 50px;
      border-radius: 10px;
    }
    .details-logo {
      width: 70px;
      height: 70px;
      border-radius: 16px;
      object-fit: cover;
      background: #fff;
      border: 2px solid #eee;
    }
    .loan-type-box {
      border: 2px solid #fff;
      border-radius: 16px;
      width: 160px;
      background: rgba(255, 255, 255, 0.05);
      color: #fff;
      cursor: pointer;
    }
    .loan-type-box.active {
      background: #ffd740;
      color: #205781;
      border-color: #ffd740;
    }
    .find-loan-box {
      color: #fff;
      font-weight: 700;
      display: inline-block;
      padding: 8px 20px;
      border-radius: 8px;
      box-shadow: 0 0 0px #fff;
      background: transparent;
      font-size: 2rem;
      letter-spacing: 1px;
    }
   
    .btnHistory {
      background: #3674b5;
      color: #fff;
      border: #fff;
    }
    .btnHistory:hover {
  background: #fff;
  color: #3674b5;
  border: 2px solid #fff;
}

    .compare-btn:hover {
      background: #fff;
      color: #3674b5;
    }
    .card-offer {
      background: #fff;
      border-radius: 32px;
      padding: 24px 32px;
      margin-bottom: 24px;
      color: #000;
      transition: box-shadow 0.2s;
    }
    .card-offer.hide {
      display: none !important;
    }
    .input-group-text-custom {
      background: transparent;
      color: #ff3300;
      border: none;
      font-weight: bold;
      font-size: 1.1rem;
    }

    .search-input{
      padding-left: 500px;
      padding-right: 500px;
    }

    .input-group-text-custom-term {
      background: transparent;
      color: #fff;
      border: none;
      font-weight: bold;
      font-size: 1.1rem;
    }
    @media (max-width: 900px) {
      .slider-section { padding: 12px 0 0 0; }
      .slider-group { min-width: 120px; padding: 4px 8px; }
      .find-loan-box { font-size: 1.2rem; }
    }
  </style>
</head>
<body>
  <div class="container-fluid px-4 py-3">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <img src="{{ asset('assets/img/logo.png') }}" alt="Loan.ly Logo" class="logo">
      <div class="d-flex align-items-center gap-2">
        <span style="color:#fff; font-size:20px;">{{ auth()->user()->nama }}</span>
        <img src="{{ asset('assets/img/profile.png') }}" alt="Profile" style="width:40px; height:40px; border-radius:50%;">
      </div>
    </div>

    <!-- Loan Types -->
    <h2 class="text-center mb-4" style="font-weight:700;">Choose Loan Type:</h2>
    <div class="d-flex justify-content-center gap-4 mb-5 flex-wrap">
      <div class="text-center p-4 loan-type-box" data-type="{{ Str::slug('Personal Loan') }}" style="background-color: #3674b5;">
        <i class="bi bi-cart" style="font-size:2.5rem;"></i>
        <div class="mt-2 fw-bold">Personal Loan</div>
      </div>
      <div class="text-center p-4 loan-type-box" data-type="{{ Str::slug('Payday Loan') }}" style="background-color: #3674b5;">
        <i class="bi bi-cash-stack" style="font-size:2.5rem;"></i>
        <div class="mt-2 fw-bold">Payday Loan</div>
      </div>
      <div class="text-center p-4 loan-type-box" data-type="{{ Str::slug('Car Loan') }}" style="background-color: #3674b5;" >
        <i class="bi bi-car-front" style="font-size:2.5rem;"></i>
        <div class="mt-2 fw-bold">Car Loan</div>
      </div>
      <div class="text-center p-4 loan-type-box" data-type="{{ Str::slug('Business Loan') }}" style="background-color: #3674b5;">
        <i class="bi bi-briefcase" style="font-size:2.5rem;"></i>
        <div class="mt-2 fw-bold">Business Loan</div>
      </div>
      <div class="text-center p-4 loan-type-box" data-type="{{ Str::slug('Student Loan') }}" style="background-color: #3674b5;">
        <i class="bi bi-mortarboard" style="font-size:2.5rem;"></i>
        <div class="mt-2 fw-bold">Student Loan</div>
      </div>
    </div>

    <!-- history -->
     <div class="text-center pt-3 mb-4 search-input">
            <a href="/history" class="btn btnHistory px-5">History</a>
    </div>

    {{-- <!-- Sliders Section -->
    <div>
      <div class="row align-items-center">
        <!-- Loan Amount -->
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-center gap-3">
            <div class="slider-label mb-0" style="min-width: 120px; color: white;">Loan Amount</div>
            <div class="d-flex align-items-center px-3 py-1 rounded-pill" id="loan-control" style="background-color: #3674b5; border: 2px solid #fff;">
              <button class="btn text-white p-0 px-2" id="plus-amount" style="background: none; border: none;">
                <i class="bi bi-plus-circle" style="font-size: 1.2rem;"></i>
              </button>
              <div class="d-flex align-items-center text-white fw-bold px-2">
                <span class="me-1" style="color: #eaff00;"><i class="bi bi-currency-dollar"></i></span>
                <input type="text" id="loan-amount" value="1.000" readonly
                       style="background: none; border: none; width: 60px; color: #eaff00; text-align: center; font-weight: bold;">
              </div>
              <button class="btn text-white p-0 px-2" id="minus-amount" style="background: none; border: none;">
                <i class="bi bi-dash-circle" style="font-size: 1.2rem;"></i>
              </button>
            </div>
          </div>
          <div class="mt-3 ms-auto" style="width: 97%;">
            <input type="range" class="slider-range" id="range-amount" min="100" max="10000" value="1000" step="100"
                   style="width: 300px; color: white;">
          </div>
        </div>
        <!-- Term Loan -->
        <div class="col-md-6 mb-3">
          <div class="d-flex align-items-center gap-3 justify-content-end">
            <div class="slider-label mb-0" style="min-width: 120px; color: white;">Term Loan</div>
            <div class="d-flex align-items-center px-3 py-1 rounded-pill" id="term-control" style="background-color: #3674b5; border: 2px solid #fff;">
              <button class="btn text-white p-0 px-2" id="plus-term" style="background: none; border: none;">
                <i class="bi bi-plus-circle" style="font-size: 1.2rem;"></i>
              </button>
              <div class="d-flex align-items-center text-white fw-bold px-2">
                <input type="text" id="loan-term" value="6 Month" readonly
                       style="background: none; border: none; width: 80px; color: white; text-align: center; font-weight: bold;">
              </div>
              <button class="btn text-white p-0 px-2" id="minus-term" style="background: none; border: none;">
                <i class="bi bi-dash-circle" style="font-size: 1.2rem;"></i>
              </button>
            </div>
          </div>
          <div class="mt-3 ms-auto" style="width: 45%;">
            <input type="range" class="slider-range slider-range-term" id="range-term" min="1" max="24" value="6"
                   style="width: 300px; color:white;">
          </div>
        </div>
      </div>
    </div> --}}


    {{-- Offers List --}}
    @foreach($providers as $provider)
    <div class="card-offer" data-type="{{ Str::slug($provider->tipe_pinjaman) }}"">
      <div class="d-flex align-items-center mb-2">
        @if($provider->nama_penyedia == 'Bank Rate')
          <img src="{{ asset('assets/img/bank.png') }}" alt="{{ $provider->nama_penyedia }}" style="width:60px; height:60px; border-radius:12px;">
        @elseif($provider->nama_penyedia == 'Loan Market Association')
          <img src="{{ asset('assets/img/loan-logo.png') }}" alt="{{ $provider->nama_penyedia }}" style="width:60px; height:60px; border-radius:12px;">
        @elseif($provider->nama_penyedia == 'Happy Money')
          <img src="{{ asset('assets/img/happymoney.png') }}" alt="{{ $provider->nama_penyedia }}" style="width:60px; height:60px; border-radius:12px;">
        @elseif($provider->nama_penyedia == 'Upstart')
          <img src="{{ asset('assets/img/upstart.png') }}" alt="{{ $provider->nama_penyedia }}" style="width:60px; height:60px; border-radius:12px;">
        @elseif($provider->nama_penyedia == 'OneMain Financial')
          <img src="{{ asset('assets/img/onefinancial.png') }}" alt="{{ $provider->nama_penyedia }}" style="width:60px; height:60px; border-radius:12px;">
        @endif
        <div class="ms-3 flex-grow-1">
          <div class="fw-bold">{{ $provider->nama_penyedia }}</div>
          <div class="mb-1">
            <span class="text-warning">
              @for($i = 1; $i <= 5; $i++)
                @if($i <= round($provider->rating))
                  <i class="bi bi-star-fill"></i>
                @else
                  <i class="bi bi-star"></i>
                @endif
              @endfor
            </span>
            <span class="text-muted ms-2">{{ $provider->rating ?? '0' }} Reviews</span>
          </div>
          <ul class="mb-0" style="font-size:15px;">
            <li><i class="bi bi-check2 text-success"></i> Est. APR: {{ $provider->apr_min_estimasi }}% - {{ $provider->apr_max_estimasi }}%</li>
            <li><i class="bi bi-check2 text-success"></i> Min Credit Score: {{ $provider->skor_kredit_min_estimasi }}</li>
            <li><i class="bi bi-check2 text-success"></i> Max Term: {{ $provider->jangka_waktu_max_bulan }} Months</li>
          </ul>
          <a href="/loanproviders/{{ $provider->id }}" class="text-decoration-none" style="color:#888;">More details <i class="bi bi-arrow-right"></i></a>
        </div>
        <div>
          <a href="{{ route('loanapplication.calculate', ['id' => $provider->id]) }}" target="_blank" class="btn btn-success px-4 py-2 fw-bold" style="border-radius:10px;">APPLY NOW</a>
          <div class="text-end text-muted" style="font-size:12px;">{{ rand(100,999) }} People use it</div>
        </div>
      </div>
    </div>
    @endforeach

    <script>
      // Slider background color logic
      // function setSliderBg(slider, color) {
      //   let min = Number(slider.min);
      //   let max = Number(slider.max);
      //   let val = Number(slider.value);
      //   let percent = ((val - min) / (max - min)) * 100;
      //   slider.style.background = `linear-gradient(to right, ${color} 0%, ${color} ${percent}%, #fff ${percent}%, #fff 100%)`;
      // }

      // // Loan Amount
      // const rangeAmount = document.getElementById('range-amount');
      // const loanAmount = document.getElementById('loan-amount');
      // const plusAmount = document.getElementById('plus-amount');
      // const minusAmount = document.getElementById('minus-amount');

      // function formatAmount(val) {
      //   return parseInt(val).toLocaleString();
      // }

      // rangeAmount.addEventListener('input', function() {
      //   loanAmount.value = formatAmount(this.value);
      //   setSliderBg(this, '#ffd740');
      // });

      // plusAmount.addEventListener('click', function() {
      //   let val = parseInt(rangeAmount.value);
      //   if (val < parseInt(rangeAmount.max)) {
      //     val += 100;
      //     rangeAmount.value = val;
      //     loanAmount.value = formatAmount(val);
      //     setSliderBg(rangeAmount, '#ffd740');
      //   }
      // });

      // minusAmount.addEventListener('click', function() {
      //   let val = parseInt(rangeAmount.value);
      //   if (val > parseInt(rangeAmount.min)) {
      //     val -= 100;
      //     rangeAmount.value = val;
      //     loanAmount.value = formatAmount(val);
      //     setSliderBg(rangeAmount, '#ffd740');
      //   }
      // });

      // // Term Loan
      // const rangeTerm = document.getElementById('range-term');
      // const loanTerm = document.getElementById('loan-term');
      // const plusTerm = document.getElementById('plus-term');
      // const minusTerm = document.getElementById('minus-term');

      // // Set max term hanya 12 bulan
      // rangeTerm.max = 12;

      // function formatTerm(val) {
      //   return val + ' Month';
      // }

      // rangeTerm.addEventListener('input', function() {
      //   loanTerm.value = formatTerm(this.value);
      //   setSliderBg(this, '#ffd740');
      // });

      // plusTerm.addEventListener('click', function() {
      //   let val = parseInt(rangeTerm.value);
      //   if (val < 12) { // batas maksimal 12
      //     val += 1;
      //     rangeTerm.value = val;
      //     loanTerm.value = formatTerm(val);
      //     setSliderBg(rangeTerm, '#ffd740');
      //   }
      // });

      // minusTerm.addEventListener('click', function() {
      //   let val = parseInt(rangeTerm.value);
      //   if (val > parseInt(rangeTerm.min)) {
      //     val -= 1;
      //     rangeTerm.value = val;
      //     loanTerm.value = formatTerm(val);
      //     setSliderBg(rangeTerm, '#ffd740');
      //   }
      // });

      // // Inisialisasi warna slider saat load
      // setSliderBg(rangeAmount, '#ffd740');
      // setSliderBg(rangeTerm, '#ffd740');

      // Filter offers by loan type
      
      document.querySelectorAll('.loan-type-box').forEach(function(btn) {
        btn.addEventListener('click', function() {
          document.querySelectorAll('.loan-type-box').forEach(function(b) { b.classList.remove('active'); });
          this.classList.add('active');
          let type = this.getAttribute('data-type');
          document.querySelectorAll('.card-offer').forEach(function(card) {
            if (card.getAttribute('data-type') === type) {
              card.classList.remove('hide');
            } else {
              card.classList.add('hide');
            }
          });
        });
      });

      // Compare Offers: Sortir sesuai term yang dipilih
      document.querySelector('.compare-btn').addEventListener('click', function() {
        const selectedTerm = parseInt(rangeTerm.value);
        document.querySelectorAll('.card-offer').forEach(function(card) {
          // Ambil max term dari ul terakhir
          const maxTermText = card.querySelector('ul li:last-child').textContent;
          const maxTerm = parseInt(maxTermText.replace(/[^0-9]/g, ''));
          if (maxTerm >= selectedTerm) {
            card.classList.remove('hide');
          } else {
            card.classList.add('hide');
          }
        });
      });

      // Optional: Show all offers if user clicks outside loan type
      document.body.addEventListener('click', function(e) {
        if (!e.target.classList.contains('loan-type-box') && !e.target.closest('.loan-type-box')) {
          document.querySelectorAll('.loan-type-box').forEach(function(b) { b.classList.remove('active'); });
          document.querySelectorAll('.card-offer').forEach(function(card) {
            card.classList.remove('hide');
          });
        }
      });
    </script>
  </div>
</body>
</html>