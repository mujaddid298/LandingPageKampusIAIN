<footer class="bg-[#12854A] text-white mt-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12
                grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

        <!-- Tentang -->
        <div>
            <h3 class="text-lg font-semibold mb-4">
                Tentang Kami
            </h3>
            <p class="text-sm leading-relaxed opacity-90">
                Website resmi kampus yang menyediakan informasi akademik,
                pengumuman, dan layanan mahasiswa secara terintegrasi.
            </p>
        </div>

        <!-- Menu -->
        <div>
            <h3 class="text-lg font-semibold mb-4">
                Menu
            </h3>
            <ul class="space-y-2 text-sm">
                <li>
                    <a href="/" class="hover:underline hover:text-[#E7BB00] transition">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="/profil" class="hover:underline hover:text-[#E7BB00] transition">
                        Profil
                    </a>
                </li>
                <li>
                    <a href="/pengumuman" class="hover:underline hover:text-[#E7BB00] transition">
                        Pengumuman
                    </a>
                </li>
                <li>
                    <a href="/kontak" class="hover:underline hover:text-[#E7BB00] transition">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>

        <!-- Kontak -->
        <div>
            <h3 class="text-lg font-semibold mb-4">
                Kontak
            </h3>
            <div class="space-y-2 text-sm">
                <p>📍 Bengkalis, Riau</p>
                <p>📧 info@kampus.ac.id</p>
                <p>📞 +62 812-xxxx-xxxx</p>
            </div>
        </div>

        <!-- Maps -->
        <div>
            <h3 class="text-lg font-semibold mb-4">
                Lokasi Kampus
            </h3>
            <div class="rounded-xl overflow-hidden border border-white/20">
                <iframe
                    class="w-full h-48 sm:h-56 lg:h-60"
                    src="https://www.google.com/maps?q=Bengkalis%20Riau&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

    </div>

    <!-- Copyright -->
    <div class="bg-[#0e6e3d] text-center text-xs sm:text-sm py-4 px-4">
        © {{ date('Y') }} Kampus XYZ. All rights reserved.
    </div>
</footer>
