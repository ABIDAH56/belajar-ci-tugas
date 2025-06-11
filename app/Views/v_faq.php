<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
// faq.php
$pageTitle = "FAQ - Abidz Store";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <style>
        .container {
            width: 85%;
            max-width: 1200px;
            margin: 20px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
       
        .faq-item {
            margin-bottom: 20px;
            border-bottom: 1px dashed #ddd;
            padding-bottom: 15px;
        }
        .faq-question {
            font-weight: 600;
            color: #3498db;
            font-size: 18px;
            margin-bottom: 8px;
            cursor: pointer;
        }
        .faq-answer {
            margin-left: 15px;
            color: #555;
            display: none;
        }
        .faq-answer.show {
            display: block;
            animation: fadeIn 0.3s;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
        <div class="faq-content">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">1. Bagaimana cara melakukan pemesanan di Abidz Store?</div>
                <div class="faq-answer">
                    <ol>
                        <li>Pilih produk yang ingin dibeli</li>
                        <li>Klik tombol "Tambahkan ke Keranjang"</li>
                        <li>Buka halaman Keranjang dan klik "Checkout"</li>
                        <li>Isi informasi pengiriman dan pembayaran</li>
                        <li>Konfirmasi pesanan dan lakukan pembayaran</li>
                    </ol>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">2. Metode pembayaran apa saja yang tersedia?</div>
                <div class="faq-answer">
                    <p>Kami menyediakan berbagai metode pembayaran:</p>
                    <ul>
                        <li><strong>Transfer Bank:</strong> BCA, BRI, Mandiri, BNI</li>
                        <li><strong>E-Wallet:</strong> OVO, Dana, Gopay, ShopeePay</li>
                        <li><strong>Kartu Kredit:</strong> Visa, Mastercard</li>
                        <li><strong>COD (Cash on Delivery):</strong> Hanya untuk area tertentu</li>
                    </ul>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">3. Berapa lama waktu pengiriman pesanan?</div>
                <div class="faq-answer">
                    <p>Waktu pengiriman bervariasi tergantung lokasi:</p>
                    <ul>
                        <li><strong>Jabodetabek:</strong> 1-2 hari kerja</li>
                        <li><strong>Pulau Jawa:</strong> 2-3 hari kerja</li>
                        <li><strong>Sumatera & Bali:</strong> 3-4 hari kerja</li>
                        <li><strong>Kalimantan, Sulawesi, Papua:</strong> 4-7 hari kerja</li>
                    </ul>
                    <p><em>Catatan: Waktu pengiriman tidak termasuk hari Minggu/libur nasional</em></p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">4. Bagaimana jika produk rusak/tdak sesuai saat diterima?</div>
                <div class="faq-answer">
                    <p>Ikuti prosedur berikut:</p>
                    <ol>
                        <li>Jangan buka kemasan sepenuhnya</li>
                        <li>Foto produk dari berbagai angle termasuk kemasan</li>
                        <li>Laporkan dalam 24 jam via WhatsApp ke 0812-3456-7890</li>
                        <li>Sertakan nomor order dan foto bukti</li>
                        <li>Tim kami akan memproses pengembalian/penggantian</li>
                    </ol>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">5. Apakah produk di Abidz Store bergaransi?</div>
                <div class="faq-answer">
                    <p>Kami memberikan garansi untuk produk tertentu:</p>
                    <table border="1" cellpadding="8" cellspacing="0" style="width:100%">
                        <tr>
                            <th>Jenis Produk</th>
                            <th>Masa Garansi</th>
                            <th>Syarat</th>
                        </tr>
                        <tr>
                            <td>Elektronik</td>
                            <td>14 hari</td>
                            <td>Segel utuh, tidak ada kerusakan fisik</td>
                        </tr>
                        <tr>
                            <td>Fashion</td>
                            <td>7 hari</td>
                            <td>Label masih terpasang, belum dicuci</td>
                        </tr>
                        <tr>
                            <td>Perlengkapan Rumah</td>
                            <td>30 hari</td>
                            <td>Kemasan asli, bukti pembelian</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleAnswer(this)">6. Bagaimana cara melacak pesanan saya?</div>
                <div class="faq-answer">
                    <p>Anda dapat melacak pesanan melalui:</p>
                    <ul>
                        <li>Email konfirmasi pengiriman yang kami kirim</li>
                        <li>Menu "Lacak Pesanan" di website</li>
                        <li>WhatsApp Customer Service dengan menyertakan nomor order</li>
                    </ul>
                    <p>Resi pengiriman biasanya aktif 24 jam setelah proses pengiriman</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            answer.classList.toggle('show');
        }

        // Buka FAQ pertama secara default
        document.addEventListener('DOMContentLoaded', function() {
            const firstQuestion = document.querySelector('.faq-question');
            if (firstQuestion) {
                firstQuestion.click();
            }
        });
    </script>
</body>
</html>
<?= $this->endSection() ?>