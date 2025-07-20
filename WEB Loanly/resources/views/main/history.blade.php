<!-- filepath: c:\laragon\www\Loan.ly\resources\views\main\history.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Loan History</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: url('{{ asset('assets/img/history.png') }}') no-repeat center center fixed;
            background-size: cover;
        }
        .main-history-container {
            background: #fff;
            border-radius: 40px;
            margin: 80px auto 0 auto;
            max-width: 1100px;
            min-height: 600px;
            padding: 40px 32px 60px 32px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            position: relative;
        }
        .history-title {
            font-size: 2rem;
            font-weight: 700;
            color: #205781;
            margin-bottom: 32px;
        }
        .history-card {
            background: #205781;
            border-radius: 28px;
            display: flex;
            align-items: center;
            padding: 28px 32px;
            margin-bottom: 24px;
            position: relative;
            gap: 28px;
        }
        .history-card img {
            width: 110px;
            height: 110px;
            border-radius: 16px;
            object-fit: cover;
            background: #fff;
            border: 4px solid #fff;
            margin-right: 10px;
        }
        .history-info {
            color: #fff;
            flex: 1;
        }
        .history-info .provider {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 6px;
        }
        .history-info .desc {
            font-size: 1.1rem;
            font-weight: 500;
            color: #c7e0f7;
        }
        .history-status {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 10px;
            min-width: 200px;
        }
        .history-status .est-month {
            background: #fff;
            color: #205781;
            font-weight: 700;
            border-radius: 10px;
            padding: 8px 22px;
            font-size: 1.1rem;
            margin-bottom: 8px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .history-status .on-progress {
            color: #fff;
            font-weight: 700;
            font-size: 1.2rem;
            letter-spacing: 1px;
            text-shadow: 0 1px 2px #0002;
        }
        .btn-back {
            position: absolute;
            top: 32px;
            right: 48px;
            background: #fff;
            color: #222;
            border-radius: 12px;
            border: none;
            width: 150px;
            padding: 12px 40px;
            font-weight: 500;
            font-size: 1.1rem;
            text-decoration: none;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        @media (max-width: 900px) {
            .main-history-container { padding: 16px 4px; min-width: 0; }
            .history-card { flex-direction: column; align-items: flex-start; gap: 16px; }
            .history-status { align-items: flex-start; min-width: 0; }
            .btn-back { right: 10px; top: 10px; width: 100px; padding: 8px 0; font-size: 1rem; }
        }
    </style>
</head>
<body>
    <a href="/home" class="btn-back">Back</a>
    <!-- filepath: c:\laragon\www\Loan.ly\resources\views\main\history.blade.php -->
...
<div class="main-history-container">
    <div class="history-title">Loan History</div>
    @forelse($applications as $app)
        <div class="history-card">
            <img src="{{ asset('assets/img/' . ($app->loanProvider->logo ?? 'loan-logo.png')) }}" alt="{{ $app->loanProvider->nama_penyedia }}">
            <div class="history-info">
                <div class="provider">{{ $app->loanProvider->nama_penyedia }}</div>
                <div class="desc">
                    Loan Amount: ${{ number_format($app->jumlah_pinjaman_diminta/1000, 0) }}k &nbsp; | &nbsp; Loan Term: {{ $app->jangka_waktu_bulan }} Months
                </div>
            </div>
            <div class="history-status">
                <div class="est-month">Est Months: {{ $app->jangka_waktu_bulan }} Month</div>
                <div class="on-progress">{{ $app->status_aplikasi }}</div>
                <div class="mt-2 text-white" style="font-size:0.95rem;">Monthly Payment: ${{ number_format($app->monthly_payment, 2) }}</div>
            </div>
        </div>
    @empty
        <div class="text-center text-muted">No loan history found.</div>
    @endforelse
</div>


        {{-- <!-- Loan Inc Association -->
        <div class="history-card">
            <img src="{{ asset('assets/img/bank.png') }}" alt="Bank Rate">
            <div class="history-info">
                <div class="provider">Bank Rate</div>
                <div class="desc">
                    Loan Amount: $40k &nbsp; | &nbsp; Loan Term: 24 Months
                </div>
            </div>
            <div class="history-status">
                <div class="est-month">Est Months: 24 Month</div>
                <div class="on-progress">ON PROGRESS</div>
            </div>
        </div>
         <!-- Happy Money -->
        <div class="history-card">
            <img src="{{ asset('assets/img/happymoney.png') }}" alt="Happy Money">
            <div class="history-info">
                <div class="provider">Happy Money</div>
                <div class="desc">
                    Loan Amount: $15k &nbsp; | &nbsp; Loan Term: 6 Months
                </div>
            </div>
            <div class="history-status">
                <div class="est-month">Est Months: 6 Month</div>
                <div class="on-progress">DONE</div>
            </div>
        </div> --}}
    </div>
</body>
</html>