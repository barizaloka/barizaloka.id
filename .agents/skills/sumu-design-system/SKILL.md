---
name: sumu-design-system
description: "ACTIVATE when building, editing, or designing UI pages, landing pages, technical analysis sections, or feature highlights in Barizaloka. Based on the /sumu-serikat-usaha-muhammadiyah#analisis-teknis pattern."
license: MIT
metadata:
  author: Barizaloka
---

# SUMU Technical & UI Design Pattern Guidelines

Panduan standar pembuatan halaman, komponen UI, dan pemaparan analisis teknis di Barizaloka yang mengacu pada pola landing page dan analisis teknis `/sumu-serikat-usaha-muhammadiyah#analisis-teknis` (`resources/views/sumu.blade.php`).

Setiap kali AI Agent membuat atau memperbarui halaman, komponen UI, atau artikel analisis di proyek Barizaloka, wajib mengikuti struktur, estetika visual, serta formulasi narasi teknis ini.

---

## 1. Visual & Color Palette Standard

- **Primary Brand Colors**:
  - Emerald: `emerald-600`, `emerald-700`, `emerald-500`, `emerald-100`, `emerald-50` (Simbol keberlanjutan, dakwah ekonomi, keasrian).
  - Teal: `teal-50` (Warna transisi latar belakang).
- **Secondary / Accent Colors**:
  - Indigo: `indigo-600`, `indigo-700`, `indigo-900`, `indigo-950` (Simbol teknologi tinggi, kemandirian digital, ekosistem marketplace).
- **Neutral Colors**:
  - Light mode: `zinc-900` (Judul utama), `zinc-700` / `zinc-600` (Teks narasi), `zinc-50` / `zinc-100` (Latar card/section).
  - Dark mode / Dark sections: `zinc-900`, `zinc-800`, `slate-900`.
- **Status / Contrast Palette**:
  - Red: `red-500/30` border, `red-400` text (Untuk penekanan masalah / platform pihak ke-3 / risiko digital).
  - Emerald Contrast: `emerald-500/40` border, `emerald-400` text (Untuk penekanan solusi mandiri / aset web sendiri).
- **Gradient Style**:
  - **Hero Light Gradient**: `bg-gradient-to-br from-emerald-50 via-teal-50/50 to-indigo-50/40`
  - **Text Gradient Green**: `.gradient-text-green` (`background: linear-gradient(135deg, #10816f, #01a54d, #2c368b); -webkit-background-clip: text; -webkit-text-fill-color: transparent;`)
  - **Dark Highlight Banner**: `bg-gradient-to-br from-indigo-900 via-indigo-950 to-slate-900`
  - **Footer CTA Gradient**: `bg-gradient-to-br from-emerald-900 via-teal-900 to-indigo-950`

---

## 2. Typography & Hierarchy Standard

- **Title / H1 (Hero)**:
  - `text-3xl sm:text-5xl font-extrabold tracking-tight text-zinc-900 leading-tight`
  - Sub-heading dengan font serif: `text-2xl sm:text-4xl font-bold text-zinc-700 font-brand-serif`
- **Section Heading (H2)**:
  - `text-2xl sm:text-3xl font-bold text-zinc-900 leading-tight mb-4 font-brand-serif`
- **Technical Code Highlights**:
  - `<code class="text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded text-lg sm:text-xl font-mono">Laravel</code>`
- **Body / Subtitles**:
  - `text-base sm:text-lg text-zinc-600 max-w-2xl leading-relaxed`
  - Gunakan `<strong>` untuk penekanan nama/brand dan `<i>` untuk istilah teknis.

---

## 3. UI Component Patterns

### A. Badge / Tag Indicator
- **Hero Pulsing Tag**:
  ```html
  <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/90 backdrop-blur-sm border border-emerald-200 text-xs font-bold text-emerald-800 shadow-sm">
      <span class="size-2 rounded-full bg-emerald-500 animate-pulse"></span>
      💚 [Nama Kategori / Tag]
  </div>
  ```
- **Section Header Badge**:
  ```html
  <span class="inline-block text-xs font-bold uppercase tracking-widest text-emerald-700 bg-emerald-100 px-3.5 py-1.5 rounded-full mb-3">
      [Kategori Section]
  </span>
  ```

### B. Action Buttons
- **Primary Emerald Button**:
  ```html
  <a href="..." class="px-6 py-3 rounded-xl bg-emerald-600 text-white font-bold text-sm hover:bg-emerald-700 transition-all shadow-md shadow-emerald-200">
      💻 [Text CTA Utama]
  </a>
  ```
- **Secondary Indigo Button**:
  ```html
  <a href="..." class="px-6 py-3 rounded-xl bg-indigo-600 text-white font-bold text-sm hover:bg-indigo-700 transition-all shadow-md shadow-indigo-200">
      🛒 [Text CTA Sekunder]
  </a>
  ```
- **Outlined / White Link Button**:
  ```html
  <a href="..." target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-xl bg-white border border-zinc-200 text-zinc-800 font-semibold text-sm hover:bg-zinc-50 transition-all shadow-sm flex items-center gap-2">
      🌐 [Text Link External]
  </a>
  ```

### C. Stats Highlight Grid (4 Columns)
```html
<div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
    <div class="p-4 rounded-2xl bg-emerald-50/50 border border-emerald-100">
        <div class="text-3xl font-extrabold text-emerald-700 font-brand-serif">[Stat/Value]</div>
        <div class="text-xs text-zinc-600 font-medium mt-1">[Deskripsi Singkat]</div>
    </div>
</div>
```

### D. Technical Analysis Grid (`#analisis-teknis` Pattern)
```html
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200">
        <div class="flex items-center gap-3 mb-4">
            <div class="size-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xl">🚀</div>
            <div>
                <h3 class="font-bold text-zinc-900 text-base">[Judul Fitur/Arsitektur]</h3>
                <p class="text-xs text-zinc-500">[Sub-judul Keunggulan]</p>
            </div>
        </div>
        <ul class="space-y-3 text-sm text-zinc-600">
            <li class="flex items-start gap-2">
                <span class="text-emerald-600 font-bold">•</span>
                <span><strong>[Poin Utama]:</strong> [Penjelasan rinci manfaat teknis dan dampaknya].</span>
            </li>
        </ul>
    </div>
</div>
```

### E. Digital Sovereignty Comparison (Medsos Pihak ke-3 vs Website Mandiri)
```html
<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Negative / Risk Side -->
    <div class="p-7 rounded-2xl bg-white/5 border border-red-500/30 relative overflow-hidden">
        <div class="absolute top-0 right-0 px-3 py-1 bg-red-500/20 text-red-300 text-xs font-bold rounded-bl-xl border-l border-b border-red-500/30">📱 Media Sosial (Pihak Ke-3)</div>
        <h3 class="text-xl font-bold text-red-400 mb-4 mt-2">"Menumpang di Tanah Orang Lain"</h3>
        <ul class="space-y-3 text-sm text-zinc-300">
            <li class="flex items-start gap-2">
                <span class="text-red-400 font-bold">✕</span>
                <span><strong>[Risiko]:</strong> [Penjelasan kerentanan].</span>
            </li>
        </ul>
    </div>

    <!-- Positive / Solution Side -->
    <div class="p-7 rounded-2xl bg-emerald-950/40 border border-emerald-500/40 relative overflow-hidden">
        <div class="absolute top-0 right-0 px-3 py-1 bg-emerald-500/20 text-emerald-300 text-xs font-bold rounded-bl-xl border-l border-b border-emerald-500/30">🏠 Website Laravel (Aset Mandiri)</div>
        <h3 class="text-xl font-bold text-emerald-400 mb-4 mt-2">"Rumah & Aset Digital Milik Sendiri"</h3>
        <ul class="space-y-3 text-sm text-zinc-200">
            <li class="flex items-start gap-2">
                <span class="text-emerald-400 font-bold">✓</span>
                <span><strong>[Solusi Mandiri]:</strong> [Penjelasan keuntungan kepemilikan aset].</span>
            </li>
        </ul>
    </div>
</div>
```

### F. Glassmorphism Highlight Banner (Marketplace Mandiri Pattern)
```html
<div class="p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-indigo-900 via-indigo-950 to-slate-900 text-white shadow-2xl relative overflow-hidden border border-indigo-700/50">
    <div class="absolute -top-12 -right-12 size-64 rounded-full bg-indigo-500/20 blur-3xl pointer-events-none"></div>
    <div class="relative z-10">
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/20 border border-indigo-400/30 text-indigo-300 text-xs font-bold mb-4">
            🛒 [Tag Banner]
        </div>
        <h2 class="text-2xl sm:text-4xl font-extrabold text-white leading-tight font-brand-serif mb-4">
            [Judul Besar Banner]
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-left mt-8">
            <div class="p-5 rounded-2xl bg-white/10 border border-white/15 backdrop-blur-sm">
                <div class="text-3xl mb-2">🛍️</div>
                <h3 class="font-bold text-white text-base mb-1">[Judul Poin]</h3>
                <p class="text-xs text-indigo-200 leading-relaxed">[Penjelasan]</p>
            </div>
        </div>
    </div>
</div>
```

### G. Founder Statement Blockquote Section
```html
<div class="max-w-4xl mx-auto px-6 text-center">
    <div class="size-16 rounded-full bg-emerald-600 text-white flex items-center justify-center font-extrabold text-2xl mx-auto mb-4 shadow-lg shadow-emerald-200">
        [Inisial]
    </div>
    <blockquote class="text-xl sm:text-2xl font-brand-serif font-bold text-zinc-800 leading-snug italic max-w-3xl mx-auto mb-6">
        "[Kutipan / Statement Filosofis Founder]"
    </blockquote>
    <p class="text-sm font-semibold text-emerald-900">[Nama Founder]</p>
    <p class="text-xs text-zinc-500 mt-0.5">[Jabatan / Peran]</p>
</div>
```

---

## 4. Technical Narrative & Content Formulation

Saat merumuskan konten teknis untuk halaman atau desain baru:
1. **Fokus pada Keunggulan Framework Laravel**:
   - Performa milidetik, tanpa overhead plugin berlebih.
   - Keamanan enterprise bawaan (Anti SQLi, XSS, CSRF).
   - Fleksibilitas kustomisasi 100% tanpa batasan template statis.
2. **Narasi Transparansi & Akuntabilitas Digital**:
   - Verifikasi data terbuka, pelaporan arus dana / perkembangan real-time, auditabilitas sistem.
3. **Kemandirian Digital (Digital Sovereignty)**:
   - Gunakan metafora "Rumah Milik Sendiri" vs "Menumpang di Tanah Orang Lain (Medsos)".
   - Tekankan pentingnya kepemilikan database (kontak pelanggan/anggota) dan domain resmi (`.id` / `.or.id`).
4. **Visi Masa Depan & Ekosistem Sinergis**:
   - Tunjukkan bagaimana teknologi web dapat tumbuh menjadi platform B2B/B2C marketplace mandiri, integrasi QRIS/Bank, dan efisiensi rantai pasok internal.
