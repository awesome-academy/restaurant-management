<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('foods')->insert([
        	['name'='BEEF TENDERLOIN',
            'description'='Bít tết thăn bò úc',
            'ingredient'='  - 0,5kg thịt bò Úc thái sẵn bít tết, miếng dày 1cm
                            - Pate hoặc xúc xích
                            - 4 quả trứng gà hữu cơ Bảo Châu
                            - Khoai tây
                            - Bánh mì chế biến món ăn kèm
                            - Rau: Dưa chuột, cà chua bi, xà lách
                            - Nước cốt tỏi, nước cốt hành tím
                            - Sữa tươi Anchor New Zealand (sữa tươi sẽ giúp cho miếng thịt bò bít tết mềm và ngọt hơn)',
            'content'='Bò bít tết là một món ăn bắt nguồn từ Châu Âu, một món ăn có sự hòa quện của vị thơm ngọt, đậm đà từ miếng thịt thăn bò Mỹ nấu chín vừa phải với loại sốt chuyên dụng. Với vị ngon đột phá và cách bày trí sang trọng - món ăn này đã trở thành món tủ của nhiều thực khách Châu Á.',
            'price'='310000',
            'unit'='Đĩa',
            'hot'='1',
            'new'='1',
            'discounts_id'='3';
            ],
            ['name'='SKEWER BEEF WITH ONION & BELL CHILLI',
            'description'='Bò xiên que nướng',
            'ingredient'=' - Thịt thăn bò: 500 gram

                           - Ớt chuông xanh: 200 gram

                           - Cà chua bi: 200 gram

                           - Hành tây: 200 gram

                           - Dầu mè: 1 muỗng canh

                           - Mật ong: 1 muỗng canh

                           - Tỏi bằm: 1 muỗng cà phê

                           - Xì dầu: 1 muỗng cà phê

                           - Tiêu, bột ngọt, ớt bột: mội thứ 1/4 muỗng cà phê

                           - Dầu hào: 1 muỗng canh

                           - Sả bằm: 1 muỗng cà phê

                           - 10 cây nhọn để xiên',
            'content'='Bò nướng xiên que luôn có mặt trong các tiệc BBQ hay bữa ăn gia đình. Tuy nhiên, để xiên bò nướng thơm ngon, bạn phải có mẹo riêng khi ướp và nướng.'
            'price'='70000',
            'unit'='Xiên',
            'hot'='0',
            'new'='1',
            ],
        ]);
    }
}
