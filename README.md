# FAQ
An introductory FAQ project - app for generating, storing and retrieving FAQs

To run the faq project:

1. git clone https://github.com/GYemofioEdu/FAQ.git
2. cd into faq and run composer install
3. cp .env.example to .env
4. run: php artisan key:generate
5. setup database with sqlite or other - see https://laravel.com/docs/5.6/database
6. run: php artisan migrate
7. run unit tests: phpunit
8. seed the db: php artisan migrate:refresh --seed

To run baseline localization tests (front-end)
1. Start the app: http://localhost:8000
2. Go to http://localhost:8000/localization/en
    - Expect "Laravel Internationalization example."
3. Go to http://localhost:8000/localization/de
    - Expect "Laravel Internationalisierung Beispiel." 
4. Go to http://localhost:8000/localization/fr
      - Expect "Exemple Laravel internationalisation."        


 
