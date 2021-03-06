<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Laravel Generate QR Code step by step</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h2>Simple QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(100)->generate('Make me into a QrCode!') !!}
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>Color QR Code</h2>
        </div>
        <div class="card-body">
            {!! QrCode::size(300)->backgroundColor(255, 0, 0)->generate('QRCodes') !!}
        </div>
    </div>

</div>
</body>
</html>
