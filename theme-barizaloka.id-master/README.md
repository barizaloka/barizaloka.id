# Barizaloka WordPress Theme

Tema WordPress landing page resmi untuk **barizaloka.id** — Ekosistem komunitas digital yang menghubungkan komunitas peduli lingkungan, teknologi, dan spiritual.

## Cara Install

1. Upload folder `barizaloka-theme` ke `/wp-content/themes/`
2. Aktifkan tema dari **Appearance > Themes**
3. Set halaman depan: **Settings > Reading > A static page**, pilih halaman yang sudah dibuat
4. Tema akan otomatis menggunakan template `front-page.php` sebagai landing page

## Struktur File

```
barizaloka-theme/
├── style.css          — Header tema WordPress
├── functions.php      — Registrasi script, support, widget
├── header.php         — Navbar & <head>
├── footer.php         — Footer & wp_footer()
├── front-page.php     — Template landing page utama
├── index.php          — Fallback template
├── page.php           — Template halaman statis
├── css/
│   └── main.css       — Semua styling
├── js/
│   └── main.js        — Interaktivitas (scroll, mobile menu)
└── screenshot.png     — Preview tema di WP Admin
```

## Kustomisasi

- **Warna**: Edit variabel CSS di `:root` dalam `css/main.css`
- **Konten**: Edit langsung di `front-page.php`
- **Logo**: Upload melalui **Appearance > Customize > Site Identity**
- **Font**: Diambil dari Google Fonts (Plus Jakarta Sans + Playfair Display)

## Dibuat oleh
**Barizaloka** — Desa Karangasem, Kecamatan Sedan, Kabupaten Rembang
