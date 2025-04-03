<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GATE Admit Card</title>
    <link rel="stylesheet" href="{{ asset('css/admit_card.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script> <!-- Barcode Library -->
</head>
<body>

    <div class="admit-card">
        <header>
            <h1>Admit Card</h1>
            <div class="exam-session">S1 (FN)</div>
        </header>

        <section class="card-body">
            <div class="photo-section">
                <img src="{{ asset('storage/' . $user->photo) }}" alt="Applicant Photo">
            </div>
            <div class="details-section">
                <p><strong>Registration No:</strong> {{ $user->id }}</p>
                <p><strong>Paper Code/Name:</strong> {{ strtoupper($user->papercode) }}</p>
                <p><strong>Date:</strong> TBD</p>
                <p><strong>Time:</strong> TBD</p>
                <p><strong>Examination Centre:</strong> {{ $user->examcenter }}</p>
            </div>
        </section>

        <section class="organizer">
            <h2>Organizing Institute</h2>
            <h3>IIT KANPUR</h3>
        </section>

        <section class="signature-section">
            <div class="signature">
                <p><strong>Signature:</strong></p>
                <img src="{{ asset('storage/' . $user->signature) }}" alt="Applicant Signature">
            </div>
            <div class="barcode">
                <svg id="barcode"></svg> <!-- Barcode Placeholder -->
            </div>
        </section>

        <section class="instructions">
            <h3>Important Instructions for the Candidate</h3>
            <ul>
                <li>Candidates must carry a printed copy of this Admit Card along with an original valid photo ID.</li>
                <li>Electronic devices, calculators, and study materials are strictly prohibited in the exam hall.</li>
                <li>Follow the exam center’s COVID-19 guidelines and arrive at least 30 minutes before the scheduled time.</li>
            </ul>
        </section>
    </div>

    <script>
        // Generate Barcode for Registration Number
        JsBarcode("#barcode", "{{ $user->id }}", {
            format: "CODE128",
            displayValue: true,
            fontSize: 14
        });
    </script>

</body>
</html>
