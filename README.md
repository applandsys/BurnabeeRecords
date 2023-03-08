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

FRONT:
1. Home Page = OK
1.1 Video Detail page = Ok 
2. Search page = OK 
3. Pages = Ok
4. Watch List =  NOOO
5. Footer = OK
6. Video Love React = NOOO
7. Celebrity = OK
8. Blog = Ok
9. Contact = OK (Need to make a database and Admin)
10. Apps link = OPTIONAL
11. Review / Comment = NOOOOO
12. Popular Video = OK
13. Celebrity = OK
14. Celebrity Detail = Need More tuning

ADMIN:
1. Dashboard =  NOOO
2. Rating = NO00
3. Comments = NO
4. User = NO
5. Category = OK
6. Add Video = OK
7. Edit Video = OK
8. Delete Video = OK
9. Slider Add = NOO
10. Slider Delete= NO
11. Page Add = NO
12. Page Delete = NO
13. Setting = OK

Extra:
1. Hit counter video detail page okay