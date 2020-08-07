<?php

use App\Product;
use Illuminate\Database\Seeder;

class createProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product() ;
        $product->id = 1;
        $product->name = 'VOLCANO LONG WALLET' ;
        $product->introduce = 'Ví được làm từ vải canvas, kèm lót dù.
        Mặt ngoài phía trước ví sở hữu lớp Hologram PVC kèm tag nhựa.
         Ví đóng mở và sở hữu khóa dán velcro an toàn tiện lợi.
         3 ngăn chính, trong đó có 1 ngăn được trang bị zipper YKK.
         1 ngăn phụ có zipper YKK kèm 4 ngăn đựng thẻ.' ;
         $product->price = 400.000 ;
         $product->image = 'volcano.jpg';

        $product = new Product() ;
        $product->id = 2;
        $product->name = 'DIRTYCOINS WALLY WALLET' ;
        $product->introduce = ' Ví được làm từ vải canvas.
         Lót bên trong ví được sử dụng từ dù và vải canvas.
         Logo Y được in trực tiếp lên bề mặt.
         Ví đóng mở có khóa bấm an toàn.
         Ví có 2 ngăn chính, có khóa kéo cho 1 ngăn.
         Số lượng ngăn đựng thẻ lên đến 8 ngăn.';
         $product->price = 290.000 ;
         $product->image = 'wallewallet.jpg';

         $product = new Product() ;
        $product->id = 3;
        $product->name = 'Plaid Pants In Bred' ;
        $product->introduce = ' Quần được làm sản xuất từ khakhi.
         Logo được thêu ở phía túi trái.
         Form oversize.
         Lưng quần bo vải gân kèm drawstring thun bên trong.' ;
         $product->price = 450.000 ;
         $product->image = 'quancaro.jpg';

         $product = new Product() ;
        $product->id = 4;
        $product->name = 'Dirtycoins Headband - Black' ;
        $product->introduce = 'Sản phẩm được làm từ cotton nhập khẩu
         Tag cao su được thêu trực tiếp lên sản phẩm
         Free size' ;
         $product->price = 120.000 ;
         $product->image = 'vidirtcoin.jpg';

         $product = new Product() ;
        $product->id = 5;
        $product->name = 'Monarch All Over Print Jacket' ;
        $product->introduce = 'Jacket chất liệu vải dù
         Form oversize
         Khóa áo được sử dụng nút bấm tiện dụng.
         Áo có hai túi ở hai bên thân áo' ;
         $product->price = 650.000 ;
         $product->image = 'monarchallover.jpg';

         $product = new Product() ;
        $product->id = 6;
        $product->name = 'Grynch All Over Print Pants' ;
        $product->introduce = ' Quần được làm từ Cotton pha Poly.
         Hình in được in phủ khắp quần.
         Tag cao su được thêu trực tiếp ở phía túi trái.
         Form oversize.
         Lưng quần bo vải gân kèm drawstring thun bên trong.' ;
         $product->price = 500.000 ;
         $product->image = 'quanpatern.jpg';

         $product = new Product() ;
        $product->id = 7;
        $product->name = 'Logo Pattern Backpack - Black' ;
        $product->introduce = 'Toàn bộ bề mặt sản phẩm được làm từ da P.U nhập khẩu.
         Được in nhũ vàng khắp bề mặt.
         Túi có 4 ngăn phụ được trang bị khóa zip.
         1 ngăn lớn chính trang bị dây rút và khóa bấm.
         Dây đeo có thể tùy chinh độ dài' ;
         $product->price = 800.000 ;
         $product->image = 'logopattern.jpg';

         $product = new Product() ;
        $product->id = 8;
        $product->name = 'Monarch Print Shirt' ;
        $product->introduce = 'Áo vải lụa rũ form cơ bản.
         Áo cổ V cài khuy' ;
         $product->price = 490.000 ;
         $product->image = 'aobuom.jpg';

         $product = new Product() ;
        $product->id = 9;
        $product->name = 'Dirty Coins Mask - Hashtag beDC - Pink' ;
        $product->introduce = ' Sản phẩm 100% cotton.
         Sản phẩm form cơ bản.
         Hình in được in ở mặt trước sản phẩm.' ;
         $product->price = 120.000 ;
         $product->image = 'htbe.jpg';

         $product = new Product() ;
        $product->id = 10;
        $product->name = 'Logo Pattern Bowler Bag - Black' ;
        $product->introduce = 'Ví được làm từ vải canvas, kèm lót dù.
        Mặt ngoài phía trước ví sở hữu lớp Hologram PVC kèm tag nhựa.
         Ví đóng mở và sở hữu khóa dán velcro an toàn tiện lợi.
         3 ngăn chính, trong đó có 1 ngăn được trang bị zipper YKK.
         1 ngăn phụ có zipper YKK kèm 4 ngăn đựng thẻ.' ;
         $product->price = 999.000 ;
         $product->image = 'logopatternlogo.jpg';
    }
}
