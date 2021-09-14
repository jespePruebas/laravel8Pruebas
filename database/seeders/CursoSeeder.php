<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Curso;
class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $curso= new Curso;
        // $curso->name="Laravel";
        // $curso->description=" 1° Framework de php";
        // $curso->category="Desarrollo Web";
        // $curso->save();

        // $curso2= new Curso;
        // $curso2->name="codeigniter";
        // $curso2->description="2° Framework de php";
        // $curso2->category="Desarrollo Web";
        // $curso2->save();


        Curso::factory(50)->create();
    }
}