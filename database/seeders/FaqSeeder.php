<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Apa itu Barizaloka?',
                'answer' => 'Barizaloka adalah ekosistem teknologi dari Rembang yang menyediakan jasa pembuatan website, pengembangan SaaS, jual beli website & aplikasi, serta menaungi komunitas lingkungan, teknologi, dan spiritual.',
                'category' => 'umum',
                'order' => 1,
            ],
            [
                'question' => 'Apa bedanya Paket Landing sama Paket CMS?',
                'answer' => 'Paket Landing cocok kalau Anda cukup tampil online dengan satu halaman informasi — seperti profil atau jadwal kajian. Kami yang urus semuanya, Anda tinggal chat kalau mau ganti konten. Paket CMS cocok kalau Anda ingin bisa login dan mengedit sendiri website kapan saja — cocok untuk UMKM yang punya banyak produk atau organisasi yang sering update berita.',
                'category' => 'layanan',
                'order' => 2,
            ],
            [
                'question' => 'Apakah domain sudah termasuk dalam paket?',
                'answer' => 'Ya! Setiap paket sudah termasuk domain .my.id GRATIS selama 1 tahun. Jika Anda ingin menggunakan domain lain seperti .com, .id, .net, atau lainnya, ada biaya tambahan sesuai jenis domain yang dipilih. Tim kami siap bantu konsultasi memilih domain terbaik untuk Anda.',
                'category' => 'harga',
                'order' => 3,
            ],
            [
                'question' => 'Apakah ada biaya tersembunyi?',
                'answer' => 'Tidak ada. Harga yang tertera sudah termasuk hosting, SSL, maintenance, dan domain .my.id gratis. Satu-satunya biaya tambahan hanya jika Anda memilih domain selain .my.id (seperti .com, .id, dll), dan itu pun kami infokan transparan dari awal.',
                'category' => 'harga',
                'order' => 4,
            ],
            [
                'question' => 'Berapa lama website saya jadi?',
                'answer' => 'Untuk Paket Landing biasanya 1-3 hari, sedangkan Paket CMS sekitar 3-7 hari kerja setelah konten kami terima secara lengkap.',
                'category' => 'proses',
                'order' => 5,
            ],
            [
                'question' => 'Apakah website saya bisa diupdate sendiri?',
                'answer' => 'Tentu! Jika Anda memilih Paket CMS, kami membangun website menggunakan Laravel yang user-friendly. Kami juga akan memberikan training singkat cara mengelola konten website Anda. Untuk Paket Landing, kami yang bantu updatekan kontennya.',
                'category' => 'layanan',
                'order' => 6,
            ],
            [
                'question' => 'Bagaimana dengan maintenance setelah website selesai?',
                'answer' => 'Layanan maintenance sudah termasuk dalam biaya tahunan Anda. Kami memastikan website tetap aman, cepat, dan selalu online.',
                'category' => 'layanan',
                'order' => 7,
            ],
            [
                'question' => 'Apa yang terjadi setelah 1 tahun?',
                'answer' => 'Anda cukup membayar biaya perpanjangan tahunan sesuai paket untuk melanjutkan layanan hosting, SSL, dan maintenance. Kami akan mengingatkan Anda 1 bulan sebelumnya.',
                'category' => 'harga',
                'order' => 8,
            ],
            [
                'question' => 'Apakah Barizaloka melayani klien di luar Rembang?',
                'answer' => 'Ya, meskipun berbasis di Rembang, Barizaloka melayani klien pesantren, desa, UMKM, dan komunitas dari seluruh Indonesia secara online melalui WhatsApp dan konsultasi jarak jauh.',
                'category' => 'umum',
                'order' => 9,
            ],
            [
                'question' => 'Bagaimana cara memulai pembuatan website?',
                'answer' => 'Hubungi kami melalui WhatsApp untuk konsultasi gratis. Tim kami akan membantu menentukan paket yang sesuai kebutuhan, lalu memandu proses pengumpulan konten hingga website Anda online.',
                'category' => 'proses',
                'order' => 10,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                $faq + ['is_active' => true]
            );
        }
    }
}
