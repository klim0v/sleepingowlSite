<?php

use Faker\Factory;
use Illuminate\Database\Seeder;
use Symfony\Component\Finder\Finder;

class ServicesSeeder extends Seeder
{

    public function run()
    {
        \App\Model\Service::truncate();

        $faker = Factory::create();

        $imagesPath = config('sleeping_owl.imagesUploadDirectory', 'images/uploads');
        $iconsPath = 'img/icons';

        $uploads = public_path($imagesPath);

        $filesObj = Finder::create()->files()->in($uploads);
        $files    = [];
        foreach ($filesObj as $file) {
            $files[] = $file->getFilename();
        }

        $uploads = public_path($iconsPath);

        $filesObj = Finder::create()->files()->in($uploads);
        $iconFiles    = [];
        foreach ($filesObj as $file) {
            $iconFiles[] = $file->getFilename();
        }
        factory(\App\Model\Service::class, 7)->create()->each(function(\App\Model\Service $gallery) use ($faker, $files, $iconFiles, $imagesPath, $iconsPath) {
            $image       = $faker->randomElement($files);
            $icon       = $faker->randomElement($iconFiles);

            $gallery->update([
                'cover'     => $imagesPath . '/' . $image,
                'icon'    => $iconsPath . '/' . $icon,
            ]);
        });
    }

}
