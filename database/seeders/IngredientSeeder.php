<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            ['id' => '1','ingredient_category_id' => '1','code' => 'OB1','name' => 'Huile d\'olive vierge','name_en' => 'Olive oil virgin','inci' => 'Olea europaea fruit oil','inci_naoh' => 'Sodium olivate','inci_koh' => 'Potassium olivate','cas' => '8001-25-00','cas_einecs' => '', 'einecs' => '232-277-00','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-27 08:55:50','updated_at' => '2020-12-27 08:55:50'],
            ['id' => '2','ingredient_category_id' => '1','code' => 'OB2','name' => 'Huile d\'olive raffinée','name_en' => 'Olive oil refined','inci' => 'Olea europaea fruit oil','inci_naoh' => 'Sodium olivate','inci_koh' => 'Potassium olivate','cas' => '8001-25-00','cas_einecs' => '','einecs' => '232-277-00','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-27 09:20:22','updated_at' => '2020-12-27 09:20:22'],
            ['id' => '3','ingredient_category_id' => '1','code' => 'OB3','name' => 'Huile de grignon d\'olive','name_en' => 'Olive pomace oil','inci' => 'Olea europaea oil','inci_naoh' => 'Sodium olivate','inci_koh' => 'Potassium olivate','cas' => '8001-25-00','cas_einecs' => '','einecs' => '232-277-00','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-27 09:24:17','updated_at' => '2020-12-27 09:24:17'],
            ['id' => '4','ingredient_category_id' => '1','code' => 'OB4','name' => 'Huile de noix de coco raffinée','name_en' => 'Coconut oil','inci' => 'Cocos nucifera oil','inci_naoh' => 'Sodium cocoate','inci_koh' => 'Potassium cocoate','cas' => '8001-31-08','cas_einecs' => '','einecs' => '232-282-8','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-27 09:41:52','updated_at' => '2020-12-27 09:41:52'],
            ['id' => '5','ingredient_category_id' => '1','code' => 'OB5','name' => 'Huile de coco vierge','name_en' => 'Coconut oil virgin','inci' => 'Cocos nucifera oil','inci_naoh' => 'Sodium cocoate','inci_koh' => 'Potassium cocoate','cas' => '8001-31-08','cas_einecs' => '','einecs' => '232-282-8','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-27 12:33:37','updated_at' => '2020-12-27 12:33:37'],
            ['id' => '6','ingredient_category_id' => '1','code' => 'OB6','name' => 'Huile de tournesol oléique raffinée','name_en' => 'Sunflower oil high oleic','inci' => 'Helianthus annuus seed oil','inci_naoh' => 'Sodium sunflowerseedate','inci_koh' => 'Potassium sunflowerseedate','cas' => '8001-21-6','cas_einecs' => '','einecs' => '232-273-9','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-27 12:44:15','updated_at' => '2020-12-27 12:44:36'],
            ['id' => '7','ingredient_category_id' => '1','code' => 'OB7','name' => 'Huile de tournesol oléique vierge','name_en' => 'Sunflower oil high oleic virgin','inci' => 'Helianthus annuus seed oil','inci_naoh' => 'Sodium sunflowerseedate','inci_koh' => 'Potassium sunflowerseedate','cas' => '8001-21-6','cas_einecs' => '','einecs' => '232-273-9','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-27 12:48:01','updated_at' => '2020-12-27 12:48:01'],
            ['id' => '8','ingredient_category_id' => '1','code' => 'OB8','name' => 'Huile de ricin','name_en' => 'Castor oil','inci' => 'Ricinus communis oil','inci_naoh' => 'Sodium castorate','inci_koh' => 'Potassium castorate','cas' => '8001-79-4','cas_einecs' => '','einecs' => '232-293-8','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-28 04:54:37','updated_at' => '2020-12-28 04:54:37'],
            ['id' => '9','ingredient_category_id' => '1','code' => 'OB9','name' => 'Beurre de Karité','name_en' => 'Shea butter','inci' => 'Butyrospernum parkii butter','inci_naoh' => 'Sodium shea butterate','inci_koh' => 'Potassium shea butterate','cas' => '91080-23-8','cas_einecs' => '','einecs' => '293-515-7','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-28 09:54:07','updated_at' => '2020-12-28 09:54:07'],
            ['id' => '10','ingredient_category_id' => '11','code' => 'OB10','name' => 'Beurre de cacao  désodorisé','name_en' => 'Cocoa butter deodorized','inci' => 'Theobroma cacao seed butter','inci_naoh' => 'Sodium cocoa butterate','inci_koh' => 'Potassium cocoa butterate','cas' => '8002-31-1','cas_einecs' => '','einecs' => '283-480-6','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-28 10:54:14','updated_at' => '2020-12-28 10:57:15'],
            ['id' => '11','ingredient_category_id' => '1','code' => 'OB10','name' => 'Beurre de cacao brut','name_en' => 'Cocoa butter raw','inci' => 'Theobroma cacao seed butter','inci_naoh' => 'Sodium cocoa butterate','inci_koh' => 'Potassium cocoa butterate','cas' => '8002-31-1','cas_einecs' => '','einecs' => '283-480-6','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-28 10:59:08','updated_at' => '2020-12-28 10:59:08'],
            ['id' => '12','ingredient_category_id' => '1','code' => 'OB11','name' => 'Huile de chanvre','name_en' => 'Hemp seed oil','inci' => 'Cannabis sativa seed oil','inci_naoh' => 'Sodium hempseedate','inci_koh' => 'Potassium hempseedate','cas' => '89958-21-4, 89958-21-4','cas_einecs' => '','einecs' => '289-644-3','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-28 11:10:54','updated_at' => '2020-12-28 11:10:54'],
            ['id' => '13','ingredient_category_id' => '2','code' => 'EO1','name' => 'Huile essentielle de lavande','name_en' => 'Lavender essential oil','inci' => 'Lavandula angustifolia oil','inci_naoh' => NULL,'inci_koh' => NULL,'cas' => '8000-28-0 / 90063-37-9','cas_einecs' => '','einecs' => '289-995-2','active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-28 11:14:00','updated_at' => '2020-12-28 11:14:00'],
            ['id' => '14','ingredient_category_id' => '2','code' => 'EO2','name' => 'Huile essentielle de Lavandin super','name_en' => 'Lavendin super essential oil','inci' => 'Lavandula hybrida oil','inci_naoh' => NULL,'inci_koh' => NULL,'cas' => NULL,'cas_einecs' => '','einecs' => NULL,'active' => '1','infos' => NULL,'deleted_at' => NULL,'created_at' => '2020-12-28 11:42:58','updated_at' => '2020-12-28 11:42:58']
            ];

            foreach ($ingredients as $ingredient) {
                Ingredient::updateOrCreate( ['id' => $ingredient['id']], $ingredient);
            }
    }
}
