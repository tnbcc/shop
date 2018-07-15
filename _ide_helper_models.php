<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Product
 *
 * @property-read mixed $image_url
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ProductSku[] $skus
 * @mixin \Eloquent
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\OrderItem[] $items
 * @property-read \App\Models\User $user
 * @mixin \Eloquent
 */
	class Order extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CartItem
 *
 * @property-read \App\Models\ProductSku $productSku
 * @property-read \App\Models\User $user
 * @mixin \Eloquent
 */
	class CartItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OrderItem
 *
 * @property-read \App\Models\Order $order
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\ProductSku $productSku
 * @mixin \Eloquent
 */
	class OrderItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserAddress[] $addresses
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CartItem[] $cartItems
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $favoriteProducts
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductSku
 *
 * @property-read \App\Models\Product $product
 * @mixin \Eloquent
 */
	class ProductSku extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserAddress
 *
 * @property-read mixed $full_address
 * @property-read \App\Models\User $user
 * @mixin \Eloquent
 */
	class UserAddress extends \Eloquent {}
}

