<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Permohonan Surat Keterangan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        [x-cloak] {
            display: none !important
        }
    </style>
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: #f3f3f3;
        }


        .page {
            font-family: Arial, sans-serif;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            width: 210mm;
            min-height: 297mm;
            padding: 20mm 20mm 20mm 20mm;
            box-sizing: border-box;
            background: white;
        }


        span,
        li,
        label,
        p {
            font-size: 12px;
        }

        h4 {
            margin-bottom: 15px;
            font-size: 14px;
        }

        .section {
            margin-bottom: 15px;
        }

        .field {
            display: flex;
            margin-bottom: 6px;
        }

        .field label {
            width: 140px;
            flex-shrink: 0;
        }

        .field .colon {
            margin: 0 6px;
        }

        input[type="text"] {
            font-size: 12px;
            border: none;
            border-bottom: 1px solid #000;
            outline: none;
            flex: 1;
        }

        .checkbox-group {
            margin: 10px 0;
        }

        .checkbox-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .dotted-line {
            border: none;
            border-bottom: 1px dotted #000;
            width: 100%;
            margin: 3px 0 8px 20px;
            font-size: 12px;
        }

        .attachments ol {
            margin-left: 18px;
        }

        .note {
            margin-top: 10px;
        }

        .signature {
            margin-top: 25px;
            display: flex;
            justify-content: flex-end;
            /* rata kanan */
        }

        .signature-box {
            width: 260px;
            text-align: left;
        }

        .signature-fields {
            margin-top: 0;
        }

        .signature-fields input p {
            border: none;
            border-bottom: 1px solid #000;
            width: 100%;
            margin: -4px 0;
            /* tarik ke atas */
            padding: 0;
            height: 14px;
            /* paksa pendek */
            line-height: 14px;
            font-size: 12px;
        }


        .footer-note {
            margin-top: 15px;
            font-size: 11px;
            font-style: italic;
        }

        /* Tombol tidak ikut tercetak */
        @media print {
            body {
                background: white !important;
            }

            .page {
                width: 210mm;
                padding: 20mm;
            }


            .btn-container {
                display: none;
            }
        }
    </style>
    <style>
        /* Mode PDF: input jadi teks */
        .pdf-mode input[type="text"] {
            border: none !important;
            outline: none !important;
            box-shadow: none !important;
            background: transparent !important;
            appearance: none !important;
            -webkit-appearance: none !important;
        }

        .pdf-text {
            font-size: 12px;
            display: inline-block;
            min-width: 50px;
        }

        .btn-container {
            margin-bottom: 20px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn-container button {
            padding: 10px 18px;
            font-size: 13px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        /* tombol download */
        .btn-download {
            background: #198754;
            /* hijau kampus */
            color: white;
        }

        .btn-download:hover {
            background: #157347;
            transform: translateY(-1px);
        }

        /* tombol reset */
        .btn-reset {
            background: #dc3545;
            color: white;
        }

        .btn-reset:hover {
            background: #bb2d3b;
            transform: translateY(-1px);
        }

        /* ==== PDF STABILITY FIX ==== */
        #formContent {
            width: 100%;
        }

        /* paksa satu halaman A4 */
        .page {
            page-break-after: avoid;
            page-break-inside: avoid;
        }

        /* cegah pecah section */
        .section,
        .checkbox-group,
        .attachments,
        .signature,
        .note {
            page-break-inside: avoid;
        }

        /* line-height stabil saat canvas render */
        span,
        p,
        label,
        li,
        input {
            line-height: 1.25;
        }

        /* checkbox jangan membesar */
        input[type="checkbox"] {
            transform: scale(0.9);
        }

        .pdf-hide {
            display: none !important
        }


        /* =========================
   RESPONSIVE SCREEN MODE
   ========================= */

        @media screen and (max-width: 768px) {

            .page {
                width: 100% !important;
                min-height: auto;
                margin: 0;
                padding: 16px;
                box-shadow: none;
            }

            h4 {
                font-size: 13px;
            }

            span,
            p,
            label,
            li {
                font-size: 12px;
            }

            /* field jadi vertikal */
            .field {
                flex-direction: column;
                gap: 2px;
            }

            .field label {
                width: auto;
                font-weight: 600;
            }

            .field .colon {
                display: none;
            }

            input[type="text"] {
                width: 100%;
            }

            /* tanda tangan jangan mepet kanan */
            .signature {
                justify-content: flex-start;
            }

            .signature-box {
                width: 100%;
                max-width: 320px;
            }

            /* tombol full width */
            .btn-container {
                flex-direction: column;
            }

            .btn-container button {
                width: 100%;
            }
        }


        /* =========================
   FORCE DESKTOP FOR PDF
   ========================= */

        .force-desktop .page {
            width: 210mm !important;
            min-height: 297mm !important;
            padding: 20mm !important;
            margin: 20px auto !important;
        }

        .force-desktop .field {
            flex-direction: row !important;
        }

        .force-desktop .field label {
            width: 140px !important;
        }

        .force-desktop .field .colon {
            display: inline !important;
        }

        .force-desktop .signature {
            justify-content: flex-end !important;
        }


        .tanggal-line {
            display: flex;
            align-items: center;
            gap: 6px;
            white-space: nowrap;
        }
    </style>

</head>

<body>
    <x-navbar />
    <div class="page">

        <div class="btn-container">

            <h4 style="color: #bb2d3b">
                * Masukkan data dengan benar, print dan tandatangani, serahkan ke penglola prodi.
            </h4>
        </div>

        <div id="formContent">
            <h4><strong>
                    Hal : Permohonan Surat Keterangan (Aktif Kuliah / KTM Sementara)
                </strong></h4>

            <div class="section">
                <p><strong>Kepada Yth</strong><br>
                    <strong>Rektor IAIN Datuk Lakemana Bengkalis</strong><br>
                    Cq. Kasubbag Layanan Akademik<br>
                    Di Bengkalis
                </p>
            </div>

            <div class="section">
                <p>Dengan hormat, Saya yang bertandatangan dibawah ini:</p>
            </div>

            <div class="section">
                <div class="field">
                    <label>Nama</label>
                    <span class="colon">:</span>
                    <input type="text" id="nama" placeholder="Masukkan nama lengkap">
                </div>
                <div class="field">
                    <label>NIM/ID Pendaftaran</label>
                    <span class="colon">:</span>
                    <input type="text" id="nim" placeholder="Masukkan NIM atau ID Pendaftaran">
                </div>
                <div class="field">
                    <label>Tempat /Tgl Lahir</label>
                    <span class="colon">:</span>
                    <input type="text" id="ttl" placeholder="Contoh: Bengkalis, 15 Januari 2000">
                </div>
                <div class="field">
                    <label>Jurusan</label>
                    <span class="colon">:</span>
                    <input type="text" id="jurusan" placeholder="Masukkan jurusan">
                </div>
                <div class="field">
                    <label>Program Studi</label>
                    <span class="colon">:</span>
                    <input type="text" id="prodi" placeholder="Masukkan program studi">
                </div>
                <div class="field">
                    <label>Alamat Lengkap</label>
                    <span class="colon">:</span>
                    <input type="text" id="alamat" placeholder="Masukkan alamat lengkap">
                </div>
                <div class="field">
                    <label>Telp/Hp</label>
                    <span class="colon">:</span>
                    <input type="text" id="telp" placeholder="Masukkan nomor telepon">
                </div>
                <div class="field">
                    <label>Tahun Akademik</label>
                    <span class="colon">:</span>
                    <input type="text" id="tahun" placeholder="Contoh: 2024/2025">
                </div>
            </div>

            <div class="checkbox-group">
                <p>Dengan ini mengajukan permohonan surat keterangan :</p>

                <div class="checkbox-item">
                    <input type="checkbox" id="aktif">
                    <div class="content">
                        <label for="aktif">1. Surat Keterangan Aktif Kuliah</label><br>
                        <span style="margin-left: 20px;">Digunakan untuk:</span>
                        <input type="text" class="dotted-line" id="keperluan1" placeholder="Tulis keperluan di sini">
                    </div>
                </div>

                <div class="checkbox-item">
                    <input type="checkbox" id="ktm">
                    <div class="content">
                        <label for="ktm">2. Surat Keterangan KTM Sementara</label><br>
                        <span style="margin-left: 20px;">Digunakan untuk:</span>
                        <input type="text" class="dotted-line" id="keperluan2" placeholder="Tulis keperluan di sini">
                    </div>
                </div>
            </div>

            <div class="attachments">
                <p><strong>Bersama ini saya lampirkan :</strong></p>
                <ol>
                    <li>Fotocopy Kartu Tanda Mahasiswa (KTM)</li>
                    <li>Fotocopy Bukti Bayar SPP</li>
                    <li>Fotocopy Kartu Tanda Penduduk (KTP)</li>
                    <li>Fotocopy Kartu Ujian ( mahasiswa baru)</li>
                </ol>
            </div>

            <div class="note">
                <p>Demikian pengisian formulir Permohonan ini saya buat dengan benar dan dapat dipertanggung jawabkan,
                    terima kasih.</p>
            </div>

            <div class="signature">
                <div class="signature-box">
                    <div class="signature-fields">

                        <p class="tanggal-line">
                            <span>Bengkalis,</span>
                            <input type="text" id="tanggal">
                        </p>

                        <p>Pemohon</p>
                    </div>
                    <br><br>
                    <div class="signature-fields">
                        <div style="text-decoration: underline">
                            <input type="text" id="nama_ttd" placeholder="Nama pemohon">
                        </div>
                        <input type="text" id="nim_ttd" placeholder="NIM pemohon">
                    </div>
                </div>
            </div>



            <div class="footer-note">
                <p><strong>Catatan :</strong><br>
                    * <em>Ceklis pada surat keterangan yang diminat</em></p>
            </div>
        </div>

        <div class="btn-container mt-10">
            <button class="btn-download" onclick="downloadForm()">Download Surat (PDF)</button>
            <button class="btn-reset" onclick="resetForm()">Reset Formulir</button>

        </div>
    </div>
    <x-footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
        // Auto-fill nama dan NIM di bagian tanda tangan
        document.getElementById('nama').addEventListener('input', function() {
            document.getElementById('nama_ttd').value = this.value;
        });

        document.getElementById('nim').addEventListener('input', function() {
            document.getElementById('nim_ttd').value = this.value;
        });

        // Set tanggal otomatis ke hari ini
        window.onload = function() {
            const today = new Date();
            const options = {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };
            const dateString = today.toLocaleDateString('id-ID', options);
            document.getElementById('tanggal').value = dateString;
        };

        function downloadForm() {

            document.body.classList.add('force-desktop');

            const form = document.getElementById('formContent');
            form.classList.add('pdf-mode');

            const inputs = form.querySelectorAll('input[type="text"]');
            const replacements = [];

            inputs.forEach(input => {
                const span = document.createElement('span');
                span.className = 'pdf-text';
                span.textContent = input.value || ' ';

                const style = window.getComputedStyle(input);
                span.style.display = 'inline-block';
                span.style.width = style.width;
                span.style.borderBottom = style.borderBottom;

                replacements.push({
                    input,
                    span
                });
                input.parentNode.replaceChild(span, input);
            });

            html2pdf().set({
                    margin: [30, 19, 20, 19],
                    filename: 'Surat_Keterangan_Aktif_Kuliah.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2,
                        scrollY: 0
                    },
                    jsPDF: {
                        unit: 'mm',
                        format: 'a4',
                        orientation: 'portrait'
                    }
                })
                .from(form)
                .save()
                .then(() => {

                    replacements.forEach(({
                        input,
                        span
                    }) => {
                        span.parentNode.replaceChild(input, span);
                    });

                    form.classList.remove('pdf-mode');
                    document.body.classList.remove('force-desktop'); // ← balikin
                });
        }


        function resetForm() {
            if (confirm('Apakah Anda yakin ingin mengosongkan semua isian formulir?')) {
                document.querySelectorAll('input[type="text"]').forEach(input => {
                    if (input.id !== 'tanggal') {
                        input.value = '';
                    }
                });
                document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                    checkbox.checked = false;
                });

                // Reset tanggal ke hari ini
                const today = new Date();
                const options = {
                    day: 'numeric',
                    month: 'long',
                    year: 'numeric'
                };
                const dateString = today.toLocaleDateString('id-ID', options);
                document.getElementById('tanggal').value = dateString;
            }
        }
    </script>
</body>

</html>
