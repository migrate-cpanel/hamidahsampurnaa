<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Kontak Website</title>
</head>
<body>
    <h2>Anda Menerima Pesan Baru!</h2>
    <hr>
    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <br>
    <div>
        <strong>Pesan:</strong>
        <p>{{ $data['message'] }}</p>
    </div>
</body>
</html>