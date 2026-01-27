<div id="profil"></div>

<section class="py-20 px-4 max-w-7xl mt-4 mx-auto">

    {{-- Judul --}}
    <h2 class="text-3xl md:text-4xl font-bold text-[#12854A] text-center mb-12 animate-title">
        Profil & Sejarah IAIN Datuk Laksemana Bengkalis
        <span class="block w-24 h-1 bg-[#E7BB00] mx-auto mt-4 rounded-full"></span>
    </h2>

    {{-- Narasi Sejarah --}}
    <div class="text-gray-700 leading-relaxed space-y-6 mb-16">
        <p class="animate-item text-justify">
           Institut Agama Islam Negeri Datuk Laksemana Bengkalis sebagaimana di kenal pada saat sekarang ini merupakan peralihan nama dari Sekolah Tinggi Ilmu Tarbiyah (STIT) yang berdiri pada tanggal 17 Juli 1988 yang di kelola oleh Yayasan Pendidikan Islam Al-Kautsar (YPIA) yang awalnya di bawah naungan Kopertais VI Sumbar, Riau dan Kerinci. Selanjutnya pada bulan Oktober 1988 pembinaan STIT Bengkalis di alihkan kepada Kopertais Wilayah XII Riau-Kepri yang di bina oleh IAIN Susqa Pekanbaru (sekarang Universitas Islam Negeri Sultan Syarif Kasim Pekanbaru). Pergantian nama dari STIT ke STAI Al Kautsar Bengkalis terjadi pada tahun 1999 dan selanjutnya di negerikan menjadi STAIN Bengkalis pada 19 September 2014 yang langsung di resmikan lansung oleh Menteri Agama RI Bapak Lukman Hakim Saifuddin.
        </p>

        <p class="animate-item text-justify">
            Saat ini STAIN Bengkalis mengalami perubahan bentuk menjadi IAIN Datuk Laksemana Bengkalis sesuai Perpres 62 tahun 2025 tertanggal 8 Mei 2025, menempati Gedung yang berlokasi di Jalan Lembaga Bengkalis dengan luas tanah ± 10 hektare.
        </p>

        {{-- <p class="animate-item">
            Melalui Peraturan Presiden Nomor 62 Tahun 2025 tertanggal 8 Mei 2025,
            STAIN Bengkalis resmi berubah bentuk menjadi
            Institut Agama Islam Negeri Datuk Laksemana Bengkalis.
        </p> --}}
    </div>

    {{-- Timeline --}}
    <div class="grid md:grid-cols-4 gap-6 mb-16">
        @php
            $timeline = [
                ['tahun' => '1988', 'label' => 'STIT Bengkalis berdiri'],
                ['tahun' => '1999', 'label' => 'Menjadi STAI Al Kautsar'],
                ['tahun' => '2014', 'label' => 'Negeri (STAIN Bengkalis)'],
                ['tahun' => '2025', 'label' => 'Resmi menjadi IAIN'],
            ];
        @endphp

        @foreach ($timeline as $item)
            <div class="border-l-4 border-[#E7BB00] pl-4 animate-item">
                <div class="text-2xl font-bold text-[#12854A]">
                    {{ $item['tahun'] }}
                </div>
                <p class="text-gray-600">
                    {{ $item['label'] }}
                </p>
            </div>
        @endforeach
    </div>

    {{-- Kepemimpinan --}}
    <div class="mb-16">
        <h3 class="text-2xl font-semibold text-[#12854A] mb-4 animate-item">
            Periodesasi Kepemimpinan
        </h3>
        <ul class="list-disc list-inside text-gray-700 space-y-2">
            <li class="animate-item">Alm. H. Beng Sabli, SH</li>
            <li class="animate-item">Dr. H. Asyari Nur, SH, MM</li>
            <li class="animate-item">Alm. Rahman Jalil, S.Ag., MM</li>
            <li class="animate-item">Prof. Dr. H. Samsul Nizar, M.Ag</li>
            <li class="animate-item">Dr. H. Abu Anwar, M.Ag</li>
        </ul>
    </div>

    {{-- Perkembangan --}}
    <div class="text-gray-700 leading-relaxed space-y-4">
        <p class="animate-item text-justify">
            Hingga saat ini Lembaga Pendidikan Islam ini telah mampu menunjukkan perkembangan yang dapat dibanggakan dengan aktivitasnya dan telah di rasakan manfaatnya oleh masyarakat perkotaan maupun pedesaan. Baik melalui kegiatan Kuliah Kerja Nyata, Praktik Perkuliahan Lapangan, Pengisian wirid pengajian di mesjid-mesjid melalui safari Ramadhan, Perayaan hari-hari besar Islam dan juga menggelar kegiatan-kegiatan seni dan olah raga dan juga mengadakan seminar-seminar serta ikut di dalam berbagai kegiatan oleh Pemerintah Daerah maupun organisasi. Hal tersebut di lakukan oleh dalam upaya peningkatan sumber daya manusia dan juga mensosialisasikan IAIN Datuk Laksemana Bengkalis itu sendiri kepada masyarakat luas. Dan tidak kalah pentingya adalah sebagai wujud nyata Tri Dharma Perguruan Tinggi yaitu pengabdian kepada masyarakat.
<br>
Kemajuan lain yang sangat dirasakan adalah peningkatan jumlah Mahasiswa yang masuk ke Institut Agama Islam Negeri Datuk Laksemana Bengkalis dari tahun ke tahun. Sampai pada tahun akademik 2025/2026 Institut Agama Islam Negeri Datuk Laksemana Bengkalis Bengkalis telah memiliki Mahasiswa sebanyak ± 2.951 orang (data Ganjil 2025). Adapun jumlah alumnus terhitung sejak wisuda angkatan ke- XII / I Tahun 2014 (sejak berstatus Negeri) yang telah menyelesaikan Gelar Sarjana Strata Satu (S1) sebanyak ± 4.507 orang.

        </p>

        <p class="animate-item text-justify">
            IAIN Datuk Laksemana Bengkalis saat ini menyelenggarakan pendidikan akademik melalui 3 fakultas dengan total 14 program studi Strata Satu (S1). Fakultas Tarbiyah dan Keguruan menaungi program studi Pendidikan Agama Islam, Tadris Bahasa Inggris, Pendidikan Islam Anak Usia Dini, Manajemen Pendidikan Islam, dan Pendidikan Bahasa Arab. Fakultas Syariah dan Ekonomi Islam membawahi program studi Hukum Tata Negara, Hukum Keluarga Islam, Ekonomi Syariah, Perbankan Syariah, Akuntansi Syariah, serta Manajemen Keuangan Syariah. Selanjutnya, Fakultas Dakwah dan Komunikasi Islam mengelola program studi Manajemen Dakwah, Komunikasi dan Penyiaran Islam, serta Sosiologi Agama, yang secara keseluruhan dirancang untuk mendukung pengembangan keilmuan Islam yang integratif dan relevan dengan kebutuhan masyarakat.
Secara keseluruhan, perjalanan panjang Institut Agama Islam Negeri Datuk Laksemana Bengkalis dari lembaga pendidikan Islam swasta hingga menjadi institut negeri merupakan wujud komitmen berkelanjutan dalam mencerdaskan kehidupan bangsa, khususnya di wilayah pesisir Provinsi Riau. Dengan dukungan kepemimpinan yang berkesinambungan, peningkatan jumlah mahasiswa dan alumni, serta pelaksanaan tridharma perguruan tinggi yang konsisten, IAIN Datuk Laksemana Bengkalis terus menunjukkan eksistensinya sebagai pusat pengembangan ilmu-ilmu keislaman yang berakar pada nilai-nilai kemelayuan dan berorientasi pada kemajuan masyarakat serta daya saing nasional.

        </p>

        {{-- <p class="animate-item">
            Seluruh aktivitas akademik dijalankan sebagai perwujudan
            Tri Dharma Perguruan Tinggi.
        </p> --}}
    </div>

</section>


<script>
document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15 }
    );

    document.querySelectorAll('.animate-title, .animate-item')
        .forEach(el => observer.observe(el));
});
</script>
