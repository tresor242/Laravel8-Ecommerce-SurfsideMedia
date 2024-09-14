<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name = $this->faker->unique()->words($nb=4, $asText=true);
        $slug = Str::slug($product_name);
        return [
            'name' => $product_name, // Nom aléatoire du produit
            'slug' => $slug, // Slug généré à partir du nom
            'short_description' => $this->faker->text(200), // Une courte description aléatoire
            'description' => $this->faker->text(500), // Une description plus longue
            'regular_price' => $this->faker->numberBetween( 10, 500), // Prix régulier entre 10 et 1000
            'sale_price' => $this->faker->optional()->randomFloat(2, 5, 800), // Prix promotionnel (optionnel)
            'SKU' => 'DIGI'.$this->faker->unique()->numberBetween(100,500),
            'stock_status' => 'instock', // Statut du stock
            'quantity' => $this->faker->numberBetween(100, 200), // Quantité aléatoire entre 1 et 100
            'featured' => $this->faker->boolean(20), // 20% de chances que le produit soit en vedette
            'image' => 'digital_'. $this->faker->unique()->numberBetween(1,22).'.jpg', // URL aléatoire d'image (facultatif)
            'category_id' => $this->faker->numberBetween(1,5), // Crée une catégorie aléatoire associée
            'images' => $this->faker->optional()->text(200), // Autres images du produit (facultatif)
        ];
    }



}
