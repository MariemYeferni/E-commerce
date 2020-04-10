<?php
use App\Products;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 30; $i++) { 
            Products::create([
                'title'=>$faker->sentence(4),
                'slug'=>$faker->slug,
                'subtitle'=>$faker->sentence(5),
                'description'=>$faker->text,
                'price'=>$faker->numberBetween(10,500)*100,
                'image'=>'https://via.placeholder.com/200x250',

            ]);

            
        }
    }
}
