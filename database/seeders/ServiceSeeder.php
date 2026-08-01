<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'icon' => '🕌',
                'name' => 'Jasa Pembuatan Website Pesantren & Masjid',
                'summary' => 'Website profesional untuk pesantren dan masjid: profil, jadwal kajian, info pendaftaran santri, hingga galeri kegiatan.',
                'description' => 'Barizaloka membantu pesantren dan masjid hadir secara digital dengan website yang mudah dikelola. Cocok untuk menampilkan profil lembaga, jadwal kajian rutin, informasi pendaftaran santri baru, program tahfidz, hingga galeri kegiatan. Website dibangun cepat (1-7 hari kerja), sudah termasuk domain, hosting, dan SSL, sehingga jamaah dan wali santri bisa mengakses informasi kapan saja tanpa harus menghubungi pengurus satu per satu.',
                'price_from' => 'Rp 350.000/tahun',
                'features' => [
                    'Profil lembaga & sejarah pesantren/masjid',
                    'Jadwal kajian & kegiatan rutin',
                    'Informasi pendaftaran santri baru',
                    'Galeri foto & dokumentasi kegiatan',
                    'Domain .my.id, hosting, dan SSL gratis 1 tahun',
                ],
                'is_featured' => true,
                'order' => 1,
                'meta_title' => 'Jasa Pembuatan Website Pesantren & Masjid — Barizaloka',
                'meta_description' => 'Website profesional untuk pesantren dan masjid mulai Rp 350.000/tahun. Jadwal kajian, pendaftaran santri, galeri kegiatan — cepat jadi, mudah dikelola.',
            ],
            [
                'icon' => '🏘️',
                'name' => 'Jasa Pembuatan Website Desa',
                'summary' => 'Website resmi desa untuk transparansi informasi publik, potensi wisata, UMKM lokal, dan layanan administrasi warga.',
                'description' => 'Kami membantu pemerintah desa dan lembaga kemasyarakatan membangun website resmi yang menampilkan profil desa, struktur pemerintahan, potensi wisata dan produk unggulan, serta informasi layanan administrasi bagi warga. Website desa yang baik meningkatkan transparansi publik dan mempermudah warga maupun wisatawan mengakses informasi terkini tanpa harus datang langsung ke kantor desa.',
                'price_from' => 'Rp 350.000/tahun',
                'features' => [
                    'Profil desa & struktur pemerintahan',
                    'Informasi layanan administrasi warga',
                    'Promosi potensi wisata & produk unggulan',
                    'Berita & pengumuman desa terkini',
                    'Domain .my.id, hosting, dan SSL gratis 1 tahun',
                ],
                'is_featured' => true,
                'order' => 2,
                'meta_title' => 'Jasa Pembuatan Website Desa — Barizaloka',
                'meta_description' => 'Website resmi desa untuk transparansi informasi publik, potensi wisata, dan layanan administrasi warga. Mulai Rp 350.000/tahun, cepat jadi.',
            ],
            [
                'icon' => '🛍️',
                'name' => 'Jasa Pembuatan Website UMKM',
                'summary' => 'Website toko online & katalog produk untuk UMKM agar tampil profesional dan lepas dari potongan komisi marketplace.',
                'description' => 'UMKM sering kesulitan bersaing di marketplace karena potongan komisi dan persaingan harga dengan kompetitor yang tampil berdampingan. Website milik sendiri memberi UMKM kendali penuh atas branding, katalog produk, dan database pelanggan — tanpa potongan komisi setiap transaksi. Kami sediakan paket landing page untuk profil sederhana maupun paket CMS untuk UMKM yang ingin mengelola katalog produk sendiri.',
                'price_from' => 'Rp 350.000/tahun',
                'features' => [
                    'Katalog produk & harga yang mudah diperbarui',
                    'Branding profesional, 100% milik Anda',
                    'Tanpa potongan komisi transaksi',
                    'Integrasi kontak WhatsApp untuk pemesanan',
                    'Pilihan Paket Landing (Rp 350rb/th) atau Paket CMS (Rp 600rb/th)',
                ],
                'is_featured' => true,
                'order' => 3,
                'meta_title' => 'Jasa Pembuatan Website UMKM — Barizaloka',
                'meta_description' => 'Website toko online & katalog produk untuk UMKM mulai Rp 350.000/tahun. Tampil profesional, tanpa potongan komisi marketplace.',
            ],
            [
                'icon' => '🤝',
                'name' => 'Jasa Pembuatan Website Komunitas & Organisasi',
                'summary' => 'Website untuk komunitas lingkungan, teknologi, dan spiritual agar mudah menjangkau anggota baru dan mempublikasikan kegiatan.',
                'description' => 'Komunitas dan organisasi nirlaba membutuhkan wadah digital untuk memperkenalkan visi-misi, mempublikasikan kegiatan, dan menjaring anggota atau relawan baru. Barizaloka membangun website komunitas yang ringan, mudah diakses, dan mencerminkan identitas organisasi — cocok untuk komunitas lingkungan, teknologi, maupun kajian spiritual.',
                'price_from' => 'Rp 350.000/tahun',
                'features' => [
                    'Profil visi, misi, dan struktur organisasi',
                    'Publikasi kegiatan & dokumentasi',
                    'Formulir pendaftaran anggota/relawan',
                    'Terhubung dengan ekosistem pilar Barizaloka lainnya',
                    'Domain .my.id, hosting, dan SSL gratis 1 tahun',
                ],
                'is_featured' => false,
                'order' => 4,
                'meta_title' => 'Jasa Pembuatan Website Komunitas & Organisasi — Barizaloka',
                'meta_description' => 'Website untuk komunitas lingkungan, teknologi, dan spiritual mulai Rp 350.000/tahun. Publikasikan kegiatan dan jaring anggota baru dengan mudah.',
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => Str::slug($service['name'])],
                $service
            );
        }
    }
}
