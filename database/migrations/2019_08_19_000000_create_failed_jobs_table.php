<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}


// catatan compile terminal
// php artisan make:controller PageController = cara membuat controller
//php artisan make:model Contact -m  = membuat Model dan migrate modelnya dgn -m
// php artisan migrate  = perintah untuk update database yg kita buat dari codingan

//membuat factory
//fungsi factory dan suder adalah untuk membuat data secara banyak untuk mencoba aplikasi kita cuama untuk mengembangkan aplikasi tidak perlu data2
//php artisan make:factory ContactFactory
// php artisan make:seed ContactSeeder


// dan perintah update datanya
// php artisan db:seed

// membuat create
// php artisan make:request ContactRequest

//untuk link dari storege ke public karena folder storage tdk boleh di akses sembarangan untuk image(file) dan edit file .env
// php artisan storage:link


// untuk refresh database
//php artisan migrate:refresh

//untuk melihat database jadi tidak perlu liat dari phpmysqmin dan langsng bisa liat errornya dimana
//php artisan tinker
//App\Kategori::all()  ->perintah untuk liat database menggnakan query
