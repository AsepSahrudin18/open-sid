# Open SID (Sistem Informasi Desa)

## Demo Aplikasi

- Soon nanti di isi

# Cara Menggunakan GIT dengan Baik dan Benar

## Cara Berkontribusi di Project Ini

# Di Mohon jangan PUSH Langsung ke Branch "main"

## Cara Branching

- Jika kamu bermaksud untuk meng-_improve_ atau memperbaharui

  > `git checkout -b "improvement/apa-yang-di-improve`

- Jika kamu bermaksud untuk _Bug Fixing_

  > `git checkout -b "bugfix/apa-yang-di-fix`

- Jika kamu bermaksud untuk menambah _Feature_

  > `git checkout -b "feature/fitur-apa-yang-di-buat`

## Cara Commit

- Jika kamu bermaksud untuk meng-_improve_ atau memperbaharui

  > `git commit -m "improvement: apa yang di improve`

- Jika kamu bermaksud untuk _Bug Fixing_

  > `git commit -m "bugfix: apa yang di fix`

- Jika kamu bermaksud untuk menambah _Feature_

  > `git commit -m "feature: fitur apa yang di buat`

## Cara Mengatasi Konflik

- 1 Stash dulu kerjaan kamu supaya gak ilang

> `git stash`

- 2 Setelah itu kamu perlu pull perubahan dari branch `main`

> `git pull origin main`

- 3 Setelah kamu berhasil melakukan pembaruan dari branch `main` selanjutnya kamu perlu mengembalikan pekerjaan mu sebelum nya yang ter-_stash_

> `git stash pop`

- 4 Lanjutkan Pekerjaan dengan Semestinya

- 5 Tapi jika ketika melakukan langkah-langkah di atas masih terjadi error konflik atau karena ketololan kamu, maka ikuti langkah yang bawah

## Cara Mengatasi Konflik Versi 2

- 1 Pindah dulu ke Branch `main`

> `git checkout main`

- 2 Kemudian pull perubahan terbaru dari branch `main`

> `git pull`

- 3 Kemudian Pindah lagi ke branch yang sedang kamu kerjakan

> `git checkout <branch mu>`

- 4 Selanjutnya kita perlu merge perubahan terbaru dari `main`

> `git merge origin main`

## Rekomendasi Kode Editor

Visual Studio Code

### Rekomendasi Extension

- Stylelint
- TailwindCSS Intelesense
- Prettier
- Error Lens
- ESLint

## Setup Project

- Clone Project ini ( Direkomendasikan menggunakan SSH )

  > `git clone git@github.com:AsepSahrudin18/open-sid`

  or (non ssh):

  > `https://github.com/AsepSahrudin18/open-sid.git`

  ***Starting Project:***
  ---------------------

  - 1. Buat database baru di PHPMyAdmin/di aplikasi manajamen database lokalmu (kosongan aja).
  - 2. Buat .env baru dengan perintah:
  
  > ```cp .env.example .env```

  - 3. Generate key pada .env

  > ```php artisan key:generate```
  
  - 4. Setup di .env project: example ```open_sid```

    ```
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=open_sid
    DB_USERNAME=root
    DB_PASSWORD=
    ```

  - 5. Lakukan migrate untuk membuat migration database dengan perintah:

  > ```php artisan migrate:fresh --seed```

  - 6. Jalankan perintah ```npm install && npm run dev```

  - 7. Jalankan servis nya:

  > ```php artisan serve```
