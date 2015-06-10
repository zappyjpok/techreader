<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	//

    /**
     * A product can have many sales
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales() {
        return $this->hasMany('App\Sale');
    }
}
