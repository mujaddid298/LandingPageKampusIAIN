<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Surat Keterangan Lulus (SKL)</title>

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
            margin: 20px auto;
            width: 210mm;
            min-height: 250mm;
            padding: 20mm;
            background: white;
            box-sizing: border-box;
        }

        span,
        li,
        label,
        p {
            font-size: 12px;
        }

        h4 {
            font-size: 14px;
            margin-bottom: 25px;
            font-weight: bold;
        }

        .section {
            margin-bottom: 15px;
        }

        .field {
            display: flex;
            margin-bottom: 8px;
        }

        .field label {
            width: 200px;
            flex-shrink: 0;
        }

        .colon {
            margin: 0 8px;
        }

        input[type="text"] {
            flex: 1;
            font-size: 12px;
            border: none;
            border-bottom: 1px solid #000;
            outline: none;
        }

        .attachments ol {
            margin-left: 20px;
        }

        .closing {
            margin-top: 25px;
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
        }

        .btn-container button {
            padding: 10px 18px;
            font-size: 13px;
            font-weight: 600;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-download {
            background: #198754;
            color: white;
        }

        .btn-reset {
            background: #dc3545;
            color: white;
        }

        /* PDF MODE */
        .pdf-mode input[type="text"] {
            border: none !important;
            background: transparent !important;
        }

        .pdf-text {
            font-size: 12px;
            display: inline-block;
            min-width: 50px;
        }

        @media print {
            .btn-container {
                display: none;
            }

            body {
                background: white;
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
span, p, label, li, input {
    line-height: 1.25;
}

/* checkbox jangan membesar */
input[type="checkbox"] {
    transform: scale(0.9);
}

.pdf-hide { display:none !important }



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

            <h4>Hal : Permohonan Surat Keterangan Lulus (SKL)</h4>

            <div class="section">
                <p>Yang bertanda tangan di bawah ini :</p>
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
                    <label>Tempat, Tanggal Lahir</label><span class="colon">:</span>
                    <input type="text" placeholder="Contoh: Bengkalis, 10 Januari 2000">
                </div>

                <div class="field">
                    <label>Prodi / Jurusan</label><span class="colon">:</span>
                    <input type="text" placeholder="Masukkan Prodi/Jurusan">
                </div>

                <div class="field">
                    <label>Tanggal Yudisium</label><span class="colon">:</span>
                    <input type="text" placeholder="Contoh: 15 Februari 2026">
                </div>

                <div class="field">
                    <label>Alamat</label><span class="colon">:</span>
                    <input type="text" placeholder="Masukkan alamat lengkap">
                </div>

                <div class="field">
                    <label>No. HP</label><span class="colon">:</span>
                    <input type="text" placeholder="08xxxxxxxxxx">
                </div>
            </div>

            <div class="attachments section">
                <p>Dengan ini mengajukan permohonan untuk diterbitkan Surat Keterangan Lulus.<br>
                    Bersama ini kami lampirkan persyaratan sebagai berikut :</p>

                <ol>
                    <li>1. Fotocopy Ijazah Terakhir</li>
                    <li>2. Pas Foto 3x4 (2 Lembar)</li>
                    <li>3. Fotocopy Kartu Keluarga</li>
                    <li>4. Fotocopy KTP</li>
                    <li>5. Fotocopy Lampiran SK Yudisium</li>
                </ol>
            </div>

            <div class="closing">
                <p>Demikian permohonan ini, atas perhatiannya disampaikan terima kasih.</p>
            </div>

            <div class="signature">
                <div class="signature-box">
                                            <p class="tanggal-line">
                            <span>Bengkalis,</span>
                            <input type="text" id="tanggal">
                        </p>

                    <p>Pemohon</p>
                    <br><br>
                    <input type="text" id="nama_ttd" placeholder="Nama Pemohon" style="text-decoration: underline">
                    <input type="text" id="nim_ttd" placeholder="NIM">
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
        document.getElementById('nama').addEventListener('input', function() {
            document.getElementById('nama_ttd').value = this.value;
        });

        document.getElementById('nim').addEventListener('input', function() {
            document.getElementById('nim_ttd').value = this.value;
        });

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
            if (confirm('Kosongkan semua isian?')) {
                document.querySelectorAll('input[type="text"]').forEach(i => i.value = '');
                window.onload();
            }
        }
    </script>

</body>

</html>
