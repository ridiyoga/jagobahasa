Folder terdapat dua buah folder dalam repositori ini yakni folder "jagobahasa-api" untuk back-end dan folder "frontend_react" untuk front-end

folder jagobahasa-api:
1. .env : sebuah folder yang menghubungkan database dengan back-end
2. migration : berisi tabel-tabel yang digunakan untuk mengolah data yang akan ditampilkan antara lain :
   a. users : tabel untuk menyimpan data user, dengan satu tambahan yakni kolom "status" untuk mengubah data yang terhapus, dan ini berlaku untuk semua tabel yang ada pada database ini
   b. courses : untuk menyimpan data courses
   c. materials : menyimpan data materials
3. Controler berisi controller untuk fungsi CRUD masing-masing tabel antara lain :
   a. UserController : terdapat CRUD untuk tabel user, tidak ada function destroy karena saya menggunakan function update status untuk merubah status data, hal yang sama berlaku pada controller-controller lain, di                         dalam controller ini juga terdapat function login untuk login ke halaman berikutnya
   b. CoursesController : berisi function CRUD untuk tabel courses
   c. MaterialsController : berisi function CRUD untuk tabel Materials
4. Models : Berisi model-model untuk menghubungkan antara tabel dengan controller, yakni model users, courses, dan materials

Folder frontend_react :
1. dalam folder src/pages/kursus terdapat dua buah folder
   a. CoursesCreate : post form untuk memasukkan data courses
   b. Courseslist : menampilkan data di tabel courses dengan API

Cara run website :
frontend : install terlebih dahulu NPM dengan cara "npm install" kemudian gunakan sintak "npm start" untuk running website frontend
backend : gunakan sintak "php artisan serve" untuk running backend dan frontend dapan consume API

Karena keterbatasan waktu dan belum familiar dengan react.js maka, hanya ini yang bisa saya tampilkan
