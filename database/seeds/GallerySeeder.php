<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Symfony\Component\Finder\Finder;

class GallerySeeder extends Seeder
{

    public function run()
    {
        \App\Model\Gallery::truncate();

        $faker = Factory::create();

        $imagesPath = config('sleeping_owl.imagesUploadDirectory', 'images/uploads');

        $uploads = public_path($imagesPath);

        $filesObj = Finder::create()->files()->in($uploads);
        $files    = [];
        foreach ($filesObj as $file) {
            $files[] = $file->getFilename();
        }

        $services     = \App\Model\Service::pluck('id')->all();

        factory(\App\Model\Gallery::class, 10)->create()->each(function(\App\Model\Gallery $gallery) use($faker, $services, $files, $imagesPath) {
            $image       = $faker->randomElement($files);
            $images      = [];
            $imagesCount = random_int(3, 10);
            for ($j = 0; $j < $imagesCount; $j++) {
                $img      = $faker->randomElement($files);
                $images[] = $imagesPath . '/' . $img;
            }

            $gallery->update([
                'cover'     => $imagesPath . '/' . $image,
                'images'    => $images,
                'service_id'    => $faker->randomElement($services),
            ]);
        });
    }

}
