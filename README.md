# GuepardoSys - Multi Tenant Hub

With Guepardosys Hub you will be able to import, export and manage your products and categories in many marketplaces like Bling,Mercado Livre, NuvemShop, Shopify, etc.

![alt text](https://github.com/dougkusanagi/guepardosys-hub-test/blob/main/docs/screenshot-themes.png?raw=true)

## Install

1. Clone repository

```shell
git clone https://github.com/dougkusanagi/guepardosys-hub
```

2. Install composer dependencies

```shell
composer install
```

3. Create a database and adjust the env variables according

4. Make a copy of .env.example and rename to .env

```shell
cp .env.example .env
```

5. Run migrations

```shell
php artisan migrate:fresh --seed
# or use this for create many product examples
php artisan migrate:fresh --seed --seeder=CompleteSeeder
```

6. Generate key

```shell
php artisan key:generate
```

7. Generate the storage link in public directory

```shell
php artisan storage:link
```

8. Install node dependencies

```shell
yarn install
# or with the good and old npm
npm install
```

9. Build vue resources

```shell
yarn build
# or with the good and old npm
npm run build
```

## The admin credencials that can manage all tenants are:

```
login: example@email.com
password: password
```

## Todo

-   [x] Manage products
-   [x] Manage categories
-   [ ] Manage orders
-   [ ] Automatic generate thumbnails
-   [ ] Automatic apply mockups
-   [ ] Import and export products/orders from Mercado Livre
-   [ ] Import and export products/orders from Nuvem Shop
-   [ ] Import and export products/orders from Shopify
-   [ ] Import and export products/orders from Bling
-   [ ] Import and export products/orders from other marketplaces...
