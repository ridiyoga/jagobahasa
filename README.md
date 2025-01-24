Folder terdapat dua buah folder dalam repositori ini yakni folder "jagobahasa-api" untuk back-end dan folder "jagobahasa" untuk front-end
folder jagobahasa-api:
1. .env : sebuah folder yang menghubungkan database dengan back-end
2. migration : berisi tabel-tabel yang digunakan untuk mengolah data yang akan ditampilkan antara lain :
   a. users : tabel untuk menyimpan data user, dengan satu tambahan yakni kolom "status" untuk mengubah data yang terhapus, dan ini berlaku untuk semua tabel yang ada pada database ini
   b. courses : untuk menyimpan data courses
   c. materials : menyimpan data materials
3. Controler berisi controller untuk fungsi CRUD masing-masing tabel antara lain :
