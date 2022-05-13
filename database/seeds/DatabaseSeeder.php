<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0;$i<20;$i++)
        {
            DB::table('articles')->insert([
                'id_user' => 1,
                'title' => 'Bai viet so '.$i,
                'id_category' => 2,
                'img_path'=>'image/rangnick-jpeg-1650291210-4311-1650291243.jpg',
                'smallcontent'=>'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.',
                'fullcontent'=> 'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.

                Theo bài phân tích của Telegraph (Anh), nhiệm vụ ưu tiên của Ten Hag là tìm hiểu xem Man Utd đang có những cầu thủ tồi, hay họ chỉ đang trải qua thời gian khó khăn. Và làm thế nào một CLB về nhì Ngoại hạng Anh mùa trước lại sa sút đến vậy mùa này.
                
                Nhưng dù thế nào, Man Utd cũng sẽ đối mặt với một kỳ chuyển nhượng hè 2022 đến và đi đầy biến động.',
            ]);
        }
        for ($i=0;$i<20;$i++)
        {
            DB::table('articles')->insert([
                'id_user' => 1,
                'title' => 'Bai viet so '.$i,
                'id_category' => 3,
                'img_path'=>'image/rangnick-jpeg-1650291210-4311-1650291243.jpg',
                'smallcontent'=>'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.',
                'fullcontent'=> 'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.

                Theo bài phân tích của Telegraph (Anh), nhiệm vụ ưu tiên của Ten Hag là tìm hiểu xem Man Utd đang có những cầu thủ tồi, hay họ chỉ đang trải qua thời gian khó khăn. Và làm thế nào một CLB về nhì Ngoại hạng Anh mùa trước lại sa sút đến vậy mùa này.
                
                Nhưng dù thế nào, Man Utd cũng sẽ đối mặt với một kỳ chuyển nhượng hè 2022 đến và đi đầy biến động.',
            ]);
        }
        for ($i=0;$i<20;$i++)
        {
            DB::table('articles')->insert([
                'id_user' => 1,
                'title' => 'Bai viet so '.$i,
                'id_category' => 4,
                'img_path'=>'image/rangnick-jpeg-1650291210-4311-1650291243.jpg',
                'smallcontent'=>'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.',
                'fullcontent'=> 'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.

                Theo bài phân tích của Telegraph (Anh), nhiệm vụ ưu tiên của Ten Hag là tìm hiểu xem Man Utd đang có những cầu thủ tồi, hay họ chỉ đang trải qua thời gian khó khăn. Và làm thế nào một CLB về nhì Ngoại hạng Anh mùa trước lại sa sút đến vậy mùa này.
                
                Nhưng dù thế nào, Man Utd cũng sẽ đối mặt với một kỳ chuyển nhượng hè 2022 đến và đi đầy biến động.',
            ]);
        }
        for ($i=0;$i<20;$i++)
        {
            DB::table('articles')->insert([
                'id_user' => 1,
                'title' => 'Bai viet so '.$i,
                'id_category' => 5,
                'img_path'=>'image/rangnick-jpeg-1650291210-4311-1650291243.jpg',
                'smallcontent'=>'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.',
                'fullcontent'=> 'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.

                Theo bài phân tích của Telegraph (Anh), nhiệm vụ ưu tiên của Ten Hag là tìm hiểu xem Man Utd đang có những cầu thủ tồi, hay họ chỉ đang trải qua thời gian khó khăn. Và làm thế nào một CLB về nhì Ngoại hạng Anh mùa trước lại sa sút đến vậy mùa này.
                
                Nhưng dù thế nào, Man Utd cũng sẽ đối mặt với một kỳ chuyển nhượng hè 2022 đến và đi đầy biến động.',
            ]);
        }
        for ($i=0;$i<20;$i++)
        {
            DB::table('articles')->insert([
                'id_user' => 1,
                'title' => 'Bai viet so '.$i,
                'id_category' => 6,
                'img_path'=>'image/rangnick-jpeg-1650291210-4311-1650291243.jpg',
                'smallcontent'=>'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.',
                'fullcontent'=> 'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.

                Theo bài phân tích của Telegraph (Anh), nhiệm vụ ưu tiên của Ten Hag là tìm hiểu xem Man Utd đang có những cầu thủ tồi, hay họ chỉ đang trải qua thời gian khó khăn. Và làm thế nào một CLB về nhì Ngoại hạng Anh mùa trước lại sa sút đến vậy mùa này.
                
                Nhưng dù thế nào, Man Utd cũng sẽ đối mặt với một kỳ chuyển nhượng hè 2022 đến và đi đầy biến động.',
            ]);
        }
        
        for ($i=0;$i<20;$i++)
        {
            DB::table('articles')->insert([
                'id_user' => 1,
                'title' => 'Bai viet so '.$i,
                'id_category' => 7,
                'img_path'=>'image/rangnick-jpeg-1650291210-4311-1650291243.jpg',
                'smallcontent'=>'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.',
                'fullcontent'=> 'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.

                Theo bài phân tích của Telegraph (Anh), nhiệm vụ ưu tiên của Ten Hag là tìm hiểu xem Man Utd đang có những cầu thủ tồi, hay họ chỉ đang trải qua thời gian khó khăn. Và làm thế nào một CLB về nhì Ngoại hạng Anh mùa trước lại sa sút đến vậy mùa này.
                
                Nhưng dù thế nào, Man Utd cũng sẽ đối mặt với một kỳ chuyển nhượng hè 2022 đến và đi đầy biến động.',
            ]);
        }
        for ($i=0;$i<20;$i++)
        {
            DB::table('articles')->insert([
                'id_user' => 1,
                'title' => 'Bai viet so '.$i,
                'id_category' => 1,
                'img_path'=>'image/rangnick-jpeg-1650291210-4311-1650291243.jpg',
                'smallcontent'=>'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.',
                'fullcontent'=> 'Ralf Rangnick cho rằng tân HLV Erik ten Hag cần 10 cầu thủ mới ở Man Utd, nhưng cuộc thay máu sẽ không thể diễn ra trong sớm chiều.

                Theo bài phân tích của Telegraph (Anh), nhiệm vụ ưu tiên của Ten Hag là tìm hiểu xem Man Utd đang có những cầu thủ tồi, hay họ chỉ đang trải qua thời gian khó khăn. Và làm thế nào một CLB về nhì Ngoại hạng Anh mùa trước lại sa sút đến vậy mùa này.
                
                Nhưng dù thế nào, Man Utd cũng sẽ đối mặt với một kỳ chuyển nhượng hè 2022 đến và đi đầy biến động.',
            ]);
        }
    }
}
