composer require laravel/ui
php artisan ui bootstrap --auth
npm install 
npm run dev

//https://www.techiediaries.com/laravel-auth-redirection-using-redirectto/
  protected function redirectTo()
    {
        if (auth()->user()->user_type == 'admin') {
            return '/admin';
        }
        return '/home';
    }



https://www.positronx.io/laravel-image-resize-upload-with-intervention-image-package/
composer require intervention/image