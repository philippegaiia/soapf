<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['id' => '1','product_subcategory_id' => '1','product_collection_id' => '1','code' => '001','name' => 'Savon très doux','brand' => 'Gaiia', 'launch_date' => '2011-03-21','essential_oils' => '0','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '1234567891234','wp_code' => '1','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:25:10','updated_at' => '2021-01-29 04:25:10'],
            ['id' => '2','product_subcategory_id' => '1','product_collection_id' => '1','code' => '002','name' => 'Savon nature','brand' => 'Gaiia' ,'launch_date' => '2021-01-29','essential_oils' => '0','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '1234567894561236','wp_code' => '2','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:25:55','updated_at' => '2021-01-29 04:25:55'],
            ['id' => '3','product_subcategory_id' => '1','product_collection_id' => '3','code' => '003','name' => 'Savon d\'Alep 15%','brand' => 'Gaiia', 'launch_date' => '2015-01-01','essential_oils' => '0','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:26:52','updated_at' => '2021-01-29 04:27:01'],
            ['id' => '4','product_subcategory_id' => '1','product_collection_id' => '1','code' => '004','name' => 'Savon curcuma','brand' => 'Gaiia', 'launch_date' => '2021-01-12','essential_oils' => '0','extracts' => '1','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:28:08','updated_at' => '2021-01-29 04:29:18'],
            ['id' => '5','product_subcategory_id' => '1','product_collection_id' => '1','code' => '005','name' => 'Savon Rhassoul','brand' => 'Gaiia', 'launch_date' => '2014-01-01','essential_oils' => '0','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:29:13','updated_at' => '2021-01-29 04:29:13'],
            ['id' => '6','product_subcategory_id' => '1','product_collection_id' => '1','code' => '006','name' => 'Savon Le Sensuel','brand' => 'Gaiia', 'launch_date' => '2011-03-21','essential_oils' => '1','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:30:17','updated_at' => '2021-01-29 04:30:17'],
            ['id' => '7','product_subcategory_id' => '1','product_collection_id' => '1','code' => '007','name' => 'Savon Le Tonique','brand' => 'Gaiia', 'launch_date' => '2021-01-29','essential_oils' => '1','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:30:48','updated_at' => '2021-01-29 04:30:48'],
            ['id' => '8','product_subcategory_id' => '1','product_collection_id' => '1','code' => '008','name' => 'Savon Le Soyeux','brand' => 'Gaiia', 'launch_date' => '2011-03-21','essential_oils' => '1','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:31:27','updated_at' => '2021-01-29 04:31:27'],
            ['id' => '9','product_subcategory_id' => '1','product_collection_id' => '1','code' => '009','name' => 'Savon Le Colosse','brand' => 'Gaiia', 'launch_date' => '2021-01-29','essential_oils' => '1','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:32:30','updated_at' => '2021-01-29 04:32:30'],
            ['id' => '10','product_subcategory_id' => '1','product_collection_id' => '1','code' => '010','name' => 'Savon l\'Enthousiaste','brand' => 'Gaiia', 'launch_date' => '2011-03-21','essential_oils' => '1','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:33:39','updated_at' => '2021-01-29 04:33:39'],
            ['id' => '11','product_subcategory_id' => '1','product_collection_id' => '1','code' => '011','name' => 'Savon l\'Intuitif','brand' => 'Gaiia', 'launch_date' => '2011-03-21','essential_oils' => '1','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:34:37','updated_at' => '2021-01-29 04:34:56'],
            ['id' => '12','product_subcategory_id' => '1','product_collection_id' => '1','code' => '012','name' => 'Savon le Gourmand','brand' => 'Gaiia', 'launch_date' => '2021-01-29','essential_oils' => '1','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:35:37','updated_at' => '2021-01-29 04:35:37'],
            ['id' => '13','product_subcategory_id' => '1','product_collection_id' => '1','code' => '013','name' => 'Savon l\'Evident','brand' => 'Gaiia', 'launch_date' => '2011-03-21','essential_oils' => '1','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:36:09','updated_at' => '2021-01-29 04:36:09'],
            ['id' => '14','product_subcategory_id' => '1','product_collection_id' => '1','code' => '014','name' => 'Savon Très Doux','brand' => 'Gaiia', 'launch_date' => '2016-01-01','essential_oils' => '0','extracts' => '0','net_weight' => '170.000','gross_weight' => '180.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:37:25','updated_at' => '2021-01-29 04:37:25'],
            ['id' => '15','product_subcategory_id' => '1','product_collection_id' => '1','code' => '015','name' => 'Savon','brand' => 'Gaiia', 'launch_date' => '2021-01-29','essential_oils' => '0','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:39:27','updated_at' => '2021-01-29 04:39:27'],
            ['id' => '16','product_subcategory_id' => '1','product_collection_id' => '3','code' => '016','name' => 'Savon d\'Alep 15%','brand' => 'Gaiia', 'launch_date' => '2021-01-29','essential_oils' => '0','extracts' => '0','net_weight' => '170.000','gross_weight' => '180.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:40:03','updated_at' => '2021-01-29 04:40:20'],
            ['id' => '17','product_subcategory_id' => '1','product_collection_id' => '1','code' => '017','name' => 'Savon Curcuma','brand' => 'Gaiia', 'launch_date' => '2016-01-01','essential_oils' => '0','extracts' => '1','net_weight' => '170.000','gross_weight' => '180.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:41:15','updated_at' => '2021-01-29 04:47:39'],
            ['id' => '18','product_subcategory_id' => '1','product_collection_id' => '1','code' => '018','name' => 'Savon Rhassoul','brand' => 'Gaiia', 'launch_date' => '2016-01-01','essential_oils' => '0','extracts' => '0','net_weight' => '170.000','gross_weight' => '180.000','ean_code' => '12','wp_code' => '21','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:47:23','updated_at' => '2021-01-29 04:47:23'],
            ['id' => '19','product_subcategory_id' => '1','product_collection_id' => '1','code' => '019','name' => 'Savon l\'Intuitif','brand' => 'Gaiia', 'launch_date' => '2020-07-01','essential_oils' => '1','extracts' => '0','net_weight' => '170.000','gross_weight' => '180.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:48:32','updated_at' => '2021-01-29 04:48:47'],
            ['id' => '20','product_subcategory_id' => '1','product_collection_id' => '1','code' => '020','name' => 'Savon l\'Enthousiaste','brand' => 'Gaiia', 'launch_date' => '2021-01-16','essential_oils' => '1','extracts' => '0','net_weight' => '170.000','gross_weight' => '180.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:49:47','updated_at' => '2021-01-29 04:49:47'],
            ['id' => '21','product_subcategory_id' => '1','product_collection_id' => '1','code' => '021','name' => 'Savon le Sensuel','brand' => 'Gaiia', 'launch_date' => '2021-07-01','essential_oils' => '1','extracts' => '0','net_weight' => '170.000','gross_weight' => '180.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:50:30','updated_at' => '2021-01-29 04:50:30'],
            ['id' => '22','product_subcategory_id' => '1','product_collection_id' => '1','code' => '022','name' => 'Savon le Closse','brand' => 'Gaiia', 'launch_date' => '2020-07-01','essential_oils' => '1','extracts' => '0','net_weight' => '170.000','gross_weight' => '180.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:51:30','updated_at' => '2021-01-29 04:51:30'],
            ['id' => '23','product_subcategory_id' => '1','product_collection_id' => '2','code' => '030','name' => 'Savon de Marseille Type 1','brand' => 'Gaiia', 'launch_date' => '2018-07-01','essential_oils' => '0','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:52:45','updated_at' => '2021-01-29 04:53:23'],
            ['id' => '24','product_subcategory_id' => '1','product_collection_id' => '2','code' => '031','name' => 'Savon de Marseille Type 1','brand' => 'Gaiia', 'launch_date' => '2020-07-01','essential_oils' => '0','extracts' => '0','net_weight' => '250.000','gross_weight' => '260.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:53:13','updated_at' => '2021-01-29 04:55:46'],
            ['id' => '25','product_subcategory_id' => '1','product_collection_id' => '2','code' => '032','name' => 'Savon de Marseille Type 2','brand' => 'Gaiia', 'launch_date' => '2018-07-01','essential_oils' => '0','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:55:38','updated_at' => '2021-01-29 05:00:11'],
            ['id' => '26','product_subcategory_id' => '1','product_collection_id' => '2','code' => '033','name' => 'Savon de Marseille Type 2','brand' => 'Gaiia', 'launch_date' => '2021-01-29','essential_oils' => '0','extracts' => '0','net_weight' => '250.000','gross_weight' => '260.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:56:28','updated_at' => '2021-01-29 04:56:28'],
            ['id' => '27','product_subcategory_id' => '1','product_collection_id' => '2','code' => '034','name' => 'Savon de Marseille Type 3','brand' => 'Gaiia', 'launch_date' => '2021-01-29','essential_oils' => '0','extracts' => '0','net_weight' => '100.000','gross_weight' => '110.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:59:19','updated_at' => '2021-01-29 05:00:03'],
            ['id' => '28','product_subcategory_id' => '1','product_collection_id' => '2','code' => '035','name' => 'Savon de Marseille Type 3','brand' => 'Gaiia', 'launch_date' => '2021-01-29','essential_oils' => '0','extracts' => '0','net_weight' => '250.000','gross_weight' => '260.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 04:59:55','updated_at' => '2021-01-29 04:59:55'],
            ['id' => '29','product_subcategory_id' => '1','product_collection_id' => '4','code' => '040','name' => 'Savon de Goa Mains','brand' => 'Gaiia', 'launch_date' => '2020-09-01','essential_oils' => '1','extracts' => '0','net_weight' => '150.000','gross_weight' => '160.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 05:02:36','updated_at' => '2021-01-29 05:02:36'],
            ['id' => '30','product_subcategory_id' => '1','product_collection_id' => '4','code' => '041','name' => 'Savon de Goa Purifiant','brand' => 'Gaiia', 'launch_date' => '2021-01-29','essential_oils' => '1','extracts' => '1','net_weight' => '150.000','gross_weight' => '160.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 05:03:07','updated_at' => '2021-01-29 05:03:07'],
            ['id' => '31','product_subcategory_id' => '1','product_collection_id' => '4','code' => '042','name' => 'Savon de Goa Peaux Sensibles','brand' => 'Gaiia', 'launch_date' => '2017-01-01','essential_oils' => '0','extracts' => '1','net_weight' => '150.000','gross_weight' => '160.000','ean_code' => '12','wp_code' => '12','infos' => NULL,'active' => '0','deleted_at' => NULL,'created_at' => '2021-01-29 05:04:48','updated_at' => '2021-01-29 05:05:01']
            ];

            foreach($products as $product){
                Product::updateOrCreate( ['id' => $product['id']], $product);
            }
    }
}
