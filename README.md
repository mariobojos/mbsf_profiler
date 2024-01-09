# mbsf_profiler
 My Profiler project implemented in Symfony

#### Add Symfony CLI maker
$ `composer require maker -–dev`

λ `composer require --dev symfony/maker-bundle`

λ symfony console list <section>

Show all commands related to `make`.

$ `symfony console list make`

#### Create Controller
$ `symfony make:controller ProfilesController`

#### Check valid routes
$ `symfony console debug:router`

#### Run local server
$ `symfony server:start -d`  # start server

$ `symfony open: local`  # open in browser

#### Add twig
$ `composer require twig`


### Setup Database

#### Install doctrine
$ `composer require doctrine`

#### Install Symfony ORM
λ `composer require symfony/orm-pack`

#### Edit .env entry DATABASE_URL
* user is **root**
* no password
* database name is **profiles**

`DATABASE_URL="mysql://root:@127.0.0.1:3306/profiles?serverVersion=8.0.32&charset=utf8mb4"`

#### Create the database

λ `symfony console doctrine:database:create`

Success message will show: `Created database `profiles` for connection named default`.


