# Barizaloka

Website resmi Barizaloka — ekosistem teknologi dari Rembang yang menyediakan jasa pembuatan website untuk pesantren, masjid, desa, UMKM, dan usaha lainnya.

## Tech Stack

| Komponen | Versi |
|---|---|
| PHP | 8.5 |
| Laravel | 13 |
| Filament (admin panel) | 5 |
| Livewire | 4 |
| Flux UI | 2 |
| Laravel Fortify (auth) | 1 |
| Pest (testing) | 4 |
| Tailwind CSS | 4 |

## Menjalankan Proyek

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
composer dev
```

`composer dev` menjalankan server, queue listener, log viewer (Pail), dan Vite secara bersamaan.

## Struktur Halaman

Website ini punya dua model halaman yang sengaja dipisah, tergantung kebutuhannya:

### 1. Halaman statis / independen

Halaman inti (Beranda, Harga, Tentang, FAQ, Kontak, Portofolio, Blog) dan **halaman niche** (`/jasa-website-{niche}`) masing-masing punya file Blade sendiri yang ditulis manual — bukan hasil generate dari template bersama. Setiap halaman bebas punya struktur, desain, dan konten unik.

Halaman niche yang tersedia saat ini:

| Niche | URL | View |
|---|---|---|
| Pesantren | `/jasa-website-pesantren` | [resources/views/jasa-website/niche/pesantren.blade.php](resources/views/jasa-website/niche/pesantren.blade.php) |
| Masjid | `/jasa-website-masjid` | [resources/views/jasa-website/niche/masjid.blade.php](resources/views/jasa-website/niche/masjid.blade.php) |
| Desa | `/jasa-website-desa` | [resources/views/jasa-website/niche/desa.blade.php](resources/views/jasa-website/niche/desa.blade.php) |
| UMKM | `/jasa-website-umkm` | [resources/views/jasa-website/niche/umkm.blade.php](resources/views/jasa-website/niche/umkm.blade.php) |
| Toko Sepeda Listrik | `/jasa-website-sepeda-listrik` | [resources/views/jasa-website/niche/sepeda-listrik.blade.php](resources/views/jasa-website/niche/sepeda-listrik.blade.php) |

**Menambah halaman niche baru:**

1. Buat file di `resources/views/jasa-website/niche/{slug}.blade.php` (isinya bebas, tidak wajib ikut struktur niche lain).
2. Tambahkan entri singkat di `config/niche_pages.php` (minimal `label` dan `related_niches`) — ini dipakai untuk cross-link di halaman lokasi/provinsi/kombinasi dan untuk daftar niche di sitemap.
3. [`NichePageController`](app/Http/Controllers/NichePageController.php) otomatis merender view yang cocok berdasarkan slug di URL — tidak perlu ubah route atau controller.

### 2. Halaman terprogram (programmatic SEO)

Halaman **lokasi**, **kombinasi niche × lokasi**, dan **provinsi** dihasilkan dari satu template Blade + data di file config — bukan file per halaman. Ini disengaja karena jumlahnya banyak (puluhan–ratusan kombinasi) dan strukturnya memang seragam, jadi lebih murah dimaintain lewat template daripada file independen.

| Jenis | URL pattern | Sumber data | Template |
|---|---|---|---|
| Lokasi | `/jasa-website-di-{lokasi}` | `config/location_pages.php` | [lokasi.blade.php](resources/views/jasa-website/lokasi.blade.php) |
| Kombinasi niche × lokasi | `/jasa-website-{niche}-di-{lokasi}` | `config/niche_pages.php` + `config/location_pages.php` | [niche-lokasi.blade.php](resources/views/jasa-website/niche-lokasi.blade.php) |
| Provinsi | `/potensi-digital-{provinsi}` | `config/provinsi_pages.php` | [provinsi.blade.php](resources/views/jasa-website/provinsi.blade.php) |

**Menambah lokasi/provinsi baru:** cukup tambah entri di config file terkait — halaman, sitemap, dan link kombinasinya otomatis mengikuti. Lihat isi file config untuk struktur field yang dibutuhkan tiap jenis.

### Kapan pakai yang mana?

- **Halaman independen** — kalau butuh desain/konten unik, gambar khusus, atau layout beda dari halaman lain (niche baru yang benar-benar berbeda dari yang sudah ada).
- **Template + config** — kalau halamannya pada dasarnya kombinasi/variasi dari data yang sama (lokasi, provinsi, kombinasi), dan jumlahnya berpotensi banyak.

## Sitemap

`GET /sitemap.xml` ([resources/views/sitemap.blade.php](resources/views/sitemap.blade.php)) mendaftarkan seluruh halaman publik yang boleh diindeks: halaman statis, seluruh niche (dibaca dari `config/niche_pages.php`), lokasi, kombinasi niche × lokasi, provinsi, blog, dan portofolio.

Kalau menambah halaman publik baru **di luar** sistem niche/lokasi/provinsi (misalnya halaman kampanye baru), tambahkan manual ke `sitemap.blade.php` — ini tidak otomatis seperti niche.

## Testing

```bash
php artisan test --compact
```

Test untuk seluruh halaman SEO (niche, lokasi, kombinasi, provinsi, sitemap) ada di [tests/Feature/Pages/SeoPagesTest.php](tests/Feature/Pages/SeoPagesTest.php). Dataset-nya dibaca langsung dari file config, jadi menambah niche/lokasi/provinsi baru otomatis ikut ter-test tanpa perlu mengubah file test.

Sebelum commit, jalankan:

```bash
vendor/bin/pint --dirty
php artisan test --compact
```
