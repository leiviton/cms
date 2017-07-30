<?php

use Phinx\Seed\AbstractSeed;

class PostSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt-BR');
        $post = $this->table('posts');
        $data = [];
        $cont = 1;
        foreach (range(1,10) as $value){
            $data[] = [
                'title' => $faker->name,
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis, urna fermentum scelerisque fringilla, orci nunc aliquet arcu, nec commodo lectus mi et velit. In ullamcorper nisi eget arcu fringilla ullamcorper. Cras posuere rhoncus tristique. Sed auctor eu risus in ultrices. Suspendisse venenatis lacus in elit vehicula dapibus. Maecenas sem sem, varius viverra arcu ut, semper tincidunt quam. Vestibulum non dui rhoncus ipsum hendrerit blandit ut tempus neque. Maecenas ut semper diam. Nunc vel accumsan elit. Nam blandit nulla metus, ac convallis mi luctus et. Nullam pharetra augue sit amet nibh rhoncus, non tempor felis varius. In blandit lorem augue, sit amet interdum nunc efficitur et. Suspendisse a ullamcorper velit. Aliquam enim nisi, porta quis magna nec, congue laoreet lorem. Nam non velit ac nibh tincidunt lacinia. Nunc a pulvinar libero, non consequat magna. Donec pretium sollicitudin finibus.',
                'path' => 'Post'.$cont++,
                'created_at' => date('Y:m:d H:i:s'),
                'updated_at' => date('Y:m:d H:i:s'),
            ];
        }
        $post->insert($data)->save();
    }
}
