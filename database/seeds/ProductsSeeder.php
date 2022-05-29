<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr_product = ["Setor Tunai", "Tarik Tunai", "Beli Pulsa", "Bayar Listrik"];
        $jml = count($arr_product);
        for ($i = 0; $i < $jml; $i++) {
            Product::create([
                'product_transaction_name' => $arr_product[$i],
                'product_type' => $this->setProductType($arr_product[$i]),
                'created_at' => date('Y-m-d H:i:s')
            ]);   
        }
    }

    public function setProductType($product_name)
    {
        $type = "";
        if ($product_name == "Setor Tunai") {
            $type = "Credit";
        } else {
            $type = "Debit";
        }

        return $type;
    }
}
