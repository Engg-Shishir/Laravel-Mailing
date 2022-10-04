🌸php artisan make:seeder SeederName

🌸 Secondly go to SeederName.php :
 
   ........Import this three alias
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Str;
    use Faker\Factory as Faker;

   .....Create Facker 
    $faker = Faker::create();

   ....Create Facker  
    foreach (range(1,10) as $index) {
        DB::table('tableName')->insert([
            'name' => $faker->name,
        ]);
    } 


🌸Thirdly go to DatabaseSeeder.php :
      
    public function run()
    {
        $this->call([
            SeederName::class
        ]);
    }

🌸composer dump-autoload

🌸php artisan db:seed