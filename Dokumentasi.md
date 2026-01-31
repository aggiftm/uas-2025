# DOKUMENTASI PENELITIAN
**NIM: 20230801535 - Anggi Gunawan**

## I. DESKRIPSI PENELITIAN
**Latar Belakang:** Sistem manual perusahaan desain interior tidak efisien
**Tujuan:** Bangun sistem web untuk tingkatkan efisiensi 40%

## II. PICOS
| Element | Deskripsi |
|---------|-----------|
| P | Perusahaan desain interior |
| I | Sistem web Laravel Filament |
| C | Manual vs digital |
| O | Efisiensi +40% |
| S | Development + evaluasi |

## III. RISET QUESTION
1. Bagaimana Laravel Filament tingkatkan efisiensi?
2. Sejauh mana sistem gantikan proses manual?
3. Apa dampak pada pengalaman pengguna?

## IV. JUDUL
"Rancang Bangun Sistem Manajemen Bisnis Desain Interior Berbasis Web Menggunakan Laravel Filament untuk Meningkatkan Efisiensi Operasional"

## V. SLR (Study Literature Review)
**Metodologi:** PRISMA dengan 5 artikel
**Hasil:** 
- Sistem web tingkatkan efisiensi 35%
- Filament 50% lebih cepat dari Nova
**Gap:** Belum ada sistem terintegrasi khusus desain interior

## VI. BRD (Business Requirement Document)
**Fitur Admin:**
- Dashboard analytics
- Project management
- Client management
- Portfolio management
- Scheduling system
- Financial management

**Fitur Client Portal:**
- Project dashboard
- Communication hub
- Approval system

**Teknis:** Laravel 11 + Filament 3 + MySQL
### Persiapan Folder & Struktur File

1. `cd /root/boilerplate`
2. `./start.sh uts-pemweb`
3. `cd /root/perkuliahan/uts-pemweb`
4. `cd src`
5. `code .`

### Template Website  
- Template diambil dari:  
  **https://themewagon.com/themes/polk/**

### Membuat Struktur View

6. `cd resource/views`
7. `mkdir layouts && mkdir pages && mkdir partials`

#### Layouts
8. `cd layouts`
9. `touch app.blade.php`

#### Pages
10. `cd ..`
11. `cd pages`
12. `touch home.blade.php`

#### Partials
13. `cd ..`
14. `cd partials`
15. `touch about.blade.php`
16. `touch banner.blade.php`
17. `touch client.blade.php`
18. `touch company.blade.php`
19. `touch contact.blade.php`
20. `touch design.blade.php`
21. `touch footer.blade.php`
22. `touch header.blade.php`
23. `touch new.blade.php`
24. `touch script.blade.php`

**Tech Stack:**
- Backend: Laravel 11.x
- Admin: Filament PHP 3.x
- Database: MySQL 8.0
- Frontend: Blade + Livewire
- Deployment: Docker + Nginx

**Code Example:**
```php
// Project Resource Filament
class ProjectResource extends Resource {
    public static function form(Form $form): Form {
        return $form->schema([
            TextInput::make('name')->required(),
            Select::make('client_id')->relationship('client', 'name'),
        ]);
    }
}