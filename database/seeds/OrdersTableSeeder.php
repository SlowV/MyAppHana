<?php
use Illuminate\Database\Seeder;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('orders')->truncate();
        \Illuminate\Support\Facades\DB::table('orders')->insert([
            [
                'id'=>'sdg45sdg',
                'customerId'=>'df7g8dfg',
                'totalPrice'=>1000000,
                'shipName'=>'Donald Trump',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 20, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 20, 12, 20, 20),
            ],
            [
                'id'=>'de1gs231g',
                'customerId'=>'df4g546dfg',
                'totalPrice'=>1000000,
                'shipName'=>'Barack Obama',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 21, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 21, 12, 20, 20),
            ],
            [
                'id'=>'hgf4hjg54f',
                'customerId'=>'798ge7wr65r',
                'totalPrice'=>1000000,
                'shipName'=>'Donald Obama',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 22, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 22, 12, 20, 20),
            ],
            [
                'id'=>'sdf7sd4f5',
                'customerId'=>'fdg4c32v1432',
                'totalPrice'=>1000000,
                'shipName'=>'Barack Trump',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 23, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 23, 12, 20, 20),
            ],
            [
                'id'=>'xcv4167fd4',
                'customerId'=>'cvbd2f4g2f',
                'totalPrice'=>1000000,
                'shipName'=>'Đỗ Nam Trung',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 24, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 24, 12, 20, 20),
            ],
            [
                'id'=>'fjfgh56f4',
                'customerId'=>'7e78rsdfg',
                'totalPrice'=>1000000,
                'shipName'=>'Hoa Thịnh Đốn',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 25, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 25, 12, 20, 20),
            ],
            [
                'id'=>'7fg87hg',
                'customerId'=>'7fg86h',
                'totalPrice'=>1000000,
                'shipName'=>'Nã Phá Luân',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 20, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 20, 12, 20, 20),
            ],
            [
                'id'=>'876fg86h',
                'customerId'=>'45hfg684h',
                'totalPrice'=>1000000,
                'shipName'=>'Napoleon',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 21, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 21, 12, 20, 20),
            ],
            [
                'id'=>'56fgh65gfh',
                'customerId'=>'45fgh54fg',
                'totalPrice'=>1300000,
                'shipName'=>'Donald Nam',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 22, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 22, 12, 20, 20),
            ],
            [
                'id'=>'fg74h6f54hg',
                'customerId'=>'fg54hf654gh',
                'totalPrice'=>2500000,
                'shipName'=>'Donald Việt',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 23, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 23, 12, 20, 20),
            ],
            [
                'id'=>'4f6g574hf654g',
                'customerId'=>'4f6g74he64hg64hjfg',
                'totalPrice'=>4500000,
                'shipName'=>'Donald Phước',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 24, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 24, 12, 20, 20),
            ],
            [
                'id'=>'1d8f67jghjkty84',
                'customerId'=>'uy444w4',
                'totalPrice'=>1230000,
                'shipName'=>'Donald Duy',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 25, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 25, 12, 20, 20),
            ],
            [
                'id'=>'474gfasfddffd',
                'customerId'=>'4eriuo74',
                'totalPrice'=>1640000,
                'shipName'=>'Donald Trump',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 20, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 20, 12, 20, 20),
            ],
            [
                'id'=>'j756e4rbbv4fg',
                'customerId'=>'hgjhgwe23q',
                'totalPrice'=>1560000,
                'shipName'=>'Washington Trump',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 21, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 21, 12, 20, 20),
            ],
            [
                'id'=>'df4g168wegdfd',
                'customerId'=>'78ew1rw12fdg',
                'totalPrice'=>1450000,
                'shipName'=>'Napoleon Trump',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 22, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 22, 12, 20, 20),
            ],
            [
                'id'=>'54sdf5g48re',
                'customerId'=>'21sd78fsds',
                'totalPrice'=>1050000,
                'shipName'=>'Donald Hill',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 23, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 23, 12, 20, 20),
            ],
            [
                'id'=>'qwe7vc1vc2b',
                'customerId'=>'78gdffd4nh',
                'totalPrice'=>3000000,
                'shipName'=>'Barack Napoleon',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 24, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 24, 12, 20, 20),
            ],
            [
                'id'=>'dsf7ewrty5t4',
                'customerId'=>'7wer4c2xd4fd',
                'totalPrice'=>1040000,
                'shipName'=>'Donald Washington',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 25, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 25, 12, 20, 20),
            ],
            [
                'id'=>'mbv1n2sd28sd',
                'customerId'=>'14d4dg7dg5',
                'totalPrice'=>1070000,
                'shipName'=>'Donald Napoleon',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 20, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 20, 12, 20, 20),
            ],
            [
                'id'=>'bxcb1d1f2fds',
                'customerId'=>'87wetryutyu7t',
                'totalPrice'=>1000000,
                'shipName'=>'Đậu Nam Bắc',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 21, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 21, 12, 20, 20),
            ],
            [
                'id'=>'24sda67hnjh87',
                'customerId'=>'24s564we4d2',
                'totalPrice'=>800000,
                'shipName'=>'Đậu Nam Trump',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 22, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 22, 12, 20, 20),
            ],
            [
                'id'=>'js67as1bhd7f',
                'customerId'=>'897wer44hbds4f',
                'totalPrice'=>1100000,
                'shipName'=>'Barack Nam',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 23, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 23, 12, 20, 20),
            ],
            [
                'id'=>'32sdfggds654g',
                'customerId'=>'34s5ad456sd',
                'totalPrice'=>1400000,
                'shipName'=>'Barack Bắc',
                'shipEmail'=> 'abd@gfsdmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 24, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 24, 12, 20, 20),
            ],
            [
                'id'=>'7fdgh4e56ds',
                'customerId'=>'hgf64g4h',
                'totalPrice'=>1090000,
                'shipName'=>'Barack Trung',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 25, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 25, 12, 20, 20),
            ],
            [
                'id'=>'f7asd4fdfdf',
                'customerId'=>'9sdf6sdf',
                'totalPrice'=>1050000,
                'shipName'=>'Đỗ Trump',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 20, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 20, 12, 20, 20),
            ],
            [
                'id'=>'sdf4sd4f',
                'customerId'=>'ff754bs',
                'totalPrice'=>1006000,
                'shipName'=>'Đỗ Bắc Trump',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 21, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 21, 12, 20, 20),
            ],
            [
                'id'=>'bndf76dfsfds',
                'customerId'=>'dsgg4534gb',
                'totalPrice'=>2700000,
                'shipName'=>'Donald Bắc',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 22, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 22, 12, 20, 20),
            ],
            [
                'id'=>'dsfdsfdf423',
                'customerId'=>'asd3424fsdf',
                'totalPrice'=>1900000,
                'shipName'=>'Đỗ Nam Trump',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 23, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 23, 12, 20, 20),
            ],
            [
                'id'=>'GHcsfWUhfshv5CQx',
                'customerId'=>'RhgT9cc9WMfzrhLs',
                'totalPrice'=>890000,
                'shipName'=>'Donald Trung',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 24, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 24, 12, 20, 20),
            ],
            [
                'id'=>'76shk4PXDp9cZTQP',
                'customerId'=>'3XKr5yyJHdjnpMFv',
                'totalPrice'=>790000,
                'shipName'=>'Washington',
                'shipEmail'=> 'abd@gmail.com',
                'shipPhone'=>'19000091',
                'shipAddress'=>'Cầu Giấy',
                'note' => 'Hoa phải tươi nha bạn bán hoa, héo là trả lại đó',
                'created_at'=>\Carbon\Carbon::create(2018, 8, 25, 6, 20, 20),
                'updated_at'=>\Carbon\Carbon::create(2018, 8, 25, 12, 20, 20),
            ],
        ]);
    }
}