<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->Banner();
        //$this->gallery();
        //$this->stories();
        $this->note();
    }
    public function Banner()
    {
    	DB::table('banners')->insert([
    		['img'=>'img/banner1.jpg','title'=>'mùa thu hà nội','alias_title'=>'mua-thu-ha-noi','status'=>'on','create_at'=>date('Y/m/d')],
    		['img'=>'img/banner4.jpg','title'=>'Tây Bắc mùa này','alias_title'=>'mua-thu-ha-noi','status'=>'on','create_at'=>date('Y/m/d')],
    		['img'=>'img/banner2.jpg','title'=>'mùa thu hà nội','alias_title'=>'mua-thu-ha-noi','status'=>'on','create_at'=>date('Y/m/d')]
    	]);
    }
    public function gallery()
    {
    	DB::table('galleries')->insert([
    		['alias'=>'ha-noi','describe'=>' is the capital of Vietnam and the country\'s second largest city by population. The population in 2015 was estimated at 7.7 million people. The city lies on the right bank of the Red River. Hanoi is 1,760 km (1,090 mi) north of Ho Chi Minh City and 120 km (75 mi) west of Haiphong.','img'=>'images/s1.jpg','name'=>'Ha Noi','wiki'=>'https://en.wikipedia.org/wiki/Hanoi'],
    		['alias'=>'sai-gon','describe'=>'SaiGon is the largest city in Vietnam by population. It was known as Prey Nokor (Khmer: ព្រៃនគរ) prior to annexation by the Vietnamese in the 17th century. Under the name Saigon, it was the capital of the French colony of Cochinchina and later of the independent republic of South Vietnam 1955–75. On 2 July 1976, Saigon merged with the surrounding Gia Định Province and was officially renamed Ho Chi Minh City after revolutionary leader Hồ Chí Minh (although the name Sài Gòn is still widely used)','img'=>'images/s2.jpg','name'=>'Sai Gon','wiki'=>'https://en.wikipedia.org/wiki/Ho_Chi_Minh_City'],
    		['alias'=>'da-nang','describe'=>'Danang is the fifth largest city in Vietnam after Ho Chi Minh City (Saigon) , Hanoi , Can Tho and Haiphong in terms of urbanization and economy. Located on the coast of the South China Sea at the mouth of the Han River, it is one of Vietnam\'s most important port cities. As one of the country\'s five direct-controlled municipalities, it is under the direct administration of the central government.','img'=>'images/s3.jpg','name'=>'Da Nang','wiki'=>'https://en.wikipedia.org/wiki/Da_Nang'],
    		['alias'=>'NorthWest','describe'=>'NorthWest is one of the regions of Vietnam, located in the mountainous northwestern part of the country. It consists of four provinces: Đien Bien, Lai Chau, Son La, and Hoa Binh Lao Cai and Yên Bai are usually seen as part of the Northwest region. It has a population of about two and a half million. ','img'=>'images/s4.jpg','name'=>'NorthWest','wiki'=>'https://en.wikipedia.org/wiki/Northwest_(Vietnam)'],
    		['alias'=>'mekong-delta','describe'=>'Also known as the Western Region or the South-western region is the region in southwestern Vietnam where the Mekong River approaches and empties into the sea through a network of distributaries. The Mekong delta region encompasses a large portion of southwestern Vietnam of over 40,500 square kilometres (15,600 sq mi). The size of the area covered by water depends on the season. The region comprises 12 provinces: Long An, Đồng Tháp, Tiền Giang, An Giang, Bến Tre, Vĩnh Long, Trà Vinh, Hậu Giang, Kiên Giang, Sóc Trăng, Bạc Liêu, and Cà Mau, along with the province-level municipality of Cần Thơ. ','img'=>'images/s1.jpg','name'=>'Mekong Delta','wiki'=>'https://en.wikipedia.org/wiki/Mekong_Delta']
    	]);
    }
    public function stories()
    {
    	DB::table('stories')->insert([
    		['title'=>'Explore Hang Son Doong, the world\'s largest cave','content'=>'I smile at our guide\'s warning and enter the lush jungle growing inside Hang Son Doong, a 3-million-year-old cave in the central part of Vietnam. Water drips from a gaping scar in the ceiling over 100 meters (328 feet) above us. A spectacular sunbeam starts to creep down the side of the serrated cliffs. The shrill call of birds and macaque monkeys echoes off the limestone, drifting in from the unseen world beyond the skylight.<br>"Watch out for dinosaurs. That\'s what we called this place when we first discovered it," caving expert Howard Limbert, elaborates. The prehistoric atmosphere made the reference obvious. We continue on, stepping deeper into the void that is considered by some to be the largest cave in the world.','img'=>'images/son-doong.jpg','id_gallery'=>'6','create_at'=>date('Y/m/d h:i:s')],
    		['title'=>'Explore Hang Son Doong, the world\'s largest cave','content'=>'I smile at our guide\'s warning and enter the lush jungle growing inside Hang Son Doong, a 3-million-year-old cave in the central part of Vietnam. Water drips from a gaping scar in the ceiling over 100 meters (328 feet) above us. A spectacular sunbeam starts to creep down the side of the serrated cliffs. The shrill call of birds and macaque monkeys echoes off the limestone, drifting in from the unseen world beyond the skylight.<br>"Watch out for dinosaurs. That\'s what we called this place when we first discovered it," caving expert Howard Limbert, elaborates. The prehistoric atmosphere made the reference obvious. We continue on, stepping deeper into the void that is considered by some to be the largest cave in the world.','img'=>'images/son-doong.jpg','id_gallery'=>'5','create_at'=>date('Y/m/d h:i:s')],
    		['title'=>'Explore Hang Son Doong, the world\'s largest cave','content'=>'I smile at our guide\'s warning and enter the lush jungle growing inside Hang Son Doong, a 3-million-year-old cave in the central part of Vietnam. Water drips from a gaping scar in the ceiling over 100 meters (328 feet) above us. A spectacular sunbeam starts to creep down the side of the serrated cliffs. The shrill call of birds and macaque monkeys echoes off the limestone, drifting in from the unseen world beyond the skylight.<br>"Watch out for dinosaurs. That\'s what we called this place when we first discovered it," caving expert Howard Limbert, elaborates. The prehistoric atmosphere made the reference obvious. We continue on, stepping deeper into the void that is considered by some to be the largest cave in the world.','img'=>'images/son-doong.jpg','id_gallery'=>'4','create_at'=>date('Y/m/d h:i:s')],
    		['title'=>'Explore Hang Son Doong, the world\'s largest cave','content'=>'I smile at our guide\'s warning and enter the lush jungle growing inside Hang Son Doong, a 3-million-year-old cave in the central part of Vietnam. Water drips from a gaping scar in the ceiling over 100 meters (328 feet) above us. A spectacular sunbeam starts to creep down the side of the serrated cliffs. The shrill call of birds and macaque monkeys echoes off the limestone, drifting in from the unseen world beyond the skylight.<br>"Watch out for dinosaurs. That\'s what we called this place when we first discovered it," caving expert Howard Limbert, elaborates. The prehistoric atmosphere made the reference obvious. We continue on, stepping deeper into the void that is considered by some to be the largest cave in the world.','img'=>'images/son-doong.jpg','id_gallery'=>'3','create_at'=>date('Y/m/d h:i:s')],
    		['title'=>'Explore Hang Son Doong, the world\'s largest cave','content'=>'I smile at our guide\'s warning and enter the lush jungle growing inside Hang Son Doong, a 3-million-year-old cave in the central part of Vietnam. Water drips from a gaping scar in the ceiling over 100 meters (328 feet) above us. A spectacular sunbeam starts to creep down the side of the serrated cliffs. The shrill call of birds and macaque monkeys echoes off the limestone, drifting in from the unseen world beyond the skylight.<br>"Watch out for dinosaurs. That\'s what we called this place when we first discovered it," caving expert Howard Limbert, elaborates. The prehistoric atmosphere made the reference obvious. We continue on, stepping deeper into the void that is considered by some to be the largest cave in the world.','img'=>'images/son-doong.jpg','id_gallery'=>'2','create_at'=>date('Y/m/d h:i:s ')],
    		['title'=>'Explore Hang Son Doong, the world\'s largest cave','content'=>'I smile at our guide\'s warning and enter the lush jungle growing inside Hang Son Doong, a 3-million-year-old cave in the central part of Vietnam. Water drips from a gaping scar in the ceiling over 100 meters (328 feet) above us. A spectacular sunbeam starts to creep down the side of the serrated cliffs. The shrill call of birds and macaque monkeys echoes off the limestone, drifting in from the unseen world beyond the skylight.<br>"Watch out for dinosaurs. That\'s what we called this place when we first discovered it," caving expert Howard Limbert, elaborates. The prehistoric atmosphere made the reference obvious. We continue on, stepping deeper into the void that is considered by some to be the largest cave in the world.','img'=>'images/son-doong.jpg','id_gallery'=>'1','create_at'=>date('Y/m/d h:i:s')],
    		['title'=>'Explore Hang Son Doong, the world\'s largest cave','content'=>'I smile at our guide\'s warning and enter the lush jungle growing inside Hang Son Doong, a 3-million-year-old cave in the central part of Vietnam. Water drips from a gaping scar in the ceiling over 100 meters (328 feet) above us. A spectacular sunbeam starts to creep down the side of the serrated cliffs. The shrill call of birds and macaque monkeys echoes off the limestone, drifting in from the unseen world beyond the skylight.<br>"Watch out for dinosaurs. That\'s what we called this place when we first discovered it," caving expert Howard Limbert, elaborates. The prehistoric atmosphere made the reference obvious. We continue on, stepping deeper into the void that is considered by some to be the largest cave in the world.','img'=>'images/son-doong.jpg','id_gallery'=>'6','create_at'=>date('Y/m/d h:i:s')]
    	]);
    }
    public function note()
    {
        DB::table('Notes')->insert([
            ['content'=>'My command is you should have friend at here or a professional guide','title'=>'You should','create_at'=>date('Y/m/d h:i:s')],
            ['content'=>'My command is you should have friend at here or a professional guide','title'=>'You should','create_at'=>date('Y/m/d h:i:s')],
            ['content'=>'My command is you should have friend at here or a professional guide','title'=>'You should','create_at'=>date('Y/m/d h:i:s')],
            ['content'=>'My command is you should have friend at here or a professional guide','title'=>'You should','create_at'=>date('Y/m/d h:i:s')],
        ]);
    }
}
