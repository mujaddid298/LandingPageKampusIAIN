<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Surat Rekomendasi Penelitian</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: #f3f3f3;
        }

        .page {
            font-family: Arial, sans-serif;
            width: 210mm;
            min-height: 297mm;
            margin: 20px auto;
            padding: 20mm;
            background: white;
            box-sizing: border-box;
        }

        h4 {
            font-size: 14px;
            margin-bottom: 20px;
        }

        p,
        label,
        li,
        span {
            font-size: 12px;
        }

        .section {
            margin-bottom: 18px;
        }

        .field {
            display: flex;
            margin-bottom: 8px;
        }

        .field label {
            width: 180px;
            flex-shrink: 0;
        }

        .colon {
            margin: 0 6px;
        }

        input[type="text"] {
            flex: 1;
            border: none;
            border-bottom: 1px solid #000;
            font-size: 12px;
            outline: none;
        }

        .attachments ol {
            margin-left: 20px;
        }

        .signature {
            margin-top: 40px;
            display: flex;
            justify-content: flex-end;
        }

        .signature-box {
            width: 260px;
            text-align: left;
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

        /* Mode PDF */
        .pdf-mode input {
            border: none !important;
            background: transparent !important;
        }

        .pdf-text {
            display: inline-block;
            font-size: 12px;
            min-width: 50px;
        }

        @media print {
            body {
                background: white;
            }

            .btn-container {
                display: none;
            }
        }


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

            <h4><strong>Hal : Permohonan Surat Rekomendasi Penelitian</strong></h4>

            <div class="section">
                <p>
                    Kepada Yth<br>
                    Ketua STAIN Bengkalis<br>
                    Cq. Kasubbag Layanan Akademik<br>
                    Di Bengkalis
                </p>
            </div>

            <div class="section">
                <p>Dengan hormat, Saya yang bertandatangan dibawah ini:</p>
            </div>

            <div class="section">
                <div class="field">
                    <label>Nama</label><span class="colon">:</span>
                    <input type="text" id="nama" placeholder="Masukkan nama lengkap">
                </div>

                <div class="field">
                    <label>NIM</label><span class="colon">:</span>
                    <input type="text" id="nim" placeholder="Masukkan NIM">
                </div>

                <div class="field">
                    <label>Semester</label><span class="colon">:</span>
                    <input type="text" placeholder="Contoh: VIII (Delapan)">
                </div>

                <div class="field">
                    <label>Tempat / Tgl Lahir</label><span class="colon">:</span>
                    <input type="text" placeholder="Contoh: Bengkalis, 12 Januari 2001">
                </div>

                <div class="field">
                    <label>Program Studi</label><span class="colon">:</span>
                    <input type="text" placeholder="Contoh: Pendidikan Agama Islam (PAI)">
                </div>

                <div class="field">
                    <label>Tanggal Ujian Proposal</label><span class="colon">:</span>
                    <input type="text" placeholder="Contoh: 20 Februari 2026">
                </div>

                <div class="field">
                    <label>Telp / HP</label><span class="colon">:</span>
                    <input type="text" placeholder="Contoh: 08xxxxxxxxxx">
                </div>

                <div class="field">
                    <label>Jenis Penelitian</label><span class="colon">:</span>
                    <input type="text" placeholder="Masukkan jenis penelitian">
                </div>

                <div class="field">
                    <label>Lokasi Penelitian</label><span class="colon">:</span>
                    <input type="text" placeholder="Masukkan lokasi penelitian">
                </div>

                <div class="field">
                    <label>Judul Skripsi</label><span class="colon">:</span>
                    <input type="text" placeholder="Masukkan judul skripsi">
                </div>

            </div>

            <div class="section attachments">
                <p><strong>Bersama ini saya lampirkan :</strong></p>
                <ol>
                    <li>1. Fotocopy Kartu Tanda Mahasiswa (KTM)</li>
                    <li>2. Fotocopy Bukti Bayar SPP</li>
                    <li>3. Fotocopy Cover Skripsi yang sudah di Acc Penguji</li>
                    <li>4. Fotocopy Berita Acara Ujian Proposal</li>
                    <li>5. Surat Keterangan Lanjut Penelitian dari Ketua Prodi</li>
                    <li>6. Surat Pra Riset dari Tempat Penelitian</li>
                </ol>
            </div>

            <div class="section">
                <p>Demikian permohonan ini saya buat dengan sebenarnya. Atas perhatian Bapak/Ibu, saya ucapkan terima
                    kasih.</p>
            </div>

            <div class="signature">
                <div class="signature-box">
                    <p class="tanggal-line">
                        <span>Bengkalis,</span>
                        <input type="text" id="tanggal">
                    </p>
                    <p>Pemohon</p><br><br>
                    <input type="text" id="nama_ttd" style="border-bottom:1px solid #000"><br>
                    <input type="text" id="nim_ttd">
                </div>
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
        // Auto isi tanda tangan
        document.getElementById('nama').addEventListener('input', e => {
            document.getElementById('nama_ttd').value = e.target.value;
        });

        document.getElementById('nim').addEventListener('input', e => {
            document.getElementById('nim_ttd').value = e.target.value;
        });

        // Tanggal otomatis
        window.onload = () => {
            const tgl = new Date().toLocaleDateString('id-ID', {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            });
            document.getElementById('tanggal').value = tgl;
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
                    margin: [30, 20, 20, 20],
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
            if (confirm('Reset semua isian?')) {
                document.querySelectorAll('input[type="text"]').forEach(i => i.value = '');
                window.onload();
            }
        }
    </script>

</body>

</html>
