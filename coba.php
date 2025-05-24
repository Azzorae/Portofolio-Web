<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Notifikasi</title>
  <style>
    #notif {
      display: none;
      background-color: #4CAF50;
      color: white;
      padding: 16px;
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 1000;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      font-family: Arial, sans-serif;
    } 
  </style>
</head>
<body>

<button onclick="kirimPesan()">Kirim Pesan</button>

<div id="notif">Pesan sudah terkirim!</div>

<script>
  function kirimPesan() {
    // Simulasi pengiriman pesan
    // Tampilkan notifikasi
    const notif = document.getElementById('notif');
    notif.style.display = 'block';

    // Sembunyikan setelah 3 detik
    setTimeout(() => {
      notif.style.display = 'none';
    }, 3000);
  }
</script>

</body>
</html>
